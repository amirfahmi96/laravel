<?php

namespace App\Http\Controllers;
use App\Models\AddModel;
use Illuminate\Http\Request;

class AddController extends Controller
{   
    function add(Request $request)
    {
        $addmodel = new AddModel;
        $addmodel->userid=$request->input('userid');
        $addmodel->enrolid=$request->input('enrolid');
        
    
        if($addmodel->enrolid == 37)
        {
            $result=$addmodel->save();
            echo '<script type="text/javascript"> alert("Successfully Enroll");
            window.open( "http://localhost/moodle/course/view.php?id=13" );
            </script>';
                       
        }
        else if($addmodel->enrolid == 34)
        {
            $result=$addmodel->save(); 
            echo '<script type="text/javascript"> alert("Successfully Enroll");
            location="http://localhost/moodle/course/view.php?id=12";
            </script>';
        }
        
        else if($addmodel->enrolid == 31)
        {
            $result=$addmodel->save();    
            echo '<script type="text/javascript"> alert("Successfully Enroll");
            location="http://localhost/moodle/course/view.php?id=11";
            </script>';
        }
        else 
        {
            echo '<script type="text/javascript"> alert("Fail to Enroll");
            location=window.history.back();
            </script>';
        
        }
    
    }
}