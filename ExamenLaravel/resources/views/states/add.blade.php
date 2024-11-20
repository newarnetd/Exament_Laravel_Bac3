<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add New State</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        /* Form container */
        .form-container {
            width: 50%;
            margin: 50px auto;
            padding: 20px;
            background-color: white;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h1 {
            text-align: center;
            color: #333;
        }

        label {
            display: block;
            margin: 10px 0 5px;
            color: #333;
        }

        input[type="text"], input[type="number"] {
            width: 100%;
            padding: 10px;
            margin: 5px 0 20px;
            border: 1px solid #ddd;
            border-radius: 5px;
        }

        button {
            padding: 10px 20px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }

        button:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>

    <div class="form-container">
        <h1>Add New State</h1>

        <form action="/add-state" method="POST">
            <label for="state-id">State ID:</label>
            <input type="text" id="state-id" name="state_id" required>

            <label for="state-name">State Name:</label>
            <input type="text" id="state-name" name="state_name" required>

            <label for="flag-id">Flag ID:</label>
            <input type="text" id="flag-id" name="flag_id" required>

            <label for="gdp">GDP (in USD):</label>
            <input type="number" id="gdp" name="gdp" min="0" required>

            <label for="area">Area (in sq km):</label>
            <input type="number" id="area" name="area" min="0" required>

            <label for="population">Population:</label>
            <input type="number" id="population" name="population" min="0" required>

            <button type="submit">Add State</button>
        </form>
    </div>

</body>
</html>