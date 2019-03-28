<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\LogRegister;

class LogRegisterTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_check_model_log()
    {

		//his->assertTrue(true);
		
		$logRegister = new LogRegister();
		
		$this->assertInstanceOf(LogRegister::class, $logRegister);
	}	 
	
	public function test_can_create_a_log()
    {
	
        $data = [
            'title' => "demmmmmm",
            'ip' => '124.1.1.12',
        ];
		
		//his->assertTrue(true);
		
		$logRegister = new LogRegister();
		
		$this->post(route('log.store'), $data)
        ->assertStatus(201)
        ->assertJson($data);
	}
}
