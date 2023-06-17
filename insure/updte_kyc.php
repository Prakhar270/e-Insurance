<?php
session_start();
include 'user_h.php';

$user = $_SESSION['user'];
?>

<script>
function abc() {
    var y = document.forms["frm"]["an"].value;
    if (y.length !== 12 || isNaN(y)) {
        window.alert("Invalid Aadhar number. Aadhar number must be 12 digits and only numeric.");
        return false;
    }

    var z = document.forms["frm"]["pan"].value;
    var panPattern = /^[A-Z]{5}[0-9]{4}[A-Z]{1}$/;
    if (!panPattern.test(z)) {
        window.alert("Invalid PAN card number");
        return false;
    }

    return true;
}
</script>

<form action="" method="post" enctype="multipart/form-data" onsubmit="return abc()" name="frm">
    <div class="row" style="margin-top:50px;">
        <div class="col-md-4">
            <label for="">User Name</label>
            <input type="text" name="un" value="<?php echo $user ?>" class="form-control" readonly>
        </div>
        <div class="col-md-4">
            <label for="">Insurance Type</label>
            <select name="it" class="form-control">
                <option value="Life Insurance">Life Insurance</option>
                <option value="Health Insurance">Health Insurance</option>
                <option value="Vehicle Insurance">Vehicle Insurance</option>
                <option value="Property Insurance">Property Insurance</option>
            </select>
        </div>
        <div class="col-md-4">
            <label for="">Gender</label>
            <select name="gen" class="form-control">
                <option value="Male">Male</option>
                <option value="Female">Female</option>
            </select>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4">
            <label for="">Aadhar Number</label>
            <input type="number" name="an" value="" class="form-control" placeholder="Aadhar Number" required>
        </div>
        <div class="col-md-4">
            <label for="">PAN Number</label>
            <input type="text" name="pan" value="" class="form-control" placeholder="Pan Number" required>
        </div>
        <div class="col-md-4">
            <label for="">Occupation</label>
            <input type="text" name="oc" value="" class="form-control" placeholder="Occupation" required>
        </div>
        <div class="col-md-4">
            <label for="">Name</label>
            <input type="text" name="c" value="" class="form-control" placeholder="Enter as per Aadhar" required>
        </div>
        <div class="col-md-4">
            <label for="">Address as per Aadhar</label>
            <input type="text" name="ad" value="" class="form-control" placeholder="Address" required>
        </div>
        <div class="col-md-4">
            <label for="">Upload your Document</label>
            <input type="file" name="file" class="form-control">
        </div>
    </div>
    <div class="row" style="height:20px"></div>
    <div class="row">
        <div class="col-md-6">
            <button type="submit" name="button" class="btn btn-primary btn-block">SUBMIT</button>
        </div>
        <div class="col-md-6">
            <button type="reset" name="button" class="btn btn-warning btn-block">RESET</button>
        </div>
    </div>
</form>

<?php
include 'conn.php';
if (isset($_POST['button'])) {
    $a = $_POST['un'];
    $b = $_POST['it'];
    $c = $_POST['gen'];
    $d = $_POST['an'];
    $e = $_POST['pan'];
    $f = $_POST['oc'];
    $g = $_POST['c'];
    $h = $_POST['ad'];
    $img = $_FILES['file']['name'];
    $tmp = $_FILES['file']['tmp_name'];
    $folder = 'uploadimg/' . $img;
    move_uploaded_file($tmp, $folder);
    $s = "INSERT INTO user_kyc VALUES('$a','$b','$c','$d','$e','$f','$g','$h','$folder')";
    mysqli_query($conn, $s);
    if (mysqli_query($conn, $sql)) {
        echo "User details updated successfully";
        header("location: customerhome.php?msg=booked successfully");
    } else {
        echo "Error";
    }
}
?>

