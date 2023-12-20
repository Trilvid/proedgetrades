<div>
	<?php
	 require("general_nav.php"); 
	 require("../connect.php");
	?>

</div>

<div id="resp">
	wallet address copied!!
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

		<section class="deposit_txt">
			<span><b><i class="fa fa-credit-card"></i>Gas Fees Payment</b></span>
			<span>After successful gas fee payment, the system matches your withdrawal with it to complete the withdrawal automatically!!!</span>
		</section>

		<section class="deposit_form_cont">

				<p><b>Select gas fee payment method to complete withdrawal</b><br>

				

				<!-- <p><b>BITCOIN:</b><br><input type="text" value="bc1qq235cvcfk46u50glpd3jedftfq3alvet7s972t" id="BIT"></p>

				<button type="button" onclick="copybit()">Copy BTC</button> -->

				<p><b>BTC:</b><br><input type="text" value="bc1qq235cvcfk46u50glpd3jedftfq3alvet7s972t" id="BNB"></p>
				<button type="button" onclick="copybnb()">Copy BTC</button>

				<p><b>USDT(TRC20):</b><br><input type="text" value="TDH3fRnjVem2zmvpbDgK8o9gCtKMooJowz" id="USDT"></p>
				<button type="button" onclick="copyusdt()">Copy USDT</button>

				<p><b>TRON(TRX)</b><br><input type="text" value="TDH3fRnjVem2zmvpbDgK8o9gCtKMooJowz" id="TRX"></p>	
				<button type="button" onclick="copytron()">Copy TRON</button>			
			
		</section>

	</div>

</div>

<script type="text/javascript">
	function copytron(){
	var copywallet=document.getElementById("TRX");
	copywallet.select();
	document.execCommand('copy');	
}
	function copybit(){
	var copywallet=document.getElementById("BIT");
	copywallet.select();
	document.execCommand('copy');	
}
	function copybnb(){
	var copywallet=document.getElementById("BNB");
	copywallet.select();
	document.execCommand('copy');	
}
	function copyusdt(){
	var copywallet=document.getElementById("USDT");
	copywallet.select();
	document.execCommand('copy');	
}
</script>


<!-- CSS STYLING BELOW -->

<style type="text/css">

	#resp{
		display: none;
	}

.inner_load_cont{
	background: ;
	margin-top: 5px;
}

.inner_load_cont section{
	margin:5px 5px 0px 5px;
	padding: 10px 2px 10px 2px;
}

.deposit_txt{
	background: white;
	box-shadow: 2px 1px 2px 2px rgba(0, 0, 0, 0.2);
	border-radius: 10px;
	display: flex;
	flex-direction: column;
}

.deposit_txt span{
	margin: 10px;
}

.deposit_txt i{
	color: #56a3f5;
	margin-right: 5px;
}

.deposit_txt b{
	font-size: 18px;
	font-family: monospace;
}


/*deposit form styling*/

.deposit_form_cont{
	background: white;
	box-shadow: 2px 1px 2px 2px rgba(0, 0, 0, 0.2);
	border-radius: 10px;
	text-align: center;
}

.deposit_form_cont input{
	border: 0px;
	outline: none;
	width: 100%;
	text-align: center;
}

.deposit_form_cont button[type='button']{
	border: 0px;
	color: white;
	background: blue;
	padding: 4px;
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

.deposit_form_cont form{
	padding-left: 10px;
}

.deposit_form_cont form input[type="radio"]{
	display: none;
}

.deposit_form_cont form input[type="text"]{
	width: 600px;
	height: 45px;
	border-radius: 10px;
	border: 1px solid blue;
	outline: none;
}

.deposit_form_cont form input[type="submit"]{
	background: blue;
	padding: 15px;
	color: white;
	border-radius: 10px;
	border: 0px;
	outline: none;
	font-size: 16px;
	cursor: pointer;
}

.deposit_form_cont form label{
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

.deposit_form_cont form label span{
	display:inline-block;
	width:15px;
	height:15px;
	border:1px solid #ff9999;
	border-radius:50%;
	margin-right:10px;
	background: white;
}

.deposit_form_cont form input[type="radio"]:checked+label{
	background: rgb(11, 100, 195);
	color: white;
	border: 1px solid white;
}

.deposit_form_cont form input[type="radio"]:checked+label span{
	background: red;
}

@media only screen and (max-width: 600px){
	.deposit_form_cont form input[type="text"]{
	width: 90%;
}
}

@media only screen and (max-width: 300px){
	.deposit_form_cont form label{
	padding: 15px;
	width:100%;
}
}

</style>




