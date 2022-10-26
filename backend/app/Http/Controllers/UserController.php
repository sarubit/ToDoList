<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Requests\User\StoreUser;
use Illuminate\Support\Facades\Hash;
use App\Transformers\User\UserResource;
use App\Transformers\User\UserResourceCollection;
use App\Services\ResponseService;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

     private $user;

    public function __construct(User $user)
    {
       $this->user = $user;
    }

    public function store(StoreUser $request)
    {
        try
        {
            $user = $this
            ->user
            ->create([
               'name' => $request->get('name'),
               'email' => $request->get('email'),
               'password' => Hash::make($request->get('password')),
            ]);
         }
         catch(\Throwable|\Exception $e)
         {
            return ResponseService::exception('users.store',null,$e);
         }

         return new UserResource($user,array('type' => 'store','route' => 'users.store'));

    }

    /// francisco --
    public function login(Request $request)
    {
      $credentials = $request->only('email', 'password');
      try {
        $token = $this
        ->user
        ->login($credentials);
      } catch (\Throwable|\Exception $e) {
        return ResponseService::exception('users.login',null,$e);
      }
      return response()->json(compact('token'));
    }
}


