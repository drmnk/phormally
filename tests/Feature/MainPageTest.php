<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\User;

class MainPageTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_we_get_ok_status_on_main_page()
    {
        $response = $this->get('/');
        $response->assertOk();
    }

    public function test_main_page_got_login_and_submit_buttons_when_user_are_not_logged_in()
    {
        $this->get('/')
            ->assertSee('Log In')
            ->assertSee('Sign Up')
            ->assertDontSee('Your Account');
    }

    public function test_main_page_got_account_button_when_user_are_logged_in()
    {
        auth()->login(User::factory()->create());
        $this->get('/')
            ->assertDontSee('Log In')
            ->assertDontSee('Sign Up');
    }
}
