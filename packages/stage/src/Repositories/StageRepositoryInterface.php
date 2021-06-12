<?php

namespace Stage\Repositories;

/**
 * Interface CustomerRepositoryInterface
 * @package Crm\Repositories
 */
interface StageRepositoryInterface
{
  public function getStages(string $level);

  public function getEnglishStage(string $level);

  public function getMain(string $stagename);

  public function getStageArray(int $stage_max);

  public function getEnglishStageArray(int $stage_max);

}
