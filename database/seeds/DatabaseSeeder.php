<?php

use Illuminate\Database\Seeder;
use App\Doctor;
use Illuminate\Carbon;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
    	factory(App\Doctor::class, 10)->create();
    	factory(App\Patient::class, 10)->create();
        factory(App\Appointment::class, 10)->create();
        // $this->call(UsersTableSeeder::class);
    }
}
