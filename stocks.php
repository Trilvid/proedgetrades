
<?php require 'headerx.php';
    require 'loader.php'; ?>

<div class='body_img_cont'>
    <div class='body_img_txt'>
        <h1>Trade Stocks <br> <span>with Zero commission</span></h1>
        <p>Embark on your stock trading journey with zero commission fees. <br> Dive into the world of international stock markets and invest in the stocks of renowned companies, <br> all while benefiting from minimal transaction costs.</p>
        <span>
            <button onclick="regpage()" class="button">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M17.593 3.322c1.1.128 1.907 1.077 1.907 2.185V21L12 17.25 4.5 21V5.507c0-1.108.806-2.057 1.907-2.185a48.507 48.507 0 0111.186 0z"></path>
                </svg>
             Register Now
            </button>
        </span>
    </div>
</div>

<!-- why trade forex section -->

<div class='why_cont'>
    <div>
        <p>Why trade stocks online with PROEDGETRADES</p>
        <p>From Big Tech to Big Pharma and more, trade stocks from large-cap companies in the global <br> stock market with conditions designed to empower your strategy</p>
    </div>
    <div>
        <section>
            <span><img src='img/chain.svg'></span>
            <span>Diverse stock derivatives</span>
            <span>Gain exposure to a large selection of stocks without having to own the underlying asset. Trade both bull and bear markets and capitalize on trading opportunities with leverage up to 1:20.</span>
        </section>

        <section>
            <span><img src='img/bolt.svg'></span>
            <span>Fast execution</span>
            <span>Never miss a pip. Get your orders executed in under 25ms on both the MT platforms and proprietary Exness Terminals.</span>
        </section>

        <section>
            <span><img src='img/thumb-up.svg'></span>
            <span>Low and stable spreads</span>
            <span>Trade both rising and falling stock markets with low spreads that stay stable, even during high-impact stock market news.</span>
        </section>

        <section>
            <span><img src='img/clock.svg'></span>
            <span>Hassle-free withdrawals</span>
            <span>Enjoy seamless withdrawals. Simply choose a payment method, make your request and we’ll approve it right away.</span>
        </section>

        <section>
            <span><img src='img/shield.svg'></span>
            <span>Stop Out Protection</span>
            <span>Take on volatile markets with a unique protection feature that strengthens your positions and helps delay or avoid stop outs.</span>
        </section>

        <section>
            <span><img src='img/shield-setting.svg'></span>
            <span>Security of funds</span>
            <span>Deposit with confidence knowing your financial data is PCI DSS protected. Rest assured that all client funds are kept in segregated accounts in tier-1 banks.</span>
        </section>
    </div>
</div>


<!-- FOREX API SECTION -->

<div class='api_cont'>
    <div><p>Stocks market instrument</p></div>

    <div class='api'>
        <!-- TradingView Widget BEGIN -->
<div class="tradingview-widget-container">
  <div class="tradingview-widget-container__widget"></div>
  <div class="tradingview-widget-copyright"><a href="" rel="noopener nofollow" target=""><span class="blue-text">Stocks Market by PROEDGETRADES</span></a></div>
  <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-hotlists.js" async>
  {
  "colorTheme": "light",
  "dateRange": "12M",
  "exchange": "US",
  "showChart": true,
  "locale": "en",
  "width": "100%",
  "height": "100%",
  "largeChartUrl": "",
  "isTransparent": false,
  "showSymbolLogo": true,
  "showFloatingTooltip": false,
  "plotLineColorGrowing": "rgba(41, 98, 255, 1)",
  "plotLineColorFalling": "rgba(41, 98, 255, 1)",
  "gridLineColor": "rgba(240, 243, 250, 0)",
  "scaleFontColor": "rgba(106, 109, 120, 1)",
  "belowLineFillColorGrowing": "rgba(41, 98, 255, 0.12)",
  "belowLineFillColorFalling": "rgba(41, 98, 255, 0.12)",
  "belowLineFillColorGrowingBottom": "rgba(41, 98, 255, 0)",
  "belowLineFillColorFallingBottom": "rgba(41, 98, 255, 0)",
  "symbolActiveColor": "rgba(41, 98, 255, 0.12)"
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
	background-image: url(img/stocks.jpeg);
	background-repeat: no-repeat;
	height: 600px;
	background-position: center;
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