<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Schema;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Schema::disableForeignKeyConstraints();

        // user
        if ($this->command->confirm('Run the user seeder?')) {
            User::truncate();
            $name = $this->command->ask('Name');
            $mail = $this->command->ask("{$name}'s email");
            $pass = $this->command->secret("{$name}'s password");

            User::create([
                'name' => $name,
                'email' => $mail,
                'password' => bcrypt($pass),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);

            $this->command->info('User: '.$name.' created');

        }

        Schema::enableForeignKeyConstraints();
    }
}
