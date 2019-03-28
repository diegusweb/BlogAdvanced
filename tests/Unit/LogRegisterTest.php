<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\LogRegister;
use Faker\Generator as Faker;

class LogRegisterTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_n_create_a_log()
    {
		/*aker = Faker\Factory::create();
		
        $data = [
            'title' => $faker->word,
            'ip' => $faker->ipv4,
        ];*/
		
		//his->assertTrue(true);
		
		$logRegister = new LogRegister();
		
		 $this->assertInstanceOf(LogRegister::class, $logRegister);
	}	 
}
