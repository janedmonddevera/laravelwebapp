<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{

// $fillable when you want something to be edited
protected $guarded = [];
    use HasFactory;
}
