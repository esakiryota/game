<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User_tech extends Model
{
    protected $table = 'user_technique';
    protected $guarded = array('id');

    public static $rules = array(
      'level' => 'required',
      'damage' => 'required',
    );

     public function getData() {
      return $this->id . ':' . $this->level . '(' . $this->damage . ')';
    }
}
