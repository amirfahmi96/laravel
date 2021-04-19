<?php

namespace App\Http\Controllers;
use App\Models\PartialTransModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PartialTransController extends Controller
{
    protected function doGet(Request $request)
    {  
        $addmodel->userid=$request->input('userid');
        $addmodel->enrolid=$request->input('enrolid');
        
        
            //dd($testget);  
        //    return response()->json($testget);
        if($testget > 0 && $testget < 7)
        {
            $testget = DB::table('mdl_user_lastaccess')
            ->join('mdl_course', 'mdl_user_lastaccess.courseid', '=', 'mdl_course.id')
            ->select( 'mdl_user_lastaccess.courseid','mdl_course.shortname','mdl_course.fullname')
            ->where('mdl_user_lastaccess.userid','=', $testget)
            ->get();

            return view('transcriptview', ['testgets' => $testget]);            
        }
        else{
            echo '<script type="text/javascript"> alert("Matric Number not found");
            location=window.history.back();
            </script>';
        }
    }
    
}
