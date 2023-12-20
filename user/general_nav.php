<?php 
session_start();
require("../connect.php");

if(!isset($_SESSION['logged'])){
	header("location:../login");
}
else{
$sess_id=$_SESSION['id'];
$sess_user=$_SESSION['user'];
$sess_mail=$_SESSION['email'];
$sess_member_id=$_SESSION['member_id'];
// $sess_email_status=$_SESSION['email_status'];
// $sess_date=$_SESSION['reg_date'];
// $sess_ref_id=$_SESSION['ref_id'];
// $sess_ref_wallet=$_SESSION['ref_wallet'];

$sel="select * from user_table where id='$sess_id' ";
$user_sel=$conn->query($sel);
$row_details=$user_sel->fetch_assoc();
}	

// CHECKING BLOCKED USER

if($row_details['access']=="denied"){
	session_start();
	session_unset();
	session_destroy();
	header("location:../login");
}

// CHECKING TOTAL DEPOSITS
	$tot_dep="select sum(amount) as total_dep from deposit_table where depositor_id='$sess_id' and status='completed' ";
	$all_dep_sql=$conn->query($tot_dep);
	$all_dep=$all_dep_sql->fetch_assoc();


// CHECKING ACTIVE INVESTMENTS
	$act_inv="select * from trading_table where trader_id='$sess_id' and status='active' ";
	$all_inv_sql=$conn->query($act_inv);
	$all_inv=mysqli_num_rows($all_inv_sql);


// CHECKING ACTIVE INVESTMENTS PLAN
	$act_plan="select * from trading_table where trader_id='$sess_id' and status='active' order by id desc";
	$inv_plan_sql=$conn->query($act_plan);
	$active_plan=$inv_plan_sql->fetch_assoc();

// CHECKING TOTAL WITHDRAWALS
	$tot_withdraw="select sum(amount) as total_withdraw from withdrawal_table where withdraw_id='$sess_id' and status='completed' ";
	$all_withdraw_sql=$conn->query($tot_withdraw);
	$all_withdraw=$all_withdraw_sql->fetch_assoc();


// CHECKING TOTAL REFERALS
	$ref_nos="select * from user_table where ref_id='$sess_member_id' ";
	$ref_sqls=$conn->query($ref_nos);
	$all_ref=mysqli_num_rows($ref_sqls);
?>



<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
	<meta name="theme-color" content="rgb(11, 100, 195)">
	<title>PROEDGETRADES</title>
	<link rel="stylesheet" type="text/css" href="dash_board.css">
	<!-- <link rel="shortcut icon" href="../img/newitem/A0.png" type="image/x-icon"> -->
    <link rel="shortcut icon" href="../img/newitem/A0.png" type="image/x-icon">
	<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.0/css/font-awesome.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1/css/font-awesome.css" />
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  	<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  	<script src="https://kit.fontawesome.com/03a627758a.js" crossorigin="anonymous"></script>
  	<script type="text/javascript" src="../java.js"></script>
	  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100&family=Poppins:ital,wght@0,900;1,100;1,400&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@40,200,1,200" />
<link rel="shortcut icon" href="../img/newitem/A0.png" type="image/x-icon">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
	
  	
 
</head>
<body>





<style type="text/css">
	.top_icons{
		display: flex;
		flex-direction: row;
	}

	.top_icons i{
		margin: 5px;
		font-size: 25px;
		display:;
	}

	#closex,#openx{
		display: none;
	}

	@media only screen and (max-width: 800px){
	.nav_cont{
		position: fixed;
		top: 0px;
		left: -100%;
		width: 80%;
		height: 100%;
		z-index: 99;
	}
	.overview section{
		width: 80%;
	}

	#openx{
		display: block;
	}
	}
</style>

<script type="text/javascript">
	$(document).ready(function(){
		$("#openx").click(function(){
			$("#nav_cont").css({"left":"0px","transition":"0.5s"});
			$("#closex").show();
			$("#openx").hide();
		});

		$("#closex").click(function(){
			$("#nav_cont").css({"left":"-100%","transition":"0.5s"});
			$("#openx").show();
			$("#closex").hide();
		});

		$("#prof").click(function(){
			$("#prof_show").show();
		})
	});
</script>