<?php
include 'user_h.php';
include 'conn.php';

$sql = "SELECT * FROM `user_policy` WHERE uname='$user'";
$q = mysqli_query($conn, $sql);

if ($r = mysqli_fetch_assoc($q)) {
    $a = $r['paid_amount'];
    $p = $r['policy_number'];
}

if (isset($_POST['submit'])) {
    $date = date('d/m/y');
    $type = $_POST['type'];
    $pl = $_POST['pl'];
    $cname = $_POST['cname'];
    $cno = $_POST['cno'];
    $expiry = $_POST['expiry'];
    $cvv = $_POST['cvv'];
    $sql = "INSERT INTO payment (user_name, policy_num, ctype, cardnumber, cname, expiry, cvv, date, paid) VALUES ('$user', '$pl', '$type', '$cno', '$cname', '$expiry', '$cvv', '$date', '$a')";
    if (mysqli_query($conn, $sql)) {
        echo "User details updated successfully";
        header("location: reciept.php?msg=booked successfully");
    } else {
        echo "Error";
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <?php include("bootstrap.php"); ?>
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <h1 class="display-4 ml-4 mt-4">Payment</h1>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-md-6">
                <img src="img/paymentimg.jpg" class="img-thumbnail" alt="Payment Image">
            </div>
            <div class="col-md-6">
                <form method="post" class="border p-4" action="receipt.php">
                    <div class="form-group">
                        <label class="mr-4">Card Type</label>
                        <div class="form-control">
                            Debit <input type="radio" name="type" value="debit" class="ml-2 mr-4">
                            Credit <input type="radio" name="type" value="credit" class="ml-2 mr-4">
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Policy Number</label>
                        <input type="number" name="pl" class="form-control" value="<?php echo $p; ?>" readonly>
                    </div>
                    <div class="form-group">
                        <label>Card Number</label>
                        <input type="text" name="cno" placeholder="Enter Card No" class="form-control" required pattern="(^(?:4[0-9]{12}(?:[0-9]{3})?)$|^(?:5[1-5][0-9]{14})$|^(?:3[47][0-9]{13})$)">
                    </div>
                    <div class="form-group">
                        <label>Card-Holder Name</label>
                        <input type="text" name="cname" placeholder="Enter Card Holder Name" class="form-control" required pattern="[A-Za-z\s]+">
                    </div>
                    <div class="form-group">
                        <label>Card Expiry</label>
                        <input type="month" name="expiry" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>CVV No.</label>
                        <input type="text" name="cvv" pattern="\d{3}" title="Please enter a 3-digit CVV number" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Amount</label>
                        <input type="number" name="amount" value="<?php echo $a; ?>" class="form-control" readonly>
                    </div>
                    <div class="form-group text-center">
                        <button type="submit" class="btn btn-primary" name="submit">PAY</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>



