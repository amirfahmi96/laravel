<?php

namespace App\Http\Controllers;

use App\Models\get_users;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class get_users_by_field extends Controller
{
    protected function getuser(Request $request){

        $users_field = new get_users;
        $users_field->id=$request->input('id');
        $users_field->firstname=$request->input('firstname');
        $users_field->lastname=$request->input('lastname');
        $users_field->city=$request->input('city');
        $users_field->country=$request->input('country');

        if($users_field)
        {
            $users_field = DB::table('mdl_user')
            ->select( 'id','firstname','lastname','city','country')
            ->where('mdl_user.id','=', $users_field->id, 'mdl_user.firstname','=', $users_field->firstname, 
            'mdl_user.lastname','=', $users_field->lastname, 'mdl_user.city','=', $users_field->city,
            'mdl_user.country','=', $users_field->country) 
            ->get();

            return view('getuser2', ['user' => $users_field]); 

        }
    }
        
}
