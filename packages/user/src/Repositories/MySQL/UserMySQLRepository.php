<?php

namespace User\Repositories\MySQL;

use User\Repositories\UserRepositoryInterface;
use Auth;

/**
 * Class ShopMySQLRepository
 * @package Common\Repositories
 */
class UserMySQLRepository extends MySQLRepository implements UserRepositoryInterface
{
    /**
     * @param $sql
     * @return mixed
     */


     protected $email;


     public function getUserInfomation()
     {
       $user = Auth::user();
       $this->email = $user->email;
         $sql = $this->db->table('user_info')
                 ->where('email', $this->email)->get();
         return $sql;
      }

      public function getUserTechnique()
      {
          $chara = $this->getUserInfomation()[0]->character;
          $level = $this->getUserInfomation()[0]->level;
          $tech_sql = $this->db->table('user_technique')
                  ->where('user_feature', $chara)->where('level', $level)->get();
          return $tech_sql;
      }

      public function getUserCharacter()
      {
        $chara = $this->getUserInfomation()[0]->character;
        $level = $this->getUserInfomation()[0]->level;
        $chara_sql = $this->db->table('user_chara')
                ->where('chara', $chara)->where('level', $level)->get();
        return $chara_sql;
      }

      public function getUserStage()
      {
        $user = Auth::user();
        $this->email = $user->email;
          $stage_sql = $this->db->table('user_stage')
                  ->where('email', $this->email)->get();
          $stage_sql = json_decode(json_encode($stage_sql), true);
          return $stage_sql;
      }

      public function updateUser(int $atack, int $stage_atack, int $defense, int $stage_defense)
      {
          $atack = $atack + $stage_atack;
          $defense = $defense + $stage_defense;
          if ($atack > 100) {
            $atack = 100;
          }
          if ($defense > 100) {
            $defense = 100;
          }
          $this->db->table('user_info')->where('email', $this->email)->update(['atack' => $atack, 'defense' => $defense]);
      }

      public function getLevelEx(int $level)
      {
          $sql = $this->db->table('user_level')->where('lv', $level)->get();
          $ex = $sql[0]->experience;
          return $ex;
      }

      public function updateEx(int $update_ex)
      {
        $user = Auth::user();
        $this->email = $user->email;
          $user_ex = $this->getUserInfomation()[0]->experience;
          $user_lv = $this->getUserInfomation()[0]->level;
          $all_ex = $user_ex + $update_ex;
          $lv_ex = $this->getLevelEx($user_lv);
          if ($user_lv == 20) {
            return;
          }
          if ($all_ex >= $lv_ex) {
            $user_lv += 1;
            $ex = $all_ex - $lv_ex;
            if ($user_lv == 20) {
              $ex = 0;
            }
            $this->db->table('user_info')->where('email', $this->email)->update(['level' => $user_lv, 'experience' => $ex]);
          } else {
            $this->db->table('user_info')->where('email', $this->email)->update(['experience' => $all_ex]);
          };
      }

      public function updateUserStage(int $user_stage, int $stage_id, string $stage_name)
      {
        $user = Auth::user();
        $this->email = $user->email;
          $upstage = $user_stage + 1;
          if ($user_stage <= $stage_id) {
            $this->db->table('user_stage')->where('email', $this->email)->update([$stage_name => $upstage]);
          }
      }
 }
