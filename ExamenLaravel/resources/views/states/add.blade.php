<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter un Nouvel État</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .form-container {
            max-width: 600px;
            margin: 50px auto;
            padding: 30px;
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
        }
        h1 {
            text-align: center;
            color: #333;
        }
        label {
            font-weight: bold;
            margin-bottom: 5px;
        }
        .btn-custom {
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 5px;
            width: 100%;
            padding: 10px;
        }
        .btn-custom:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>

    <div class="form-container">
        <h1>Ajouter un Nouvel État</h1>

        <form action="/add-state" method="POST">
            <div class="mb-3">
                <label for="state-id" class="form-label">ID de l'État :</label>
                <input type="text" id="state-id" name="state_id" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="state-name" class="form-label">Nom de l'État :</label>
                <input type="text" id="state-name" name="state_name" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="flag-id" class="form-label">ID du Drapeau :</label>
                <input type="text" id="flag-id" name="flag_id" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="gdp" class="form-label">PIB (en USD) :</label>
                <input type="number" id="gdp" name="gdp" class="form-control" min="0" required>
            </div>

            <div class="mb-3">
                <label for="area" class="form-label">Superficie (en km²) :</label>
                <input type="number" id="area" name="area" class="form-control" min="0" required>
            </div>

            <div class="mb-3">
                <label for="population" class="form-label">Population :</label>
                <input type="number" id="population" name="population" class="form-control" min="0" required>
            </div>

            <button type="submit" class="btn btn-custom">Ajouter l'État</button>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
</body>
</html>
