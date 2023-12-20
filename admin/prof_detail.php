<?php 
	require("../connect.php");

// CHECKING TOTAL DEPOSITS
	$tot_dep="select sum(amount) as total_dep from deposit_table where status='completed' ";
	$all_dep_sql=$conn->query($tot_dep);
	$all_dep=$all_dep_sql->fetch_assoc();


// CHECKING TOTAL INVESTMENTS
	// $tot_inv="select sum(amount) as total_invest from investment_table where status='active' ";
	// $all_inv_sql=$conn->query($tot_inv);
	// $all_invest=$all_inv_sql->fetch_assoc();


// CHECKING TOTAL WITHDRAWALS
	$tot_withdraw="select sum(amount) as total_withdraw from withdrawal_table where status='completed' ";
	$all_withdraw_sql=$conn->query($tot_withdraw);
	$all_withdraw=$all_withdraw_sql->fetch_assoc();

// CHECKING ADMIN DETAILS

	$ad_sel="select * from admin_table where id='$sess_admin_id' ";
	$ad_detail=$conn->query($ad_sel);
	$admin_row=$ad_detail->fetch_assoc();

?>


<div id="prof_title"><h5>Admin Data</h5></div>
		<div>
			<section id="prof_sect"><p><i class="fa fa-user-circle-o"></i></p><b style="font-size:24px;"><?php echo "Admin"; ?></b><br><?php echo $admin_row['email']; ?></section>
			<section style="over-flow:auto;">
				Username: <b><?php echo ucfirst($admin_row['name']); ?></b><br>
				Email:	<b><?php echo $admin_row['email']; ?></b><br>
				Sum Confirmed Depsits: <b>$ <?php echo $all_dep['total_dep']; ?></b><br>
				Sum Confirmed Wihdrawals: <b>$ <?php echo $all_withdraw['total_withdraw']; ?></b>
			</section>
		</div>