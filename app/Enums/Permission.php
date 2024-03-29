<?php

namespace App\Enums;

use BenSampo\Enum\Enum;

final class Permission extends Enum
{
    // Posts
    public const ReadPosts = 'read posts';
    public const EditPosts = 'edit posts';
    public const DeletePosts = 'delete posts';
}
