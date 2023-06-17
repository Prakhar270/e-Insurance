<?php
include 'header.php';
?>

<?php
include("conn.php");

if (isset($_GET['name'])) {
    $name = $_GET['name'];
    $sname = $_GET['surname'];
    $uname = $_GET['username'];
    $email = $_GET['email'];
    $pswd = $_GET['pswd'];
    $cpswd = $_GET['cpswd'];
    $mob = $_GET['mobile'];
    $address = $_GET['address'];
    $ocation = $_GET['ocation'];

    // Validation checks
    if (!preg_match('/^[a-zA-Z\s]+$/', $name)) {
        echo "<center><h2 style='color:red'><mark>Invalid Name. Only alphabets are allowed</mark></h2></center>";
        exit;
    }

    if (!preg_match('/^[a-zA-Z\s]+$/', $sname)) {
        echo "<center><h2 style='color:red'><mark>Invalid Surname. Only alphabets are allowed</mark></h2></center>";
        exit;
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "<center><h2 style='color:red'><mark>Invalid Email Address</mark></h2></center>";
        exit;
    }

    if (!preg_match('/^[0-9]{10}$/', $mob)) {
        echo "<center><h2 style='color:red'><mark>Invalid Mobile Number. Only 10-digit numbers are allowed</mark></h2></center>";
        exit;
    }

    if ($pswd != $cpswd) {
        echo "<center><h2 style='color:red'><mark>Password and Confirm Password do not match</mark></h2></center>";
        exit;
    }

    echo $sql = "INSERT INTO reg VALUES('$name','$sname','$uname','$email','$pswd','$cpswd','$mob','$address','$ocation')";

    if (mysqli_query($conn, $sql)) {
        echo $sql1 = "INSERT INTO login(uname,email,pswd) VALUES('$uname','$email','$pswd')";

        if (mysqli_query($conn, $sql1)) {
            header("location: index.php?msg=Registered Successfully");
        } else {
            header("location: index.php?msg=Something Went Wrong. Username Already Exists. Try a New One");
        }
    } else {
    	header("location: index.php?msg=Something Went Wrong. Username Already Exists. Try a New One");
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Customer Registration</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/bootstrap-grid.css">
    <link rel="stylesheet" href="css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="css/bootstrap-reboot.css">
    <link rel="stylesheet" href="css/bootstrap-reboot.min.css">
    <link rel="stylesheet" href="font-awesome.min.css">
    <link href="fontawesome/css/all.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Righteous" rel="stylesheet">
    <script src="js/bootstrap.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script type="text/javascript" src="js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.bundle.js"></script>
</head>

<script>

</script>

<body style='font-family:Century Gothic;color:white;background:url(images/aaron-burden-211846-unsplash.jpg);background-size:cover'>
    <div class="container" data-aos="fade-up" style='background:rgba(0,0,0,0.7);margin-top:20px;border-radius:10px'>
        <br>
        <h2>Customer Registration Form</h2><br>
        <form action="" method="get">
            <div class="row">
                <div class="col-md-4">
                    <label for="">Name</label>
                    <input type="text" name="name" value="" class='form-control' placeholder='Name' required pattern='[a-zA-Z\s]+' title='Only alphabets are allowed in the name'>
                </div>
                <div class="col-md-4">
                    <label for="">Sur Name</label>
                    <input type="text" name="surname" value="" class='form-control' placeholder="Surname" required pattern='[a-zA-Z\s]+' title='Only alphabets are allowed in the surname'>
                </div>
                <div class="col-md-4">
                    <label for="">Username</label>
                    <input type="text" name="username" value="" class='form-control' placeholder="Username" required pattern='[a-zA-Z\s]+' title="Only alphabets are allowed in the username">
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <label for="">Email</label>
                    <input type="email" name="email" value="" class='form-control' placeholder="Email" required pattern='^[a-zA-Z0-9+_.-]+@[a-zA-Z0-9.-]+$' title="Enter a valid Email address">
                </div>
                <div class="col-md-4">
                    <label for="">Password</label>
                    <input type="password" name="pswd" value="" class='form-control' placeholder="Password" pattern='.{5,30}' title="Password must contain more than 5 characters and less than 30 characters">
                </div>
                <div class="col-md-4">
                    <label for="">Confirm Password</label>
                    <input type="password" name="cpswd" value="" class='form-control' placeholder="Confirm Password" required pattern='.{5,30}' title='Password must contain more than 5 characters and less than 30 characters'>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <label for="">Mobile</label>
                    <input type="number" name="mobile" value="" class='form-control' placeholder="Mobile" required pattern="[0-9]{10}" title="Enter a 10-digit mobile number">
                </div>
                <div class="col-md-4">
                    <label for="">Address</label>
                    <textarea name="address" rows="4" cols="40" class='form-control' placeholder="Address with Pin code & Landmark"></textarea>
                </div>
                <div class="col-md-4">
                    <label for="">Insurance Type</label>
                    <select name="ocation" class='form-control'>
                        <option value="Life Insurance">Life Insurance</option>
                        <option value="Health Insurance">Health Insurance</option>
                        <option value="Vehicle Insurance">Vehicle Insurance</option>
                        <option value="Property Insurance">Property Insurance</option>
                    </select>
                </div>
            </div>
            <div class="row" style='height:20px'></div>
            <div class="row">
                <div class="col-md-6">
                	<button type="submit" name="button" class='btn btn-primary btn-block'>SUBMIT</button>
                </div>
                <div class="col-md-6">
                    <button type="reset" name="button" class='btn btn-warning btn-block'>RESET</button>
                </div>
            </div>
        </form>
        <div class="row" style='margin-top:30px;'>
            <div class="col-md-2">
            </div>
            <div class="col-md-8">
                <a href="index.php" style='text-decoration:none'>
                    <button type="button" name="button" class='btn btn-danger btn-block'>BACK TO HOME</button>
                </a>
            </div>
            <div class="col-md-2">
            </div>
        </div>
        <br>
    </div>
    <script>
        AOS.init({
            duration: 2000,
        });
    </script>
</body>

</html>

