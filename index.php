  <head>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
</head>
<?php 
    require 'headerx.php';
    require 'loader.php';
?>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<style>
        .custom-swal-text {
            font-size: 14px;
            text-transform: capitalize;
        }
    </style>
<script>
    Swal.fire({
        text: 'Boost your financial success by trading confidently. Believe in your potential, dream big, and trade boldly to amplify your gains. Your courage is your currency in the world of possibilities. Dare to dream bigger and let your capital transcend its limits',
            customClass: {
                content: 'custom-swal-text'
            }
        });
</script>

<!-- Addind a background image -->
<video autoplay muted  playsinline loop id="myVideo">
  <source src="img/newitem/hero-vid.mp4" type="video/mp4">
  Your browser does not support HTML5 video.
  <script>
  document.getElementById('yourVideoElementId').play();
</script>
</video>

<!-- WORKING ON THE FIRST IMAAGE BODY -->

<div class='body_img_cont'>
    <div class='body_img_txt'  data-aos="zoom-in">
        <h1>join us and trade better with<br><span>PROEDGETRADES</span></h1>
        <p>Trade across multiple markets with the most <br>stable and reliable pricing in the industry with better market conditions.</p>

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

<script>
 function regpage(){
    window.location='register';
 }
</script>


<!-- WORKING ON THE SECOND SECTION -->

<div class='section_two'>
    <div data-aos="zoom-in"><p><h2>Instant withdrawals, 24/7</h2></p> <p>Our withdrawals are carried out in seconds with no manual processing, including on weekends.</p></div>
    <div><p>Learn more about deposits & withdrawals at PROEDGETRADES</p></div>
    <div>
        <marquee behavior="scroll" direction="left" scrollamount="4">
        <span><img src='img/btc.png'></span>
        <span><img src='img/eth.png'></span>
        <span><img src='img/bnb.png'></span>
        <span><img src='img/usdt.png'></span>
        <span><img src='img/xrp.png'></span>
    </marquee>
    </div>
    <div>
        <span data-aos="fade-down"><img src='img/coincoverjpg.jpg'></span>
        <span>Coincover: Coincover specializes in providing insurance coverage <br>for crypto assets, including protection against theft, hacking, and other risks. <i style='color:#ffd000;cusor:pointer;'></i></span>
    </div>
</div>



<!-- About us section -->

