<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ClassroomSubject extends Model
{
    protected $fillable = [
      'classrooms_id',
      'subjects_id',
      'teachers_id',
      'sesi'
    ];

    // Eloquent: Relationships
    public function teacher(){
      return $this->belongsTo('App\Teacher');
    }
}
