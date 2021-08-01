<?php

namespace Stage\Repositories\MySQL;

use Stage\Repositories\EnglishWordsRepositoryInterface;
use User\Repositories\MySQL\MySQLRepository;
use Auth;

/**
 * Class ShopMySQLRepository
 * @package Common\Repositories
 */
class EnglishWordsMySQLRepository extends MySQLRepository implements EnglishWordsRepositoryInterface
{


  public function getWords()
  {
      $result = $this->db->table('englishword')
      ->select(['level', 'english', 'japanese'])
      ->get();

      $result = $result->groupBy('level');

      return $result;

  }

  public function importWords(array $data) {
    foreach ($data as $key => $value) {
      $this->db->table('englishword')->insert(['english' => $value["en"],'japanese' => $value["jp"],'level' => $value["level"]]);
    }
  }
}