<div class="aboutDiv" id="about">
    <div class="space" data-aos="fade-down">
        <h1>About us</h1>
        <!-- <p><span></span>SAFE AND SECURE INVESTMENT COMPANY <span></span></p> -->
        <p>SAFE AND SECURE INVESTMENT COMPANY</p>
    </div>

    <div class="abtCont" data-aos="fade-up">

    <div class="abtChart">
        <div class="col-sm-12 col-md-5 col-lg-6 text-center">
                        <script src="https://static.coinstats.app/widgets/coin-chart-widget.js"></script>
                        <coin-stats-chart-widget type="large" coin-id="bitcoin" width="650" chart-height="300" currency="USD" locale="en" bg-color="#1C1B1B" status-up-color="#74D492" status-down-color="#FE4747" text-color="#FFFFFF" buttons-color="#1C1B1B" chart-color="#FFA959" chart-gradient-from="rgba(255,255,255,0.07)" chart-gradient-to="rgba(0,0,0,0)" border-color="rgba(255,255,255,0.15)" btc-color="#6DD400" eth-color="#67B5FF" chart-label-background="#000000" font="Roboto, Arial, Helvetica" candle-grids-color="rgba(255,255,255,0.1)"></coin-stats-chart-widget>
                    </div>
                </div>

    <div class="abtTxt">
        <h1>we are proedgetrades</h1>
        <p>Welcome to PROEDGETRADES, where financial empowerment meets cutting-edge technology. Our platform is your gateway to a world of seamless trading, combining innovation and reliability to redefine your investment experience. <br> Experience the future of trading with us. Your success is our priority, and we're here to redefine what's possible in the world of finance. Join us and unlock the doors to a new era of financial freedom.</p>

            <div class="abtSubDiv">
                <div class="subHead"> 
                    <span class="activeHead" id="head1">Mission</span>
                    <span id="head2">Advantages</span>
                    <span id="head3">Guarantees</span>
                </div>

            <div class="subBody">
                <span class="activeText" id="txt1"> At PROEDGETRADES Financial Company, our mission is to empower every investor, from beginners to seasoned professionals. We are committed to fostering a community where knowledge thrives, offering educational resources and personalized support to help you navigate the complexities of the financial markets..</span>

                <span id="txt2">Embark on a journey of financial prosperity with our user-friendly interface, providing real-time market data and advanced tools for insightful decision-making. Enjoy lightning-fast trade execution and stay ahead with customizable alerts, ensuring you never miss a lucrative opportunity.</span>

                <span id="txt3">Rest assured with our commitment to security and transparency. Your assets are safeguarded with state-of-the-art encryption, and our transparent fee structure ensures you know exactly what you're paying for. We guarantee a responsive and dedicated customer support team, ready to assist you at every step of your trading journey.</span>
            </div>
            </div>
            <button onclick="regpage()" class="button">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M17.593 3.322c1.1.128 1.907 1.077 1.907 2.185V21L12 17.25 4.5 21V5.507c0-1.108.806-2.057 1.907-2.185a48.507 48.507 0 0111.186 0z"></path>
                </svg>
            Open account
            </button>
    </div>

    </div>
    <script>
        // script for first head
        const headOne = document.getElementById('head1');
        const headTwo = document.getElementById('head2');
        const headThree = document.getElementById('head3');

        const body1 = document.getElementById('txt1');
        const body2 = document.getElementById('txt2');
        const body3 = document.getElementById('txt3');

        headOne.addEventListener("click", function () {
            this.classList.add("activeHead");
            body1.classList.add("activeText")
            head2.classList.remove("activeHead")
            head3.classList.remove("activeHead")
            body2.classList.remove("activeText")
            body3.classList.remove("activeText")
        })
        headTwo.addEventListener("click", function ()  {
            this.classList.add("activeHead");
            body2.classList.add("activeText")
            head1.classList.remove("activeHead")
            head3.classList.remove("activeHead")
            body1.classList.remove("activeText")
            body3.classList.remove("activeText")
        })
        headThree.addEventListener("click", function ()  {
            this.classList.add("activeHead");
            body3.classList.add("activeText")
            head1.classList.remove("activeHead")
            head2.classList.remove("activeHead")
            body1.classList.remove("activeText")
            body2.classList.remove("activeText")
        })


    </script>
</div>


<!-- WORKING ON THE THIRD SECTION -->


<div class='section_three'>
    <div class="space" data-aos="fade-up">
        <h1>Access and trade global markets</h1>
        <p>Staying abreast of ever-changing conditions in the financial arena can prove challenging, especially when more than one security or market is involved. As an industry leading forex and contract for difference (CFD) brokerage firm, PROEDGETRADES understands the active trader's need to reference timely pricing data and remain cognisant of evolving markets. <br><br>

