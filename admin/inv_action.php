<?php 
require '../xmglobaltrades.com/connect.php';


if(isset($_POST['pause_btn'])){
 $pause_id=$_POST['pause_id'];
 $inv_stat=$_POST['inv_stat'];

 if($inv_stat=='active'){
 	$up_inv="update investment_table set status='deactivated' where id='$pause_id' ";
 	$inv_stat_dn=$conn->query($up_inv);
 	header("location:active-investment");
 }
 else{
 	$up_inv="update investment_table set status='active' where id='$pause_id' ";
 	$inv_stat_dn=$conn->query($up_inv);
 	header("location:active-investment");
 }
}

?>