<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Divisi extends Model
{
    protected $table = 'divisis';
    protected $fillable = ['divisi', 'koordinator', 'description', 'foto'];

    public function panitia(){
      return $this->hasMany('App\Panitia', 'id_divisi');
    }
}