In order to help traders and investors accomplish this task, PROEDGETRADES presents Forex Charts, a web-based charting application covering an extensive collection of securities and asset classes.</p>
    </div>

    <div class="card_container" data-aos="fade-down">

        
        <div class="card" data-aos="zoom-in">
            <span class="card_img"><img src='img/newitem/d.jpg'></span>
            <span class="card_title">Currencies</span>
            <span class="card_txt">Trade the world’s largest market with spreads starting from 0 pips</span>
            <span class="card_btn">
            <button class="btn2">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path fill="none" d="M0 0h24v24H0z"></path><path fill="currentColor" d="M5 13c0-5.088 2.903-9.436 7-11.182C16.097 3.564 19 7.912 19 13c0 .823-.076 1.626-.22 2.403l1.94 1.832a.5.5 0 0 1 .095.603l-2.495 4.575a.5.5 0 0 1-.793.114l-2.234-2.234a1 1 0 0 0-.707-.293H9.414a1 1 0 0 0-.707.293l-2.234 2.234a.5.5 0 0 1-.793-.114l-2.495-4.575a.5.5 0 0 1 .095-.603l1.94-1.832C5.077 14.626 5 13.823 5 13zm1.476 6.696l.817-.817A3 3 0 0 1 9.414 18h5.172a3 3 0 0 1 2.121.879l.817.817.982-1.8-1.1-1.04a2 2 0 0 1-.593-1.82c.124-.664.187-1.345.187-2.036 0-3.87-1.995-7.3-5-8.96C8.995 5.7 7 9.13 7 13c0 .691.063 1.372.187 2.037a2 2 0 0 1-.593 1.82l-1.1 1.039.982 1.8zM12 13a2 2 0 1 1 0-4 2 2 0 0 1 0 4z"></path></svg>
                 <span><a href='currencies'>Learn more</a></span>
            </button></span>
        </div>

        <div class="card" data-aos="zoom-in">
            <span class="card_img"><img src='img/newitem/c.webp'></span>
            <span class="card_title">Stocks</span>
            <span class="card_txt">Trade stocks of the biggest names in the international stock market with low transaction costs</span>
            <span class="card_btn">
            <button class="btn2">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path fill="none" d="M0 0h24v24H0z"></path><path fill="currentColor" d="M5 13c0-5.088 2.903-9.436 7-11.182C16.097 3.564 19 7.912 19 13c0 .823-.076 1.626-.22 2.403l1.94 1.832a.5.5 0 0 1 .095.603l-2.495 4.575a.5.5 0 0 1-.793.114l-2.234-2.234a1 1 0 0 0-.707-.293H9.414a1 1 0 0 0-.707.293l-2.234 2.234a.5.5 0 0 1-.793-.114l-2.495-4.575a.5.5 0 0 1 .095-.603l1.94-1.832C5.077 14.626 5 13.823 5 13zm1.476 6.696l.817-.817A3 3 0 0 1 9.414 18h5.172a3 3 0 0 1 2.121.879l.817.817.982-1.8-1.1-1.04a2 2 0 0 1-.593-1.82c.124-.664.187-1.345.187-2.036 0-3.87-1.995-7.3-5-8.96C8.995 5.7 7 9.13 7 13c0 .691.063 1.372.187 2.037a2 2 0 0 1-.593 1.82l-1.1 1.039.982 1.8zM12 13a2 2 0 1 1 0-4 2 2 0 0 1 0 4z"></path></svg>
                 <span><a href='stocks'>Learn more</a></span>
            </button></span>
        </div>

        <div class="card" data-aos="zoom-in">
            <span class="card_img"><img src='img/newitem/gold.jpg'></span>
            <span class="card_title">Commodities</span>
            <span class="card_txt">Diversify your portfolio and trade oil, natural gas and metals</span>
            <span class="card_btn">
            <button class="btn2">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path fill="none" d="M0 0h24v24H0z"></path><path fill="currentColor" d="M5 13c0-5.088 2.903-9.436 7-11.182C16.097 3.564 19 7.912 19 13c0 .823-.076 1.626-.22 2.403l1.94 1.832a.5.5 0 0 1 .095.603l-2.495 4.575a.5.5 0 0 1-.793.114l-2.234-2.234a1 1 0 0 0-.707-.293H9.414a1 1 0 0 0-.707.293l-2.234 2.234a.5.5 0 0 1-.793-.114l-2.495-4.575a.5.5 0 0 1 .095-.603l1.94-1.832C5.077 14.626 5 13.823 5 13zm1.476 6.696l.817-.817A3 3 0 0 1 9.414 18h5.172a3 3 0 0 1 2.121.879l.817.817.982-1.8-1.1-1.04a2 2 0 0 1-.593-1.82c.124-.664.187-1.345.187-2.036 0-3.87-1.995-7.3-5-8.96C8.995 5.7 7 9.13 7 13c0 .691.063 1.372.187 2.037a2 2 0 0 1-.593 1.82l-1.1 1.039.982 1.8zM12 13a2 2 0 1 1 0-4 2 2 0 0 1 0 4z"></path></svg>
                 <span><a href='commodities'>Learn more</a></span>
            </button>
        </span>
        </div>
        
    </div>
</div>

<!-- ticker tape  -->
<div class="ticker_tape">
<!-- TradingView Widget BEGIN -->
<div class="tradingview-widget-container">
  <div class="tradingview-widget-container__widget"></div>
  <!-- <div class="tradingview-widget-copyright">
    <a href="https://www.tradingview.com/" rel="noopener nofollow" target="_blank"><span class="blue-text"> </span></a>
