<?php

namespace App\Http\Controllers;
use Illuminate\Support\Carbon;
use App\Models\Teacher;
use App\Models\Course;
use App\Models\Session;
use App\Models\Section;
use App\Models\Department;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    public function index()
    {
        $allteachers = Teacher::all();
        return view('admin.pages.teacher', compact('allteachers'));
    }
    public function create()
    {
        $courses = Course::all();
        $sessions = Session::all();
        $sections = Section::all();
        $departments = Department::all();
        return view('admin.teacher.create', compact('courses','sessions','sections','departments'));
    }
    
}
