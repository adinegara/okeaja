<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    //
    protected $table = 'Kategoris';
    public $primaryKey = 'id_kategori';
    public $timestamps = true;

    public function objeks(){
        return $this->hasMany('App\Objek');
    }
}
