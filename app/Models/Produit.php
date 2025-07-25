<?php

require_once __DIR__ . '/../../config/db.php';
 // pour getMongoCollection()
use MongoDB\BSON\ObjectId;

class Produit
{
    public ?string $id = null;
    public string $nom;
    public int $quantite;
    public float $prix;

    // Récupérer tous les produits
    public static function tous(): array
    {
        $collection = getMongoCollection();
        $documents = $collection->find();

        $produits = [];
        foreach ($documents as $doc) {
            $p = new Produit();
            $p->id = (string)$doc->_id;
            $p->nom = $doc->nom;
            $p->quantite = $doc->quantite;
            $p->prix = $doc->prix;
            $produits[] = $p;
        }
        return $produits;
    }

    // Trouver un produit par ID
    public static function parId(string $id): ?Produit
    {
        $collection = getMongoCollection();
        $doc = $collection->findOne(['_id' => new ObjectId($id)]);

        if (!$doc) return null;

        $p = new Produit();
        $p->id = (string)$doc->_id;
        $p->nom = $doc->nom;
        $p->quantite = $doc->quantite;
        $p->prix = $doc->prix;
        return $p;
    }

    // Ajouter un produit
    public function enregistrer()
    {
        $collection = getMongoCollection();
        $collection->insertOne([
            'nom' => $this->nom,
            'quantite' => $this->quantite,
            'prix' => $this->prix
        ]);
    }

    // Mettre à jour un produit existant
    public function modifier()
    {
        $collection = getMongoCollection();
        $collection->updateOne(
            ['_id' => new ObjectId($this->id)],
            ['$set' => [
                'nom' => $this->nom,
                'quantite' => $this->quantite,
                'prix' => $this->prix
            ]]
        );
    }

    // Supprimer un produit
    public static function supprimer(string $id)
    {
        $collection = getMongoCollection();
        $collection->deleteOne(['_id' => new ObjectId($id)]);
    }
}
