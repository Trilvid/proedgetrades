<div>
	<?php 
	require("general_nav.php"); 
	require("../connect.php");
	// require("investment_done.php");
	$user_sel="select * from deposit_table where status='processing' ";
	$all_user=$conn->query($user_sel);
	$sn=1;
    ?>
</div>
<div>


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
		<div>
			<h2>All system Deposits</h2>
			<p>Below are pending deposit on the system!!</p>
		</div>
		<div class="board_cont">
		<table width="100%" bgcolor="" class="main_table" cellpadding="10" cellspacing="0" align="center">
			<tr style="background:slateblue;color: wheat;">
				<th>S/N</th><th>Username</th><th>Email</th><th>Amount</th><th>Coin</th><th>Deposit_date</th><th>Transaction_ID</th><th>Status</th><th colspan="3" style="text-align:center;">Action</th>
			</tr>
			<?php while ($user=$all_user->fetch_assoc()) { ?>
			
			<tr>
				<td><?php echo $sn++; ?></td>
				<td><?php echo $user['name']; ?></td>
				<td><?php echo $user['email']; ?></td>
				<td><?php echo $user['amount']; ?></td>
				<td><?php echo $user['coin']; ?></td>
				<td><?php echo $user['date']; ?></td>
				<td><?php echo $user['tx_id']; ?></td>
				<td><?php echo $user['status']; ?></td>
				<td><form method="POST" action="admin_action.php">
					<input type="hidden" name="row_id" value="<?php echo $user['id']; ?>">
					<input type="hidden" name="dep_amt" value="<?php echo $user['amount']; ?>">
					<input type="hidden" name="depositor_id" value="<?php echo $user['depositor_id']; ?>">
					<button type="submit" name="confirm_btn">Confirm</button></form>
				</td>
				<td><form method="POST" action="admin_action.php">
					<input type="hidden" name="row_id" value="<?php echo $user['id']; ?>">
					<input type="hidden" name="row_id" value="<?php echo $user['id']; ?>">
					<input type="hidden" name="depositor_id" value="<?php echo $user['depositor_id']; ?>">
					<button type="submit" name="decline_btn">Decline</button></form>
				</td>
			</tr>

			<?php
			}
			?>
		</table>
	</div>
</div>

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
	box-shadow: 2px 2px 3px 1px rgba(0, 0, 0, 0.1);
	width: 1000px;
	height: 700px;
	overflow: auto;
}
.board_cont table{
	width: 100%;
	text-align: justify;
}
.board_cont table th{
	padding: 20px;
}
.board_cont table tr:nth-of-type(even){
	background: rgba(0, 0, 0, 0.02);
	color: ;
}
.board_cont table form button[type='submit']{
	color: wheat;
	background: slateblue;
	padding: 12px;
	width: 100px;
	cursor: pointer;
	border: 0px;
	border-radius: 20px;
}
#link_cont{
	width: 300px;
	background: white;
	margin-top: -16px;
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
#prof_sect p i{
	font-size: 40px;
	color: slateblue;
}
#cont_title{
	font-family: arial;
}
#prof_title{
	color: white;
	font-size: 17px;
}





/*RESPONSIVE DESIGNS HERE*/

@media only screen and (max-width: 1500px){
.control_cont{
	flex-direction: column;
}
}

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