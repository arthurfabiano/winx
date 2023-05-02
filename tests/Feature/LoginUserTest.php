<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class LoginUserTest extends TestCase
{
    /**
     * @return void
     */
    public function test_only_logged_in_users_can_see_budget()
    {
        $this->get('/dashboard/1')->assertRedirect('/login');
    }
}
