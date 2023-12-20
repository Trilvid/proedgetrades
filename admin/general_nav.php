<?php 
session_start();
require("../connect.php");

if(!isset($_SESSION['admin_logged'])){
	header("location:../");
}
else{
	$sess_admin_id=$_SESSION['admin_id'];
}

?>

<div id="resp"></div>

<style type="text/css">
    #resp{
    padding: 20px;
    font-size: 17px;
    position: absolute;
    top: 5px;
    z-index: 99;
    display: none;
    right: 10px;
    left: 10px;
    color: white;
    height: 50px;
    margin: 0 auto;
    width: 80%;
    text-align: center;
}
</style>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
	<meta name="theme-color" content="">
	<title>TradeSafeGuard || Admin</title>
	<link rel="stylesheet" type="text/css" href="home.css">
	 <link rel="shortcut icon" type="image/x-icon" href="../img/sprout-logo.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.0/css/font-awesome.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1/css/font-awesome.css" />
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  	<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  	<script src="https://kit.fontawesome.com/03a627758a.js" crossorigin="anonymous"></script>
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

	@media only screen and (max-width: 700px){
	.nav_cont{
		position: fixed;
		top: 0px;
		left: -100%;
		width: 80%;
		height: 100%;
		z-index: 99;
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