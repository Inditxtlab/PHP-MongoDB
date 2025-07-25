PHP MongoDB - Gestion de Produits
Cette application est un simple CRUD (Create, Read, Update, Delete) de gestion de produits développé en PHP avec MongoDB comme base de données. Le projet utilise une architecture MVC légère, et une gestion basique des routes via un contrôleur frontal.

Fonctionnalités
Liste des produits avec affichage dans une interface simple et élégante (avec Tailwind CSS).

Ajout, modification et suppression de produits.

Utilisation de MongoDB pour stocker les documents produits.

Organisation en namespaces avec autoloading PSR-4 via Composer.

Code structuré suivant le modèle MVC :

Models : classes métier, manipulation des données MongoDB.

Controllers : gestion des requêtes et coordination des vues.

Views : templates HTML avec Tailwind pour l’interface utilisateur.


Structure des dossiers
app/Models — Définitions des entités métier (Produit).

app/Controllers — Logique métier et traitement des actions utilisateur.

app/Views — Templates HTML/Tailwind.

config/ — Configuration MongoDB.

public/ — Point d’entrée de l’application (index.php).

Technologies
PHP 8+

MongoDB (extension PHP MongoDB)

Tailwind CSS

Composer (gestion des dépendances et autoloading)

