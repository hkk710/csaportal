<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Subscriber;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Session;

class SubscriberController extends Controller
{

    public function store(Request $request)
    {
        $this ->validate($request,['email'=>'required|email|max:255']);
       Subscriber::create([
           'email' => $request->Email,
       ]);
       Session::flash('success', 'Your subscription has been successfully done!');
        return redirect('/');
   }
}
