<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		App\User::create([
			'role_id' => '1',
            'name' => 'Diego Rueda',
		    'username' => 'admin',
            'email' => 'diego.rueda2@gmail.com',
            'password' => bcrypt('secret')
        ]);
		
		factory(App\User::class, 29)->create();
		

		
    }
}
