
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>States Management</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        .table-container {
            width: 80%;
            margin: 50px auto;
            background-color: white;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
        }

        h1 {
            text-align: center;
            color: #333;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
        }

        th, td {
            padding: 10px;
            border: 1px solid #ddd;
            text-align: center;
        }

        th {
            background-color: #4CAF50;
            color: white;
        }

        td {
            background-color: #f9f9f9;
        }

        button {
            padding: 5px 10px;
            margin: 0 5px;
            cursor: pointer;
            font-size: 14px;
            border-radius: 3px;
        }

        .edit-btn {
            background-color: #4CAF50;
            color: white;
            border: none;
        }

        .delete-btn {
            background-color: #f44336;
            color: white;
            border: none;
        }

        .edit-btn:hover {
            background-color: #45a049;
        }

        .delete-btn:hover {
            background-color: #e53935;
        }
    </style>
</head>
<body>

    <div class="table-container">
        <h1>States Management</h1>

        <table>
            <thead>
                <tr>
                    <th>State ID</th>
                    <th>State Name</th>
                    <th>Flag</th>
                    <th>GDP (in billions)</th>
                    <th>Area (sq km)</th>
                    <th>Population</th>
                    <th colspan="2">Actions</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>yuu</td>
                    <td><img src="path-to-flag-yuu.png" alt="yuu flag" width="50" height="30"></td>
                    <td>78.00</td>
                    <td>766.00</td>
                    <td>655</td>
                    <td><button class="edit-btn">Edit</button></td>
                    <td><button class="delete-btn">Delete</button></td>
                </tr>
                <tr>
                    <td>6</td>
                    <td>hh</td>
                    <td><img src="path-to-flag-hh.png" alt="hh flag" width="50" height="30"></td>
                    <td>455.00</td>
                    <td>456.00</td>
                    <td>5,466</td>
                    <td><button class="edit-btn">Edit</button></td>
                    <td><button class="delete-btn">Delete</button></td>
                </tr>
            </tbody>
        </table>
    </div>

</body>
</html>
