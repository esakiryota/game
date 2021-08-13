<?php

namespace Stage\Repositories\MySQL;

use Stage\Repositories\EnemiesRepositoryInterface;
use User\Repositories\MySQL\MySQLRepository;
use Auth;

/**
 * Class ShopMySQLRepository
 * @package Common\Repositories
 */
class EnemiesMySQLRepository extends MySQLRepository implements EnemiesRepositoryInterface
{


  public function getEnemyAtack(string $enemy)
  {
    $result = $this->db->table('enemies')
    ->where('enemy', $enemy)
    ->get();

    return $result;
  }
}
