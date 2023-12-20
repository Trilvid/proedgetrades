<div>
	<?php 
	require("general_nav.php"); 
	require("../connect.php");
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

		<span><p><b>Real trading session!!</b> <br><br>
		<span> Input trading parameters correctly and trade</span></p>
		</span>

		</section>
	</section>


		<section class="overview_cont">

		<section>
			<b style="color:;font-size:18px;font-family: monospace;">Input trade parameters to Buy/Sell</b> <br><br><span id="tip">Check transactions history for detailed overview of your account.</span>
		</section>

		<section class="overviewx">

			<section>
				<span> Spot Balance: <?php echo $row_details['spot']; ?> USD</span>
				<span> 
					<table cellpadding='5' boder='' cellspacing='0'>
						<tr>
						<form method='post' action=''>
							<td>
							  <select onchange='market()' id='market_type' name='trade_market'>
								<option value='forex'>Forex</option>
								<option value='crypto'>Crypto</option>
								<option value='stocks'>Stocks</option>
                              </select>
							</td>
						</tr>
						<tr>
							<td>
							<select id="" name='pair'>
                            <option id='forex' value="USDCAD" selected>USD/CAD</option>
                            <option id='forex' value="EURUSD">EURUSD</option>
                            <option id='forex' value="USDCHF">USDCHF</option>
                            <option id='forex' value="GBPUSD">GBPUSD</option>
                            <option id='forex' value="NZDUSD">NZDUSD</option>
                            <option id='forex' value="AUDUSD">AUDUSD</option>
                            <option id='forex' value="EURCAD">EURCAD</option>
                            <option id='forex' value="EURAUD">EURAUD</option>
                            <option id='forex' value="EURJPY">EURJPY</option>
                            <option id='forex' value="GBPCHF">GBPCHF</option>
                            <option id='forex' value="GBPJPY">GBPJPY</option>
                            <option id='forex' value="CHFJPY">CHFJPY</option>
                            <option id='forex' value="AUDJPY">AUDJPY</option>
                            <option id='forex' value="AUDNZD">AUDNZD</option>
							<option id='' value="---">--------------------------------------------------------------</option>
							<option id='' value="---">--------------------------------------------------------------</option>
							<option id='stock' value="GOOGL">Google Inc.</option>
                            <option id='stock' value="INTC">Intel Corporation</option>
                            <option id='stock' value="KO">Coca-Cola Company (The)</option>
                            <option id='stock' value="MSFT">Microsoft Corporation</option>
                            <option id='stock' value="APPL">Apple Computer, Inc.</option>
                            <option id='stock' value="EBAY">eBay Inc.</option>
                            <option id='stock' value="DELL">Dell Inc..</option>
                            <option id='stock' value="ORCL">Oracle Corporation</option>
                            <option id='stock' value="DIS">Walt Disney Company (The)</option>
                            <option id='stock' value="UL">Unilever PLC</option>
                            <option id='stock' value="AMZN">Amazon.inc</option>
                            <option id='stock' value="TSLA">TESLA INC</option>
                            <option id='stock' value="NFLX">NETFLIX INC</option>
							<option id='' value="---">--------------------------------------------------------------</option>
							<option id='' value="---">--------------------------------------------------------------</option>
							<option id="crypto" value="ETHBTC">ETH/BTC</option>
                            <option id="crypto" value="DOGEBTC">DOGE/BTC</option>
                            <option id="crypto" value="BNBBTC">BNB/BTC</option>
                            <option id="crypto" value="BTTBTC">BTT/BTC</option>
                            <option id="crypto" value="XMRBTC">XMR/BTC</option>
                            <option id="crypto" value="XMRETH">XMR/ETH</option>
                            <option id="crypto" value="NEOBTC">NEO/BTC</option>
                            <option id="crypto" value="NEOETH">NEO/ETH</option>
                            <option id="crypto" value="ADABTC">ADA/BTC</option>
                            <option id="crypto" value="ADAETH">ADA/ETH</option>
                            <option id="crypto" value="mtvBTC">MTV/BTC</option>
                            <option id="crypto" value="MTCETH">MTC/ETH</option>
                            <option id="crypto" value="XRPBTC">XRP/BTC</option>
                            <option id="crypto" value="TRXBTC">TRX/BTC</option>
                            <option id="crypto" value="BCHBTC">BCH/BTC</option>
                            <option id="crypto" value="LTCBTC">LTC/BTC</option>
                            <option id="crypto" value="BNBETH">BNB/ETH</option>
                            <option id="crypto" value="DOGEETH">DOGE/ETH</option>
                            <option id="crypto" value="BNBETH">BNB/ETH</option>
                            <option id="crypto" value="BTTETH">BTT/ETH</option>
                            <option id="crypto" value="XRPETH">XRP/ETH</option>
                            <option id="crypto" value="TRXETH">TRX/ETH</option>
                            <option id="crypto" value="BCHETH">BCH/ETH</option>
                            <option id="crypto" value="LTCETH">LTC/ETH</option>
                          </select>	

						  <!-- <select id="" name=''>
                            <option id='stock' value="GOOGL" selected>Google Inc.</option>
                            <option id='stock' value="INTC">Intel Corporation</option>
                            <option id='stock' value="KO">Coca-Cola Company (The)</option>
                            <option id='stock' value="MSFT">Microsoft Corporation</option>
                            <option id='stock' value="APPL">Apple Computer, Inc.</option>
                            <option id='stock' value="EBAY">eBay Inc.</option>
                            <option id='stock' value="DELL">Dell Inc..</option>
                            <option id='stock' value="ORCL">Oracle Corporation</option>
                            <option id='stock' value="DIS">Walt Disney Company (The)</option>
                            <option id='stock' value="UL">Unilever PLC</option>
                            <option id='stock' value="AMZN">Amazon.inc</option>
                            <option id='stock' value="TSLA">TESLA INC</option>
                            <option id='stock' value="NFLX">NETFLIX INC</option>
                          </select> -->
