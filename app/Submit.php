<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Submit extends Model
{
    //
    protected $table = 'submits';

    public $primaryKey = 'id_submit';

    public $timestamps = true;

    public function users() {
    	return $this->belongsTo('App\User');
    }

    public function accs(){
        return $this->hasOne('App\Acc', 'id_submit');
    }
}
