<?php

namespace App\Migrations;

use Tempest\Database\QueryStatement;
use Tempest\Database\DatabaseMigration;
use Tempest\Database\QueryStatements\AlterTableStatement;
use Tempest\Database\QueryStatements\JsonStatement;
use Tempest\Database\QueryStatements\TextStatement;
use Tempest\Database\QueryStatements\VarcharStatement;

final class AddOauthFieldsToUsers implements DatabaseMigration
{
    public string $name = '2025-07-04_add_oauth_fields_to_users';

public function up(): QueryStatement
{
    return new AlterTableStatement('authors')
        ->add(new VarcharStatement(name: 'oauth_provider', size: 25, nullable: true))
        ->add(new VarcharStatement(name: 'oauth_user_id', size: 50, nullable: true))
        ->add(new VarcharStatement(name: 'oauth_user_email', size: 255, nullable: true))
        ->add(new JsonStatement(name: 'oauth_user_data', nullable: true))
        ->add(new TextStatement(name: 'oauth_access_token', nullable: true))
        ->add(new TextStatement(name: 'oauth_refresh_token', nullable: true))
        ->unique('oauth_provider', 'oauth_user_id');
}

    public function down(): QueryStatement
    {
        return new AlterTableStatement('authors')
            ->dropColumn('oauth_provider')
            ->dropColumn('oauth_user_id')
            ->dropColumn('oauth_user_email')
            ->dropColumn('oauth_access_token')
            ->dropColumn('oauth_refresh_token')
            ->dropColumn('oauth_user_data');
    }
}
