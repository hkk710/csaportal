<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Teacher;
use Illuminate\Support\Facades\Input;
use Image;
use Auth;

class TeacherLoginController extends Controller
{
    public function __construct() {
        $this->middleware('guest:teacher');
       }
    public function ShowLogin() {
        return view('teacher.login');
    }
    public function PostLogin(Request $request) {
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if (Auth::guard('teacher')->attempt(['email' => $request->email, 'password' => $request->password], $request->remember)) {
            return redirect()->intended('teacher');
        }

       return redirect()->back()->withInput($request->only('email', 'remember'));
    }

    public function ShowRegister() {
        return view('teacher.register');
    }
    public function PostRegister(Request $request) {
        $this->validate($request, [
            'fname' => 'required|max:255',
            'lname' => 'required|max:255',
            'phonenumber' => 'required|max:12|min:10|unique:teachers',
            'email' => 'required|email|max:255|unique:teachers',
            'gender' => 'required',
            'country' => 'required',
            'hostellite' => 'required',
            'bloodgroup'=> 'required',
            'password' => 'required|min:6|confirmed',
            'profile_picture' => 'required|image'
        ]);

        $image = Input::file('profile_picture');
        $filename = time() . '.' . $image->getClientOriginalExtension();
        $location = public_path('img/profile/teacher/' . $filename);
        Image::make($image)->resize(800, 600)->save($location);
        $user = Teacher::create([
            'fname' => $request->fname,
            'lname' => $request->lname,
            'phonenumber' => $request->phonenumber,
            'email' => $request->email,
            'gender' => $request->gender,
            'hostellite' => $request->hostellite,
            'country' => $request->country,
            'bloodgroup' => $request->bloodgroup,
            'password' => bcrypt($request->password),
            'pro_pic' => "/img/profile/teacher/" . $filename,
        ]);
        Auth::guard('teacher')->attempt(['email' => $request->email, 'password' => $request->password], false);
        return redirect('teacher');
    }
}
