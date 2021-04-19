<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class get_users extends Model
{
    protected $primaryKey = 'id';
    public $table = "mdl_user";
    public $timestamps = false;
    public $fillable = [
		'id','firstname','lastname','city','country'
	];
}
