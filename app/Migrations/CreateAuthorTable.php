<?php

declare(strict_types=1);

namespace App\Migrations;

use Tempest\Database\DatabaseMigration;
use Tempest\Database\QueryStatement;
use Tempest\Database\QueryStatements\CreateTableStatement;
use Tempest\Database\QueryStatements\DropTableStatement;

final class CreateAuthorTable implements DatabaseMigration
{
    public string $name = '2024-08-11_create_author_table';

    public function up(): QueryStatement|null
    {
        return new CreateTableStatement('authors')
            ->primary()
            ->varchar('name')
            ->varchar('email')
            ->datetime('created_at');
    }

    public function down(): QueryStatement|null
    {
        return new DropTableStatement('books');
    }
}
