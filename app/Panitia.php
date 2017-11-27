<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Panitia extends Model
{
    $protected $table = 'panitias';
    $protected $fillable = ['nama', 'tempat_lahir', 'tanggal_lahir', 'jk', 'id_divisi', 'angkatan', 'foto'];

    public function divisi(){
      return $this->belongsTo('App\Divisi', 'id_divisi');
    }
}
