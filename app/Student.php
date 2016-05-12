<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable = [
        'admin_id',
        'parent_id',
        'classroom_id',
        'no_surat_beranak_pelajar',
        'no_kp_pelajar',
        'nama_pelajar',
        'tingkatan_pelajar',
        'no_kp_penjaga_pelajar',
        'tarikh_lahir_pelajar',
        'alamat_pelajar',
        'poskod_pelajar',
        'email_pelajar',
        'umur_pelajar',
        'jantina_pelajar'
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
