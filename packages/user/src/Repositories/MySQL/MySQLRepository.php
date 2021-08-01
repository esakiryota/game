<?php

namespace User\Repositories\MySQL;

use Carbon\Carbon;
use Auth;

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
