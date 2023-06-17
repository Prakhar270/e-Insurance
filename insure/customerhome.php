<?php
include "user_h.php";
//session_start();
$user = $_SESSION['user'];
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>User Home</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
        }

        .image-container {
            text-align: center;
            margin-top: 100px;
        }

        .image-container img {
            width: 400px;
            border-radius: 10px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.3);
        }

        .greeting {
            text-align: center;
            margin-top: 20px;
            font-size: 24px;
            color: #333333;
        }
    </style>
    <script>
        // Function to prevent the user from exiting or refreshing the page without logging out
        function preventExit() {
            return "Are you sure you want to leave this page? Your session will be terminated.";
        }

        // Attach event listeners to the necessary events
        window.addEventListener("beforeunload", preventExit);
        window.addEventListener("unload", function () {
            // Clear the event listeners when the page is unloaded
            window.removeEventListener("beforeunload", preventExit);
        });
    </script>
</head>

<body>
    <div class="container">
        <div class="image-container">
            <img src="img/user_home.jpg" alt="User Home Image">
        </div>
        <div class="greeting">
            Welcome, <?php echo $user; ?>!
        </div>
    </div>
</body>

</html>

