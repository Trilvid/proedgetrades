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

	<section class="inner_load_cont">

		<section class="pending_dep_txt">
			<span><b><i class="fa fa-credit-card"></i>User Profile</b></span>
			<span>Below are your profile details on the company </span>
		</section>

				<section class="pending_sect">
				<table width="100%" bgcolor="" class="main_table" cellpadding="7" cellspacing="0" align="center">
					<tr>
						<td><th>Username</th></td><td><?php echo $sess_user; ?></td>
					</tr>
					<tr>
						<td><th>Email</th></td><td><?php echo $sess_mail; ?></td>
					</tr>
					<tr>
						<td><th>Email status</th></td><td><?php echo Verified; ?></td>
					</tr>
					<tr>
						<td><th>Date Registered</th></td><td><?php echo $sess_date; ?></td>
					</tr>
					<tr>
						<td><th>Total Deposits</th></td><td><?php echo strtoupper($all_dep['total_dep']." usd"); ?></td>
					</tr>
					<tr>
						<td><th>Total Withdrawal</th></td><td><?php echo strtoupper($all_withdraw['total_withdraw']." usd"); ?></td>
					</tr>
						

				</table>
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
	padding: 8px;
	color: black;
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