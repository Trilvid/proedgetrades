	<?php 
	require("general_nav.php"); 
	require("../connect.php");
    ?>

<?php 

// CONFIRMING DEPOSIT

if(isset($_POST['confirm_btn'])){
$row_id=$_POST['row_id'];
$dep_amt=$_POST['dep_amt'];
$depositor_id=$_POST['depositor_id'];

$up_bal="update user_table set spot=spot+'$dep_amt' where id='$depositor_id' ";
$up_done=$conn->query($up_bal);
if($up_done){
	$up_stat="update deposit_table set status='completed' where id='$row_id' ";
	$stat_done=$conn->query($up_stat);
	if($stat_done){
		header("location:pending-deposit");
	}
}

}

// DECLINING DEPOSITS

if(isset($_POST['decline_btn'])){
$row_id=$_POST['row_id'];

	$up_stat="update deposit_table set status='declined' where id='$row_id' ";
	$stat_done=$conn->query($up_stat);
	if($stat_done){
		header("location:pending-deposit");
	}
}


// DELETING USER

if(isset($_POST['delete_btn'])){
	$row_id=$_POST['row_id'];
	
		$del_user="delete from user_table where id='$row_id' ";
		$del_user_done=$conn->query($del_user);
		if($del_user_done){
			header("location:all-users");
		}
	}


?>


<!-- WORKING ON THE WITHDRAWAL SECTIONS -->
<?php
if(isset($_POST['confirm_withdraw'])){
$row_id=$_POST['row_id'];
$with_amt=$_POST['with_amt'];
$withdraw_id=$_POST['withdraw_id'];

	$up_stat="update withdrawal_table set status='completed' where id='$row_id' ";
	$stat_done=$conn->query($up_stat);
	if($stat_done){
		header("location:pending-withdrawal");
}

}

// DECLINING DEPOSIT


if(isset($_POST['decline_withdraw'])){
$row_id=$_POST['row_id'];
$with_amt=$_POST['with_amt'];
$withdraw_id=$_POST['withdraw_id'];

$up_bal="update user_table set spot=spot+'$with_amt' where id='$withdraw_id' ";
$up_done=$conn->query($up_bal);
if($up_done){
	$up_stat="update withdrawal_table set status='declined' where id='$row_id' ";
	$stat_done=$conn->query($up_stat);
	if($stat_done){
		header("location:pending-withdrawal");
	}
}

}

?>





<!-- WORKING ON THE REFERAL WITHDRAWAL SECTIONS -->
<?php
if(isset($_POST['confirm_ref_withdraw'])){
$row_id=$_POST['row_id'];
$with_amt=$_POST['with_amt'];
$withdraw_id=$_POST['withdraw_id'];

	$up_stat="update withdrawal_table set status='completed' where id='$row_id' ";
	$stat_done=$conn->query($up_stat);
	if($stat_done){
		header("location:pending-withdrawal");
}

}

// DECLINING REFERAL WITHDRAWAL


if(isset($_POST['decline_ref_withdraw'])){
$row_id=$_POST['row_id'];
$with_amt=$_POST['with_amt'];
$withdraw_id=$_POST['withdraw_id'];

$up_bal="update user_table set ref_wallet=ref_wallet+'$with_amt' where id='$withdraw_id' ";
$up_done=$conn->query($up_bal);
if($up_done){
	$up_stat="update withdrawal_table set status='declined' where id='$row_id' ";
	$stat_done=$conn->query($up_stat);
	if($stat_done){
		header("location:pending-ref-withdrawal");
	}
}

}




// ACCEPTING VERIFICATION

if(isset($_POST['accept_btn'])){
	$row_id=$_POST['row_id'];
	$verify_id=$_POST['verify_id'];
	
	$up_bal="update user_table set kyc_status='verified' where id='$verify_id' ";
	$up_done=$conn->query($up_bal);
	if($up_done){
		$up_stat="update kyc_table set status='verified' where id='$row_id' ";
		$stat_done=$conn->query($up_stat);
		if($stat_done){
			header("location:pending-kyc");
		}
	}
	
	}



	
// REJECTING VERIFICATION

if(isset($_POST['reject_btn'])){
	$row_id=$_POST['row_id'];
	$verify_id=$_POST['verify_id'];
	$del_file=$_POST['del_file'];
	
	$up_bal="update user_table set kyc_status='failed' where id='$verify_id' ";
	$up_done=$conn->query($up_bal);
	if($up_done){
		$up_stat="delete from kyc_table where id='$row_id' ";
		$stat_done=$conn->query($up_stat);
		if($stat_done){
			unlink($del_file);
			header("location:pending-kyc");
		}
	}
	
	}



?>