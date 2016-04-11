<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Classroom extends Model
{
  protected $fillable = [
      'id',
      'admin_id',
      'kod_kelas',
      'nama_kelas'
  ];

  // Eloquent: Relationships
  public function admin(){
    return $this->belongsTo('App\Admin');
  }

  public function subjects(){
    return $this->belongsToMany('App\Subject','classroom_subjects','classrooms_id','subjects_id');
  }

}
