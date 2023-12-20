<?php 
require '../xmglobaltrades.com/connect.php';


if(isset($_POST['comp_btn'])){
 $comp_id=$_POST['comp_id'];
 $inv_stat=$_POST['inv_stat'];
 $comp_amt=$_POST['comp_amt'];
 $comp_mail=$_POST['comp_mail'];


 	$comp_inv="update investment_table set status='completed' where id='$comp_id' ";
 	$comp_done=$conn->query($comp_inv);

    if($comp_done){
        $all_comp="update user_table set spot_wallet=spot_wallet+'$comp_amt' where email='$comp_mail' ";
        $all_comp_done=$conn->query($all_comp);
        header("location:active-investment.php");
    }
 	

}

?>