<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add New Governor</title>
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

        input[type="text"], input[type="number"], select {
            width: 100%;
            padding: 10px;
            margin: 5px 0 20px;
            border: 1px solid #ddd;
            border-radius: 5px;
        }

        .radio-group {
            margin: 10px 0;
        }

        .radio-group input {
            margin-right: 10px;
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
        <h1>Add New Governor</h1>

        <form action="/add-governor" method="POST">
            <label for="first-name">First Name:</label>
            <input type="text" id="first-name" name="first_name" required>

            <label for="last-name">Last Name:</label>
            <input type="text" id="last-name" name="last_name" required>

            <label for="gender">Gender:</label>
            <div class="radio-group" style="display:flex">
                <input type="radio" id="male" name="gender" value="Male" required>
                <label for="male">Male</label>

                <input type="radio" id="female" name="gender" value="Female" required>
                <label for="female">Female</label>
            </div>

            <label for="age">Age:</label>
            <input type="number" id="age" name="age" min="18" required>

            <label for="state">State:</label>
            <select id="state" name="state" required>
                <option value="yuu">yuu</option>
                <option value="state2">State 2</option>
                <option value="state3">State 3</option>
            </select>

            <label for="party">Party:</label>
            <input type="text" id="party" name="party" value="hell" required>

            <button type="submit">Add Governor</button>
        </form>
    </div>

</body>
</html>
