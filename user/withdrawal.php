<div>
	<?php 
	require("general_nav.php"); 
	require("../connect.php");
	require ("../loader.php")
	// require("investment_done.php");
    ?>
</div>

<div id="copied"></div>


<style type="text/css">
.verify_cont{
	background: rgba(0, 0, 200, 0.9);
	position: absolute;
	top: 0px;
	width: 100%;
	height: 100%;
	z-index: 99999999999;
}
.verify_cont section{
	text-align: center;
	margin-top: 30px;
	color: white;
	font-size: 16px;
	padding: 10px;
}
.verify_cont section p{
	font-size: 21px;
}
.verify_cont section form input[type="submit"]{
	padding: 15px;
	font-size: 18px;
	background: rgba(255, 0, 0, 0.8);
	border: 0px;
	border-radius: 10px;
	color: white;
	cursor: pointer;
}
</style>

<!-- WORKING ON THE VERIFICATION OF EMAIL  -->



<!-- THE MAIN DASHBOARD CONTAINER -->
<div class="dashboard_container">

	<div class="nav_cont" id="nav_cont"><?php require("userdb_link.php"); ?></div>

<!-- LOADING DIV CONTAINER -->
	<div class="load_cont">
		<section class="top_nav">
			<?php require("top_nav.php"); ?>
		</section>

		<section style="width:100%;">
			<?php require("top_api.php"); ?>
		</section>


	<section class="inner_load_cont">

	<section class="area_txt_cont">
		<section class="area_txt">

		<span><p><b>Withdraw funds</b> <br><br>
		<span> Select a withdrawal option!!</span></p>
		</span>

		</section>
	</section>


		<section class="overview_cont">

		<section>
			<b style="color:;font-size:18px;font-family: monospace;">Select an option and proceed</b> <br><br><span id="tip">Check transactions history for detailed overview of your account.</span>
		</section>

		<section class="overviewx">

			<section>
				<span> <img src='../img/btc_dep.png'></span>
				<span> 
					<table cellpadding='5' boder='' cellspacing='0'>
						<tr><td>Bitcoin</td></tr>
						<tr><td>Charge 0 USD</td></tr>
						<tr><td>Auto Confirmation</td></tr>
						<form method='post' action=''>
						<input type="hidden" value='btc' name='coin'>
                        <input type="hidden" value='bitcoin address' name='pay_wallet'>
                        <input type="hidden" value='BITCOIN' name='network'>
                        <input type="hidden" value='btc_scan' name='scan_img'>
						<tr><td><input type='number' id='dep_amt' min='1' placeholder='Enter amount' required name='dep_amt'></td></tr>
						<tr><td><input type='text' id='dep_amt' min='' placeholder='Enter wallet address' required name='dep_wallet'></td></tr>
						<tr><td><button type='submit' id='dep_btn' name='withdraw_btn'> withdraw now</button></td></tr>
                        </form>
					</table>
				</span>
			</section>
			
			<section>
			<span> <img src='../img/eth_dep.png'></span>
				<span> 
					<table cellpadding='5' boder='' cellspacing='0'>
						<tr><td>Ethereum</td></tr>
						<tr><td>Charge 0 USD</td></tr>
						<tr><td>Auto Confirmation</td></tr>
						<form method='post' action=''>
						<input type="hidden" value='eth' name='coin'>
                        <input type="hidden" value='eth address address' name='pay_wallet'>
                        <input type="hidden" value='ETHEREUM (ERC 20)' name='network'>
                        <input type="hidden" value='eth_scan' name='scan_img'>
						<tr><td><input type='number' id='dep_amt' min='1' placeholder='Enter amount' required name='dep_amt'></td></tr>
						<tr><td><input type='text' id='dep_amt' min='' placeholder='Enter wallet address' required name='dep_wallet'></td></tr>
						<tr><td><button type='submit' id='dep_btn' name='withdraw_btn'> Withdraw now</button></td></tr>
                        </form>
					</table>
				</span>
			</section>

			<section>
			<span> <img src='../img/usdt_dep.png'></span>
				<span> 
					<table cellpadding='5' boder='' cellspacing='0'>
						<tr><td>USDT </td></tr>
						<tr><td>Charge 0 USD</td></tr>
						<tr><td>Auto Confirmation</td></tr>
						<form method='post' action=''>
						<input type="hidden" value='usdt' name='coin'>
                        <input type="hidden" value='usdt address' name='pay_wallet'>
                        <input type="hidden" value='TRON (TRC20)' name='network'>
                        <input type="hidden" value='usdt_scan' name='scan_img'>
						<tr><td><input type='number' id='dep_amt' min='1' placeholder='Enter amount' required name='dep_amt'></td></tr>
						<tr><td><input type='text' id='dep_amt' min='' placeholder='Enter wallet address' required name='dep_wallet'></td></tr>
						<tr><td><button type='submit' id='dep_btn' name='withdraw_btn'> Withdraw now</button></td></tr>
                        </form>
					</table>
				</span>
			</section>

		</section>
	</section>

	</section>

	</div>

