<?php
require __DIR__ . '/../vendor/autoload.php';

use MongoDB\Client;

function getMongoCollection() {
    $client = new Client("mongodb://localhost:27017");
    
    return $client->testdb->produits;
}