<?php

namespace App\Enums;

use BenSampo\Enum\Enum;

final class Role extends Enum
{
    const Administrator = 'administrator';
    const Moderator = 'moderator';
    const Subscriber = 'subscriber';
    const SuperAdministrator = 'super administrator';
}
