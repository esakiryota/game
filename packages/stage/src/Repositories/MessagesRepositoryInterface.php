<?php

namespace Stage\Repositories;

/**
 * Interface CustomerRepositoryInterface
 * @package Crm\Repositories
 */
interface MessagesRepositoryInterface
{
  public function getMessages(string $stage);
}
