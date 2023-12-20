<div>
	<?php 
	require("general_nav.php"); 
	require("../connect.php");
	require '../loader.php';
	// require("investment_done.php");




// WORKING ON THE DEPOSIT form SECTION


if($_SERVER['REQUEST_METHOD']=='POST'){

	function clean($value){
	require("../connect.php");
	$value=trim($value);
	$value=htmlspecialchars($value);
	$value=htmlentities($value);
	$value=stripslashes($value);
	$value=mysqli_real_escape_string($conn,$value);
	return $value;
	}
	
	$_SESSION['dep_init']=1;
	$_SESSION['coin']=clean($_POST['coin']);
	$_SESSION['scan_img']=clean($_POST['scan_img']);
	$_SESSION['dep_amt']=clean($_POST['dep_amt']);
	$_SESSION['pay_wallet']=clean($_POST['pay_wallet']);
	$_SESSION['network']=clean($_POST['network']);
	$date=date("d-m-y, h:i:s a");
	
	
	$deposit_in="insert into deposit_table(name,email,date,amount,coin,tx_id,ref_profit,status,depositor_id)values('$sess_user','$sess_mail','$date','".$_SESSION['dep_amt']."','".$_SESSION['coin']."','','','processing','$sess_id')";
	$insert_dep=$conn->query($deposit_in);
	
	
	}
	if(isset($_POST['comp'])){
		?>
			<script>
		Swal.fire({
			text: "Thank you",
			icon: 'success',
		})
		window.location.href = "deposit-history.php"
			</script>
		<?php
	}
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

		<span><p><b>Confirm Your deposit!</b> <br><br>
		<span>Review and complete deposit!</span></p>
		</span>

		</section>
	</section>


		<section class="overview_cont">

		<section>
			<b style="color:;font-size:18px;font-family: var(--font);">Scan to pay or copy address to complete deposit!</b> <br><br><span id="tip">Check transactions history for detailed overview of your account.</span>
		</section>

		<section class="overviewx">

			<section>
				<span> <img src='../img/<?php echo $_SESSION['scan_img']; ?>.jpg'></span>
				<span> 
					<table cellpadding='5' boder='' cellspacing='0'>
						<tr><td>Method -------<?php echo strtoupper($_SESSION['coin']); ?></td></tr>
						<tr><td>Amount -------<b>$<?php echo $_SESSION['dep_amt']; ?></b></td></tr>
						<tr><td>Network --------<?php echo $_SESSION['network']; ?></td></tr>
						<tr><td>Auto Confirmation</td></tr>
						<form method='post' action=''>
						<input type="hidden" value='btc' name='coin'>
                        <!-- <input type="hidden" value='bitcoin address' name='pay_wallet'> -->
                        <input type="hidden" value='BITCOIN' name='network'>
                        <input type="hidden" value='btc_scan' name='scan_img'>
						<tr><td><input type="text" placeholder='' id='wallet_add' value='<?php echo $_SESSION['pay_wallet']; ?>' readonly> <button type="button" id="cop_btn" onclick=copyx()>Copy</button></td></tr>
						<tr><td><button type='submit' id='dep_btn' name="comp"> Completed</button></td></tr>
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

    // working on the copy button
		function copyx(){
	var copywallet=document.getElementById("wallet_add");
	copywallet.select();
	document.execCommand('copy');
	$(document).ready(function(){
		Swal.fire({
			text: "Wallet Address Copied",
			icon: 'info',
		})
	},2000);
	
}
</script>


<style type="text/css">

	#copied{
	display: none;
	position: absolute;
	top: 50px;
	right: 20px;
	background: green;
	color: white;
	padding: 15px;
}

	#cop_btn{
	cursor: pointer;
	font-size: 16px;
	color: white;
	background: var(--pri-color);
	padding: 8px;
	outline: 0px;
	border:0px;
}
	#wallet_add{
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