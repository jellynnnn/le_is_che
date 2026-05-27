<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class student extends Model
{
    protected $table = 'student_teybol';
    protected $primaryKey = 'id';  
    protected $fillable = [
        'stud_lname',
        'stud_fname',
        'stud_mname',
        'stud_age',
        'stud_email'
    ];
}
