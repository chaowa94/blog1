<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Msg extends Model
{
    //关联Comment模型
    public function comment(){
        return  $this->hasOne('App\Models\Comment','msg_id','id');
    }
}
