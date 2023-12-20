<div>
	<?php 
	require("general_nav.php"); 
	require("../connect.php");
	?>
	<?php
	$pend_sel="select * from deposit_table where status='pending' and depositor_id='$sess_id' ";
	$no_act=$conn->query($pend_sel);
	$pend_dep=$conn->query($pend_sel);
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

		<section class="pending_dep_txt">
			<span><b><i class="fa fa-credit-card"></i>Pending Deposits</b></span>
			<span>Pending deposits are successful when two network confirmations are successful!</span>
		</section>

				<section class="pending_sect">
				<table width="100%" bgcolor="" class="main_table" cellpadding="7" cellspacing="0" align="center">
					<tr>
						<th>S/N</th><th>Date</th><th>Deposit Address</th><th>Amount</th><th>Coin</th><th>Status</th>
					</tr>

					<?php while ($pending=$pend_dep->fetch_assoc()){ ?>
						
						<tr>
							<td><?php echo $sn++ ?></td>
							<td><?php echo $pending['date']; ?></td>
							<td><?php echo $pending['wallet']; ?></td>
							<td><?php echo strtoupper($pending['amount']." usd"); ?></td>
							<td><?php echo $pending['coin']; ?></td>
							<td style="color: red;font-weight: bolder"><?php echo $pending['status']; ?></td>
						</tr>

						<?php
					}
					?>

				</table>

				<?php if($no_check=$no_act->fetch_assoc()>0){
			echo "<style>#no_act{display:none;}</style>";
		}
		?>

		<p id="no_act" style="text-align: center;"><img src="../pics/err.png" width="250px" height="300px"><br>no deposits yet!!</p>

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

.pending_sect{
	background: white;
	overflow: auto;
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