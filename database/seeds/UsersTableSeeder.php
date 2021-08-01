<?php

use App\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $user = User::create([
           'name'     => '管理人',
           'email'    => 'esaki1217@gmail.com',
           'password' => Hash::make('esaki1217'),
       ]);
       $user->assignRole('admin');

    }
}
