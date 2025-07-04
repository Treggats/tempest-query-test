<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use Tempest\Router\Get;
use Tempest\View\View;

use function Tempest\view;

final readonly class HomeController
{
    #[Get('/')]
    public function __invoke(): View
    {
        return view('Views/home.view.php', title: 'Tempest');
    }
}
