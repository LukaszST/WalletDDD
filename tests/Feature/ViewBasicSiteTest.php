<?php

namespace Tests\Feature;

use App\User;
use Illuminate\Support\Facades\Auth;
use Tests\TestCase;
use Faker\Generator as Faker;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class ViewBasicSiteTest extends TestCase
{

    /** @test */
    public function user_can_view_site()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    /** @test */
    public function user_can_create_account()
    {
        $user = factory(User::class)->create();
        $userCreated = User::get()->last();

        $this->assertEquals($userCreated->name, $user->name);
        $this->assertEquals($userCreated->email, $user->email);
        $this->assertEquals($userCreated->password, $user->password);
    }
}
