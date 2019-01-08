<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $defaultPassword = app()->environment('production') ? str_random() : 'secret';
        $this->command->getOutput()->writeln("<info>Default password:</info> $defaultPassword");

     	$user = new User();
     	$user->create([
            'name'              => 'Super admin',
            'email'             => 'superadmin@example.com',
            'email_verified_at' => now(),
            'password'          => bcrypt($defaultPassword),
        ]);

        factory(User::class)->times(10)->create();
    }
}
