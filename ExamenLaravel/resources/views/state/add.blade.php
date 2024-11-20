<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestion des États</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .table-container {
            margin: 50px auto;
            padding: 20px;
        }
        .btn {
            width: 100px;
        }
    </style>
</head>
<body>

    <div class="container mt-5">
        <div class="card p-4 table-container">
            <h1 class="text-center">Gestion des États</h1>

            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>État ID</th>
                        <th>Nom de l'État</th>
                        <th>Drapeau</th>
                        <th>PIB (en milliards)</th>
                        <th>Superficie (km²)</th>
                        <th>Population</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Yuu</td>
                        <td><img src="path-to-flag-yuu.png" alt="yuu flag" width="50" height="30"></td>
                        <td>78.00</td>
                        <td>766.00</td>
                        <td>655</td>
                        <td>
                            <button class="btn btn-warning">Modifier</button>
                            <button class="btn btn-danger">Supprimer</button>
                        </td>
                    </tr>
                    <tr>
                        <td>6</td>
                        <td>HH</td>
                        <td><img src="path-to-flag-hh.png" alt="hh flag" width="50" height="30"></td>
                        <td>455.00</td>
                        <td>456.00</td>
                        <td>5466</td>
                        <td>
                            <button class="btn btn-warning">Modifier</button>
                            <button class="btn btn-danger">Supprimer</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
</body>
</html>
