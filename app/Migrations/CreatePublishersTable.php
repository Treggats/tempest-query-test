<?php

declare(strict_types=1);

namespace App\Migrations;

use App\Models\Publisher;
use Tempest\Database\DatabaseMigration;
use Tempest\Database\QueryStatement;
use Tempest\Database\QueryStatements\CreateTableStatement;
use Tempest\Database\QueryStatements\DropTableStatement;

final class CreatePublishersTable implements DatabaseMigration
{
    private(set) string $name = '0000-00-00_create_publishers_table';

    public function up(): QueryStatement
    {
        return CreateTableStatement::forModel(Publisher::class)
            ->primary()
            ->text('name')
            ->text('description');
    }

    public function down(): QueryStatement
    {
        return DropTableStatement::forModel(Publisher::class);
    }
}
