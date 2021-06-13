<?php

namespace App\Repositories\MySQL;

use Carbon\Carbon;

/**
 * Class MySQLRepository
 * @package Common\Repositories
 */
class MySQLRepository
{

  protected $db;

  public function __construct()
  {
    $this->db = app('db');
  }
}
