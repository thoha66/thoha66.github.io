<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  protected $fillable = [
    'admins_id',
    'no_kp',
    'jenis_guru',
    'guru_kelas',
    'nama',
    'no_tel',
    'no_hp',
    'tarikh_lahir',
    'alamat',
    'poskod',
    'email',
    'umur',
    'jantina'
  ];

  // Eloquent: Relationships
  public function admin(){
    return $this->belongsTo('App\Admin');
  }

  public function classroom_subjects(){
    return $this->hasMany('App\ClassroomSubject');
  }

}