<!-- 
						  <select id="" name=''>
                            <option id="crypto" value="ETHBTC" selected>ETH/BTC</option>
                            <option id="crypto" value="DOGEBTC">DOGE/BTC</option>
                            <option id="crypto" value="BNBBTC">BNB/BTC</option>
                            <option id="crypto" value="BTTBTC">BTT/BTC</option>
                            <option id="crypto" value="XMRBTC">XMR/BTC</option>
                            <option id="crypto" value="XMRETH">XMR/ETH</option>
                            <option id="crypto" value="NEOBTC">NEO/BTC</option>
                            <option id="crypto" value="NEOETH">NEO/ETH</option>
                            <option id="crypto" value="ADABTC">ADA/BTC</option>
                            <option id="crypto" value="ADAETH">ADA/ETH</option>
                            <option id="crypto" value="mtvBTC">MTV/BTC</option>
                            <option id="crypto" value="MTCETH">MTC/ETH</option>
                            <option id="crypto" value="XRPBTC">XRP/BTC</option>
                            <option id="crypto" value="TRXBTC">TRX/BTC</option>
                            <option id="crypto" value="BCHBTC">BCH/BTC</option>
                            <option id="crypto" value="LTCBTC">LTC/BTC</option>
                            <option id="crypto" value="BNBETH">BNB/ETH</option>
                            <option id="crypto" value="DOGEETH">DOGE/ETH</option>
                            <option id="crypto" value="BNBETH">BNB/ETH</option>
                            <option id="crypto" value="BTTETH">BTT/ETH</option>
                            <option id="crypto" value="XRPETH">XRP/ETH</option>
                            <option id="crypto" value="TRXETH">TRX/ETH</option>
                            <option id="crypto" value="BCHETH">BCH/ETH</option>
                            <option id="crypto" value="LTCETH">LTC/ETH</option>
                          </select>	 -->
							</td>
						</tr>
						<tr>
							<td>
							<select id="time" name='time'>
                            <option value="1" >1min</option>
                            <option value="2">2min</option>
                            <option value="3">3min</option>
                            <option value="4">4min</option>
                            <option value="5">5min</option>
                            <option value="10">10min</option>
                            <option value="15">15min</option>
                            <option value="30">30min</option>
                            <option value="60">1 hour</option>
                          </select>
							</td>
						</tr>
						<tr><td><input type='number' id='dep_amt' min='1' placeholder='Amount to trade' required name='trade_amt' autofocus></td></tr>
						<tr>
							<td>
								select percentage return <br> 
								<select name="percentage">
									<option value="5">5%</option>
									<option value="10">10%</option>
									<option value="20">20%</option>
									<option value="30">30%</option>
									<option value="40">40%</option>
									<option value="50">50%</option>
									<option value="60">60%</option>
									<option value="70">70%</option>
									<option value="80">80%</option>
									<option value="90">90%</option>
									<option value="100">100%</option>
								  </select>
							</td>
						</tr>
						<tr>
							<td>
								select strike rate <br> 
								<select name="strike">
									<option value="20" selected="selected">1% &amp; 3%</option>
                            		<option value="30">2% &amp; 3%</option>
                            		<option value="40">5% &amp; 5%</option>
                           			 <option value="50">2% &amp; 5%</option>
                           			 <option value="60">21% &amp; 49%</option>
								  </select>
							</td>
						</tr>
						<tr><td><button type='submit' id='buy_btn' name='buy_btn'> Buy</button><button type='submit' id='sell_btn' name='sell_btn'> Sell</button></td></tr>
                        </form>
					</table>
				</span>
			</section>
			

		</section>
	</section>

	</section>

	</div>

