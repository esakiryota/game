<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User_chara extends Model
{
    protected $table = 'user_chara';
    protected $guarded = array('id');

    public static $rules = array(
      'level' => 'required',
      'image' => 'required',
    );

     public function getData() {
      return $this->id . ':' . $this->level . '(' . $this->image . ')';
    }
}
