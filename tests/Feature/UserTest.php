<?php

namespace Tests\Feature;

use App\User;
use Tests\TestCase;

class UserTest extends TestCase
{
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
