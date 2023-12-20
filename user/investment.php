<div>
	<?php 
	require("general_nav.php"); 
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

	<section class="inner_load_cont">

		<section class="invest_txt">
			<span><b><i class="fa fa-exchange"></i>Make Investment</b></span>
			<span>Select an Investment Plan below and follow the prompt to complete deposits</span>
		</section>

		<section class="invest_form_cont">

			<form method="POST" action="invest_action.php" onsubmit="return(investx())" name="investform" class="sub_form">

				<p><b>Select Investment Plan</b><br>

					<section class="plan_cont">

					<input type="radio" name="plan" value="DELUXE" id="deluxe" checked>
					<label for="deluxe" id="tobot">
						<span></span>
						<span>
							<p>DELUXE</p>
							<p>ROI: 25%</p>
							<p>Duration: 3days</p>
							<p>Min.deposit: $100</p>
							<p>max.deposit: $5,000</p>
							<p>Referal :2%</p>
						</span>
					</label>

					<input type="radio" name="plan" value="ELITE" id="elite">
					<label for="elite" id="tobot">
						<span></span>
						<span>
							<p>ELITE</p>
							<p>ROI: 35%</p>
							<p>Duration: a week</p>
							<p>Min.deposit: $5,000</p>
							<p>max.deposit: $15,000</p>
							<p>Referal :5%</p>
						</span>
					</label>

					<input type="radio" name="plan" value="SUPERIOR" id="superior">
					<label for="superior" id="tobot">
						<span></span>
						<span>
							<p>SUPERIOR</p>
							<p>ROI: 40%</p>
							<p>Duration: a month</p>
							<p>Min.deposit: $15,000</p>
							<p>max.deposit: $30,000</p>
							<p>Referal :5%</p>
						</span>
					</label>

					<input type="radio" name="plan" value="VIP" id="vip">
					<label for="vip" id="tobot">
						<span></span>
						<span>
							<p>VIP</p>
							<p>ROI: 60%</p>
							<p>Duration: a month</p>
							<p>Min.deposit: $50,000</p>
							<p>max.deposit: unlimited</p>
							<p>Referal :5%</p>
						</span>
					</label>

					</section>

				</p>

				<p><b>Enter Amount to Trade</b><br><input type="number" name="invest_amt" required min="100" autofocus id="chk"></p>

				<p><input type="submit" name="invest_btn" value="Proceed"></p>
			</form>
			
		</section>

	</section>

	</div>

</div>


<!-- JAVASCRIPT VALIDATION FOR INVEST FORM -->

<script type="text/javascript">

	function investx(){
       	var plan=document.investform.plan.value;
		var amt=document.investform.invest_amt.value;
	if(amt>5000 && plan=="DELUXE"){
		alert("limit for deluxe plan is $5,000");
		return false;
	}
	else if(amt<5000 && plan=="ELITE"){
		alert("limit for elite plan is $5,000-$15,000");
		return false;
	}
	else if(amt>15000 && plan=="ELITE"){
		alert("limit for elite plan is $5000-$15000");
		return false;
	}
	else if(amt<15000 && plan=="SUPERIOR"){
		alert("limit for superior plan is $15,000-$30000");
		return false;
	}
	else if(amt>30000 && plan=="SUPERIOR"){
		alert("limit for superior plan is $15,000-$30,000");
		return false;
	}
	else if(amt<50000 && plan=="VIP"){
		alert("limit for vip plan is 50,000");
		return false;
	}
	return true;

	}


</script> 

<!-- END OF JAVASCRIPT VALIDATION FOR INVESTMENT FORM -->





<!-- STYLING THE INVESTMENT PAGE -->

<style type="text/css">
	
.inner_load_cont{
	background: ;
	margin-top: 5px;
}

.inner_load_cont section{
	margin:5px 5px 0px 5px;
	padding: 10px 2px 10px 2px;
}

.invest_txt{
	background: white;
	box-shadow: 2px 1px 2px 2px rgba(0, 0, 0, 0.2);
	border-radius: 10px;
	display: flex;
	flex-direction: column;
}

.invest_txt span{
	margin: 10px;
}

.invest_txt i{
	color: #56a3f5;
	margin-right: 5px;
}

.invest_txt b{
	font-size: 18px;
	font-family: monospace;
}

/*invest form styling*/

.invest_form_cont{
	background: white;
	box-shadow: 2px 1px 2px 2px rgba(0, 0, 0, 0.2);
	border-radius: 10px;
}

.plan_cont{
	display: flex;
	flex-direction: row;
	justify-content: flex-start;
	flex-wrap: wrap;
}

.plan_cont label{
	margin: 10px;
}

.invest_form_cont form{
	padding-left: 4px;
}

.invest_form_cont form input[type="radio"]{
	display: none;
}

.invest_form_cont form input[type="number"]{
	width: 600px;
	height: 45px;
	border-radius: 10px;
	border: 1px solid blue;
	outline: none;
}

.invest_form_cont form input[type="submit"]{
	background: blue;
	padding: 15px;
	color: white;
	border-radius: 10px;
	border: 0px;
	outline: none;
	font-size: 16px;
	cursor: pointer;
}

.invest_form_cont form label{
	padding:20px;
	display:flex;
	flex-direction: column;
	width:140px;
	align-items: center;
	border:1px solid blue;
	border-radius: 10px;
	background: rgba(0, 0, 0, 0.03);
	font-size: ;
}

.invest_form_cont form label span:nth-of-type(1){
	display:inline-block;
	width:15px;
	height:15px;
	border:1px solid #ff9999;
	border-radius:50%;
	background: white;
	margin-top: -10px;
}

.invest_form_cont form label span:nth-of-type(2) p{
	font-size: 15px;
}

.invest_form_cont form label span:nth-of-type(2) p:nth-of-type(1){
	font-size: 19px;
	font-weight: bold;
}

.invest_form_cont form label span:nth-of-type(2){
	background: ;
	color: ;
	padding: 10px;
	margin-top: 20px;
	text-align: center;
	line-height: 15px;
}

.invest_form_cont form input[type="radio"]:checked+label{
	background: rgb(11, 100, 195);
	color: white;
	border: 1px solid white;
}

.invest_form_cont form input[type="radio"]:checked+label span:nth-of-type(1){
	background: red;
}

@media only screen and (max-width: 600px){
.invest_form_cont form input[type="number"]{
	width: 90%;
}
.plan_cont{
	flex-direction: column;
	justify-content: center;
	flex-wrap: ;
}
.invest_form_cont form label{
	width:auto;
	height: px;
}
}

@media only screen and (max-width: 300px){
	.invest_form_cont form label{
	padding: ;
	width:80%;
}
}

@media only screen and (max-width: 270px){
	.invest_form_cont form label{
	padding: ;
	width:70%;
}
}

</style>