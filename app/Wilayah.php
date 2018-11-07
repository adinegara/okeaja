<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Wilayah extends Model
{
    //
    protected $table = 'wilayahs';
    public $primaryKey = 'id_wilayah';
    public $timestamps = true;

    public function objeks(){
        return $this->hasMany('App\Objek');
    }
}
