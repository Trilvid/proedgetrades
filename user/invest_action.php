<div>
	<?php 
	require("general_nav.php"); 
	require("../connect.php");
	?>
</div>


<!--WORKING ON INVESTMENT -->
<?php
if(isset($_POST['invest_btn'])){

function clean($value){
require("../connect.php");
$value=trim($value);
$value=htmlspecialchars($value);
$value=htmlentities($value);
$value=stripslashes($value);
$value=mysqli_real_escape_string($conn,$value);
return $value;
}

$plan_type=clean($_POST['plan']);
$invest_amt=clean($_POST['invest_amt']);
$date=date("d-m-y, h:i:s a"); 


// WORKING ON THE PROFIT FOR EACH PLAN SELECTED
if($plan_type=="DELUXE"){
	$profit=$invest_amt*(25/100)*3;
	$str=strtotime("+3days");
    $due_date=date("d-m-y",$str);
    $duration=3;
    $ref_profit=$invest_amt*(3/100);
}
else if($plan_type=="ELITE"){
	$profit=$invest_amt*(35/100)*7;
	$str=strtotime("+7days");
    $due_date=date("d-m-y",$str);
    $duration=7;
    $ref_profit=$invest_amt*(5/100);
}
else if($plan_type=="SUPERIOR"){
	$profit=$invest_amt*(40/100)*30;
	$str=strtotime("+30days");
    $due_date=date("d-m-y",$str);
    $duration=30;
    $ref_profit=$invest_amt*(5/100);
}
else{
	$profit=$invest_amt*(60/100)*30;
	$str=strtotime("30days");
    $due_date=date("d-m-y",$str);
    $duration=30;
    $ref_profit=$invest_amt*(5/100);
}
$return=$invest_amt+$profit;


$insert_in="insert into investment_table(name,email,date,plan,amount,profit,ref_profit,ref_id,total_return,duration,due_date,counterx,status,investor_id)values('$sess_user','$sess_mail','$date','$plan_type','$invest_amt','$profit','$ref_profit','$sess_ref_id','$return','$duration','$due_date','0','checking','$sess_id')";
$insert_done=$conn->query($insert_in);

if($insert_done){
header("location:deposit");
}

}
?>
<!-- END OF WORKING ON INVESTMENT -->