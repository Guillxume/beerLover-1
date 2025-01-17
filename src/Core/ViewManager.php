<?php
namespace App\Core;

use App\Core\Router\Router;

// Gestionnaire des vues
class ViewManager
{
    const LAYOUT_TEMPLATE = '../template/layout.php';

    public function __construct(private Router $router){}

    // Permet de rendre un template
    public function render(string $path, array $config = [], array $data = []): void
    {
        $config['path'] = sprintf('%s.php', $path);

        require self::LAYOUT_TEMPLATE;
    }
}
