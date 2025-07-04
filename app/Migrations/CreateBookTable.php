<?php

declare(strict_types=1);

namespace App\Migrations;

use App\Models\Book;
use Tempest\Database\DatabaseMigration;
use Tempest\Database\QueryStatement;
use Tempest\Database\QueryStatements\CreateTableStatement;
use Tempest\Database\QueryStatements\DropTableStatement;

final class CreateBookTable implements DatabaseMigration
{
    private(set) string $name = '0000-00-02_create_books_table';

    public function up(): QueryStatement
    {
        return CreateTableStatement::forModel(Book::class)
            ->primary()
            ->text('title')
            ->belongsTo('books.author_id', 'authors.id', nullable: true);
    }

    public function down(): QueryStatement
    {
        return DropTableStatement::forModel(Book::class);
    }
}
