<?php

declare(strict_types=1);

use Tempest\Database\Config\MysqlConfig;

use function Tempest\env;

return new MysqlConfig(
    host: env('DB_HOST') ?? 'localhost',
    port: env('DB_PORT') ?? '3306',
    username: env('DB_USERNAME') ?? 'root',
    password: env('DB_PASSWORD') ?? '',
    database: env('DB_DATABASE'),
);
