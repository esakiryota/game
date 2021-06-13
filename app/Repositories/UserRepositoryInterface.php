<?php

namespace App\Repositories;

/**
 * Interface CustomerRepositoryInterface
 * @package Crm\Repositories
 */
interface UserRepositoryInterface
{
  public function getUserInfomation();

   public function getUserTechnique();

   public function getUserCharacter();

   public function getUserStage();

   public function updateUser(int $atack, int $stage_atack, int $defense, int $stage_defense);

   public function getLevelEx(int $level);

   public function updateEx(int $update_ex);

   public function updateUserStage(int $user_stage, int $stage_id, string $stage_name);

}
