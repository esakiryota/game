<?php

namespace User\Repositories;

/**
 * Interface CustomerRepositoryInterface
 * @package Crm\Repositories
 */
interface SkillsRepositoryInterface
{
   public function getAllSkills();

   public function getSkillById(int $id);

   public function getUserSkills(int $uid);

   public function addUserSkill($uid, $sid);

   public function getSkillImageLists(int $s_id);
}
