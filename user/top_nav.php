
<div id="google_translate_element" style="background-color: var(--facebook-color)"></div>
            <script type="text/javascript">
            /*<![CDATA[*/
            function initializeGoogleTranslateElement() {
            	new google.translate.TranslateElement({
            		pageLanguage: "en"
            	}, "google_translate_element");
            }
            /*]]>*/
            </script>
            <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=initializeGoogleTranslateElement"></script>


			<section>
				
			<button  onclick="redirectToDemoPage()" id="xbtn">Switch To Demo</button>
			
			<script>
        function redirectToDemoPage() {
            var currentURL = window.location.href;

            if (currentURL.includes('dashboard.php')) {
                window.location.href = 'demo-trading.php';
            } else {
                window.location.href = 'dashboard.php';
            }  
        }
			if (window.location.href.includes('demo-trading.php')) {
            var button = document.querySelector('button');
            button.innerHTML = 'Switch To Real';
        }
		else if( !window.location.href.includes('dashboard.php')){
			const button = document.querySelector('button')
			button.innerHTML = 'Switch To Dashboard'
		}
    </script>
		</section>
			<section class="mee"><span class="material-symbols-outlined yoou">verified</span> Trader, <?php echo $sess_user; ?></section>
<section class="top_icons">
	<!-- <i class="fa fa-user" style="margin-right: 30px;" id="prof1"></i> -->
	<i class="fa fa-navicon" id="openx"></i>
	<i class="fa fa-close" id="closex"></i>
</section>

<!-- <section id="prof_show">
	hello world
</section> -->


<style type="text/css">
	.top_icons i{
		cursor: pointer;
		color: var(--mild-color);
	}
	.mee {
		color: var(--mild-color);
		position: relative;
		padding-left: 30px;
	}
	.yoou {
		color: green;
		position: absolute;
		bottom: 0;
		left: 0;
		padding-right: 20px;
	}
	#xbtn {
		color: white;
		padding: 9px;
		border-radius: 9px;
		background-color:  rgb(75, 133, 75);
		border: 0px;
	}
	#Rbtn {
		color: white;
		padding: 9px;
		border-radius: 9px;
		background-color:  rgb(181, 34, 34);
		border: 0px;
	}
	
	#prof_show{
		position: absolute;
		top: 80px;
		right: 10px;
		padding: 20px;
		background: red;
		height: ;
		display: none;
	}
	#google_translate_element {
		position: fixed;
		bottom: 0;
		right: 10px;
		background-color: white;
	}

	@media only screen and (max-width: 700px){
		#prof_show{
			right: 30px;
		}
	}
</style>
<script type="text/javascript">
	$(document).ready(function(){

		$("#prof1").click(function(){
			$("#prof_show").fadeToggle(500);
		});

	});
</script>