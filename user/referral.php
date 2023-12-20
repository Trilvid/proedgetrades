<div>
	<?php 
	require("general_nav.php"); 
	require("../connect.php");
	?>
</div>


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

		<section class="pending_dep_txt">
			<span><b><i class="fa fa-credit-card"></i>Referal Withdrawal</b></span>
			<span>Withdraw your referal bonus below</span>
		</section>

		<section class="Withdraw_form_cont">

			<i id="balresp">Insufficient balance</i>
			
			<form method="POST" action="withdraw_ref_action.php" onsubmit="return(withdrawx())" name="depform" class="sub_form">

				<p><b>Enter Amount to withdraw</b><br><input type="number" name="withdraw_amt" placeholder="withdraw amount" required id="amt" min="1"></p>

				<p id="max"></p><input type="hidden" name="bal" value="<?php echo $row_details['spot_wallet']; ?>" id="bal">

				<p><b>Select payment method to complete Withdrawal</b><br>

				<section class="coins_cont_all">
					<section class="coins_cont">
					<input type="radio" name="coin_type" value="BTC" id="btc" checked>
					<label for="btc"><span></span>BTC</label>

					<input type="radio" name="coin_type" value="ETH" id="eth">
					<label for="eth"><span></span>ETH</label>

					<input type="radio" name="coin_type" value="BNB" id="bnb">
					<label for="bnb"><span></span>BNB</label>

					<input type="radio" name="coin_type" value="BCH" id="bch">
					<label for="bch"><span></span>BCH</label>

					<input type="radio" name="coin_type" value="LTC" id="ltc">
					<label for="ltc"><span></span>LTC</label>

					<input type="radio" name="coin_type" value="USDT(ERC)" id="usdt_erc">
					<label for="usdt_erc"><span></span>USDT(ERC)</label>
					</section>

					<section class="coins_cont">
					<input type="radio" name="coin_type" value="USDT(TRC)" id="usdt_trc">
					<label for="usdt_trc"><span></span>USDT(TRC)</label>

					<input type="radio" name="coin_type" value="USDC" id="usdc">
					<label for="usdc"><span></span>USDC</label>

					<input type="radio" name="coin_type" value="SOL" id="sol">
					<label for="sol"><span></span>SOL</label>

					<input type="radio" name="coin_type" value="DOGE" id="doge">
					<label for="doge"><span></span>DOGE</label>

					<input type="radio" name="coin_type" value="TRX" id="trx">
					<label for="trx"><span></span>TRX</label>

					<input type="radio" name="coin_type" value="XRP" id="xrp">
					<label for="xrp"><span></span>XRP</label>

					<input type="radio" name="coin_type" value="SHIBA" id="shib">
					<label for="shib"><span></span>SHIBA</label>
					</section>
				</section>

				</p>
				<p><b>Enter Receipient Address</b><br><input type="text" name="withdraw_wallet" required placeholder="Reciepient Address"><br><i>**Please enter accurate wallet address that matches your selected wallect address**.</i></p>
				<p style="text-align: right;margin-right: 20px;"><input type="submit" name="withdraw_ref" value="Withdraw"></p>
			</form>

		</section>

		<!-- SELECTING PENDING WITHDRAWAL -->

		<?php 
		$user_pend_with="select * from ref_withdrawal_table where withdraw_id='$sess_id' and status='pending' ";
		$no_act=$conn->query($user_pend_with);
		$user_pend_sql=$conn->query($user_pend_with);
		$sn=1;
		?>

		<section class="pending_withdraw_cont">
			<p>Pending withdrawals appears below!!</p>
		<table width="100%" bgcolor="" class="main_table" cellpadding="" cellspacing="0" align="center">
			<tr>
				<th>S/N</th><th>Amount</th><th>Date</th><th>Withdrawal Adress</th><th>Status</th>
			</tr>
			<?php while($pend_row=$user_pend_sql->fetch_assoc()){ ?>

			<tr>
				<td><?php echo $sn++; ?></td>
				<td><?php echo $pend_row['amount']; ?></td>
				<td><?php echo $pend_row['date']; ?></td>
				<td><?php echo $pend_row['wallet']; ?></td>
				<td><?php echo $pend_row['status']; ?></td>
			</tr>

			<?php 
		}
			?>
		</table>

		<?php if($no_check=$no_act->fetch_assoc()>0){
			echo "<style>#no_act{display:none;}</style>";
		}
		?>

		<p id="no_act"><img src="../pics/err.png" width="250px" height="100%"><br>nothing here yet!!</p>

		</section>



	</section>

	</div>

