<?php

namespace Stage\Repositories\MySQL;

use Stage\Repositories\MessagesRepositoryInterface;
use User\Repositories\MySQL\MySQLRepository;
use Auth;

/**
 * Class ShopMySQLRepository
 * @package Common\Repositories
 */
class MessagesMySQLRepository extends MySQLRepository implements MessagesRepositoryInterface
{


  public function getMessages(string $stage)
  {
    $result = $this->db->table('messages')
    ->where('stage', $stage)
    ->get();

    return $result;
  }
}
