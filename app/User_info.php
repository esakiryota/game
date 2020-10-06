<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User_info extends Model
{
    protected $table = 'user_info';
    protected $guarded = array('id');

    public static $rules = array(
      'name' => 'required',
      'chara' => 'required',
    );

    public function getData() {
      return $this->id . ':' . $this->name . '(' . $this->url . ')';
    }
}
