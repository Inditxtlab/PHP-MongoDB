<?php
require_once __DIR__ . '/../vendor/autoload.php';
require_once __DIR__ . '/../app/models/Produit.php';

// Test 1 : Ajouter un produit
$produit = new Produit();
$produit->nom = "Produit test";
$produit->quantite = 10;
$produit->prix = 19.99;
$produit->enregistrer();
echo "✅ Produit ajouté avec succès<br>";

// Test 2 : Lire tous les produits
$produits = Produit::tous();
echo "<h2>Liste des produits :</h2>";
echo "<ul>";
foreach ($produits as $p) {
    echo "<li>ID: {$p->id}, Nom: {$p->nom}, Qté: {$p->quantite}, Prix: {$p->prix}</li>";
}
echo "</ul>";

// Test 3 : Trouver un produit par ID
if (!empty($produits)) {
    $firstId = $produits[0]->id;
    $p = Produit::parId($firstId);
    echo "<p>🔍 Produit trouvé par ID ({$firstId}) : {$p->nom}</p>";
}

// Test 4 : Supprimer le dernier produit ajouté
if (!empty($produits)) {
    Produit::supprimer($produits[0]->id);
    echo "<p>🗑️ Produit supprimé : {$produits[0]->id}</p>";
}
