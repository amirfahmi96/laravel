<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BanaModel;

class BanaController extends Controller
{
    public function index()
    {
        return BanaModel::all();//
    }
}