<?php
include 'a_header.php';
include 'conn.php';
$msg = isset($_GET['msg']) ? $_GET['msg'] : '';
$sql = "SELECT * FROM user_kyc";
$result = mysqli_query($conn, $sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>User KYC Details</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-reboot.min.css">
    <link rel="stylesheet" href="css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="font-awesome.min.css">
    <link href="fontawesome/css/all.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Righteous" rel="stylesheet">
    <script src="js/bootstrap.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <style></style>
</head>
<body style="font-family: Century Gothic">
<?php if (!empty($msg)): ?>
    <script>alert('<?php echo $msg; ?>');</script>
<?php endif; ?>
<br>
<div class="row">
    <div class="col-md-11">
        <table class="table table-bordered">
            <tr>
                <th>User Name</th>
                <th>Name</th>
                <th>Occupation</th>
                <th>Category</th>
                <th>Policy Number</th>
                <th>Rs/year</th>
                <th>Gender</th>
                <th>Pan Number</th>
                <th>Aadhar Number</th>
                <th>Photo</th>
                <th colspan="2">Action</th>
            </tr>
            <?php while ($row = mysqli_fetch_assoc($result)): ?>
                <tr>
                    <td><?php echo $row['user_name']; ?></td>
                    <td><?php echo $row['name']; ?></td>
                    <td><?php echo $row['occ']; ?></td>
                    <td><?php echo $row['ensuranse_type']; ?></td>
                    <td>
                        <form action="" method="post">
                            <input type="text" name="pl" value="" class="form-control">
                        </form>
                    </td>
                    <td>
                        <form action="" method="post">
                            <input type="text" name="rs" value="" class="form-control">
                        </form>
                    </td>
                    <td><?php echo $row['gen']; ?></td>
                    <td><?php echo $row['pan']; ?></td>
                    <td><?php echo $row['adhar']; ?></td>
                    <td><img src="<?php echo $row['image']; ?>" style="height: 100px; width: 100px;"></td>
                    <td>
                        <form action="" method="post">
                            <input type="submit" name="update" class="btn btn-primary" value="Update">
                        </form>
                    </td>
                    <td>
                        <form action="" method="post">
                            <input type="submit" name="delete" class="btn btn-danger" value="Delete">
                        </form>
                    </td>
                </tr>
            <?php endwhile; ?>
        </table>
    </div>
    <div class="col-md-1"></div>
</div>
<?php
if (isset($_POST['delete'])) {
    echo $u = $_GET['delete'];
    echo $sql = "DELETE FROM user_kyc WHERE user_name='$u'";
    if (mysqli_query($conn, $sql)) {
        header("location:admin.php?msg=Card deleted Successfully");
    } else {
        header("location:viewcard.php?msg=Something Went Wrong");
    }
}
if (isset($_POST['update'])) {
    echo $p = $_GET['pl'];
    $pa = $_GET['rs'];
    echo $sql = "INSERT INTO user_policy VALUES('$uname','$n','$et','$p','$pa')";
    if (mysqli_query($conn, $sql)) {
        header("location:admin.php?msg=Updated Successfully");
    } else {
        header("location:viewcard.php?msg=Something Went Wrong");
    }
}
?>
<script>
    AOS.init({
        duration: 2000,
    });
</script>
</body>
</html>
