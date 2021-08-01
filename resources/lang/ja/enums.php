<?php

use App\Enums\RoleType;
use App\Enums\PermissionType;

return [

    RoleType::class => [
        RoleType::Administrator => '管理者',
        RoleType::Moderator => 'モデレーター',
        RoleType::Subscriber => '購読者',
        RoleType::SuperAdministrator => 'スーパー管理者',
    ],

    PermissionType::class => [

        // Posts
        PermissionType::ReadPosts => '投稿の閲覧',
        PermissionType::EditPosts => '投稿の作成・編集',
        PermissionType::DeletePosts => '投稿の削除',

    ],

];
