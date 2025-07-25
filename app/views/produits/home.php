<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8" />
    <title>Bebe BoO</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        rosebaby: '#ffe4e6',
                        bluebaby: '#cfe8f9',                      
                        yellowbaby: '#fff7cc',
                        lilac: '#f3e8ff',
                    }
                }
            }
        }
    </script>
</head>

<body class="bg-rosebaby min-h-screen font-sans">
    <div class="container mx-auto px-4 py-10">
        <h1 class="text-3xl font-bold text-pink-700 mb-6 text-center">🌸 Bebe BoO - Liste des Produits 🌸</h1>

        <div class="flex justify-center mb-6">
            <a href="index.php?action=create"
                class="bg-pink-500 hover:bg-pink-600 text-white px-5 py-2 rounded-full shadow-md transition">
                ➕ Ajouter un produit
            </a>
        </div>

        <div class="overflow-x-auto shadow-lg rounded-xl bg-white">
            <table class="min-w-full">
                <thead class="bg-lilac text-purple-700 text-sm uppercase tracking-wider">
                    <tr>
                        <th class="px-6 py-4 text-left">Nom</th>
                        <th class="px-6 py-4 text-left">Quantité</th>
                        <th class="px-6 py-4 text-left">Prix</th>
                        <th class="px-6 py-4 text-center">Actions</th>
                    </tr>
                </thead>
                <tbody class="text-gray-700">

                  <?php
    var_dump($produits);  // <-- Ajoute cette ligne ici temporairement
    ?>
                    <?php if (!empty($produits)): ?>
                       
                        <?php foreach ($produits as $p): ?>
                            <tr class="border-b hover:bg-bluebaby transition">
                                <td class="px-6 py-4"><?= htmlspecialchars($p->nom) ?></td>
                                <td class="px-6 py-4"><?= (int)$p->quantite ?></td>
                                <td class="px-6 py-4"><?= number_format((float)$p->prix, 2, ',', ' ') ?> €</td>
                                <td class="px-6 py-4 flex gap-2 justify-center">
                                    <a href="index.php?action=edit&id=<?= urlencode($p->id) ?>"
                                        class="bg-yellowbaby hover:bg-yellow-200 text-gray-700 px-4 py-1 rounded-full text-sm font-semibold shadow-sm">
                                        ✏️ Modifier
                                    </a>
                                    <a href="index.php?action=delete&id=<?= urlencode($p->id) ?>"
                                        onclick="return confirm('Supprimer ce produit ?')"
                                        class="bg-red-400 hover:bg-red-500 text-white px-4 py-1 rounded-full text-sm font-semibold shadow-sm">
                                        🗑️ Supprimer
                                    </a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    <?php else: ?>
                        <tr>
                            <td colspan="4" class="px-6 py-4 text-center text-gray-500 italic">Aucun produit trouvé.</td>
                        </tr>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>
    </div>
</body>

</html>
