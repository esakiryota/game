<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(RolesAndPermissionsSeeder::class);
        // $this->call(UsersTableSeeder::class);
        $this->call(User_charaTableSeeder::class);
        $this->call(User_techTableSeeder::class);
        $this->call(User_levelTableSeeder::class);
        $this->call(EnglishwordTableSeeder::class);
        $this->call(MathTableSeeder::class);
        $this->call(StageTableSeeder::class);
        $this->call(EnglishStageSeeder::class);
        $this->call(MainTableSeeder::class);
        // $this->call(User_infoTableSeeder::class);
        // $this->call(UserStageTableSeeder::class);
        $this->call(Last_stagesTableSeeder::class);
    }
}