</div>


<script type="text/javascript">
	$(document).ready(function(){
		$("#chk").click(function(){
			$(".quick_action").slideToggle();
		});
	});

	function cop_link(){
	var copywallet=document.getElementById("link_in");
	copywallet.select();
	document.execCommand('copy');
	alert("referal link copied!!");
	
}
</script>












<div id='resp'>

</div>


   <style>

#dep_submit{
	color:white;
	width:200px;
	font-size:19px;
	height:40px;
	background:green;
	border:0px;
}
#dep_amt{
	height:30px;
	width:250px;
	outline:none;
}

#resp{
padding: 20px;
font-size: 17px;
position: absolute;
top: 30px;
z-index: 9999;
display: none;
right: 20px;
color: white;
}
</style>


<?php



// WORKING ON THE WITHDRAWAL form SECTION


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


$coin=clean($_POST['coin']);
$dep_amt=clean($_POST['dep_amt']);
$dep_wallet=clean($_POST['dep_wallet']);
$network=clean($_POST['network']);
$date=date("d-m-y, h:i:s a");

if($row_details['withdrawal_status']=='denied'){ ?>

<script type="text/javascript">
		$(document).ready(function(){
			$("#resp").fadeIn(1000);
			$("#resp").html("<b>Withdrawal Denied! <br> Contact Support</b>");
			$("#resp").css({"background":"red"});
			setTimeout(function(){
				$("#resp").fadeOut(2000);
		},2000);
	});
</script>

<?php
}
elseif($dep_amt>$row_details['spot']){ ?>

<script type="text/javascript">
		$(document).ready(function(){
			$("#resp").fadeIn(1000);
			$("#resp").html("<b>Insufficient Balance!</b>");
			$("#resp").css({"background":"red"});
			setTimeout(function(){
				$("#resp").fadeOut(2000);
		},2000);
	});
</script>

<?php

}
else{
$withdraw_in="insert into withdrawal_table(name,email,date,type,wallet,amount,coin,status,withdraw_id)values('$sess_user','$sess_mail','$date','withdraw','$dep_wallet','$dep_amt','$coin','processing','$sess_id')";
$insert_with=$conn->query($withdraw_in);

if($insert_with){
	$up_bal="update user_table set spot=spot-'$dep_amt' where id = '$sess_id' ";
	$up_bal_done=$conn->query($up_bal);

	if($up_bal_done){ ?>

		<script type="text/javascript">
		$(document).ready(function(){
			$("#resp").fadeIn(1000);
			$("#resp").html("<b>Withdrawal Requested Successfuly!</b>");
			$("#resp").css({"background":"palegreen"});
			setTimeout(function(){
				$("#resp").fadeOut(2000);
		},2000);
		setTimeout(function(){
			   window.location="withdrawal-history";
		},2000);
	});
	   </script>

<?php
	}

}

}
}


?>






















<style type="text/css">

.overviewx{
		display: flex;
		flex-direction: row;
		flex-wrap: wrap;
	}
	.overviewx section{
		background: var(--facebook-color);
		margin: 5px;
		padding: 10px;
		border-radius: 10px;
		border: 1px solid black;
		display: flex;
		flex-direction: row;
		flex-wrap: wrap;
		color:white;
		align-items:center;
		width:;
	}
	.overviewx section span{
		margin:10px;
	}
	.overviewx section span table tr{
		color:var(--mild-color);
		text-align:center;
		font-size:;
	}
	.overviewx section span table tr td{
		font-size:15px;
		font-family:arial;
		border: 1px solid grey;
		padding:10px;
	}
	.overviewx section span img{
		width:200px;
		height:200px;
	}
	#dep_amt{
		width:300px;
		height:40px;
		outline:none;
	}
	#dep_btn{
		background: var(--pri-color);
		padding:15px;
		width:150px;
		font-size:15;
		border:0px;
		border-radius:30px;
	}

</style>