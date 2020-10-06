<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Stage extends Model
{
  protected $table = 'stage';
  protected $guarded = array('id');

  public static $rules = array(
    'stagename' => 'required',
    'experiment' => 'required',
  );

  public function getData() {
    return $this->id . ':' . $this->stagename . '(' . $this->experiment . ')';
  }
}
