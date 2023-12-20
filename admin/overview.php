<div>
	<?php 
	require("general_nav.php"); 
	require("../connect.php");
	// require("investment_done.php");
    ?>
	<head>
		<link rel="shortcut icon" href="../img/newitem/A0.png" type="image/x-icon">
	</head>


    <!-- GETTING TOTAL NUMERS OF ALL DETAILS OF THE USERS -->
	<?php
	$user_count="select * from user_table";
	$user_sql=$conn->query($user_count);
	$user_no=mysqli_num_rows($user_sql);

	$block_count="select * from user_table where access='denied'";
	$block_sql=$conn->query($block_count);
	$block_no=mysqli_num_rows($block_sql);

	// $inv_count="select * from investment_table where status!='checking'";
	// $inv_sql=$conn->query($inv_count);
	// $inv_no=mysqli_num_rows($inv_sql);


	$act_inv_count="select * from trading_table where status='active' ";
	$act_inv_sql=$conn->query($act_inv_count);
	$act_inv_no=mysqli_num_rows($act_inv_sql);

	$pen_inv_count="select * from trading_table where status='awaiting' ";
	$pen_inv_sql=$conn->query($pen_inv_count);
	$pen_inv_no=mysqli_num_rows($pen_inv_sql);

	$dep_count="select * from deposit_table where tx_id!='' ";
	$dep_sql=$conn->query($dep_count);
	$dep_no=mysqli_num_rows($dep_sql);

	$with_count="select * from withdrawal_table";
	$with_sql=$conn->query($with_count);
	$with_no=mysqli_num_rows($with_sql);

	$withp_count="select * from withdrawal_table where status='processing' ";
	$withp_sql=$conn->query($withp_count);
	$withp_no=mysqli_num_rows($withp_sql);

	$dep_comp="select * from deposit_table where status='completed'";
	$comp_sql=$conn->query($dep_comp);
	$all_comp_no=mysqli_num_rows($comp_sql);

	$dep_dec="select * from deposit_table where status='declined'";
	$dec_sql=$conn->query($dep_dec);
	$all_dec_no=mysqli_num_rows($dec_sql);

	$pend_dep_all="select * from deposit_table where status='processing' ";
	$pend_dep_sql=$conn->query($pend_dep_all);
	$pend_all=mysqli_num_rows($pend_dep_sql);
	?>
</div>

<!-- WORKING ON THE MAIN DASHBOARD CONTAINERS HERE -->
<div class="dashb_cont">
	<div id="mob_all">
		<div id="link_cont"><?php require 'admindb_link.php'; ?></div>
	</div>

<!-- CONTAINER HOUSING ALL CONTENTS IN THE DASHBOARD -->
	<div class="main_loader">
		<?php require 'top_nav.php'; ?>

		<div class="control_cont">
		<div>
		<div id="cont_title">
			<h2>Welcome, <b><?php echo "Admin"; ?></b></h2>
			<p>PROEDGETRADES Admin</p>
		</div>
		<div class="board_cont">
		<div>
			<div>
				<span style="background:mediumseagreen;">
				<i class="fa fa-group"></i>
				</span>
				<span>
					<b><?php echo $user_no; ?></b> <br><br>Total Members
				</span>
			</div>
			<div>
				<span style="background:darkorchid;">
				<i class="fa fa-home"></i>
				</span>
				<span>
					<b><?php echo $block_no; ?></b> <br><br>Total blocked users
				</span>
			</div>
			<div>
				<span style="background:dodgerblue;">
				<i class="fa fa-signal"></i>
				</span>
				<span>
					<b><?php echo $pend_all; ?></b> <br><br> Pending Deposits
				</span>
			</div>
			<div>
				<span style="background:springgreen;">
				<i class="fa fa-rss"></i>
				</span>
				<span>
					<b><?php echo $pen_inv_no; ?></b> <br><br> Pending Trades
				</span>
			</div>
		</div>
		<div>
			<div>
				<span style="background:mediumseagreen;">
				<i class="fa fa-bolt"></i>
				</span>
				<span>
					<b><?php echo $dep_no; ?></b> <br><br> Total Deposits
				</span>
			</div>
			<div>
				<span style="background:dodgerblue;">
				<i class="fa fa-download"></i>
				</span>
				<span>
					<b><?php echo $all_comp_no; ?></b> <br><br> Confirmed Deposits
				</span>
			</div>
			<div>
				<span style="background:springgreen;">
				<i class="fa fa-exchange"></i>
				</span>
				<span>
					<b> <?php echo $withp_no; ?></b><br><br> Pending Withdrawals
				</span>
			</div>
			<div>
				<span style="background:darkorchid;">
				<i class="fa fa-level-up"></i>
				</span>
				<span>
					<b><?php echo $act_inv_no; ?></b> <br><br> Active trades
				</span>
			</div>
		</div>
	</div>
