<!-- /app/views/produits/edit.php -->
<div class="container mx-auto py-8 px-4 max-w-3xl">
    <h2 class="text-2xl font-bold mb-6 text-gray-800"> Modifier un produit</h2>

    <form action="index.php?action=update" method="POST" class="bg-white p-6 rounded-lg shadow">
        <input type="hidden" name="id" value="<?= htmlspecialchars($produit->id) ?>">

        <div class="mb-4">
            <label for="nom" class="block text-gray-700 text-sm font-medium mb-2">Nom :</label>
            <input type="text" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" id="nom" name="nom" value="<?= htmlspecialchars($produit->nom) ?>" required>
        </div>

        <div class="mb-4">
            <label for="quantite" class="block text-gray-700 text-sm font-medium mb-2">Quantité :</label>
            <input type="number" min="0" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" id="quantite" name="quantite" value="<?= htmlspecialchars($produit->quantite) ?>" required>
        </div>

        <div class="mb-4">
            <label for="prix" class="block text-gray-700 text-sm font-medium mb-2">Prix (€) :</label>
            <input type="number" min="0" step="0.01" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" id="prix" name="prix" value="<?= htmlspecialchars($produit->prix) ?>" required>
        </div>

        <div class="flex gap-3">
            <button type="submit" class="px-4 py-2 bg-blue-600 hover:bg-blue-700 text-white rounded-md shadow transition">
                Modifier
            </button>
            <a href="index.php?action=index" class="px-4 py-2 bg-gray-200 hover:bg-gray-300 rounded-md shadow transition inline-block">
                Retour à la liste
            </a>
        </div>
    </form>
</div>
