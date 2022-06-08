<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    //using belongsto verb one to one
    public function teacher(){
        return $this->belongsTo(Teacher::class, 'teacherId','id');
    }
    //using eloquent
    public function assignedTeacher(){
        return Teacher::where('id', $this->teacherId)->first();
    }
}
