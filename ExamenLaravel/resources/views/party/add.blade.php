<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter un Nouveau Parti</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>

        .form-container {
            width: 40%;
            margin: 0 auto;
        }
    </style>
</head>
<body>

    <div class="container mt-5">
        <div class="card p-4 form-container">
            <h1 class="text-center">Ajouter un Nouveau Parti</h1>
            <form action="/add-party" method="POST">
                <div class="mb-3">
                    <label for="party-id" class="form-label">ID du Parti:</label>
                    <input type="text" id="party-id" name="party_id" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label for="party-name" class="form-label">Nom du Parti:</label>
                    <select id="party-name" name="party_name" class="form-select" required>
                        <option value="parti1">Parti 1</option>
                        <option value="parti2">Parti 2</option>
                        <option value="parti3">Parti 3</option>
                        <option value="parti4">Parti 4</option>
                        <option value="parti5">Parti 5</option>
                    </select>
                </div>

                <div class="mb-3">
                    <label for="state" class="form-label">État:</label>
                    <select id="state" name="state" class="form-select" required>
                        <option value="yuu">Yuu</option>
                        <option value="state2">État 2</option>
                        <option value="state3">État 3</option>
                        <option value="state4">État 4</option>
                        <option value="state5">État 5</option>
                        <option value="state6">État 6</option>
                        <option value="state7">État 7</option>
                        <option value="state8">État 8</option>
                        <option value="state9">État 9</option>
                        <option value="state10">État 10</option>
                    </select>
                </div>

                <button type="submit" class="btn btn-success w-100">Ajouter le Parti</button>
            </form>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
</body>
</html>