</div> -->
  <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-ticker-tape.js" async>
  {
  "symbols": [
    {
      "proName": "FOREXCOM:SPXUSD",
      "title": "S&P 500"
    },
    {
      "proName": "FOREXCOM:NSXUSD",
      "title": "US 100"
    },
    {
      "proName": "FX_IDC:EURUSD",
      "title": "EUR to USD"
    },
    {
      "proName": "BITSTAMP:BTCUSD",
      "title": "Bitcoin"
    },
    {
      "proName": "BITSTAMP:ETHUSD",
      "title": "Ethereum"
    },
    {
      "description": "AUD to USD",
      "proName": "OANDA:AUDUSD"
    },
    {
      "description": "Tesla",
      "proName": "NASDAQ:TSLA"
    }
  ],
  "showSymbolLogo": true,
  "colorTheme": "light",
  "isTransparent": false,
  "displayMode": "adaptive",
  "locale": "en"
}
  </script>
</div>
<!-- TradingView Widget END -->
</div>

<!-- WORKING ON THE FOURTH SECTION -->



<div class='section_four'>
    <div data-aos="fade-up"><p><h1>How to <span style='color:var(--pri-color)'>get started</span> with PROEDGETRADES</h1></p></div>
    <div data-aos="fade-down">
        <div>
            <span>1</span>
            <span class="card_icon">
                <i class="material-symbols-outlined">
                person_add
                </i></span>
            <span>Create an account</span>
            <span>Click the button below and follow our easy account setup process</span>
        </div>
        <div>
            <span>2</span>
            <span class="card_icon">
                <i class="material-symbols-outlined">
                payments
                </i>
            </span>
            <span>Make a deposit</span>
            <span>Get ready to take advantage of the next trading opportunity</span>
        </div>
        <div>
            <span>3</span>
            <span class="card_icon">
                <i class="material-symbols-outlined">
                monitoring
                </i>
            </span>
            <span>Start Trading</span>
            <span>Open your trading platform and place your first trade with PROEDGETRADES</span>
        </div>
    </div>
    <div>
        
        <button onclick="regpage()" class="button">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M17.593 3.322c1.1.128 1.907 1.077 1.907 2.185V21L12 17.25 4.5 21V5.507c0-1.108.806-2.057 1.907-2.185a48.507 48.507 0 0111.186 0z"></path>
                </svg>
            Open account
        </button>
            <!-- <a href='register'>Open an account</a> -->
    </div>
</div>




<!-- WORKING ON THE FIFTH SECTION -->

<div class='section_six'>
    <section>
        <div data-aos="fade-up">
            <i class="material-symbols-outlined iconx">groups</i>
            <span id="counter-container">
                <p class="counter" id="counter1">800</p>
                <p>K+</p>
            </span>
            <p class="line"></p>
            <p>satisfied users</p>
        </div>
        <div>
            <i class="material-symbols-outlined iconx">candlestick_chart</i>
            <span id="counter-container">
                <p class="counter" id="counter2">0+</p>
                <p>M+</p>
            </span>
            <p class="line"></p>
            <p>trading volume</p>
        </div>
        <div>
            <i class="material-symbols-outlined iconx">credit_score</i>    
            <span id="counter-container">
                <p class="counter" id="counter3">0</p>
                <p>M+</p>
            </span>
            <p class="line"></p>
            <p>withdrawals</p>
        </div>
</section>
    <script>
        var targetElement = document.getElementById('counter-container');
        
        var counterLimits = [900, 1200, 1500];

        var currentCounts = [0, 0, 0];

        var observer = new IntersectionObserver(function(entries) {
            entries.forEach(function(entry) {
                if (entry.isIntersecting) {
                    startCounting();
                    observer.unobserve(entry.target);
                }
            });
        });

        observer.observe(targetElement);

        function startCounting() {
            var counters = document.querySelectorAll('.counter');

            counters.forEach(function(counter, index) {
                var interval = setInterval(function() {
                    currentCounts[index]++;
                    counter.textContent = currentCounts[index];

                    if (currentCounts[index] === counterLimits[index]) {
                        clearInterval(interval);
                    }
                }, 5);
            });
        }
    </script>
</div>


<!-- WORKING ON THE SIXTH SECTION -->