</div>

<style>

</style>


<script type="text/javascript">
// 	document.getElementById('stock').style.display='none';
// 	document.getElementById('crypto').style.display='none';
// 	document.getElementById('forex').style.display='none';
	
// function market(){
// 	if(document.getElementById('market_type').value=='stock'){
// 		document.getElementById('stock').style.display='block';
// 		document.getElementById('forex').style.display='none';
// 		document.getElementById('crypto').style.display='none';
// 	}
// 	else if(document.getElementById('market_type').value=='crypto'){
// 		document.getElementById('crypto').style.display='block';
// 		document.getElementById('stock').style.display='none';
// 		document.getElementById('forex').style.display='none';
// 	}
// 	else if(document.getElementById('market_type').value=='forex'){
// 		document.getElementById('crypto').style.display='none';
// 		document.getElementById('stock').style.display='none';
// 		document.getElementById('forex').style.display='block';
// 	}
// }


</script>




<?php 

if(isset($_POST['buy_btn'])){
function clean($value){
	require("../connect.php");
	$value=trim($value);
	$value=htmlspecialchars($value);
	$value=htmlentities($value);
	$value=stripslashes($value);
	$value=mysqli_real_escape_string($conn,$value);
	return $value;
}


$market=clean($_POST['trade_market']);
$pair=clean($_POST['pair']);
$duration=clean($_POST['time']);
$amt=clean($_POST['trade_amt']);
$user_percent=clean($_POST['percentage']);
$strike=clean($_POST['strike']);
$account='spot';
$date=date("d-m-y, h:i:s a");
$buy_sell='buy';


if($amt>$row_details['spot']){ ?>

<script type="text/javascript">
						$(document).ready(function(){
							$("#resp").fadeIn(1000);
							$("#resp").html("<b>Insufficient Spot balance, fund account to trade");
							$("#resp").css({"background":"red"});
							setTimeout(function(){
								$("#resp").fadeOut(1000);
							},1000)
						});
					</script>

<?php
}
else{

	$in_trade="insert into trading_table(name,email,date,account_type,amount,trade_market,trade_signal,user_percent,strike_rate,plan,buy_sell,profit,total_return,accept_time,completed_time,duration,percent_return,status,trader_id)values('$sess_user','$sess_mail','$date','$account','$amt','$market','$pair','$user_percent','$strike','','$buy_sell','','--','','','$duration','--','awaiting','$sess_id')";
	$in_trade_done=$conn->query($in_trade);

	if($in_trade_done){ ?>

<script type="text/javascript">
						$(document).ready(function(){
							$("#resp").fadeIn(1000);
							$("#resp").html("<b>Trade successfully sent");
							$("#resp").css({"background":"green"});
							setTimeout(function(){
								$("#resp").fadeOut(1000);
							},1000)
						});
					</script>

	<?php

	}


}


}

