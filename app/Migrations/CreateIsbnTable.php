<?php

declare(strict_types=1);

namespace App\Migrations;

use App\Models\Book;
use App\Models\Isbn;
use Tempest\Database\DatabaseMigration;
use Tempest\Database\QueryStatement;
use Tempest\Database\QueryStatements\CreateTableStatement;
use Tempest\Database\QueryStatements\DropTableStatement;

final class CreateIsbnTable implements DatabaseMigration
{
    private(set) string $name = '0000-00-04_create_isbns_table';

    public function up(): QueryStatement
    {
        return CreateTableStatement::forModel(Isbn::class)
            ->primary()
            ->text('value')
            ->belongsTo('isbns.book_id', 'books.id');
    }

    public function down(): QueryStatement
    {
        return DropTableStatement::forModel(Book::class);
    }
}
