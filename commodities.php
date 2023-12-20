
<?php require 'headerx.php';
      require 'loader.php';
 ?>

<div class='body_img_cont'>
    <div class='body_img_txt'>
        <h1>Trade Commodities <br> <span>with confidence</span></h1>
        <p>Venture into the dynamic landscape of the commodity market and broaden <br> the scope of your investment portfolio with our platform's unique market protections. <br> As you navigate this dynamic world, consider the following advantages</p>
        <span>
            <button onclick="regpage()" class="button">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M17.593 3.322c1.1.128 1.907 1.077 1.907 2.185V21L12 17.25 4.5 21V5.507c0-1.108.806-2.057 1.907-2.185a48.507 48.507 0 0111.186 0z"></path>
                </svg>
             Register Now
            </button></span>
    </div>
</div>

<!-- why trade forex section -->

<div class='why_cont'>
    <div>
        <p>Why trade commodities online with PROEDGETRADE</p>
        <p>Engage in the trading of precious metals and energies with trading conditions designed to empower your strategy with a competitive edge.</p>
    </div>
    <div>
        <section>
            <span><img src='img/chain.svg'></span>
            <span>Commodity derivatives</span>
            <span>Hedge your portfolio with popular precious metals like gold and silver or diversify with top-traded energies like crude oil and natural gas.</span>
        </section>

        <section>
            <span><img src='img/bolt.svg'></span>
            <span>Flexible market access</span>
            <span>Trade XAGUSD, XAUUSD, USOIL and UKOIL 5 days a week and maximize your trading results.</span>
        </section>

        <section>
            <span><img src='img/shield-setting.svg'></span>
            <span>Security of funds</span>
            <span>Trade the commodity markets with Negative Balance Protection. Benefit from PCI DSS financial data protection, and segregated client accounts in tier-1 banks.</span>
        </section>

        <section>
            <span><img src='img/shield.svg'></span>
            <span>Stop out protection</span>
            <span>Strengthen your positions against inevitable market volatility with a feature that helps delay or sometimes completely avoid stop outs.</span>
        </section>

        <section>
            <span><img src='img/thumb-up.svg'></span>
            <span>Low and stable spread</span>
            <span>Keep your trading costs low, even when prices are fluctuating. Enjoy low and stable spreads, even during high-impact market news and economic events.</span>
        </section>

        <section>
            <span><img src='img/bolt.svg'></span>
            <span>Fast execution</span>
            <span>Never miss a pip. Get your orders executed in under 25ms on both the MT platforms and proprietary Exness Terminals.</span>
        </section>
    </div>
</div>


<!-- FOREX API SECTION -->

<div class='api_cont'>
    <div><p>Cryptocurrency market instrument</p></div>

    <div class='api'>
    <!-- TradingView Widget BEGIN -->
<div class="tradingview-widget-container">
  <div class="tradingview-widget-container__widget"></div>
  <div class="tradingview-widget-copyright"><a href="" rel="noopener nofollow" target="_blank"><span class="blue-text">Crypto currency market by PROEDGETRADE</span></a></div>
  <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-screener.js" async>
  {
  "width": "100%",
  "height": "100%",
  "defaultColumn": "overview",
  "screener_type": "crypto_mkt",
  "displayCurrency": "USD",
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
	background-image: url(img/comm.jpeg);
	background-repeat: no-repeat;
	height: 600px;
	background-position:top ;
    background-size: cover;
}
.body_img_txt{
	background: rgba(0, 0, 0, 0.5);
	height: 600px;
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