</div>

<?php 
if(isset($_GET['err'])){ ?>

<script>
	$(document).ready(function(){
		$("#balresp").fadeIn(2000);
		$("#balresp").html("<b>Insufficient Referal balance</b>")
		setTimeout(function(){
			$("#balresp").fadeOut(1000);
		},3000);
	});
</script>

<?php
}
?>



<style type="text/css">
#balresp{
	background: red;
	padding: 20px;
	position: absolute;
	top: 50px;
	right: 20px;
	color: white;
	font-size: 15px;
	display: none;
}
	
	
.inner_load_cont{
	background-image: ;
	padding-bottom: 10px;
	margin-top: 10px;
}
	
.inner_load_cont section{
	margin:5px 5px 0px 5px;
	padding: 10px 2px 10px 2px;
}

.pending_dep_txt{
	background: white;
	box-shadow: 2px 1px 2px 2px rgba(0, 0, 0, 0.2);
	border-radius: 10px;
	display: flex;
	flex-direction: column;
}

.pending_dep_txt span{
	margin: 10px;
}

.pending_dep_txt i{
	color: #56a3f5;
	margin-right: 5px;
}

.pending_dep_txt b{
	font-size: 18px;
	font-family: monospace;
}


/*WORKING ON THE FORM CONTAINER AND FORM*/


.withdraw_form_cont{
	background: white;
	box-shadow: 2px 1px 2px 2px rgba(0, 0, 0, 0.2);
	border-radius: 10px;
}

.coins_cont_all{
	display: flex;
	flex-direction: column;
	background: ;
}

.coins_cont_all section{
	margin: 2px;
	padding: 0px;
}

.coins_cont{
	display: flex;
	flex-direction: row;
	flex-wrap: wrap;
	background: ;
}

.coins_cont label{
	margin:4px;
}

.withdraw_form_cont form{
	padding-left: 10px;
}

.withdraw_form_cont form input[type="radio"]{
	display: none;
}

.withdraw_form_cont form input[type="text"],.withdraw_form_cont form input[type="number"]{
	width: 600px;
	height: 45px;
	border-radius: 10px;
	border: 1px solid blue;
	outline: none;
}

.withdraw_form_cont form input[type="submit"]{
	background: blue;
	padding: 15px;
	color: white;
	border-radius: 10px;
	border: 0px;
	outline: none;
	font-size: 16px;
	cursor: pointer;
}

.withdraw_form_cont form label{
	padding:10px;
	display:flex;
	flex-direction: row;
	width:120px;
	align-items: center;
	border:1px solid blue;
	margin-top: ;
	border-radius: 10px;
	background: rgba(0, 0, 0, 0.03);
	font-size: 19px;
}

.withdraw_form_cont form label span{
	display:inline-block;
	width:15px;
	height:15px;
	border:1px solid #ff9999;
	border-radius:50%;
	margin-right:10px;
	background: white;
}

.withdraw_form_cont form input[type="radio"]:checked+label{
	background: rgb(11, 100, 195);
	color: white;
	border: 1px solid white;
}

.withdraw_form_cont form input[type="radio"]:checked+label span{
	background: red;
}

/*PENDING WITHDRAWL*/

.pending_withdraw_cont{
	background: white;
	box-shadow: 2px 1px 2px 2px rgba(0, 0, 0, 0.2);
	border-radius: 10px;
	text-align: center;
	height: 250px;
	overflow: auto;
}

.pending_withdraw_cont p{
	font-size: 18px;
	font-family: monospace;
	font-weight: bold;
}

.main_table{
	text-align: justify;
	font-size: 15px;
}
.main_table th{
	background: rgb(11, 100, 195);
	padding: 8px;
	color: white;
	font-size: 17px;
}

tr:nth-of-type(even){
	background: white;
}
tr:nth-of-type(odd){
background: rgba(0, 0, 0, 0.04);
}

@media only screen and (max-width: 600px){
	.withdraw_form_cont form input[type="text"],.withdraw_form_cont form input[type="number"]{
	width: 90%;
}
}

@media only screen and (max-width: 300px){
	.withdraw_form_cont form label{
	padding: 15px;
	width:100%;
}
}
</style>

</style>