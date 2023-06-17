<?php
include 'a_header.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title></title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/custom-style.css">
    <link href="https://fonts.googleapis.com/css?family=Righteous" rel="stylesheet">
    <script src="js/bootstrap.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.bundle.js"></script>
    <style>
        body {
            font-family: "Century Gothic", Arial, sans-serif;
            background-color: #f5f5f5;
        }
        
        .container {
            margin-top: 30px;
        }
        
        table {
            width: 100%;
            background-color: #fff;
        }
        
        th,
        td {
            padding: 10px;
        }
        
        th {
            background-color: #f8f9fa;
        }
        
        .photo {
            max-width: 100px;
            max-height: 100px;
        }
    </style>
</head>
<body>
    <?php
    if (isset($_GET['msg'])) {
        echo "<script>alert('" . $_GET['msg'] . "');</script>";
    }
    ?>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>User Name</th>
                            <th>Name</th>
                            <th>Occupation</th>
                            <th>Category</th>
                            <th>Policy Number</th>
                            <th>Paid Amount</th>
                            <th>Gender</th>
                            <th>Pan Number</th>
                            <th>Aadhaar Number</th>
                            <th>Photo</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        include("conn.php");
                        $sql = "SELECT * FROM user_kyc, user_policy";
                        $result = mysqli_query($conn, $sql);
                        while ($row = mysqli_fetch_assoc($result)) {
                            $userName = $row['user_name'];
                            $name = $row['name'];
                            $occupation = $row['occ'];
                            $insuranceType = $row['ensuranse_type'];
                            $policyNumber = $row['policy_number'];
                            $paidAmount = $row['paid_amount'];
                            $gender = $row['gen'];
                            $panNumber = $row['pan'];
                            $aadhaarNumber = $row['adhar'];
                            $photo = $row['image'];
                            ?>
                            <tr>
                                <td><?php echo $userName; ?></td>
                                <td><?php echo $name; ?></td>
                                <td><?php echo $occupation; ?></td>
                                <td><?php echo $insuranceType; ?></td>
                                <td><?php echo $policyNumber; ?></td>
                                <td><?php echo $paidAmount; ?></td>
                                <td><?php echo $gender; ?></td>
                                <td><?php echo $panNumber; ?></td>
                                <td><?php echo $aadhaarNumber; ?></td>
                                <td><img src="<?php echo $photo; ?>" class="photo"></td>
                            </tr>
                        <?php
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>

