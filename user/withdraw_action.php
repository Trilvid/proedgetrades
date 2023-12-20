<div>
	<?php 
	require("general_nav.php"); 
	require("../connect.php");
	?>	

	<?php 
	$inv_sel="select * from investment_table where status!='checking' and investor_id='$sess_id' ";
	$inv_sql=$conn->query($inv_sel);
	$inv_check=$inv_sql->fetch_assoc();

	?>

</div>


<?php 

if(isset($_POST['withdraw_btn'])){

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

// if($inv_check['investor_id']>0){
// 	header("location:withdrawal?inv_err");
// }

if($withdraw_amt>$row_details['spot_wallet']){

	header("location:withdrawal?err");
}
else if($withdraw_amt<25){
	header("location:withdrawal?inv_err");
}
else{

	$withdraw_insert="insert into withdrawal_table(name,email,date,wallet,amount,coin,status,withdraw_id)values('$sess_user','$sess_mail','$date','$withdraw_wallet','$withdraw_amt','$coin_type','pending','$sess_id')";
	$withdraw_done=$conn->query($withdraw_insert);

if($withdraw_done){
	$up_bal="update user_table set spot_wallet=spot_wallet-'$withdraw_amt' where id='$sess_id' ";
	$up_bal_done=$conn->query($up_bal);
	if($up_bal_done){
	    require '../phpmailer/with.php';
		header("location:withdrawal?success");
	}
}

}

}

?>

