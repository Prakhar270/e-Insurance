<!DOCTYPE html>
<html lang="en">

<head>
<title>Under Development</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            text-align: center;
        }
        
        h1 {
            color: #333;
        }
        
        p {
            color: #777;
            font-size: 18px;
        }
        
        .container {
            max-width: 600px;
            margin: 0 auto;
            padding: 50px 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }
        
        .logo {
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <img class="logo" src="your-logo.png" alt="Logo">
        <h1>Under Development</h1>
        <p>This WebPage is currently under development. Please check back later.</p>
        <?php
        // You can add any additional PHP code here if needed
        ?>
    </div>
</body>
</html>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - Add Policy Type</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
        }

        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
            background-color: #ffffff;
            border-radius: 10px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.3);
        }

        h2 {
            text-align: center;
            color: #333333;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-group label {
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
        }

        .form-group input[type="text"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #cccccc;
            border-radius: 5px;
            font-size: 16px;
        }

        .form-group button {
            padding: 10px 20px;
            background-color: #4CAF50;
            color: #ffffff;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
        }

        .form-group button:hover {
            background-color: #45a049;
        }

        .back-button {
            text-align: center;
            margin-top: 10px;
        }

        .back-button a {
            text-decoration: none;
            color: #333333;
            font-size: 16px;
        }

        .back-button a:hover {
            color: #666666;
        }
    </style>
</head>

<body>
    <div class="container">
        <h2>Add Policy Type</h2>
        <form action="" method="POST">
            <div class="form-group">
                <label for="policy-type">Policy Type:</label>
                <input type="text" id="policy-type" name="policyType" required>
            </div>
            <div class="form-group">
                <button type="submit">Add Policy Type</button>
            </div>
        </form>
        <div class="back-button">
            <a href="admin.php">&larr; Back to Dashboard</a>
        </div>
    </div>
</body>

</html>

