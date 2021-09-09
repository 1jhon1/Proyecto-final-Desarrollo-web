<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\User;
use App\Store;
use App\Client;


use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'rol' => ['required'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {

        $parametro = array(
            'name' => ['required'],
            'email' => ['required'],
            'rol' => ['required'],
            'password' => ['required'],
        );

        //rol of store
        $act = 'Activo';
        $statusstore='cerrado';
        if ($data['rol'] == 'tienda') {
        $data['rol'] = 2;
            $store = User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'roles' => $data['rol'],
            'status' => $act,
            'password' => Hash::make($data['password']),
        ]);
         Store::create([
            'id_users' => $store->id,
            'name_store' => $data['name'],
            'status_business'=>$statusstore,
         ]);
        return $store;
        }
        //end store


        if ($data['rol'] == 'cliente') {
            $data['rol'] = 3;
                $client = User::create([
                'name' => $data['name'],
                'email' => $data['email'],
                'roles' => $data['rol'],
                'status' => $act,
                'password' => Hash::make($data['password']),
            ]);
            Client::create([
                'id_users' => $client->id,
                'name_client' => $data['name'],
             ]);
            return $client;
            }



            
        
    }
}
