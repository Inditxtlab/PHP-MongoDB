<?php
// /app/controllers/ProduitController.php

namespace App\Controllers;
use App\Models\Produit;

class ProduitController
{
    public function index()
    {
        $produits = Produit::tous(); 
//Produit::tous() appelle une méthode statique du modèle Produit
// Cela signifie qu’on n’a pas besoin d’instancier un objet pour l’utiliser.→ $produits est un tableau d'objets Produit
//Chaque objet représente un document stocké dans MongoDB.
        require __DIR__ . '/../views/produits/home.php';
    }

    public function create()
    {
        require __DIR__ . '/../views/produits/create.php';
    }

    public function store()
    {
        if (isset($_POST['nom'], $_POST['quantite'], $_POST['prix'])) {
            $produit = new Produit();
            $produit->nom = $_POST['nom'];
            $produit->quantite = (int) $_POST['quantite'];
            $produit->prix = (float) $_POST['prix'];
            $produit->enregistrer();
        }

        header('Location: index.php');
        exit;
    }

    public function edit()
    {
        if (!isset($_GET['id'])) {
            echo "ID non fourni";
            return;
        }

        $produit = Produit::parId($_GET['id']);
        if (!$produit) {
            echo "Produit introuvable";
            return;
        }

        require __DIR__ . '/../views/produits/edit.php';
    }

    public function update()
    {
        if (isset($_POST['id'], $_POST['nom'], $_POST['quantite'], $_POST['prix'])) {
            $produit = new Produit();
            $produit->id = $_POST['id'];
            $produit->nom = $_POST['nom'];
            $produit->quantite = (int) $_POST['quantite'];
            $produit->prix = (float) $_POST['prix'];
            $produit->modifier();
        }

        header('Location: index.php');
        exit;
    }

    public function delete()
    {
        if (isset($_GET['id'])) {
            Produit::supprimer($_GET['id']);
        }

        header('Location: index.php');
        exit;
    }
}
