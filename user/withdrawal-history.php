<div>
	<?php 
	require("general_nav.php"); 
	require("../connect.php");
	require("../loader.php");
	// require("investment_done.php");
	$pend_sel="select * from withdrawal_table where withdraw_id='$sess_id' ";
	$no_act=$conn->query($pend_sel);
	$pend_dep=$conn->query($pend_sel);
	$sn=1;
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

	<!-- <section class="area_txt_cont">
		<section class="area_txt">

		<span><p><b>Account History</b> <br><br>
		<span> View Withdrawal logs!!</span></p>
		</span>

		</section>
	</section> -->


		<section class="overview_cont">

		<section>
			<b style="color:;font-size:18px;font-family: monospace;">Detailed withdrawal history below</b> <br><br><span id="tip">Check transactions history for detailed overview of your account.</span>
		</section>

		<section class="overviewx">

			<section>
			<table width="100%" bgcolor="" class="main_table" cellpadding="7" cellspacing="0" align="center">
					<tr>
						<th>S/N</th><th>Date</th><th>Amount</th><th>Payment method</th><th>Wallet address</th><th>Status</th>
					</tr>

					<?php while ($pending=$pend_dep->fetch_assoc()){ ?>
						
						<tr>
							<td><?php echo $sn++ ?></td>
							<td><?php echo $pending['date']; ?></td>
							<td><?php echo strtoupper($pending['amount']." usd"); ?></td>
							<td><?php echo strtoupper($pending['coin']); ?></td>
							<td><?php echo $pending['wallet']; ?></td>
							<td style="color: red;font-weight: bolder"><?php echo $pending['status']; ?></td>
						</tr>

						<?php
					}
					?>

				</table>
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

	.inner_load_cont{
		background-image: ;
		padding-bottom: 10px;
		margin-top: 5px;
	}
	.inner_load_cont section{
		margin:5px 5px 0px 5px;
		padding: 1px 2px 10px 2px;
		margin-top: 30px;
	}
	.area_txt b{
		font-size: 18px;
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
		background: ;
	}
	.overview{
		display: flex;
		flex-direction: row;
		flex-wrap: wrap;
		justify-content: center;
		background: ;
	}
	.overview section{
		background: white;
		margin: 5px;
		padding: 10px;
		border-radius: 10px;
		border: 1px solid black;
		display: flex;
		flex-direction: row;
		flex-wrap: wrap;
		color: var(--mild-color);
		align-items:center;
		width:100%;
		overflow:auto;
	}

	.overviewx section {
		width: 100%;
		margin: auto;
		border-radius: 0px;
		overflow: auto;
		box-sizing: border-box;
	}
	.overviewx section table{
		width:100%;
	}
	.overviewx section table th{
		padding:15px;
		color: var(--pri-color);
		font-weight: 500;
		background: var(--sec-color);
	}
	
	table tr:nth-child(odd) { 
		background-color: var(--sec-color);
	}
	/* table tr:hover { 
		background-color: var(--pri-color);
		color: var(--sec-color);
	} */
	.overviewx section table tr{
		color:var(--mild-color);
		text-align:center;
		font-size:;
	}
	.overviewx section table tr td{
		font-size:12px;
		font-family:arial;
		border: 0px solid grey;
		padding:13px;
	}

</style>