<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Objek extends Model
{
    //
    protected $table = 'objeks';
    public $primaryKey = 'id_objek';
    public $timestamps = true;

    public function kategoris(){
        return $this->belongsTo('App\Kategori');
    }

    public function wilayahs(){
        return $this->belongsTo('App\Wilayah');
    }

    public function accs(){
        return $this->belongsTo('App\Acc');
    }
}
