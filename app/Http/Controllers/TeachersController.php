<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Mark;
use Auth;
use Session;

class TeachersController extends Controller
{
    public function __construct() {
        $this->middleware('auth:teacher');
    }
    public function index() {
        return view('teacher.index');
    }
    public function showMarkCreate() {
        $users = User::all();
        return view('teacher.mark.create')->withUsers($users);
    }
    public function postMarkCreate(Request $request) {
        $mark = new Mark;
        $mark->branch = $request->branch;
        $mark->grade = $request->grade;
        $mark->semester = $request->semester;
        $mark->student_id = $request->student_id;
        $mark->teacher_id = Auth::guard('teacher')->user()->id;
        $mark->save();
        Session::flash('success', 'Mark was successfully enterd');
        return redirect()->back();
    }
    public function showMark() {
        return view('teacher.mark.mark');
    }
    public function showPostMark(Request $request) {
        $marks = Mark::all()->where('branch', '=', $request->branch)->where('semester', '=', $request->semester);
        return view('teacher.mark.mark')->withMarks($marks);
    }
}
