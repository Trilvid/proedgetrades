<?php 
	require("general_nav.php"); 
	require("../connect.php");
?>

<div id="resp">
	
</div>


<div class="verify_email_cont">
	<section>
		<p style="font-size:18px;">A six(6) digits code has been sent to your email.<br>Please enter the code below to complete the verification process</p>

		<p><form method="POST"><p><input type="number" name="sent_code" placeholder="Enter code here" required minlength="6"></p><input type="submit" name="check_code" value="Verify" id="verify_btn"></form></p>

<!-- DIDNT GET A CODE  -->
		<p>Didn't get a code?</p><form method="POST"><input type="submit" name="resend_code" value="Resend code" id="resend_btn"></form></p>
	</section>
</div>



<?php 
if(isset($_POST['check_code'])){
		function clean($value){
	require("../connect.php");
	$value=trim($value);
	$value=htmlspecialchars($value);
	$value=htmlentities($value);
	$value=stripslashes($value);
	$value=mysqli_real_escape_string($conn,$value);
	return $value;
}
$sent_code=clean($_POST['sent_code']);
$check_code="select * from user_table where id='$sess_id' ";
$code_sql=$conn->query($check_code);
$check_done=$code_sql->fetch_assoc();

if($check_done['verify_code']==$sent_code){
	$verify_up="update user_table set email_status='verified' where id='$sess_id' ";
	$verify_done=$conn->query($verify_up);
	if($verify_done){ ?>

		<script type="text/javascript">
			$(document).ready(function(){
				$("#resp").fadeIn(1000);
				$("#resp").html("<b>Verification Successful!<br>login Again to continue");
				$("#resp").css({"background":"green"});
				setTimeout(function(){
					$("#resp").fadeOut(1000);
				},1000)
			});
			setTimeout(function(){
			window.location="../login";

		},2500);
		</script>

<?php

	}
}

else { ?>

	<script type="text/javascript">
			$(document).ready(function(){
				$("#resp").fadeIn(1000);
				$("#resp").html("<b>Invalid Verification Entered!!");
				$("#resp").css({"background":"red"});
				setTimeout(function(){
					$("#resp").fadeOut(1000);
				},3000)
			});
		</script>

<?php 

}

}
?>

<?php 
if(isset($_POST['resend_code'])){ ?>

	<script type="text/javascript">
			$(document).ready(function(){
				$("#resp").fadeIn(1000);
				$("#resp").html("<b>Verification code Resent!!");
				$("#resp").css({"background":"green"});
				setTimeout(function(){
					$("#resp").fadeOut(1000);
				},3000)
			});
			setTimeout(function(){
				window.location="send-verify";
			},2000);
		</script>

 <?php
}
?>



<style type="text/css">
body{
	font-family: calibri;
	background: rgba(205, 0, 0, 0.6);
}
#resp{
	padding: 20px;
	font-size: 17px;
	position: absolute;
	top: 30px;
	z-index: 9999;
	display: none;
	right: 20px;
	color: white;
}
.verify_email_cont{
	text-align: center;
	background: rgba(0, 0, 200, 0.7);
	width: 90%;
	margin: 0 auto;
	margin-top: 20px;
	border-radius: 10px;
	color: white;
	height: 100%;
}
.verify_email_cont section{
	padding: 10px;
	line-height: 27px;
}

.verify_email_cont section form input[type='number']{
	width: 500px;
	height: 50px;
	border-radius: 20px;
	border: 0px;
	outline: none;
}
#verify_btn{
	padding: 10px;
	border: 0px;
	border-radius: 20px;
	width: 70px;
	text-align: center;
	height: 40px;
	color: green;
	background: ;
	cursor: pointer;
	}

#resend_btn{
	padding: 10px;
	border: 0px;
	border-radius: 20px;
	width: 100px;
	text-align: center;
	height: 40px;
	color: ;
	background: ;
	cursor: pointer;
}

@media only screen and (max-width: 500px){
.verify_email_cont section form input[type='number']{
	width: 100%;
}
}
</style>