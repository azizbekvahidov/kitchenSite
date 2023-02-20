<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run(): void
    {
        $this->call([
            ContactsSeeder::class,
            BranchSeeder::class,
            MenuCategorySeeder::class,
            MenuSeeder::class,
        ]);

        if (!app()->environment('production'))
        {
            User::query()->create([
                'login' => 'admin',
                'password' => bcrypt('password')
            ]);
        }
    }
}
