<?php
include 'user_h.php';
ob_start();
$user = $_SESSION['user'];
include 'conn.php';
$bdate = date("d/M/Y");
include("conn.php");
$q = "select * from user_policy where uname='$user'";
$s = mysqli_query($conn, $q);
if ($r = mysqli_fetch_assoc($s)) {
    // code...
}
$uname = $r['uname'];
$n = $r['name'];
$et = $r['insurance_type'];
$p = $r['policy_number'];
$a = $r['paid_amount'];
$td = md5("hi");
$t = substr($td, rand(1, 10));
?>

<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Receipt</title>
    <link href="style/mycss.css" rel="stylesheet" type="text/css">
    <style>
        body {
            background-color: #f5f5f5;
            font-family: Arial, sans-serif;
        }

        .container {
            max-width: 400px;
            border: 1px solid #ccc;
            border-radius: 10px;
            padding: 20px;
            margin: 0 auto;
            margin-top: 50px;
            box-sizing: border-box;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            background-color: #fff;
        }

        h3 {
            text-align: center;
            margin-top: 0;
            color: #007bff;
        }

        .receipt-info {
            margin-bottom: 20px;
        }

        .receipt-info b {
            display: inline-block;
            width: 120px;
            font-weight: bold;
            color: #333;
        }

        .print-button {
            text-align: center;
            margin-top: 20px;
        }

        .print-button button {
            padding: 10px 20px;
            font-size: 16px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .print-button button:hover {
            background-color: #0056b3;
        }

        .home-link {
            text-align: center;
            margin-top: 20px;
        }

        .home-link a {
            color: #007bff;
            text-decoration: none;
        }
    </style>
</head>

<body>
    <div class="container">
        <h3>Payment Receipt</h3>
        <div class="receipt-info">
            <b>Date:</b> <?php echo date("d/M/Y") ?><br>
            <b>Name:</b> <?php echo $n; ?><br>
            <b>Policy Number:</b> <?php echo $p; ?><br>
            <b>Insurance Type:</b> <?php echo $et; ?><br>
            <b>Payment Amount:</b> <?php echo $a; ?><br>
            <b>Transaction ID:</b> <?php echo $t; ?><br>
        </div>
        <div class="print-button">
            <button onclick="window.print()">Print Receipt</button>
        </div>
        <div class="home-link">
            <a href="customerhome.php">Back to Home</a>
        </div>
    </div>
</body>

</html>

