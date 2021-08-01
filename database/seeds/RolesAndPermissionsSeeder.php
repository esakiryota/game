<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

/**
 * Class RolesAndPermissionsSeeder
 */
class RolesAndPermissionsSeeder extends Seeder
{
    /**
     * @return array
     */
    protected function createRoles():array
    {
        // 管理人
        $admin = Role::findOrCreate('admin');
        // プレイヤー
        $player = Role::findOrCreate('player');

        return [$admin, $player];
    }

    /**
     * @param string $permissionName
     * @param array $roles
     */
    protected function createPermissionAndGive(string $permissionName, array $roles = []):void
    {
        Permission::findOrCreate($permissionName);

        foreach ($roles as $role) {
            if (!$role->hasPermissionTo($permissionName)) {
                $role->givePermissionTo($permissionName);
            }
        }
    }

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        app()['cache']->forget('spatie.permission.cache');

        // ロール作成
        [$admin, $player] = $this->createRoles();

        // ユーザー管理権限
        $this->createPermissionAndGive('users', [$admin, $player]);
        // 打刻追加権限
        $this->createPermissionAndGive('admin', [$admin]);
    }
}
