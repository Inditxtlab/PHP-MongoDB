<?php
require_once __DIR__ . '/../vendor/autoload.php';

// pour debugge le autoload: var_dump(class_exists('App\Models\Produit')); // doit retourner true

use App\Controllers\ProduitController;

$controller = new ProduitController();

$action = $_GET['action'] ?? 'index';

switch ($action) {
    case 'index':
        $controller->index();
        break;

    case 'create':
        $controller->create();
        break;

    case 'store':
        $controller->store();
        break;

    case 'edit':
        $controller->edit();
        break;

    case 'update':
        $controller->update();
        break;

    case 'delete':
        $controller->delete();
        break;

    default:
        echo "Action inconnue";
        break;
}
