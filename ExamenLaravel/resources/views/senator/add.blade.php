<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter un Nouveau Sénateur</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .form-container {
            width: 50%;
            margin: 0 auto;
        }
    </style>
</head>
<body>

    <div class="container mt-5">
        <div class="card p-4 form-container">
            <h1 class="text-center">Ajouter un Nouveau Sénateur</h1>
            <form action="/add-senator" method="POST">
                <div class="mb-3">
                    <label for="first-name" class="form-label">Prénom:</label>
                    <input type="text" id="first-name" name="first_name" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label for="last-name" class="form-label">Nom:</label>
                    <input type="text" id="last-name" name="last_name" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label for="gender" class="form-label">Genre:</label>
                    <select id="gender" name="gender" class="form-select" required>
                        <option value="Male">Homme</option>
                        <option value="Female">Femme</option>
                    </select>
                </div>

                <div class="mb-3">
                    <label for="age" class="form-label">Âge:</label>
                    <input type="number" id="age" name="age" class="form-control" required min="0">
                </div>

                <div class="mb-3">
                    <label for="state" class="form-label">État:</label>
                    <select id="state" name="state" class="form-select" required>
                        <option value="Yuu">Yuu</option>
                        <option value="State 2">State 2</option>
                        <option value="State 3">State 3</option>
                        <option value="State 4">State 4</option>
                        <option value="State 5">State 5</option>
                        <option value="State 6">State 6</option>

                    </select>
                </div>

                <div class="mb-3">
                    <label for="party" class="form-label">Parti:</label>
                    <select id="party" name="party" class="form-select" required>
                        <option value="Hell">Hell</option>
                        <option value="Parti A">Parti A</option>
                        <option value="Parti B">Parti B</option>
                        <option value="Parti C">Parti C</option>
                        <option value="Parti D">Parti D</option>
                        <option value="Parti E">Parti E</option>

                    </select>
                </div>

                <button type="submit" class="btn btn-success w-100">Ajouter Sénateur</button>
            </form>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
</body>
</html>
