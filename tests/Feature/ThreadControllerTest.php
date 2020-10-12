<?php

namespace MeinderA\LaravelForum\Tests\Feature;

use MeinderA\LaravelForum\Tests\TestCase;

class ThreadControllerTest extends TestCase
{
    /** @test */
    public function can_create_thread_if_authenticated()
    {
        $this->assertGuest();
    }
}