<div>
	<?php 
	require("general_nav.php"); 
	require("../connect.php");
	require("../loader.php");
	// require("investment_done.php");
    ?>
</div>

<div id="resp"></div>


<style type="text/css">


#resp{
padding: 20px;
font-size: 17px;
position: absolute;
top: 30px;
z-index: 9999;
display: none;
right: 20px;
color: white;
}

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
.overview form input[type="password"]{
	    width:300px;
		height:40px;
		outline:none;
}

.overview form input[type="submit"]{
	background:#ffd000;
		padding:15px;
		width:150px;
		font-size:15;
		border:0px;
		border-radius:30px;
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

	<section class="area_txt_cont">
		<section class="area_txt">

		<span><p><b>Account setting</b> <br><br>
		<span>Update password!!</span></p>
		</span>

		</section>
	</section>


		<section class="overview_cont">

		<section>
			<b style="color:;font-size:18px;font-family: monospace;">Choose secure password</b> <br><br><span id="tip">Check transactions history for detailed overview of your account.</span>
		</section>

		<section class="overview">

		<form method="POST">
				<p><b>Enter current password</b><br><input type="password" name="cur_pass" placeholder="Enter Current password" required></p>
				<p><b>Enter New password</b><br><input type="password" name="new_pass1" placeholder="Enter new password" required></p>
				<p><b>Re-enter new password</b><br><input type="password" name="new_pass2" placeholder="Re-enter new password" required></p>
				<p><input type="submit" name="up_pass" value="Update now" style="color: white"></p>
			</form>

		</section>
	</section>

	</section>

	</div>

</div>


			
<?php
if(isset($_POST['up_pass'])){
	function clean($value){
	require("../connect.php");
	$value=trim($value);
	$value=htmlspecialchars($value);
	$value=htmlentities($value);
	$value=stripslashes($value);
	$value=mysqli_real_escape_string($conn,$value);
	return $value;
}

$pass=clean($_POST['cur_pass']);
$cur_pass=hash('sha256',$pass);

$new_pass2=clean($_POST['new_pass2']);

$password=clean($_POST['new_pass1']);
$new_pass=hash('sha256', $password);

$new_sel="select * from user_table where id='$sess_id' ";
$new_sql=$conn->query($new_sel);
$new_row=$new_sql->fetch_assoc();

if($new_row['password']!=$cur_pass){ ?>

		<script type="text/javascript">
			$(document).ready(function(){
				$("#resp").fadeIn(1000);
				$("#resp").html("<b>Current Password does not match");
				$("#resp").css({"background":"red"});
				setTimeout(function(){
					$("#resp").fadeOut(1000);
				},2000)
			});
		</script>

	<?php
}
else if($new_row['password']==$cur_pass && $password==$new_pass2){
	$up_pass="update user_table set password='$new_pass' where id='$sess_id' ";
	$up_pass_done=$conn->query($up_pass);
	if($up_pass_done){ ?>
		
		<script type="text/javascript">
			$(document).ready(function(){
				$("#resp").fadeIn(1000);
				$("#resp").html("<b>Password updated");
				$("#resp").css({"background":"green"});
				setTimeout(function(){
					$("#resp").fadeOut(1000);
				},2000)
			});
		</script>

	<?php

	}
}
else{ ?>
	
	<script type="text/javascript">
			$(document).ready(function(){
				$("#resp").fadeIn(1000);
				$("#resp").html("<b>Password does not match");
				$("#resp").css({"background":"red"});
				setTimeout(function(){
					$("#resp").fadeOut(1000);
				},2000)
			});
		</script>

	<?php
}

}
?>



<style type="text/css">

.load_cont{
		background:var(--facebook-color);
	}
.inner_load_cont{
		padding:;
		background: var(--facebook-color);
		color: var(--mild-color);
	}
	.inner_load_cont section{
		padding:;
	}
	.top_nav{
		padding: 15px 3px 15px 3px;
		position: sticky;
		top: 0px;
		left: 0px;
		width: ;
		display: flex;
		flex-direction: row;
		justify-content: space-between;
		align-items: center;
		z-index: ;
	}

	.inner_load_cont{
		background-image: ;
		padding-bottom: 10px;
		margin-top: 5px;
	}
	.inner_load_cont section{
		margin:5px 5px 0px 5px;
		padding: 10px 2px 10px 2px;
		margin-top: 10px;
	}
	.quick_action{
		display: flex;
		flex-direction: row;
		justify-content: space-between;
		background:;
		flex-wrap: wrap;
		display: none;
		padding: 10px 0px 20px 0px;
	}
	.quick_action span{
		margin: 10px;
		background: #ffd000;
		padding: 7px;
		border-radius: 10px;
		color: white;
	}
	.quick_action a{
		text-decoration:none;
	}
	.quick_action span i{
		margin-right: 10px;
	}
	.overview_cont{
		display: flex;
		flex-direction: column;
		justify-content: flex-start;
		padding: ;
		border: 1px solid rgba(0, 0, 0, 0.5);
		justify-content: center;
		align-items: ;
		border-radius: 10px;
		background: white;
		box-shadow: 2px 1px 2px 2px rgba(0, 0, 0, 0.2);
	}
	.overview_cont section{
		margin: 5px;
		border-radius: ;
		background: ;
	}
	.overview{
		display: flex;
		flex-direction: row;
		flex-wrap: wrap;
		justify-content: ;
		background: ;
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
		color:white;
		align-items:center;
		width:;
	}
	.overview section span{
		margin:10px;
	}
	.overview section span table tr{
		color:white;
		text-align:center;
		font-size:;
	}
	.overview section span table tr td{
		font-size:15px;
		font-family:arial;
		border: 1px solid grey;
		padding:10px;
	}
	.overview section span img{
		width:200px;
		height:200px;
	}
	#dep_amt{
		width:300px;
		height:40px;
		outline:none;
	}
	#dep_btn{
		background: var(--pri-color);
		padding:15px;
		width:150px;
		font-size:15;
		border:0px;
		border-radius:30px;
	}

	#tip{
		font-size: 16px;
		text-indent: 10px;
		color: blue;
		display:none;
	}

	.action_center_cont{
		background: white;
		box-shadow: 2px 1px 2px 2px rgba(0, 0, 0, 0.2);
		border-radius: 10px;
	}

	.action_center{
		display: flex;
		flex-direction: row;
		flex-wrap: wrap;
		justify-content: flex-start;
		background: ;
	}

	.action_center section{
		width: 200px;
		background: white;
		height: ;
		margin: 5px;
		padding: 10px;
		border-radius: 10px;
		box-shadow: 2px 1px 1px rgba(0, 0, 0, 0.2);
		border: 1px solid blue;
		display: flex;
		flex-direction: column;
	}

	.action_center section span{
		margin-bottom: 10px;
	}

	.action_center section span a{
		color: red;
		text-decoration: none;
	}

	.action_center section span:nth-of-type(1){
		font-size: 13px;
		font-weight: bold;
	}

	.action_center section span:nth-of-type(2){
	font-size: 18px;
	font-weight: ;
	}

	.dash_api_cont{
		background: white;
		padding: 20px 0px 20px 0px;
		border: 1px solid rgba(0, 0, 0, 0.5);
		justify-content: center;
		align-items: ;
		border-radius: 10px;
		background: white;
		box-shadow: 2px 1px 2px 2px rgba(0, 0, 0, 0.2);
	}


	@media only screen and (max-width: 800px){
		.overview{
		justify-content: center;
	}
	.overview section{
		flex-direction:column;
	}
}
@media only screen and (max-width: 600px){
		.overview{
		justify-content: center;
	}
	.overview section{
		width:;
	}
}

@media only screen and (max-width: 500px){
		.overview section{
	}
	.action_center section{
		width: 100%;
	}
	}
</style>