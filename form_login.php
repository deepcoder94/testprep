<?php 
 
session_start();

include 'sqlconfig.php';

if (isset($_POST['btnsub'])) {


    $email = $_POST['email'];
    $password = base64_encode($_POST['password']);

    // echo "<pre>";
    // print_r($_POST);
    // echo "</pre>";

    $logsql = "SELECT * FROM `test_registration` WHERE email = '$email'  && password ='$password'";

    // $logsql = "SELECT * FROM `art_registration` WHERE (user_name = '$email' or email = '$email' or mobile_no ='$email') && password ='$password' or password like ".$like_pass;
    
    $result = mysqli_query($conn, $logsql);

    if (mysqli_num_rows($result)>0) {
        // $status='';
        // $login_status='';
          while($row = $result->fetch_assoc()) {
            // $status=$row['status'];
            // $login_status=$row['user_login'];

            // if($status=='active'){

            $_SESSION['email'] = $email;

            // $_SESSION['reference_code'] = $row['reference_code'];

            // $_SESSION['art_id'] = $row['art_id'];

            $_SESSION['name'] = $row['Name'];

            // $_SESSION['profile_photo'] = $row['profile_photo'];

            // Taking current system Time
            // $_SESSION['start'] = time();  
           
            // Destroying session after 1 minute
            // $_SESSION['expire'] = $_SESSION['start'] + (10 * 60) ; 
            
            // echo "<pre>";
            // print_r($_SESSION);
            // echo "</pre>";   
            // exit();           
            // }
            ?>
        <script>
            alert("YOU ARE SUCCESSFULLY LOGIN WITH US");
            window.location.href="exam.php";
        </script>
            <?php
        }

    }
    else{
        ?>
        <script>
            alert("Incorrect Email Or Password.");
            window.location.href="login.php";
        </script>

        <?php
    }
}

?>

