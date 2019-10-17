<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class UsersModelTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @test
     */
    function it_loads_the_users_list_page()
    {
        $this->get('/users')
        	->assertStatus(200)
        	->assertSee('List of Users');
    }

    
    /** @test */
    function it_loads_the_users_details_page()
    {
    	$this->get('/users/5')
    		->assertStatus(200)
    		->assertSee('Show details of user: 5');
    }

    function it_loads_the_users_new_page()
    {
    	$this->get('/users/new')
    		->assertStatus(200)
    		->assertSee('Create new user');
    }
}
