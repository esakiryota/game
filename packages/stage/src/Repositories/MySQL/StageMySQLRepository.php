<?php

namespace Stage\Repositories\MySQL;

use Stage\Repositories\StageRepositoryInterface;
use User\Repositories\MySQL\MySQLRepository;
use Auth;

/**
 * Class ShopMySQLRepository
 * @package Common\Repositories
 */
class StageMySQLRepository extends MySQLRepository implements StageRepositoryInterface
{
    /**
     * @param $sql
     * @return mixed
     */
    public function getStages(string $level)
    {
        $sql = $this->db->table('stage')
                ->where('level', $level)->get();
        return $sql;
    }

    public function getEnglishStage(string $level)
    {
        $sql = $this->db->table('english_stage')
                  ->where('level', $level)->get();
        return $sql;
    }

    public function getLastStage(string $level) {
      $sql = $this->db->table('last_stages')
                ->where('level', $level)->get();
      return $sql;
    }

    public function getMain(string $stagename)
    {
        $sql = $this->db->table('main')
                ->where('stagename', $stagename)->get();
        return $sql;
    }

    public function getStageArray(int $stage_max)
    {
        $sql = $this->db->table('stage')
                ->where('stage_id', '<=' , $stage_max)->get();
        $sql = json_decode(json_encode($sql), true);
        $sql = array_reverse($sql);
        return $sql;
    }

    public function getEnglishStageArray(int $stage_max)
    {
        $sql = $this->db->table('english_stage')
                ->where('stage_id', '<=' , $stage_max)->get();
        $sql = json_decode(json_encode($sql), true);
        $sql = array_reverse($sql);
        return $sql;
    }

    public function getLastStageArray(int $stage_max)
    {
        $sql = $this->db->table('last_stages')
                ->where('stage_id', '<=' , $stage_max)->get();
        $sql = json_decode(json_encode($sql), true);
        $sql = array_reverse($sql);
        return $sql;
    }
}
