<div>
	<?php 
	require("general_nav.php"); 
	require("../connect.php");
	?>

	<?php
	$invest_sel="select * from investment_table where status='active' and investor_id='$sess_id' ";
	$no_act=$conn->query($invest_sel);
	$active_invest=$conn->query($invest_sel);
	$sn=1;
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

		<section class="invest_calc_txt">
			<span><b><i class="fa fa-exchange"></i>Active Investments</b></span>
			<span>Active investments Appears here. <br>When Your Investments are termed matured, there are summed automatically and sent to your spot wallet and are withdrawn at any time.</span>
		</section>

		<section class="investment_sect">
				<table width="100%" bgcolor="" class="main_table" cellpadding="7" cellspacing="0" align="center">
					<tr>
						<th>S/N</th><th>Investment date</th><th>Plan</th><th>Amount</th><th>Profit</th><th>Total Return</th><th>Duration</th><th>Due date</th><th>Status</th>
					</tr>

					<?php while ($active=$active_invest->fetch_assoc()){ ?>
						
						<tr>
							<td><?php echo $sn++ ?></td>
							<td><?php echo $active['date']; ?></td>
							<td><?php echo $active['plan']; ?></td>
							<td><?php echo strtoupper($active['amount']." usd"); ?></td>
							<td><?php echo "$ ".$active['profit']; ?></td>
							<td><?php echo "$ ".$active['total_return']; ?></td>
							<td><?php echo $active['duration']."days"; ?></td>
							<td><?php echo $active['due_date']; ?></td>
							<td style="color: green;font-weight: bolder"><?php echo $active['status']; ?></td>
						</tr>

						<?php
					}
					?>

				</table>

				<?php if($no_check=$no_act->fetch_assoc()>0){
			echo "<style>#no_act{display:none;}</style>";
		}
		?>

		<p id="no_act" style="text-align: center;"><img src="../pics/err.png" width="250px" height="300px"><br>no investment(s) yet!!</p>
		
		</section>

	</section>

	</div>

</div>



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
	line-height: 26px;
	font-size: 15px;
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

.investment_sect{
	overflow: auto;
	background: white;
	box-shadow: 2px 1px 2px 2px rgba(0, 0, 0, 0.2);
	border-radius: 10px;
}

.main_table{
	text-align: justify;
}
.main_table th{
	background: rgb(11, 100, 195);
	padding: 8px;
	color: white;
	font-size: 17px;
}

tr{
	font-size: 14px;
}

tr:nth-of-type(even){
	background: white;
}
tr:nth-of-type(odd){
	background: rgba(0, 0, 0, 0.04);
}
</style>