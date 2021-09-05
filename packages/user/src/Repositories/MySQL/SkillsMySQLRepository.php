<?php

namespace User\Repositories\MySQL;

use User\Repositories\SkillsRepositoryInterface;
use Auth;
use Carbon\Carbon;

/**
 * Class ShopMySQLRepository
 * @package Common\Repositories
 */
class SkillsMySQLRepository extends MySQLRepository implements SkillsRepositoryInterface
{

  protected function makeImageList($path) {
    $atack_files = \File::files($path);
    $atack_image_list_sub = [];
    $i = 0;
    foreach ($atack_files as $v) {
      $atack_image_list_sub[$i] = $v->getfileName();
      $i++;
    }

    natsort($atack_image_list_sub);

    $atack_image_list = [];
    $i = 0;

    foreach ($atack_image_list_sub as $v) {
      $atack_image_list[$i] = $v;
      $i++;
    }

    return $atack_image_list;
  }

  public function getAllSkills()
  {
      return $this->db->table('skills')->get();
   }

   public function getSkillById(int $id) {
     return $this->db->table('skills')->where('id', $id)->get()->first();
   }

   public function getUserSkills(int $uid) {
     $user_skills = $this->db->table('user_has_skill')->where('u_id', $uid)->orderBy('created_at', 'desc')->get();
     $result = [];
     $skill_images = [];
     $i = 0;
     foreach ($user_skills as $key => $value) {
       $s_id = $value->s_id - 1;
       $result[$i] = $this->getAllSkills()[$s_id];
       $image_path = public_path($this->getAllSkills()[$s_id]->image);
       $image_list = $this->makeImageList($image_path);
       $skill_images[$i] = $image_list;
       $i++;
     }
     return [$result, $skill_images];
   }

   public function getSkillImageLists(int $s_id) {
     $image_path = public_path($this->getAllSkills()[$s_id]->image);
     $image_list = $this->makeImageList($image_path);

     return $image_list;
   }

   public function addUserSkill($uid, $sid) {
     $now = Carbon::now();
     $this->db->table('user_has_skill')->insert(['u_id' => $uid, 's_id' => $sid, 'created_at' => $now]);
   }

 }
