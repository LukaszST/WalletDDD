<?php

namespace Tests\Feature;

use App\User;
use App\Wallet;
use Illuminate\Support\Facades\Auth;
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
    /** @test */
    public function user_can_login()
    {
        $userAreLogged = Auth::attempt(['email' => 'test@test.pl', 'password' => '123456']);

        $this->assertTrue($userAreLogged);
    }

    /** @test */
    public function user_can_logout()
    {
        $userAreLogged = Auth::attempt(['email' => 'test@test.pl', 'password' => '123456']);
        $this->assertTrue($userAreLogged);

        $userAreLoggedOut = Auth::logout();

        $this->assertNull($userAreLoggedOut);
    }
}
