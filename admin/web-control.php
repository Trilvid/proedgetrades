<div>
	<?php 
	require("general_nav.php"); 
	require("../connect.php");
	// require("investment_done.php");
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
			<h2>All system settings</h2>
			<p>Please update your system settings!!</p>
		</div>
		<div class="board_cont">
		<div>
			Turn withdrawal ON/OFF
		</div>
		<div>
			Turn login ON/OFF
		</div>
		<div>
			Update mode
		</div>
		<div>
			Change password
		</div>
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
	width: ;
	overflow: auto;
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