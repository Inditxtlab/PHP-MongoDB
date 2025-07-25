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

<body class="bg-bluebaby min-h-screen flex items-center justify-center font-sans">
    <div class="bg-white shadow-lg rounded-xl p-8 w-full max-w-md mx-4">
        <h2 class="text-2xl font-bold text-center text-pink-600 mb-6">⊕ Créer un nouveau produit</h2>

        <form action="?action=store" method="POST" class="space-y-4">
            <div>
                <label for="nom" class="block text-sm font-medium text-gray-700">Nom :</label>
                <input type="text" id="nom" name="nom" required
                    class="mt-1 w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-pink-300">
            </div>

            <div>
                <label for="quantite" class="block text-sm font-medium text-gray-700">Quantité :</label>
                <input type="number" id="quantite" name="quantite" required
                    class="mt-1 w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-pink-300">
            </div>

            <div>
                <label for="prix" class="block text-sm font-medium text-gray-700">Prix (€) :</label>
                <input type="number" id="prix" name="prix" step="0.01" required
                    class="mt-1 w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-pink-300">
            </div>

            <div class="flex justify-between items-center pt-4">
                <a href="?" class="text-sm text-gray-600 hover:underline">← Retour à la liste</a>
                <button type="submit"
                    class="bg-pink-500 hover:bg-pink-600 text-white px-6 py-2 rounded-full shadow-md transition">
                    Ajouter
                </button>
            </div>
        </form>
    </div>
</body>

</html>
