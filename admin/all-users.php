<div>
	<?php 
	require("general_nav.php"); 
	require("../connect.php");
	// require("investment_done.php");
	$user_sel="select * from user_table";
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
			<h2>All system users</h2>
			<p>Below are registered members of the system!!</p>
		</div>
		<div class="board_cont">
		<table width="100%" bgcolor="" class="main_table" cellpadding="10" cellspacing="0" align="center">
			<tr style="background:slateblue;color: wheat;">
				<th>S/N</th><th>Member ID</th><th>Full Name</th><th>Username</th><th>Email</th><th>Referal_ID</th><th>Spot bal</th><th>Demo bal</th><th>Ref balance</th><th>Registration date</th><th>Withdraw status</th><th>Access</th><th colspan="3" style="text-align:center;">Action</th>
			</tr>
			<?php while ($user=$all_user->fetch_assoc()) { ?>
			
			<tr>
				<td><?php echo $sn++; ?></td>
				<td><?php echo $user['member_id']; ?></td>
				<td><?php echo $user['fullname']; ?></td>
				<td><?php echo $user['username']; ?></td>
				<td><?php echo $user['email']; ?></td>
				<td><?php echo $user['ref_id']; ?></td>
				<td><?php echo "$ ".$user['spot']; ?></td>
				<td><?php echo "$ ".$user['demo']; ?></td>
				<td><?php echo "$ ".$user['ref_wallet']; ?></td>
				<td><?php echo $user['reg_date']; ?></td>
				<td><?php echo ucwords($user['withdrawal_status']); ?></td>
				<td><?php echo $user['access']; ?></td>
				<td><a href="user-acct?user=<?php echo $user['member_id'];?>" target="_blank" id="login">Login</a></td>
				<td><form method="POST"><input type="hidden" name="row_id" value="<?php echo $user['id']; ?>"><input type="hidden" name="access" value="<?php echo $user['access']; ?>">
					<button type="submit" name="action_btn">
						<?php 
						if($user['access']=='granted'){
							echo "Block";
						} 
						else{
							echo "Unblock";
						}

						?>
					</button></form>
				</td>
				<td><form method="POST" action='admin_action.php'><input type="hidden" name="row_id" value="<?php echo $user['id']; ?>">
					<button type="submit" name="delete_btn" style="background:red">
						Delete</form>
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

<?php 
if(isset($_POST['action_btn'])){
	$user=$_POST['row_id'];
	$user_access=$_POST['access'];
	if($user_access=='granted'){
		$up_access="update user_table set access='denied' where id='$user' ";
		$access_done=$conn->query($up_access);
		if($access_done){
			echo "<script>window.location='all-users'; </script>";
		}
	}
	else{
		$up_access="update user_table set access='granted' where id='$user' ";
		$access_done=$conn->query($up_access);
		if($access_done){
			echo "<script>window.location='all-users'; </script>";
		}
	}

}



?>



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
	width: ;
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
#login{
	color: wheat;
	background: slateblue;
	padding: 10px 30px 10px 30px;
	width: 100px;
	cursor: pointer;
	border: 0px;
	border-radius: 20px;
	text-decoration: none;
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


@media only screen and (max-width: 1000px){
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
		.board_cont{
		width: 100%;
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
	.board_cont{
		width: 100%;
}
}
</style>