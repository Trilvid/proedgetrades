<div><?php require("general_nav.php"); ?></div>


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

		<section class="invest_calc_txt">
			<span><b><i class="fa fa-calculator"></i>Investment Calculator</b></span>
			<span>Check your Return On Investment on our system calculator</span>
		</section>

		<section class="calc_div_all">
		<!-- CALCULATOR SECTION -->

			<div class="calc_div">
				<h2>Investment Calculator</h2>
				<select id="plan_sel">
					<option>select plan</option>
					<option>DELUXE</option>
					<option>ELITE</option>
					<option>SUPERIOR</option>
					<option>VIP</option>
				</select>
				<p><input type="number" name="" id="plan_amt" placeholder="Enter Amount"></p>
				Return On Investment (ROI):<br><input type="text" name="" id="plan_roi" disabled>
			</div>

		</section>


	</section>

	</div>

</div>






<!-- CSS STYLING SECTION -->

<style type="text/css">

.inner_load_cont{
	background-image: ;
	padding-bottom: 10px;
	margin-top: 10px;
}
	
.inner_load_cont section{
	margin:5px 5px 0px 5px;
	padding: 10px 2px 10px 2px;
}

.invest_calc_txt{
	background: white;
	box-shadow: 2px 1px 2px 2px rgba(0, 0, 0, 0.2);
	border-radius: 10px;
	display: flex;
	flex-direction: column;
}

.invest_calc_txt span{
	margin: 10px;
}

.invest_calc_txt i{
	color: #56a3f5;
	margin-right: 5px;
}

.invest_calc_txt b{
	font-size: 18px;
	font-family: monospace;
}
	
/*CALCULATOR SECTION*/

.calc_div_all{
	padding: 6% 5% 6% 5%;
	background: white;
	display: flex;
	flex-direction: row;
	align-items: center;
	justify-content: center;
	box-shadow: 2px 1px 2px 2px rgba(0, 0, 0, 0.2);
	border-radius: 10px;
}

.calc_div_all div{
	margin: 20px;
}

.calc_div{
	text-align: center;
	font-size: 21px;
	color: rgb(11, 100, 195);
}

#plan_sel,#plan_amt{
	width: 480px;
	height: 50px;
	border-radius: 30px;
	border: 1px solid rgb(11, 100, 195);
	outline: none;
}

#plan_roi{
	background: white;
	color: rgb(11, 100, 195);
	border: 0px;
	outline: none;
	font-size: 21px;
	text-align: center;
}

@media only screen and (max-width: 600px){
	#plan_sel,#plan_amt{
	width: 100%;
}
}

@media only screen and (max-width: 300px){

}

</style>