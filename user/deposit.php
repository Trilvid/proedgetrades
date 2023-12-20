<div>
	<?php 
	require("general_nav.php"); 
	require("../connect.php");
	require '../loader.php';
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

		<span><p><b>Fund your account</b> <br><br>
		<span> Select a deposit option!!</span></p>
		</span>

		</section>
	</section>


		<section class="overview_cont">

		<section>
			<b style="color:;font-size:18px;font-family: poppins;">Select an option and proceed</b> <br><br><span id="tip">Check transactions history for detailed overview of your account.</span>
		</section>

		<section class="overviewx">

			<section>
				<span> <img src='../img/btc_dep.png'></span>
				<span> 
					<table cellpadding='5' boder='0' cellspacing='0'>
						<tr><td>Bitcoin</td></tr>
						<tr><td>Limit : 500 - 1000000 USD</td></tr>
						<tr><td>Charge 0 USD</td></tr>
						<tr><td>Auto Confirmation</td></tr>
						<form method='post' action='confirm-deposit.php'>
						<input type="hidden" value='btc' name='coin'>
                        <input type="hidden" value='bc1q2epqg3df6lqcf9gjwqfalcdg3t3vdcn424edyp' name='pay_wallet'>
                        <input type="hidden" value='BITCOIN' name='network'>
                        <input type="hidden" value='btc_scan' name='scan_img'>
						<tr><td><input type='number' id='dep_amt' min='500' placeholder='Enter amount' required name='dep_amt'></td></tr>
						<tr><td><button type='submit' id='dep_btn'> Deposit</button></td></tr>
                        </form>
					</table>
				</span>
			</section>
			
			<section>
			<span> <img src='../img/eth_dep.png'></span>
				<span> 
					<table cellpadding='5' boder='0' cellspacing='0'>
						<tr><td>Ethereum</td></tr>
						<tr><td>Limit : 500 - 1000000 USD</td></tr>
						<tr><td>Charge 0 USD</td></tr>
						<tr><td>Auto Confirmation</td></tr>
						<form method='post' action='confirm-deposit'>
						<input type="hidden" value='eth' name='coin'>
                        <input type="hidden" value='0xF9e418E7EaE9934B170a481F403B114BD5f0448c' name='pay_wallet'>
                        <input type="hidden" value='ETHEREUM (ERC 20)' name='network'>
                        <input type="hidden" value='eth_scan' name='scan_img'>
						<tr><td><input type='number' id='dep_amt' min='500' placeholder='Enter amount' required name='dep_amt'></td></tr>
						<tr><td><button type='submit' id='dep_btn'> Deposit</button></td></tr>
                        </form>
					</table>
				</span>
			</section>

			<section>
			<span> <img src='../img/usdt_dep.png'></span>
				<span> 
					<table cellpadding='5' boder='0' cellspacing='0'>
						<tr><td>USDT </td></tr>
						<tr><td>Limit : 500 - 1000000 USD</td></tr>
						<tr><td>Charge 0 USD</td></tr>
						<tr><td>Auto Confirmation</td></tr>
						<form method='post' action='confirm-deposit'>
						<input type="hidden" value='usdt' name='coin'>
                        <input type="hidden" value='TAsgNYUQmWnmVBJzQ7wbFbYupPh5YT6ycN' name='pay_wallet'>
                        <input type="hidden" value='TRON (TRC20)' name='network'>
                        <input type="hidden" value='usdt_scan' name='scan_img'>
						<tr><td><input type='number' id='dep_amt' min='500' placeholder='Enter amount' required name='dep_amt'></td></tr>
						<tr><td><button type='submit' id='dep_btn'> Deposit</button></td></tr>
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


<style type="text/css">

body{
	font-family: 'Poppins', sans-serif;
}
	#copied{
	display: none;
	position: absolute;
	top: 50px;
	right: 20px;
	background: green;
	color: white;
	padding: 15px;
}
#copy_ref{
	cursor: pointer;
	font-size: 16px;
	color: red;
}
	.inner_load_cont section{
		margin:5px 5px 0px 5px;
		padding: 10px 2px 10px 2px;
		margin-top: 30px;
	}
	.area_txt_cont{
		background: white;
		box-shadow: 2px 1px 2px 2px rgba(0, 0, 0, 0.2);
		border-radius: 10px;
	}
	.area_txt{
		display: flex;
		flex-direction: row;
		justify-content: space-between;
		align-items: center;
		padding: 85px;
		font-family: var(--font);
	}
	.area_txt span:nth-of-type(2) i{
		background: #ffd000;
		padding: 15px;
		border-radius: 50%;
		color: white;
		cursor: pointer;
	}
	.area_txt b{
		font-size: 1.5em;
		font-family: var(--font);
		
	}
	.overview_cont{
		display: flex;
		flex-direction: column;
		justify-content: flex-start;
		padding: ;
		border: 1px solid rgba(0, 0, 0, 0.5);
		justify-content: center;
		align-items: ;
		border-radius: 10px;
		background: white;
		box-shadow: 2px 1px 2px 2px rgba(0, 0, 0, 0.2);
	}
	.overview_cont section{
		margin: 5px;
		border-radius: ;
	}
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

	#tip{
		font-size: 16px;
		text-indent: 10px;
		color: blue;
		display:none;
	}

	.action_center_cont{
		background: white;
		box-shadow: 2px 1px 2px 2px rgba(0, 0, 0, 0.2);
		border-radius: 10px;
	}

	.action_center{
		display: flex;
		flex-direction: row;
		flex-wrap: wrap;
		justify-content: flex-start;
		background: ;
	}

	.action_center section{
		width: 200px;
		background: white;
		height: ;
		margin: 5px;
		padding: 10px;
		border-radius: 10px;
		box-shadow: 2px 1px 1px rgba(0, 0, 0, 0.2);
		display: flex;
		flex-direction: column;
		border: 1px solid blue;
	}

	.action_center section span{
		margin-bottom: 10px;
	}

	.action_center section span a{
		text-decoration: none;
	}

	.action_center section span:nth-of-type(1){
		font-size: 13px;
		font-weight: bold;
	}

	.action_center section span:nth-of-type(2){
	font-size: 18px;
	font-weight: ;
	}

	.dash_api_cont{
		background: white;
		padding: 20px 0px 20px 0px;
		border: 1px solid rgba(0, 0, 0, 0.5);
		justify-content: center;
		align-items: ;
		border-radius: 10px;
		background: white;
		box-shadow: 2px 1px 2px 2px rgba(0, 0, 0, 0.2);
	}


	@media only screen and (max-width: 800px){
		.overviewx{
		justify-content: center;
	}
	.area_txt_cont {
		margin-bottom: 20px !important;
	}	
	.overviewx section{
		flex-direction:column;
		margin-top: 20px;
	}
	.overviewx section span img{
		width:100px;
		height:100px;
	}
}
@media only screen and (max-width: 600px){
		.overviewx{
		justify-content: center;
	}
	.overviewx section{
		width:;
	}
}

@media only screen and (max-width: 500px){
		.overviewx section{
			width: 90%;
	}
	.action_center section{
		width: 100%;
	}
	.overviewx section span {
		color:var(--mild-color);
		text-align:center;
		box-sizing:border-box;
	}
	.overviewx section span table tr td{
		margin-left: 0px;
		box-sizing:border-box;
		padding: 10px;
	}
	}
</style>