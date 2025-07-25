<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8" />
    <title>Modifier un produit - Bebe BoO</title>
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

<body class="bg-beigeChaud min-h-screen flex items-center justify-center font-sans">
    <div class="bg-beigeChaud border border-vertSauge shadow-lg rounded-xl p-8 w-full max-w-md mx-4">
        <h2 class="text-2xl font-bold text-center text-pruneDouce mb-6">✏️ Modifier un produit</h2>

        <form action="index.php?action=update" method="POST" class="space-y-6">
            <input type="hidden" name="id" value="<?= htmlspecialchars($produit->id) ?>">

            <div>
                <label for="nom" class="block text-sm font-medium text-grisFonce mb-2">Nom :</label>
                <input type="text" id="nom" name="nom" required
                    value="<?= htmlspecialchars($produit->nom) ?>"
                    class="w-full px-4 py-2 border border-vertSauge rounded-lg focus:outline-none focus:ring-2 focus:ring-vertSauge text-grisFonce" />
            </div>

            <div>
                <label for="quantite" class="block text-sm font-medium text-grisFonce mb-2">Quantité :</label>
                <input type="number" id="quantite" name="quantite" min="0" required
                    value="<?= htmlspecialchars($produit->quantite) ?>"
                    class="w-full px-4 py-2 border border-vertSauge rounded-lg focus:outline-none focus:ring-2 focus:ring-vertSauge text-grisFonce" />
            </div>

            <div>
                <label for="prix" class="block text-sm font-medium text-grisFonce mb-2">Prix (€) :</label>
                <input type="number" id="prix" name="prix" min="0" step="0.01" required
                    value="<?= htmlspecialchars($produit->prix) ?>"
                    class="w-full px-4 py-2 border border-vertSauge rounded-lg focus:outline-none focus:ring-2 focus:ring-vertSauge text-grisFonce" />
            </div>

            <div class="flex gap-4 justify-between">
                <button type="submit"
                    class="px-6 py-2 bg-vertSauge hover:bg-vertSauge/80 text-beigeChaud rounded-full shadow-md font-semibold transition">
                    Modifier
                </button>
                <a href="index.php?action=index"
                    class="px-6 py-2 bg-pruneDouce hover:bg-pruneDouce/80 text-beigeChaud rounded-full shadow-md font-semibold transition text-center">
                    Retour à la liste
                </a>
            </div>
        </form>
    </div>
</body>

</html>
