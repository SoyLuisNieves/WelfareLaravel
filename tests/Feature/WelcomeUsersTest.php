<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class WelcomeUsersTest extends TestCase
{
    /** @test */
    function it_welcomes_users_with_nickname()
    {
        $this->get('greet/luis/imyosoy')
        	->assertStatus(200)
        	->assertSee("Hello Luis, your nick is: imyosoy");
    }

    /** @test */
    function it_welcomes_users_without_nickname()
    {
    	$this->get('greet/luis')
    		->assertStatus(200)
    		->assertSee("Hello Luis");
    }
}
