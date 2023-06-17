<?php
   if(isset($_POST['s'])){
     $d=date('d/m/y');
     include 'conn.php';
     $n=$_POST['n'];
     $ph=$_POST['ph'];
     $e=$_POST['e'];
     $c=$_POST['c'];
     $m=$_POST['m'];
     print_r($_POST);

   echo $sql="insert into enquiry values('$n','$e','$ph','$c','$m','$d')";
   $q= mysqli_query($conn,$sql);
   if ($q) {
      
 echo "
        <script>
        setTimeout(function(){
         window.location.href='index.php'

          },100);
          alert('Thank You! We will conatct shortly');
 

  </script>";



   }
  




   }


    ?>
    