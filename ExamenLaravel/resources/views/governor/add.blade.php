<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter un Nouveau Gouverneur</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
         .container{
            width: 90%;
            margin: 0 auto;
        }
    </style>
</head>
<body class="bg-light">

    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card shadow">
                    <div class="card-body">
                        <h1 class="text-center mb-4">Ajouter un Nouveau Gouverneur</h1>
                        <form action="/add-governor" method="POST">
                            <div class="mb-3">
                                <label for="first-name" class="form-label">Prénom :</label>
                                <input type="text" id="first-name" name="first_name" class="form-control" required>
                            </div>

                            <div class="mb-3">
                                <label for="last-name" class="form-label">Nom :</label>
                                <input type="text" id="last-name" name="last_name" class="form-control" required>
                            </div>

                            <div class="mb-3">
                                <label for="gender" class="form-label">Genre :</label>
                                <div class="form-check">
                                    <input type="radio" id="male" name="gender" value="Male" class="form-check-input" required>
                                    <label for="male" class="form-check-label">Homme</label>
                                </div>
                                <div class="form-check">
                                    <input type="radio" id="female" name="gender" value="Female" class="form-check-input" required>
                                    <label for="female" class="form-check-label">Femme</label>
                                </div>
                            </div>

                            <div class="mb-3">
                                <label for="age" class="form-label">Âge :</label>
                                <input type="number" id="age" name="age" class="form-control" min="18" required>
                            </div>

                            <div class="mb-3">
                                <label for="state" class="form-label">État :</label>
                                <select id="state" name="state" class="form-select" required>
                                    <option value="" disabled selected>Sélectionner un état</option>
                                    <option value="Alabama">Alabama</option>
                                    <option value="Alaska">Alaska</option>
                                    <option value="Arizona">Arizona</option>
                                    <option value="Arkansas">Arkansas</option>
                                    <option value="California">Californie</option>
                                    <option value="Colorado">Colorado</option>
                                    <option value="Connecticut">Connecticut</option>
                                    <option value="Delaware">Delaware</option>
                                    <option value="Florida">Floride</option>
                                    <option value="Georgia">Géorgie</option>
                                    <option value="Hawaii">Hawaï</option>
                                    <option value="Idaho">Idaho</option>
                                    <option value="Illinois">Illinois</option>
                                    <option value="Indiana">Indiana</option>
                                    <option value="Iowa">Iowa</option>
                                    <option value="Kansas">Kansas</option>
                                    <option value="Kentucky">Kentucky</option>
                                    <option value="Louisiana">Louisiane</option>
                                    <option value="Maine">Maine</option>
                                    <option value="Maryland">Maryland</option>
                                    <option value="Massachusetts">Massachusetts</option>
                                    <option value="Michigan">Michigan</option>
                                    <option value="Minnesota">Minnesota</option>
                                    <option value="Mississippi">Mississippi</option>
                                    <option value="Missouri">Missouri</option>
                                    <option value="Montana">Montana</option>
                                    <option value="Nebraska">Nebraska</option>
                                    <option value="Nevada">Nevada</option>
                                    <option value="New Hampshire">New Hampshire</option>
                                    <option value="New Jersey">New Jersey</option>
                                    <option value="New Mexico">New Mexico</option>
                                    <option value="New York">New York</option>
                                    <option value="North Carolina">Caroline du Nord</option>
                                    <option value="North Dakota">Dakota du Nord</option>
                                    <option value="Ohio">Ohio</option>
                                    <option value="Oklahoma">Oklahoma</option>
                                    <option value="Oregon">Oregon</option>
                                    <option value="Pennsylvania">Pennsylvanie</option>
                                    <option value="Rhode Island">Rhode Island</option>
                                    <option value="South Carolina">Caroline du Sud</option>
                                    <option value="South Dakota">Dakota du Sud</option>
                                    <option value="Tennessee">Tennessee</option>
                                    <option value="Texas">Texas</option>
                                    <option value="Utah">Utah</option>
                                    <option value="Vermont">Vermont</option>
                                    <option value="Virginia">Virginie</option>
                                    <option value="Washington">Washington</option>
                                    <option value="West Virginia">Virginie-Occidentale</option>
                                    <option value="Wisconsin">Wisconsin</option>
                                    <option value="Wyoming">Wyoming</option>
                                </select>
                            </div>

                            <div class="mb-3">
                                <label for="party" class="form-label">Parti :</label>
                                <input type="text" id="party" name="party" class="form-control" value="hell" required>
                            </div>

                            <div class="d-grid">
                                <button type="submit" class="btn btn-success">Ajouter le Gouverneur</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
