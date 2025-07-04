<?php

declare(strict_types=1);

namespace Tests;

use Tempest\Database\Migrations\MigrationManager;
use Tempest\Discovery\DiscoveryLocation;
use Tempest\Framework\Testing\IntegrationTest;

abstract class IntegrationTestCase extends IntegrationTest
{
    protected string $root = __DIR__ . '/../';

    protected function setUp(): void
    {
        $this->discoveryLocations = [
            new DiscoveryLocation(namespace: 'Tests\\Fixtures', path: __DIR__ . '/Fixtures'),
        ];

        parent::setUp();

        $this->container->get(MigrationManager::class)->dropAll();
    }
}
