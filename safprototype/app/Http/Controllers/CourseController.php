<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
/*
class CourseController extends Controller
{
    function course2()
    {
        $course2 = DB:: select('select * from mdl_course where id = ?', [2]);
        
        return view('list', ['courses2' => $course2]);
    }
    function course3()
    {
        $course2 = DB:: select('select * from mdl_course where id = ?', [3]);
        
        return view('list', ['courses3' => $course3]);
    }
    function course4()
    {
        $course2 = DB:: select('select * from mdl_course where id = ?', [4]);
        
        return view('list', ['courses4' => $course4]);
    }
}
*/
class CourseController extends Controller
{
    function courses()
    {
        $courses = DB:: select('select * from mdl_course where id > ?', [1]);
            
        return view('list', ['courses' => $courses]);
    }
}
    