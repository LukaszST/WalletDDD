<?php

namespace Tests\Feature;

use App\User;
use Tests\TestCase;

class ViewBasicSiteTest extends TestCase
{

    /** @test */
    public function user_can_view_site()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }
}
