
<?php 
$due_invest_sel="select * from investment_table where status='active' and investor_id='$sess_id' ";
$due_invest_sql=$conn->query($due_invest_sel);
$all_due=$due_invest_sql->fetch_assoc();
$inv_profit=$all_due['total_return'];


if($all_due['plan']=="DELUXE" && $all_due['counterx']>="72" && $all_due['status']=="active"){
		$up_deluxe="update user_table set spot_wallet=spot_wallet+'$inv_profit' where id='$sess_id' ";
		$deluxe_sql=$conn->query($up_deluxe);

		if($deluxe_sql){
			$invest_paid="update investment_table set status='completed' where investor_id='$sess_id' and plan='DELUXE' and counterx>=72 ";
			$invest_paid_sql=$conn->query($invest_paid);
		}
}
elseif($all_due['plan']=="ELITE" && $all_due['counterx']>="168" && $all_due['status']=="active"){
	$up_elite="update user_table set spot_wallet=spot_wallet+'$inv_profit' where id='$sess_id' ";
		$elite_sql=$conn->query($up_elite);

		if($elite_sql){
			$invest_paid="update investment_table set status='completed' where investor_id='$sess_id' and plan='ELITE' and counterx>=168 ";
			$invest_paid_sql=$conn->query($invest_paid);
		}
}
elseif($all_due['plan']=="SUPERIOR" && $all_due['counterx']>="720" && $all_due['status']=="active"){
	$up_elite="update user_table set spot_wallet=spot_wallet+'$inv_profit' where id='$sess_id' ";
		$elite_sql=$conn->query($up_elite);

		if($elite_sql){
			$invest_paid="update investment_table set status='completed' where investor_id='$sess_id' and plan='SUPERIOR' and counterx>=720 ";
			$invest_paid_sql=$conn->query($invest_paid);
		}
}
elseif($all_due['plan']=="VIP" && $all_due['counterx']>="720" && $all_due['status']=="active"){
	$up_elite="update user_table set spot_wallet=spot_wallet+'$inv_profit' where id='$sess_id' ";
		$elite_sql=$conn->query($up_elite);

		if($elite_sql){
			$invest_paid="update investment_table set status='completed' where investor_id='$sess_id' and plan='VIP' and counterx>=720 ";
			$invest_paid_sql=$conn->query($invest_paid);
		}
}

?>