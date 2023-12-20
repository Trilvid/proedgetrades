<?php 
session_start();
require '../connect.php';
// CHECKING FOR VALID USER
if(isset($_GET['user'])){
$user=$_GET['user'];
$sel_log="select * from user_table where member_id='$user' ";
$log_sql=$conn->query($sel_log);
$row=$log_sql->fetch_assoc();

if($row>=1){
    $_SESSION['logged']=1;
    $_SESSION['member_id']=$row['member_id'];
    $_SESSION['id']=$row['id'];
    $_SESSION['user']=$row['username'];
    $_SESSION['email']=$row['email'];
    $_SESSION['email_status']=$row['email_status'];
    $_SESSION['reg_date']=$row['reg_date'];
    $_SESSION['ref_id']=$row['ref_id'];
    $_SESSION['ref_wallet']=$row['ref_wallet'];
    $_SESSION['last_log']=$last_log;

    header("location:../user/dashboard");
}
else{
	header("location:../");
}
}
else{
	header("location:../");
}
?>

