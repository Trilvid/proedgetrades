

<?php 

if(isset($_POST['deposit_btn'])){

function clean($value){
require("../connect.php");
$value=trim($value);
$value=htmlspecialchars($value);
$value=htmlentities($value);
$value=stripslashes($value);
$value=mysqli_real_escape_string($conn,$value);
return $value;
}

$dep_amt=clean($_POST['dep_amt']);
$coin_type=clean($_POST['coin_type']);
$dep_wallet=clean($_POST['dep_wallet']);
$dep_date=clean($_POST['dep_date']);
$dep_id=clean($_POST['dep_id']);
$dep_plan=clean($_POST['dep_plan']);
$ref_bon=clean($_POST['ref_bon']);
$ref_person=clean($_POST['ref_person']);

	$deposit_insert="insert into deposit_table(name,email,date,wallet,amount,coin,plan,ref_profit,ref_id,status,invest_id,depositor_id)values('$sess_user','$sess_mail','$dep_date','$dep_wallet','$dep_amt','$coin_type','$dep_plan','$ref_bon','$ref_person','pending','$dep_id','$sess_id')";
	$deposit_done=$conn->query($deposit_insert);

if($deposit_done){
	$wallet="select * from deposit_table where depositor_id='$sess_id' and status='pending' order by id desc limit 1";
	$wall_scan=$conn->query($wallet);
	$disp_wallet=$wall_scan->fetch_assoc();
}



}


?>