<?php

declare(strict_types=1);

namespace App\Migrations;

use Tempest\Database\DatabaseMigration;
use Tempest\Database\QueryStatement;
use Tempest\Database\QueryStatements\CreateTableStatement;
use Tempest\Database\QueryStatements\DropTableStatement;

final class CreateBookTable implements DatabaseMigration
{
    public string $name = '2024-08-12_create_book_table';

    public function up(): QueryStatement|null
    {
        return new CreateTableStatement('books')
            ->primary()
            ->text('title')
            ->datetime('created_at')
            ->datetime('published_at', nullable: true)
            ->belongsTo('books.author_id', 'authors.id');
    }

    public function down(): QueryStatement|null
    {
        return new DropTableStatement('books');
    }
}
