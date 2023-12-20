<div>
	<?php 
	require("general_nav.php"); 
	require("../connect.php");
	require("../loader.php");
	// require("investment_done.php");
	$pend_sel="select * from trading_table where trader_id='$sess_id' and status = 'awaiting' ";
	$no_act=$conn->query($pend_sel);
	$pend_dep=$conn->query($pend_sel);
	$sn=0;
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
		<span> View Tradings logs!!</span></p>
		</span>

		</section>
	</section> -->


		<section class="overview_cont">

		<section>
			<b style="color:;font-size:18px;font-family: monospace;">Detailed Trading history below</b> <br><br><span id="tip">Check transactions history for detailed overview of your account.</span>
		</section>

		<section class="overviewx">

			<section>
			<table width="100%" bgcolor="" class="main_table" cellpadding="7" cellspacing="0" align="center">
					<tr>
						<th>ID</th>
						<th>Date</th>
						<th>Type</th>
						<th>Method</th>
						<th>Amount</th>
					</tr>
					<script>
							function startCountdown(durationInSeconds, tableRowId) {
							var countdownCell = document.getElementById("countdownCell");
							var countdown = durationInSeconds;
							function updateCountdown() {
								var minutes = Math.floor(countdown / 60);
								var seconds = countdown % 60;

								countdownCell.textContent = minutes + ":" + (seconds < 10 ? "0" : "") + seconds;

								if (countdown <= 0) {
								clearInterval(countdownInterval);
									
								// <?php  
								// 	$upt_tab="update trading_table set  status = 'completed' where trader_id='$sess_id' ";
								// 	$no_act=$conn->query($upt_tab);
								// 	?>
								
								// Update the table cell or perform other actions when countdown reaches zero
								countdownCell.textContent = "Completed";
								}
								countdown--;
							}
							var countdownInterval = setInterval(updateCountdown, 1000);
							}
							</script>

					<?php while ($pending=$pend_dep->fetch_assoc()){ ?>
						
						<tr>
							<td><?php echo $sn++ ?></td>
                            <td id="countdownCell"><?php echo $pending['duration']; ?></td>
							<td><?php echo $pending['trade_signal']; ?></td>
                            <td><?php echo $pending['buy_sell']; ?></td>
							<td><?php echo strtoupper($pending['amount']." usd"); ?></td>
						</tr>				
							<script>
							startCountdown(<?php echo intval($pending['duration']) * 60; ?>
							, <?php echo $sn++ ?>);

							</script>
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
		margin-top: 5px;
		padding: 0%;
		background: var(--facebook-color);
	}
	/* .inner_load_cont section{
		margin:5px 5px 0px 5px;
		padding: 1px 2px 10px 2px;
		margin-top: 30px;
	} */
	.overview_cont{
		display: flex;
		flex-direction: column;
		justify-content: flex-start;
		justify-content: center;
		border-radius: 0px;
		margin: 0%;
		padding: 0%;
		box-sizing: border-box;
	}
	.overview_cont section{
		margin: 0%;
		padding: 0%;
	}
	.overview{
		display: flex;
		flex-direction: row;
		flex-wrap: wrap;
		justify-content: center;
		border: 1px solid green;
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

	@media (max-width: 640px) {
.inner_load_cont{
	height: 100vh;
	background: var(--facebook-color);
	}
	}

</style>