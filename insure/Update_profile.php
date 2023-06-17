<?php
include 'user_h.php';
?>

<!DOCTYPE html>
<html>
<head>
    <?php include('bootstrap.php') ?>
    <style>
        .heading {
            font-family: Century Gothic;
            font-size: 40px;
            margin-bottom: 20px;
        }
        legend {
            width: 200px;
            color: #007bff;
            font-weight: bold;
        }
        .form-group label {
            font-weight: bold;
        }
        .btn-submit {
            width: 100%;
            background-color: #007bff;
            border: none;
            padding: 10px;
            font-size: 18px;
            font-weight: bold;
            color: #fff;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }
        .btn-submit:hover {
            background-color: #0056b3;
        }
        .error {
            color: red;
            font-size: 14px;
            margin-top: 5px;
        }
    </style>
    <script>
        function validateForm() {
            var contactNumber = document.forms["updateForm"]["producer"].value;
            var email = document.forms["updateForm"]["leadactress"].value;

            // Validate contact number
            var contactNumberRegex = /^\d{10}$/;
            if (!contactNumber.match(contactNumberRegex)) {
                alert("Please enter a valid contact number.");
                return false;
            }

            // Validate email
            var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            if (!email.match(emailRegex)) {
                alert("Please enter a valid email address.");
                return false;
            }
        }
    </script>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1 class="heading">Update Profile</h1>
            </div>
        </div>
        <div class="row mb-4">
            <div class="col-md-3"></div>
            <div class="col-md-6 col-md-offset-3" id="form">
                <fieldset class="border">
                    <legend class="text-center">Update Profile</legend>
                    <form method="post" action="" class="p-4" name="updateForm" onsubmit="return validateForm()">
                        <?php 
                            include "conn.php";
                            $sql="select * from reg where uname='$user'";
                            $x=mysqli_query($conn,$sql);
                            if ($r=mysqli_fetch_assoc($x)) {
                        ?>
                        <div class="form-group">
                            <label>User Name</label>
                            <input type="text" name="mname" readonly value="<?php echo $r['uname'] ?>" class="form-control" readonly>
                        </div>
                        <div class="form-group">
                            <label>Name</label>
                            <input type="text" name="release" value="<?php echo $r['name'] ?>" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Surname</label>
                            <input type="text" name="leadactor" value="<?php echo $r['sname'] ?>" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" name="leadactress" value="<?php echo $r['email'] ?>" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Contact Number</label>
                            <input type="text" name="producer" class="form-control" value="<?php echo $r['mob'] ?>">
                        </div>
                        <div class="form-group">
                            <label>Address</label>
                            <input type="text" name="director" value="<?php echo $r['address'] ?>" class="form-control">
                        </div>
                        <div class="form-group text-center">
                            <input class="btn btn-primary btn-submit" type="submit" name="submit" value="UPDATE">
                        </div>
                        <?php } ?>
                    </form>
                </fieldset>
            </div>
            <div class="col-md-3"></div>
        </div>
    </div>
</body>
</html>

<?php 
include "conn.php";
if (isset($_POST['submit'])) {
    $mname=$_POST['mname'];
    $release=$_POST['release'];
    $leadactor=$_POST['leadactor'];
    $leadactress=$_POST['leadactress'];
    $producer=$_POST['producer'];
    $director=$_POST['director'];
    $sql="update reg set uname='$mname', `sname`='$release', name='$leadactor', email='$leadactress', mob='$producer', address='$director' where uname='$user'";
    if (mysqli_query($conn,$sql)) {
        echo "<p class='text-success'>Profile updated successfully</p>";
    }
    else {
        echo "<p class='text-danger'>Error updating profile</p>";
    }
}
?>

