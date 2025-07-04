<?php

declare(strict_types=1);

namespace App\Migrations;

use App\Models\Chapter;
use Tempest\Database\DatabaseMigration;
use Tempest\Database\QueryStatement;
use Tempest\Database\QueryStatements\CreateTableStatement;
use Tempest\Database\QueryStatements\DropTableStatement;

final class CreateChapterTable implements DatabaseMigration
{
    private(set) string $name = '0000-00-03_create_chapters_table';

    public function up(): QueryStatement
    {
        return CreateTableStatement::forModel(Chapter::class)
            ->primary()
            ->text('title')
            ->text('contents', nullable: true, default: '')
            ->belongsTo('chapters.book_id', foreign: 'books.id');
    }

    public function down(): QueryStatement
    {
        return DropTableStatement::forModel(Chapter::class);
    }
}
