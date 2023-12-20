<div class="top">

<div>
	<div><img src="../img/newitem/A0.png" alt="PROEDGETRADES" class="img-fluid" width="70px"></div>
</div>
<div>
	
</div>
<div id="top2">
	<div><i class="fa fa-user-circle-o"></i></div>
	<div><button type="button" id="show_nav"><i class="fa fa-navicon"></i></button></div>
</div>

</div>

<style type="text/css">
	.top{
		display: flex;
		flex-direction: row;
		align-items: center;
		justify-content: space-between;
		background: white;
		box-shadow: 4px 4px 4px rgba(0, 0, 0,0.3);
		/*background: rgba(16, 185, 129, 100);*/
		padding: 1.5rem;
		position: sticky;
		top: 0px;
		width: ;
		z-index: 999;
	}
	#top2{
		display: flex;
		flex-direction: row;
		align-items: center;
	}
	#top2 div{
		margin: 10px;
	}
	#top2 div i{
		font-size: 25px;
		color: rgb(11, 100, 195);
	}
</style>

<script type="text/javascript">
	$(document).ready(function(){
		$("#show_nav").click(function(){
			$("#mob_all").css({"left":"0px","transition":"0.5s"});
		});
		$("#mob_all").click(function(){
			$("#mob_all").css({"left":"-100%","transition":"0.5s"});
		});
	});
</script>