</div>
<!-- PROFILE DETAILS HERE -->
	<div class="prof_detail">
		<?php require 'prof_detail.php'; ?>
	</div>
</div>

<!-- CHARTS HERE -->

</div>

</div>




<!-- CSS DESIGNS HERE -->

<style type="text/css">
	body{
	margin: 0px;
	background: rgba(0, 0, 0, 0.02);
}

.dashb_cont{
	display: flex;
	flex-direction: row;
	justify-content: center;
	background: ;
	margin-top: ;
}
#mob_all{
	background: rgba(0, 0, 0, 0.5);
	height: 100%;
	box-shadow: 2px 2px rgba(0, 0, 0,0.06);
	position: fixed;
	top: 0px;
	left: -100%;
	z-index: 9999;
	width: 100%;
}
.main_loader{
	width: 100%;
	padding: ;
	background: ;
}
.board_cont{
	display: flex;
	flex-direction: row;
	justify-content: ;
	background: ;
	width: 100%;
	flex-wrap: wrap;
}
.board_cont div{
	display: flex;
	flex-direction: column;
	align-items: center;
	margin: 5px;
}
#link_cont{
	width: 300px;
	background: white;
	margin-top: -16px;
}
.board_cont div div{
	display: flex;
	flex-direction: row;
	align-items: center;
	background: white;
	margin: 10px;
	width: 400px;
	box-shadow: 2px 2px 3px 1px rgba(0, 0, 0, 0.1);
	padding: 5px;
}
.board_cont div div span{
	margin: 2px;
	color: rgba(0, 0, 0, 0.5);
}
.board_cont div div span b{
	color: black;
	font-size: 23px;
}
.board_cont div div span:nth-of-type(1){
	width: 30px;
	background: red;
	text-align: center;
	padding: 10px;
}
.board_cont div div span:nth-of-type(2){
	margin-left: 20px;
}
.board_cont div div span:nth-of-type(1) i{
	font-size: 21px;
	color: white;
}

.control_cont{
	display: flex;
	flex-direction: row;
	justify-content: ;
	align-items: ;
}

.control_cont div{
	margin: 10px;
}

/*PROFILE DEATAILS STYLING*/

.prof_detail{
	display: flex;
	flex-direction: column;
	justify-content:;
	align-items: ;
	background: white;
	box-shadow: 2px 2px 3px 1px rgba(0, 0, 0, 0.1);
	width: 500px;
}
.prof_detail div{
	background: slateblue;
	color: ;
}
.prof_detail div:nth-of-type(1){
	margin: 0px;
	padding-left: 20px;
}
.prof_detail div:nth-of-type(2){
	padding: 10px;
	background: white;
	box-shadow: 2px 2px 3px 1px rgba(0, 0, 0, 0.1);	
	height: ;
}
.prof_detail div:nth-of-type(2) section{
	margin: 10px;
	background: ;
}
.prof_detail div:nth-of-type(2) section:nth-of-type(1){
	text-align: center;
	line-height: 20px;
}
.prof_detail div:nth-of-type(2) section:nth-of-type(2){
	line-height: 34px;
	margin-top: 40px;
}
#prof_sect{
	line-height: 29px;
}
#prof_sect p{
	background: white;
	padding: 10px;
	width: 50px;
	height: 50px;
	margin: 0 auto;
	display: flex;
	align-items: center;
	justify-content: center;
	border-radius: 50%;
	border: 1px solid rgba(0, 0, 0, 0.08);
}
#prof_sect p i{
	font-size: 40px;
	color: slateblue;
}
#cont_title{
	font-family: 'Montserrat';
}
#prof_title{
	color: white;
	font-size: 17px;
}





/*RESPONSIVE DESIGNS HERE*/

@media only screen and (max-width: 900px){
.main_loader{
	display: flex;
	flex-direction: column;
	justify-content: center;
}
.board_cont{
	flex-direction: column;
	justify-content: center;
	}
#mob_all{
	position: fixed;
	top: 0px;
	left: -100%;
	background: rgba(0, 0, 0, 0.5);
	height: 100%;
	width: 100%;
	z-index: 9999999;
	}
#link_cont{
	background: white;
	margin-top: -16px;
	padding-top: 40px;
	}
	.control_cont{
		flex-direction: column;
	}
}

@media only screen and (max-width: 500px){
	.board_cont div div{
	width: 90%;
	}
	.prof_detail{
		width: 95%;
		padding: 0px 0px 80px 0px;
	}
}
</style>