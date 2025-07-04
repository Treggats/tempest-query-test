<?php

declare(strict_types=1);

namespace Tests;

use Tempest\Framework\Testing\IntegrationTest;

abstract class TestCase extends IntegrationTest
{
    protected string $root = __DIR__ . '/../';
}
