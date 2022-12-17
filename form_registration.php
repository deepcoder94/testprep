<?php 
session_start();

require 'sqlconfig.php';

if (isset($_POST['btnsubmit'])) {
	$name = $_POST['name'];
	// $u_name = $_POST['u_name'];
	$ph_number = $_POST['ph_number'];
	$email = $_POST['email'];
	$password = base64_encode($_POST['password']);
	$c_password = base64_encode($_POST['c_password']);
	// $t_password = $_POST['t_password'];
	// $r_code = strtoupper($_POST['r_code']);
	// $re_code = $_POST['re_code'];
	// $token = md5(rand());

	// date_default_timezone_set('Asia/Kolkata'); 
	// $current_date = date("d-m-Y");
	// $month_current_date = date("Y-m-d");
	// $current_time = date("H:i");

	// echo "<pre>";
	// print_r($_POST);
	// echo "</pre>";
	// exit();

	//for Duplicate check

	$dsql = "SELECT * FROM test_registration WHERE email='$email' OR phone_no='$ph_number'";
	$result = mysqli_query($conn, $dsql);

	$emailcount = mysqli_num_rows($result);

		$url = 'registration.php';
	// if(!empty($r_code)){
	// 	$url .= '?refer='.$r_code;
	// }


	if ($emailcount>0) {

		?>
		<script>
			alert("This Email Or Mobile No Already exist. Please Try Something New.");
			window.location.href="<?php echo $url ?>";
		</script>
		<?php
	} else {

		// if ($_POST['r_code'] !='') {
		// 	updateRefer();
		// }

		 // $referral_code = strtoupper(bin2hex(random_bytes(4)));

		if ($password === $c_password) {

			// $parent_refer_code = (!empty($_POST['r_code']) ? $_POST['r_code'] : '');

				$rsql = "INSERT INTO test_registration (name, email, password, confirm_password, phone_no)VALUES ('$name', '$email', '$password', '$c_password', '$ph_number')";

				$iquery = mysqli_query($conn, $rsql);

		if ($iquery === TRUE) {
			// $last_id = mysqli_insert_id($conn);

			// 	$rsql2 = "INSERT INTO art_today_wallet_balance (name, user_name, mobile_no, email)VALUES ('$name', '$u_name', '$ph_number','$email')";

			// 	$iquery2 = mysqli_query($conn, $rsql2);

			// $subject = "Account Activation";
			// $body = "hi, $name. Click Here To Activate Your Account http://tadpole.co.in/art_gallery/activate.php?token=$token";
			// $sender_email = "From: swagatadas393@gmail.com";

			// if(mail($email, $subject, $body, $sender_email)){
				// echo "successful";
				// $_SESSION['msg'] = "Check Your mail to Reset Your Account";
			?>
			<script>
			alert("Congratulation!!!You Are successfully Register with us..");
			window.location.href="login.php";	
					// window.location.href="pricing.php?art_id=<?php echo $last_id;?>";	
			</script>
			<?php
			// }else{
				?>
<!-- 				<script>
					alert("Something went wrong! Please try Again Later.");
					window.location.href="registration.php";
				</script> -->
				<?php
			// }
		} else {
		?>
		<script>
			alert("Something went wrong! Please try Again Later.");
			window.location.href="registration.php";
		</script>
		<?php
		}
	}else{
		?>
		<script>
			alert("Please check your password");
			window.location.href="registration.php";
		</script>

		<?php
	}



  }


}

$conn->close();


?>