<div class='section_five'>
    <div data-aos="fade-down"><p><h1>Ready To <span style='color:var(--pri-color)'>Develop</span> Your Strategy</h1></p><p style='font-size:20px'>At PROEDGETRADES, You'll Find Everything You Need To Get Started.</p></div>
    <div>
        <div>
            <span>Advanced trading platform for desktop and mobile</span>
            <span data-aos="zoom-in"><img src='img/advance.png'></span>
        </div>
        <div>
            <span>Insightful market analysis and news</span>
            <span data-aos="zoom-in"><img src='img/insight.png'></span>
        </div>
        <div>
            <span data-aos="zoom-in">Fundamental and technical analysis tool</span>
            <span><img src='img/fundamental.png'></span>
        </div>
    </div>
    <!-- <div> -->
        
    <button class="btn2" data-aos="fade-down">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path fill="none" d="M0 0h24v24H0z"></path><path fill="currentColor" d="M5 13c0-5.088 2.903-9.436 7-11.182C16.097 3.564 19 7.912 19 13c0 .823-.076 1.626-.22 2.403l1.94 1.832a.5.5 0 0 1 .095.603l-2.495 4.575a.5.5 0 0 1-.793.114l-2.234-2.234a1 1 0 0 0-.707-.293H9.414a1 1 0 0 0-.707.293l-2.234 2.234a.5.5 0 0 1-.793-.114l-2.495-4.575a.5.5 0 0 1 .095-.603l1.94-1.832C5.077 14.626 5 13.823 5 13zm1.476 6.696l.817-.817A3 3 0 0 1 9.414 18h5.172a3 3 0 0 1 2.121.879l.817.817.982-1.8-1.1-1.04a2 2 0 0 1-.593-1.82c.124-.664.187-1.345.187-2.036 0-3.87-1.995-7.3-5-8.96C8.995 5.7 7 9.13 7 13c0 .691.063 1.372.187 2.037a2 2 0 0 1-.593 1.82l-1.1 1.039.982 1.8zM12 13a2 2 0 1 1 0-4 2 2 0 0 1 0 4z"></path></svg>
                 <span><a href='register'>Start exploring</a></span>
    </button>
            <!-- </div> -->
</div>


<!-- Working on the seventh section  -->


