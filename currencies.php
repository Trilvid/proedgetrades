
<?php 
require 'loader.php';
require 'headerx.php'; 
?>

<div class='body_img_cont'>
    <div class='body_img_txt'  data-aos="zoom-in">
        <h1>Trade forex <br><span>PROEDGETRADES</span>with low and stable spreads</h1>
        <p>Explore the vast world of forex trading with our platform,<br> where you can engage in the global forex market and navigate through the most popular currency pairs. <br> Take advantage of conditions that surpass the market standards, offering you low and stable spreads for an enhanced trading experience.</p>

        <span>
            <button onclick="regpage()" class="button">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M17.593 3.322c1.1.128 1.907 1.077 1.907 2.185V21L12 17.25 4.5 21V5.507c0-1.108.806-2.057 1.907-2.185a48.507 48.507 0 0111.186 0z"></path>
                </svg>
            Open account
            </button>
        <!-- <a href='register'>Open account</a></span> -->
    </div>
</div>

<!-- why trade forex section -->

<div class='why_cont'>
    <div>
        <p>Why trade forex market with PROEDGETRADES</p>
        <p id="pee">Command the currency market and engage in currency trading on cutting-edge Forex trading platforms with a broker that handles a monthly trading volume exceeding $3 trillion, earning accolades along the way.</p>
    </div>
    <div>
        <section>
            <span><img src='img/chain.svg'></span>
            <span>Varied FX Derivatives</span>
            <span>Engage in trading over 100 currency pairs with flexible leverage*, gaining access to an extensive range of FX majors, minors, and exotics. *Subject to your account equity.</span>
        </section>

        <section>
            <span><img src='img/0.svg'></span>
            <span>Swap-free trading</span>
            <span>Experience swap-free trading on most FX majors and select FX minors, allowing you to maintain currency trading positions without incurring any rollover charges.</span>
        </section>

        <section>
            <span><img src='img/thumb-up.svg'></span>
            <span>Competitive and Predictable Spreads</span>
            <span>Navigate the forex market with competitive and consistent trading costs. Benefit from tight spreads that remain stable, even amidst economic news releases and market events.</span>
        </section>

        <section>
            <span><img src='img/clock.svg'></span>
            <span>Efficient Withdrawals</span>
            <span>Effortlessly withdraw your funds using a choice of local or global payment methods. Receive swift approval for your withdrawal requests within seconds.</span>
        </section>

        <section>
            <span><img src='img/shield.svg'></span>
            <span>Stop Out Protection</span>
            <span>Trade Forex online with a distinctive market protection feature safeguarding your positions from temporary market volatility. This feature either delays or avoids stop-outs, enhancing your trading experience.</span>
        </section>

        <section>
            <span><img src='img/bolt.svg'></span>
            <span>Swift execution</span>
            <span>Seize opportunities presented by frequent price movements in popular currency pairs with rapid execution. Ensure your FX trading orders are executed in under 25ms across all available terminals.</span>
        </section>
    </div>
</div>


<!-- FOREX API SECTION -->

<div class='api_cont'>
    <div><p>Forex market spreads and swaps</p></div>

    <div class='api'>
        <!-- TradingView Widget BEGIN -->
<div class="tradingview-widget-container">
  <div class="tradingview-widget-container__widget"></div>
  <div class="tradingview-widget-copyright"><a href="" rel="noopener nofollow" target=""><span class="blue-text">Forex market by Trade Safe Guard</span></a></div>
  <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-forex-cross-rates.js" async>
  {
  "width": "100%",
  "height": "100%",
  "currencies": [
    "EUR",
    "USD",
    "JPY",
    "GBP",
    "CHF",
    "AUD",
    "CAD",
    "NZD",
    "TRY",
    "HKD",
    "MXN",
    "IDR"
  ],
  "isTransparent": false,
  "colorTheme": "light",
  "locale": "en"
}
  </script>
</div>
<!-- TradingView Widget END -->
    </div>
</div>



<?php require 'footerx.php'; ?>









<!-- WORKING ON CSS FOR THE CURRENCY TRADING PAGE -->
<style>
.body_img_cont{
    margin-top:-25px;
	background-image: url(img/currency_back.jpeg);
	background-repeat: no-repeat;
	height: 700px;
	/* background-position: ;
    background-size: cover;
    text-align:center; */
}
.body_img_txt{
	background: rgba(0, 0, 0, 0.5);
	height: 700px;
	width: 100%;
}


/* WORKING ON THE CURRENCY SECTION */

.why_cont{
    display:flex;
    flex-direction:column;
    background:#ffffff;
    justify-content:center;
    padding: 8% 5% 8% 5%;
}
.why_cont div{
    margin:5px;
}
.why_cont div:nth-child(1){
    text-align:left;
}
.why_cont div:nth-child(1) p:nth-child(1){
    font-size:30px;
    font-weight:bold;
    text-transform: capitalize;
}
.why_cont div:nth-child(1) p:nth-child(2){
    font-size:15px;
    width: 70%;
    line-height:30px;
    font-family: var(--font);
}
.why_cont div:nth-child(2){
    display:flex;
    flex-direction:row;
    justify-content:space-between;
    flex-wrap:wrap;
}
.why_cont div:nth-child(2) section{
    width:340px;
    background:rgba(0,0,0,0.05);
    margin:10px;
    display:flex;
    flex-direction:column;
    justify-content:center;
    align-items:center;
    padding:15px;
}
.why_cont div:nth-child(2) section span{
    margin:5px;
}
.why_cont div:nth-child(2) section span:nth-of-type(2){
    font-size:25px;
    font-weight:bold;
}
.why_cont div:nth-child(2) section span:nth-of-type(3){
    line-height:30px;
}



.api_cont{
    display:flex;
    flex-direction:column;
    padding: 8% 5% 8% 5%;
}
.api_cont div p{
    text-align:center;
    font-size:25px;
    font-weight:bold;
}
.api{
    height:700px;
}


</style>