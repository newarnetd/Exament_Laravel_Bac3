<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestion des Candidats</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }


        .navbar {
            background-color: #4CAF50;
            overflow: hidden;
            font-size: 18px;
        }

        .navbar a {
            float: left;
            display: block;
            color: white;
            text-align: center;
            padding: 14px 20px;
            text-decoration: none;
        }

        .navbar a:hover {
            background-color: #ddd;
            color: black;
        }

        /* Container principal */
        .container {
            width: 80%;
            margin: 50px auto;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h1 {
            text-align: center;
            color: #333;
        }

        h2 {
            color: #333;
            margin-top: 30px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th, td {
            padding: 12px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: #4CAF50;
            color: white;
        }

        td {
            background-color: #f9f9f9;
        }

        tr:hover td {
            background-color: #f1f1f1;
        }

        .actions {
            text-align: center;
        }

        .btn {
            padding: 8px 12px;
            margin: 5px;
            color: white;
            border: none;
            cursor: pointer;
        }

        .btn-edit {
            background-color: #4CAF50;
        }

        .btn-delete {
            background-color: #f44336;
        }

        .btn:hover {
            opacity: 0.8;
        }
    </style>
</head>
<body>

    <!-- Menu du haut -->
    <div class="navbar">
        <a href="#home">Home</a>
        <a href="#statesAdd">StatesAdd</a>
        <a href="#governorAdd">GovernorAdd</a>
        <a href="#preselectorAdd">PreselectorAdd</a>
        <a href="#senatorAdd">SenatorAdd</a>
        <a href="#stateAdd">StateAdd</a>
        <a href="#party">Party</a>
    </div>

    <!-- Container principal -->
    <div class="container">
        <h1>Gestion des Candidats</h1>

        <div>
            <h2>Governors</h2>
            <table>
    <thead>
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
                        <td>Jean-luc</td>
                        <td>Kashindi</td>
                        <td>3</td>
                        <td>30</td>
                        <td>hell</td>
                        <td>hh</td>
                        <td class="actions">
                            <button class="btn btn-edit">Edit</button>
                            <button class="btn btn-delete">Delete</button>
                        </td>
                    </tr>
    </tbody>
</table>



        </div>

        <div>
            <h2>Preselectors</h2>
            <table>
                <thead>
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
                        <td>Jean-luc</td>
                        <td>Kashindi</td>
                        <td>3</td>
                        <td>28</td>
                        <td>hell</td>
                        <td>yuu</td>
                        <td class="actions">
                            <button class="btn btn-edit">Edit</button>
                            <button class="btn btn-delete">Delete</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div>
            <h2>Senators</h2>
            <table>
                <thead>
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
                        <td>Jean-luc</td>
                        <td>Kashindi</td>
                        <td>3</td>
                        <td>30</td>
                        <td>hell</td>
                        <td>hh</td>
                        <td class="actions">
                            <button class="btn btn-edit">Edit</button>
                            <button class="btn btn-delete">Delete</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

    </div>

</body>
</html>
