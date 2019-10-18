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
    function it_shows_the_user_list()
    {
        $this->get('/users')
        	->assertStatus(200)
        	->assertSee('List of Users');
    }

    /** @test */
    function it_shows_a_default_message_if_the_users_list_is_empty()
    {
        $this->get('/users?empty')
            ->assertStatus(200)
            ->assertSee('Not found users :/');
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
