<?php

declare(strict_types=1);

namespace Tests;

/**
 * @internal
 */
final class HomeControllerTest extends TestCase
{
    public function test_index(): void
    {
        $this->http
            ->get('/')
            ->assertOk()
            ->assertSee('Tempest');
    }
}
