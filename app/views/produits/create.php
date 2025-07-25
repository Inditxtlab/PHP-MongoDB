<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>Créer un produit - Bebe BoO</title>
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
        <h2 class="text-2xl font-bold text-center text-pruneDouce mb-6">🎠 Créer un nouveau produit</h2>

        <form action="?action=store" method="POST" class="space-y-4">
            <div>
                <label for="nom" class="block text-sm font-medium text-grisFonce">Nom :</label>
                <input type="text" id="nom" name="nom" required
                    class="mt-1 w-full px-4 py-2 border border-vertSauge rounded-lg focus:outline-none focus:ring-2 focus:ring-vertSauge text-grisFonce">
            </div>

            <div>
                <label for="quantite" class="block text-sm font-medium text-grisFonce">Quantité :</label>
                <input type="number" id="quantite" name="quantite" required
                    class="mt-1 w-full px-4 py-2 border border-vertSauge rounded-lg focus:outline-none focus:ring-2 focus:ring-vertSauge text-grisFonce">
            </div>

            <div>
                <label for="prix" class="block text-sm font-medium text-grisFonce">Prix (€) :</label>
                <input type="number" id="prix" name="prix" step="0.01" required
                    class="mt-1 w-full px-4 py-2 border border-vertSauge rounded-lg focus:outline-none focus:ring-2 focus:ring-vertSauge text-grisFonce">
            </div>

            <div class="flex justify-between items-center pt-4">
                <a href="?" class="text-sm text-pruneDouce hover:underline">← Retour à la liste</a>
                <button type="submit"
                    class="bg-vertSauge hover:bg-vertSauge/80 text-beigeChaud px-6 py-2 rounded-full shadow-md transition font-semibold">
                    Ajouter
                </button>
            </div>
        </form>
    </div>
</body>

</html>
