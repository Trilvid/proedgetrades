



<div class="footer_cont">
	<div>
		<div><a href="" style="font-weight: bold; color: var(--pri-color)">
			<!-- <img src="img/newitem/A1.png" width="250px"> -->
			PROEDGETRADES
		</a>
		</div>
		<!--<div><a href="tel:+44 7796 248266"><i class="fa fa-phone"></i>+44 7796 248266</a></div>-->
		<!--<div><i class="fa fa-location"></i>27 Kingston Road, South Wimbledon, UK</div>-->
		<div><a href="mailto:contactproedgetrades@gmail.com"><i class="fa fa-envelope"></i> contactproedgetrades@gmail.com</a></div>
		<div><a href=""><i class="fa fa-whatsapp"></i> Whatsapp</a></div>
		<div><a href=""><i class="fa fa-instagram"></i> Instagram</a></div>
	</div>
	<div>
		<div>Company</div>
		<div><a href="">About Us</a></div>
		<div><a href="">FAQ</a></div>
		<div><a href="">Market Trends</a></div>
		<div><a href="#contact">Help Desk</a></div>
	</div>
	<div>
		<div>Quick Links</div>
		<div><a href="register">Register</a></div>
		<div><a href="login">Log in</a></div>
		<div><a href="">Market Trends</a></div>
		<div><a href="mailto:contactproedgetrades@gmail.com"><i class="fa fa-envelope"></i> contactproedgetrades@gmail.com</a></div>
	</div>

	<div>
		<div>Newsletter</div>
		<div>Get latest updates</div>
		<div><form method="POST">
			<input type="email" placeholder="info@mail.com" required id="news_in"  id="newsBtn">
			<button type="submit" id="news_sub">subscribe</button></form></div>
	</div>
	
</div>

<div class="copyright_txt">
	<p>&copy <?php $date=date('Y'); echo $date; ?> copyright All right reserved.</p>
	<!--<p><a href="privacy">Privacy Policy</a>  ||  <a href="terms">Terms and Conditions</a></p>-->
</div>


<style type="text/css">
	
	.footer_cont{
		display: flex;
		flex-direction: row;
		background: var(--sec-color);
		color: var(--mild-color);
		padding: 3% 2% 3% 2%;
		align-items: ;
		justify-content: space-between;
		text-align: justify;
	}

	.footer_cont div{
		margin: 10px;
		color: #b3b3b3;
		display: flex;
		flex-direction: column;
		justify-content: ;
		align-items: ;
	}

	.footer_cont div div a{
		color: #b3b3b3;
		text-decoration: none;
	}

	.footer_cont div div:nth-of-type(1){
		color: var(--pri-color);
		font-size: 21px;
	}
	form {
		padding: 0px;
	}
	#news_sub{
		background: var(--pri-color);
		border: 0px;
		outline: none;
		border-radius: 0px 10px 10px 0px;
		color: white;
		padding: 10px;
	}
	#news_in{
		width: 170px;
		border: 0px;
		outline: none;
		border-radius: 10px 0px 0px 10px;
		padding: 10px;
		padding-left: 10px;
	}
	#newsBtn {
		text-align: center !important;
	}
	.copyright_txt{
		background:  var(--sec-color);
		color: #b3b3b3;
		/* padding: 3% 2% 3% 2%; */
		text-align: center;
		font-size: 17px;
		border-top: 1px solid  #ffd000;
	}

	.copyright_txt p a{
		text-decoration: none;
	}


	@media only screen and (max-width:900px){
		.footer_cont{
			flex-direction: column;
		}

	}

</style>