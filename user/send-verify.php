<div>
	<?php 
	require("../connect.php");
    ?>
</div>

<?php 
	$code=substr(str_shuffle("1234567890"),0,6);
	$verify_code=$code;

	$up_verify="update user_table set verify_code='$verify_code' where id='$sess_id' ";
	$up_sql=$conn->query($up_verify);

	if ($up_sql) {
		header("location:verify-email");
	}
?>