<div class="section_seven">
    
    <div id="reviews-container" data-aos="fade-up">
        <div id="reviews-list">
            <!-- Predefined Reviews -->


            <div class="review">
                <div class="imagex" id="img2i"></div>
                <strong>Ibrahim Al-Sabaa (Mr. Ibo) - Germany</strong>
                <span>
                <i class="material-symbols-outlined">star</i>
                <i class="material-symbols-outlined">star</i>
                <i class="material-symbols-outlined">star</i>
                <i class="material-symbols-outlined">star</i>
                <i class="material-symbols-outlined">star</i>
        </span>
                <p>As someone who values precision and efficiency in trading, I can confidently say that ProEdgeTrades stands out in the world of online trading. The diverse range of financial instruments, coupled with their competitive spreads and lightning-fast execution, makes every trading session with ProEdgeTrades a rewarding experience. The platform has truly set a benchmark for excellence.</p>
            </div>

            <div class="review">
                <div class="imagex" id="img3i"></div>
                <strong>Alexander Gerchik - United States</strong>
                <span>
                <i class="material-symbols-outlined">star</i>
                <i class="material-symbols-outlined">star</i>
                <i class="material-symbols-outlined">star</i>
                <i class="material-symbols-outlined">star</i>
                <i class="material-symbols-outlined">star</i>
        </span>
                <p>ProEdgeTrades has not only provided me with a robust platform for trading, but it has also fostered a sense of community among traders. The educational resources and market insights offered by ProEdgeTrades have played a pivotal role in enhancing my trading skills. I've learned and earned with ProEdgeTrades, and I highly recommend it to fellow traders.</p>
            </div>

            <div class="review">
                <div class="imagex" id="img4i"></div>
                <strong>Thomas Kralow - United States</strong>
                <span>
                <i class="material-symbols-outlined">star</i>
                <i class="material-symbols-outlined">star</i>
                <i class="material-symbols-outlined">star</i>
                <i class="material-symbols-outlined">star</i>
                <i class="material-symbols-outlined">star_half</i>
        </span>
                <p>ProEdgeTrades has redefined my approach to trading. The platform's commitment to innovation and continuous improvement reflects in the features it offers. From risk management tools to analytical resources, ProEdgeTrades provides a comprehensive toolkit for traders seeking success in the financial markets.</p>
            </div>

            <div class="review">
                <div class="imagex" id="img1"></div>
                <strong>Nolan Brooks</strong>
                <span>
                <i class="material-symbols-outlined">star</i>
                <i class="material-symbols-outlined">star</i>
                <i class="material-symbols-outlined">star</i>
                <i class="material-symbols-outlined">star</i>
                <i class="material-symbols-outlined">star_half</i>
        </span>
                <p>I've been trading with ProEdgeTrades for some time now, and I can attest to the platform's commitment to security and transparency. The peace of mind that comes with knowing my funds are secure, combined with the platform's integrity, makes ProEdgeTrades a trusted partner in my financial journey.</p>
            </div>
            
            <div class="review">
                <div class="imagex" id="img1i"></div>
                <strong>El Sensi - United States</strong>
                <span>
                <i class="material-symbols-outlined">star</i>
                <i class="material-symbols-outlined">star</i>
                <i class="material-symbols-outlined">star</i>
                <i class="material-symbols-outlined">star</i>
                <i class="material-symbols-outlined">star_half</i>
        </span>
                <p>Trading on ProEdgeTrades has been nothing short of incredible for me. The platform's user-friendly interface, real-time market data, and advanced trading tools have empowered me to make informed decisions. The customer support is exceptional, always ready to assist and ensure a seamless experience. ProEdgeTrades has become an integral part of my trading success.</p>
            </div>

            <div class="review">
                <div class="imagex" id="img2"></div>
                <strong>Lucas Chang</strong>
                <span>
                <i class="material-symbols-outlined">star</i>
                <i class="material-symbols-outlined">star</i>
                <i class="material-symbols-outlined">star</i>
                <i class="material-symbols-outlined">star</i>
                <i class="material-symbols-outlined">star</i>
                </span>
                <p>ProEdgeTrades has created an inclusive and supportive trading environment. The cultural diversity among traders adds a unique dimension to the community. The ability to share experiences and insights with traders from different backgrounds has enriched my trading journey on ProEdgeTrades.</p>
            </div>


            <div class="review">
                <div class="imagex" id="img5i"></div>
                <strong>Alex Mendes - France</strong>
                <span>
                <i class="material-symbols-outlined">star</i>
                <i class="material-symbols-outlined">star</i>
                <i class="material-symbols-outlined">star</i>
                <i class="material-symbols-outlined">star</i>
                <i class="material-symbols-outlined">star_half</i>
        </span>
                <p>ProEdgeTrades has been instrumental in helping me navigate the complexities of the financial markets. The personalized account services, along with the array of trading options, have allowed me to tailor my trading strategy to my specific needs. ProEdgeTrades truly understands that success in trading is a personalized journey.</p>
            </div>
            

            <div class="review">
                <div class="imagex" id="img3"></div>
                <strong>Raj Patel</strong>
                <br>
                <span>
                <i class="material-symbols-outlined">star</i>
                <i class="material-symbols-outlined">star</i>
                <i class="material-symbols-outlined">star</i>
                <i class="material-symbols-outlined">star</i>
                <i class="material-symbols-outlined">star</i>
            </span>
                <p>The global accessibility of ProEdgeTrades has been a game-changer for me. Regardless of geographical boundaries, I've been able to trade seamlessly, thanks to the platform's advanced technology. ProEdgeTrades has created a truly borderless trading environment, connecting traders from around the world.</p>
            </div>
            

            <!-- Add more reviews as needed -->
        </div>
    </div>
    
    <script>
        var currentIndex = 0;

        function updateCarousel() {
            var reviewsList = document.getElementById('reviews-list');
            var reviews = document.querySelectorAll('.review');
            var reviewWidth = reviews[0].offsetWidth;

            currentIndex = (currentIndex + 1) % reviews.length;
                                                                                                                                                        
            var transformValue = -currentIndex * reviewWidth + 'px';

            reviewsList.style.transform = `translateX(${transformValue})`;
        }

        setInterval(updateCarousel, 5000);
    </script>
</div>

<!-- faq section -->
<div class="faqSection" id="faq">
    
    <div class="space" data-aos="fade-down">
        <h1>FAQ</h1>
        <p> Here, you'll find answers to commonly asked questions about our platform, services, and trading features. <br>If you have any inquiries or need further assistance, please don't hesitate to reach out. Happy trading!</p>
    </div>

