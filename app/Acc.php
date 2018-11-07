<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Acc extends Model
{
    //
    protected $table = 'accs';

    public $primaryKey = 'id_acc';

    public $timestamps = true;

    public function submits() {
    	return $this->belongsTo('App\Submit');
    }

    public function objeks(){
        return $this->hasOne('App\Objek');
    }
}
