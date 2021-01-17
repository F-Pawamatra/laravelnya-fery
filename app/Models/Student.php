<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Student extends Model
{
    // automaticaly refer to table 'students'
    // if you want to define manual you can use 
    // protected $table = 'table_name';
    use SoftDeletes;
    
    protected $fillable = ['nama', 'nim', 'email', 'jurusan'];
}