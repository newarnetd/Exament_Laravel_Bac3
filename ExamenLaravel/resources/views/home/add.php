<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestion des Candidats</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-success">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Gestion des Candidats</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item"><a class="nav-link" href="#home">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="#statesAdd">StatesAdd</a></li>
                    <li class="nav-item"><a class="nav-link" href="#governorAdd">GovernorAdd</a></li>
                    <li class="nav-item"><a class="nav-link" href="#preselectorAdd">PreselectorAdd</a></li>
                    <li class="nav-item"><a class="nav-link" href="#senatorAdd">SenatorAdd</a></li>
                    <li class="nav-item"><a class="nav-link" href="#party">Party</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Contenu principal -->
    <div class="container my-4">
        <h1 class="text-center mb-5">Gestion des Candidats</h1>

        <!-- Governors Section -->
        <div>
            <h2 class="mb-4">Governors</h2>
            <table class="table table-striped table-hover">
                <thead class="table-success">
                    <tr>
                        <th>State Name</th>
                        <th>Flag</th>
                        <th>GDP</th>
                        <th>Area</th>
                        <th>Population</th>
                        <th>Created At</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>California</td>
                        <td>🇺🇸</td>
                        <td>3 Trillion</td>
                        <td>423,970 km²</td>
                        <td>39 Million</td>
                        <td>2024-01-01</td>
                        <td>
                            <button class="btn btn-sm btn-success">Edit</button>
                            <button class="btn btn-sm btn-danger">Delete</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

        <!-- Preselectors Section -->
        <div>
            <h2 class="mb-4">Preselectors</h2>
            <table class="table table-striped table-hover">
                <thead class="table-success">
                    <tr>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Gender</th>
                        <th>Age</th>
                        <th>Party</th>
                        <th>State</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>John</td>
                        <td>Doe</td>
                        <td>Male</td>
                        <td>35</td>
                        <td>Independent</td>
                        <td>California</td>
                        <td>
                            <button class="btn btn-sm btn-success">Edit</button>
                            <button class="btn btn-sm btn-danger">Delete</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

        <!-- Senators Section -->
        <div>
            <h2 class="mb-4">Senators</h2>
            <table class="table table-striped table-hover">
                <thead class="table-success">
                    <tr>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Gender</th>
                        <th>Age</th>
                        <th>Party</th>
                        <th>State</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Jane</td>
                        <td>Smith</td>
                        <td>Female</td>
                        <td>40</td>
                        <td>Democrat</td>
                        <td>New York</td>
                        <td>
                            <button class="btn btn-sm btn-success">Edit</button>
                            <button class="btn btn-sm btn-danger">Delete</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
