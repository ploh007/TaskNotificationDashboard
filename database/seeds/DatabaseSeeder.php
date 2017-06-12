<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);

        // Seed database with Default User Login Credentials
        DB::table('users')->insert([
            'name' => 'Paul Loh',
            'email' => 'paul@paul.com',
            'password' => bcrypt('paulloh')
        ]);

        // Seed database with Group Types
		DB::table('groups')->insert([
  		  [
    			'group_name' => 'School',
    			'group_color' => '#3F51B5', // Indigo
    			'user_id' => '1',
    		],
    		[
    			'group_name' => 'Work',
    			'group_color' => '#FF9800', // Orange
    			'user_id' => '1',
    		],
    		[
    			'group_name' => 'Club',
    			'group_color' => '#F44336', // Red
    			'user_id' => '1',
    		],
    		[
    			'group_name' => 'Personal',
    			'group_color' => '#9C27B0', // Purple
    			'user_id' => '1',
    		]  
  		]);
    }
}
