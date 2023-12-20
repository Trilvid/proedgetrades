<div>
	<?php 
	require("general_nav.php"); 
	require("../connect.php");
	// require("investment_done.php");
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
		<div id="pg_title">
			<h2>Admin Settings</h2>
			<h4>Update your Password!!</h4>
		</div>
			<div class="board_cont">
				<div>
				<form method="POST">
					<p>Enter Current Password: <br><input type="password" name="rec_pass" required></p>
					<p>Enter New Password: <br><input type="password" name="new_pass" required></p>
					<!-- <p>Re-enter New Password: <br><input type="password" name="new_passc" required></p> -->
					<button type="submit" name="up_password">Update Password</button>
				</form>
				</div>
			</div>
		
</div>
</div>
</div>

</div>


<?php 
if(isset($_POST['up_password'])){
    function clean($value){
    require("../connect.php");
    $value=trim($value);
    $value=htmlspecialchars($value);
    $value=htmlentities($value);
    $value=stripslashes($value);
    $value=mysqli_real_escape_string($conn,$value);
    return $value;
}
$pass_rec=clean($_POST['rec_pass']);
$pass_main=clean($_POST['new_pass']);

$rec_pass=hash('sha256', $pass_rec);
$user_password=hash('sha256', $pass_main);

$pass_chk="select * from admin_table where id='$sess_admin_id' ";
$pass_sql=$conn->query($pass_chk);
$pass_row=$pass_sql->fetch_assoc();

if($pass_row['password']!=$rec_pass){ ?>

	        <script type="text/javascript">
            $(document).ready(function(){
                $("#resp").fadeIn(1000);
                $("#resp").html("<b>Current Password does not match</b>");
                $("#resp").css({"background":"red","z-index":"99999"});
                setTimeout(function(){
                    $("#resp").fadeOut(1000);
            },2000);
        });
    </script>
	
	<?php
}
else{
	$up_pass="update admin_table set password='$user_password' where id='$sess_admin_id' ";
	$up_pass_done=$conn->query($up_pass);

	if($up_pass_done){ ?>

		<script type="text/javascript">
            $(document).ready(function(){
                $("#resp").fadeIn(1000);
                $("#resp").html("<b>Password Updated</b>");
                $("#resp").css({"background":"palegreen","z-index":"99999"});
                setTimeout(function(){
                    $("#resp").fadeOut(1000);
            },2000);
        });
    </script>

		<?php
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
#pg_title{
	box-shadow: 2px 2px 3px 1px rgba(0, 0, 0, 0.1);
	width: 100%;
	margin-left: -10px;
	padding: 10px;
	color: slateblue;
	font-family: arial;
}
.main_loader{
	width: 100%;
	padding: ;
	background: ;
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
.board_cont{
	display: flex;
	flex-direction: column;
	justify-content: center;
	text-align: ;
	box-shadow: 2px 2px 3px 1px rgba(0, 0, 0, 0.1);
	padding-top: 40px;
	overflow: auto;
}
.board_cont div{
	width: 1000px;
}
.board_cont div form input[type="password"]{
	width: 240px;
	height: 40px;
	outline: none;
}
.board_cont div form button[type="submit"]{
	width: ;
	height: 40px;
	background: slateblue;
	border: 0px;
	padding: 10px;
	color: white;
	cursor: pointer;
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
	.board_cont div{
	width:96%;
	margin-left: ;
}
.board_cont div form input[type="password"]{
	width: 95%;
}
}
</style>