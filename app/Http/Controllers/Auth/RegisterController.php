<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Subscriber;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Image;
use Illuminate\Support\Facades\Input;

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
    protected $redirectTo = '/home';

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
            'fname' => 'required|max:255',
            'lname' => 'required|max:255',
            'rollnumber' => 'required|max:20|min:14|unique:users',
            'phonenumber' => 'required|max:12|min:10|unique:users',
            'email' => 'required|email|max:255|unique:users',
            'gender' => 'required',
            'country' => 'required',
            'hostellite' => 'required',
            'bloodgroup'=> 'required',
            'password' => 'required|min:6|confirmed',
            'profile_picture' => 'required|image'
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(array $data)
    {
        $image = Input::file('profile_picture');
        $filename = time() . '.' . $image->getClientOriginalExtension();
        $location = public_path('img/profile/' . $filename);
        Image::make($image)->resize(800, 600)->save($location);
        $user = User::create([
            'fname' => $data['fname'],
            'lname' => $data['lname'],
            'rollnumber' => $data['rollnumber'],
            'phonenumber' => $data['phonenumber'],
            'email' => $data['email'],
            'gender' => $data['gender'],
            'hostellite' => $data['hostellite'],
            'country' => $data['country'],
            'bloodgroup' => $data['bloodgroup'],
            'password' => bcrypt($data['password']),
            'pro_pic' => "/img/profile/" . $filename,
        ]);

         Subscriber::create([
            'email'=> $data['email'],
        ]);
        return $user;
    }
}
