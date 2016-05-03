<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable = [
        'admin_id',
        'parent_id',
        'classroom_id',
        'no_surat_beranak',
        'no_kp',
        'nama',
        'tingkatan',
        'no_kp_penjaga',
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
  public function parent(){
    return $this->belongsTo('App\Parent');
  }
    public function classroom(){
        return $this->belongsTo('App\Classroom');
    }
}
