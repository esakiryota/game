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

     public function getUserInfomation()
     {
         $user = Auth::user();
         $email = $user->email;
         $sql = $this->db->table('user_info')
                 ->where('email', $email)->get();
         return $sql;
      }

      public function getUserTechnique()
      {
          $user = Auth::user();
          $email = $user->email;
          $chara = $this->getUserInfomation()[0]->character;
          $level = $this->getUserInfomation()[0]->level;
          $tech_sql = $this->db->table('user_technique')
                  ->where('user_feature', $chara)->where('level', $level)->get();
          return $tech_sql;
      }

      public function getUserCharacter()
      {
        $user = Auth::user();
        $email = $user->email;
        $chara = $this->getUserInfomation()[0]->character;
        $level = $this->getUserInfomation()[0]->level;
        $chara_sql = $this->db->table('user_chara')
                ->where('chara', $chara)->where('level', $level)->get();
        return $chara_sql;
      }

      public function getUserStage()
      {
          $user = Auth::user();
          $email = $user->email;
          $stage_sql = $this->db->table('user_stage')
                  ->where('email', $email)->get();
          $stage_sql = json_decode(json_encode($stage_sql), true);
          return $stage_sql;
      }

      public function updateUser(int $atack, int $stage_atack, int $defense, int $stage_defense)
      {
          $user = Auth::user();
          $email = $user->email;
          $atack = $atack + $stage_atack;
          $defense = $defense + $stage_defense;
          $this->db->table('user_info')->where('email', $email)->update(['atack' => $atack, 'defense' => $defense]);
      }

      public function getLevelEx(int $level)
      {
          $sql = $this->db->table('user_level')->where('lv', $level)->get();
          $ex = $sql[0]->experience;
          return $ex;
      }

      public function updateEx(int $update_ex)
      {
          $user_ex = $this->getUserInfomation()[0]->experience;
          $user_lv = $this->getUserInfomation()[0]->level;
          $email = $this->getUserInfomation()[0]->email;
          $all_ex = $user_ex + $update_ex;
          $lv_ex = $this->getLevelEx($user_lv);
          if ($all_ex >= $lv_ex) {
            $user_lv += 1;
            $ex = $all_ex - $lv_ex;
            $this->db->table('user_info')->where('email', $email)->update(['level' => $user_lv, 'experience' => $ex]);
          } else {
            $this->db->table('user_info')->where('email', $email)->update(['experience' => $all_ex]);
          };
      }

      public function updateUserStage(int $user_stage, int $stage_id, string $stage_name)
      {
          $email = $this->getUserInfomation()[0]->email;
          $upstage = $user_stage + 1;
          if ($user_stage <= $stage_id) {
            $this->db->table('user_stage')->where('email', $email)->update([$stage_name => $upstage]);
          }
      }
 }
