<div>
	<?php 
	require("general_nav.php"); 
	require("../connect.php");
	?>	

	<?php 
	$inv_sel="select * from user_table where id='$sess_id' ";
	$inv_sql=$conn->query($inv_sel);
	$inv_check=$inv_sql->fetch_assoc();

	?>

</div>


<?php 

if(isset($_POST['withdraw_ref'])){

function clean($value){
require("../connect.php");
$value=trim($value);
$value=htmlspecialchars($value);
$value=htmlentities($value);
$value=stripslashes($value);
$value=mysqli_real_escape_string($conn,$value);
return $value;
}

$withdraw_amt=clean($_POST['withdraw_amt']);
$coin_type=clean($_POST['coin_type']);
$withdraw_wallet=clean($_POST['withdraw_wallet']);
$date=date("d-m-y");


if($withdraw_amt>$row_details['ref_wallet']){

	header("location:referral?err");
}
else{

	$withdraw_insert="insert into ref_withdrawal_table(name,email,date,wallet,amount,coin,status,withdraw_id)values('$sess_user','$sess_mail','$date','$withdraw_wallet','$withdraw_amt','$coin_type','pending','$sess_id')";
	$withdraw_done=$conn->query($withdraw_insert);

if($withdraw_done){
	$up_bal="update user_table set ref_wallet=ref_wallet-'$withdraw_amt' where id='$sess_id' ";
	$up_bal_done=$conn->query($up_bal);
	if($up_bal_done){
		header("location:referral");
	}
}

}

}

?>