<div class="faq-container">
        <div class="faq-item">
            <span class="question" id="question">
            <h2>What assets does PROEDGETRADES trade?</h2>
            <p class="material-symbols-outlined">expand_more</p>
        </span>
            <p class="answer active">PROEDGETRADES trades a variety of assets including FX currency pairs, stocks, and commodities.</p>
        </div>

        <div class="faq-item" data-aos="fade-right">
            <span class="question">
            <h2>How can I start trading with PROEDGETRADES?</h2>
            <p class="material-symbols-outlined">expand_more</p>
        </span>
            <p class="answer">To start trading, sign up for an account on our platform, deposit funds, and explore our trading options.</p>
        </div>

<div class="faq-item" data-aos="fade-right">
    <span class="question">
    <h2>HOW CAN I WITHDRAW MY FUNDS?</h2>
    <p class="material-symbols-outlined">expand_more</p>
</span>
    <p class="answer">You can make your withdrawals by clicking on the "withdraw" on your dashboard and provide any of your wallet address. Our Instant withdrawal works actively 24/7</p>
</div>

<div class="faq-item" data-aos="fade-right">
    <span class="question">
    <h2>WHAT'S THE MINIMUM TO ACQUIRE AN ACCOUNT AT PROEDGETRADES?</h2>
    <p class="material-symbols-outlined">expand_more</p>
</span>
    <p class="answer">Our minimum investment is 200 USD on the Basic Plan.</p>
</div>

<div class="faq-item" data-aos="fade-right">
    <span class="question">
    <h2> HOW CAN I FUND MY ACCOUNT?</h2>
    <p class="material-symbols-outlined">expand_more</p>
</span>
    <p class="answer">At PROEDGETRADES, we only accept Cryptocurrency. Make a cryptocurrecy-equivalent deposit of your chosen amount and transfer to the address that is showing in your deposit dashboard.</p>
</div>

<div class="faq-item" data-aos="fade-right">
    <span class="question">
    <h2>WHY CHOOSE OUR SERVICES IN YOUR BUSINESS?</h2>
    <p class="material-symbols-outlined">expand_more</p>
</span>
    <p class="answer">We offer trusted services with professionals in the field of investment and we make our investors transact with us with ease.</p>
</div>

<div class="faq-item" data-aos="fade-right">
    <span class="question">
    <h2>HOW LONG WILL IT TAKE TO PROCESS PAYMENTS?</h2>
    <p class="material-symbols-outlined">expand_more</p>
</span>
    <p class="answer">Our payment processing time depends on the processing rules at the sender's bank as well as on the total number of banks involved in the transfer. In most cases, processing should take anywhere from 2 to 7 business days. Occasionally, when a wire transfer is made from a smaller bank which uses a number of other banks to make wire transfers, it may take as much as 10 business days for the funds to be posted to your account. But for BITCOIN TRANSACTIONS, payments are expected to drop within 12hrs of withdrawal</p>
</div>

<div class="faq-item" data-aos="fade-right">
    <span class="question">
    <h2>HOW DO I FUND MY INVESTMENT ACCOUNT?</h2>
    <p class="material-symbols-outlined">expand_more</p>
</span>
    <p class="answer">We accept various payment methods, kindly log into your account and select any method that's most convenient to you. Note bitcoin payments are most preferred because its automatic. And does not require manual verification. You can find your account with up to $10,000 All monies are posted to your account and you can withdraw any time.</p>
</div>



        <script>
            
document.addEventListener('DOMContentLoaded', function() {
    const questions = document.querySelectorAll('.question');

    questions.forEach(question => {
        question.addEventListener('click', function() {
            // Close the active answer
            const activeAnswer = document.querySelector('.answer.active');
            if (activeAnswer && activeAnswer !== this.nextElementSibling) {
                activeAnswer.classList.remove('active');
            }

            // Toggle the 'active' class to show/hide the answer
            this.nextElementSibling.classList.toggle('active');
        });
    });
});

        </script>
    </div>
</div>

<script>
  AOS.init();
</script>

<?php require 'footerx.php'; ?>




<!-- WORKING ON JQUERY -->

<script>
$(document).ready(function(){
});

</script>











<!-- </div> -->
</body>
</html>