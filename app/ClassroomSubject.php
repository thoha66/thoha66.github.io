<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ClassroomSubject extends Model
{
    protected $fillable = [
      'classroom_id',
      'subject_id',
      'teacher_id',
      'sesi'
    ];

    // Eloquent: Relationships
    public function teacher(){
      return $this->belongsTo('App\Teacher');
    }
}
