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
                        douxRose: '#f7c8c8',
                        vertSauge: '#7ca982',
                        beigeChaud: '#f0e1c6',
                        pruneDouce: '#6a4e77',
                        grisFonce: '#4a4a4a'
                    }
                }
            }
        }
    </script>
</head>

<body class="bg-beigeChaud min-h-screen font-sans">
    <div class="container mx-auto px-4 py-10">
        <h1 class="text-3xl font-bold text-pruneDouce mb-6 text-center">🌸 Bebe BoO - Liste des Produits 🌸</h1>

        <div class="flex justify-center mb-6">
            <a href="index.php?action=create"
                class="bg-vertSauge hover:bg-vertSauge/80 text-beigeChaud px-5 py-2 rounded-full shadow-md transition font-semibold">
                ➕ Ajouter un produit
            </a>
        </div>

        <div class="overflow-x-auto shadow-lg rounded-xl bg-beigeChaud border border-vertSauge">
            <table class="min-w-full">
                <thead class="bg-douxRose text-pruneDouce text-sm uppercase tracking-wider">
                    <tr>
                        <th class="px-6 py-4 text-left">Nom</th>
                        <th class="px-6 py-4 text-left">Quantité</th>
                        <th class="px-6 py-4 text-left">Prix</th>
                        <th class="px-6 py-4 text-center">Actions</th>
                    </tr>
                </thead>
                <tbody class="text-grisFonce">

                    <?php if (!empty($produits)): ?>
                       
                        <?php foreach ($produits as $p): ?>
                            <tr class="border-b hover:bg-vertSauge/20 transition">
                                <td class="px-6 py-4"><?= htmlspecialchars($p->nom) ?></td>
                                <td class="px-6 py-4"><?= (int)$p->quantite ?></td>
                                <td class="px-6 py-4"><?= number_format((float)$p->prix, 2, ',', ' ') ?> €</td>
                                <td class="px-6 py-4 flex gap-2 justify-center">
                                    <a href="index.php?action=edit&id=<?= urlencode($p->id) ?>"
                                        class="bg-douxRose hover:bg-douxRose/80 text-pruneDouce px-4 py-1 rounded-full text-sm font-semibold shadow-sm">
                                        ✏️ Modifier
                                    </a>
                                    <a href="index.php?action=delete&id=<?= urlencode($p->id) ?>"
                                        onclick="return confirm('Supprimer ce produit ?')"
                                        class="bg-pruneDouce hover:bg-pruneDouce/80 text-beigeChaud px-4 py-1 rounded-full text-sm font-semibold shadow-sm">
                                        🗑️ Supprimer
                                    </a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    <?php else: ?>
                        <tr>
                            <td colspan="4" class="px-6 py-4 text-center text-pruneDouce italic">Aucun produit trouvé.</td>
                        </tr>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>
    </div>
</body>

</html>
