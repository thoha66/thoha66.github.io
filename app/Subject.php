<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    protected $fillable = [
      'admins_id',
      'kod_subjek',
      'nama_subjek'
    ];

    // Eloquent: Relationships
    public function admin(){
      return $this->belongsTo('App\Admin');
    }

    public function classrooms(){
      return $this->belongsToMany('App\Classroom','classroom_subjects','subjects_id','classrooms_id');
    }
}
