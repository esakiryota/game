<?php


namespace App\Models;

use Spatie\Permission\Models\Role as SpatieRole;
use App\Enums\Role as RoleEnum;

class Role extends SpatieRole
{
    public function scopeNotSuperAdministrator($query)
    {
        return $query->where('name', '<>', RoleEnum::SuperAdministrator);
    }

    public function getDescriptionAttribute(): string
    {
        $name = $this->name;
        $description = RoleEnum::getDescription($name);

        return $description !== '' ? $description : $name;
    }

    public function isSystemDefined(): bool
    {
        return RoleEnum::hasValue($this->name);
    }

    public function isAdministrator(): bool
    {
        return $this->name === RoleEnum::Administrator;
    }

    public function isSuperAdministrator(): bool
    {
        return $this->name === RoleEnum::SuperAdministrator;
    }
}