?>





<?php 

if(isset($_POST['sell_btn'])){
function clean($value){
	require("../connect.php");
	$value=trim($value);
	$value=htmlspecialchars($value);
	$value=htmlentities($value);
	$value=stripslashes($value);
	$value=mysqli_real_escape_string($conn,$value);
	return $value;
}


$market=clean($_POST['trade_market']);
$pair=clean($_POST['pair']);
$duration=clean($_POST['time']);
$amt=clean($_POST['trade_amt']);
$user_percent=clean($_POST['percentage']);
$strike=clean($_POST['strike']);
$account='spot';
$date=date("d-m-y, h:i:s a");
$buy_sell='sell';


if($amt>$row_details['spot']){ ?>

<script type="text/javascript">
						$(document).ready(function(){
							$("#resp").fadeIn(1000);
							$("#resp").html("<b>Insufficient Spot balance, fund account to trade");
							$("#resp").css({"background":"red"});
							setTimeout(function(){
								$("#resp").fadeOut(1000);
							},1000)
						});
					</script>

<?php
}
else{

	$in_trade="insert into trading_table(name,email,date,account_type,amount,trade_market,trade_signal,user_percent,strike_rate,plan,buy_sell,profit,total_return,accept_time,completed_time,duration,percent_return,status,trader_id)values('$sess_user','$sess_mail','$date','$account','$amt','$market','$pair','$user_percent','$strike','','$buy_sell','','--','','','$duration','--','awaiting','$sess_id')";
	$in_trade_done=$conn->query($in_trade);

	if($in_trade_done){ ?>

<script type="text/javascript">
						$(document).ready(function(){
							$("#resp").fadeIn(1000);
							$("#resp").html("<b>Trade successfully sent");
							$("#resp").css({"background":"green"});
							setTimeout(function(){
								$("#resp").fadeOut(1000);
							},1000)
						});
					</script>

	<?php

	}


}


}

?>






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
	background:black;
	width:300px;
	height:40px;
	outline:none;
	color:white;
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

























<style type="text/css">

.overviewx section span{
		margin:10px;
		color: var(--mild-color);
	}
	.overviewx section span:nth-child(1){
		font-size:23px;
	}
	.overviewx section span table tr{
		color:white;
		text-align:center;
		font-size:;
	}
	.overviewx section span table tr td{
		font-size:15px;
		font-family:arial;
		padding:10px;
	}
	.overviewx section span table tr td select{
		border: 1px solid white;
		padding:;
		width:300px;
		height:30px;
		background: white;
		color: var(--mild-color);
	}
	.overviewx section span table tr td input{
		background-color: white !important;
		color: var(--mild-color) !important;
		border: 1px !important;
	}
	

#copy_ref{
	cursor: pointer;
	font-size: 16px;
	color: red;
}

	#dep_amt{
		width:300px;
		height:40px;
		outline:none;
	}
	#buy_btn{
		background:green;
		padding: 10px;
		width:100px;
		font-size:15;
		border:0px;
		border-radius:30px;
        margin:5px;
        color:white;
		cursor:pointer;
	}
    #sell_btn{
		background:red;
		padding: 10px;
		width:100px;
		font-size:15;
		border:0px;
		border-radius:30px;
        margin:5px;
        color:white;
		cursor:pointer;
	}
	
	@media (max-width: 640px) {
		
		.overviewx section {
			width: 100%;
		}
	
		.overviewx section span table tr td{
			padding: 2px;
		}
		
		}

</style>