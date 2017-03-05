<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;

class AdminController extends Controller
{
    public function getMail() {
        return view('admin.getMail');
    }
    public function postMail(Request $request) {
        $this->validate($request, ['message' => 'required|min:5']);

        $emails = ['hkk710@gmail.com', 'amritaphysicaldepartment@gmail.com', 'devkichu2010@gmail.com', 'krishnadeva1997@gmail.com'];
        foreach ($emails as $email) {
            Mail::send('admin.mail', [], function($message) use ($email) {
                $message->to($email)->subject('Announcement Mail');
            });
        }
    }
}
