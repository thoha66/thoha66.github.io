<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable = [
        'admins_id',
        'parents_id',
        'classrooms_id',
        'no_surat_beranak',
        'no_kp',
        'nama',
        'tingkatan',
        'no_kp_penjaga',
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
  public function parent(){
    return $this->belongsTo('App\Parent');
  }
}
