<head>
	<link rel="shortcut icon" href="../img/newitem/A0.png" type="image/x-icon">
</head>
<div>
	<?php 
	require("general_nav.php");
	require ("../loader.php"); 
	require("../connect.php");
	// require("investment_done.php");
    ?>	
</div>

<div id="copied"></div>


<!-- WORKING ON THE VERIFICATION OF EMAIL  -->
<!-- <i class="material-symbols-outlined">account_circle</i>  -->


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

		<div class="chartHolder">
			<div class="chartText">
				<span>
					<p>Real Account</p>
					<p style="font-size: .8em"><?php echo $row_details['email']; ?></p>
				</span>
				<span>
					<p>$<?php echo $row_details['spot']; ?></p>
					<p>Net Balance: $<?php echo $row_details['spot']; ?></p>
				</span>
			</div>


<section class="chartSect">

	<div class="chartDiv">
		<section id="charts">
			<!-- section starts here -->
			
			<div class="tradingview-widget-container" id="tradingview_container" >
			<div id="tradingview_chart" style="height: calc(100% - 32px); width: 100%; display: block;"></div>
			<div class="tradingview-widget-copyright">
				<a href="https://www.tradingview.com/?utm_source=localhost&amp;utm_medium=widget_new&amp;utm_campaign=chart&amp;utm_term=FX%3AEURUSD" rel="noopener nofollow" target="_blank">
				<span class="blue-text">Track all markets on TradingView</span>
				</a>
			</div>
			</div>
			<!-- section ends here -->
		</section>
	</div>


	<div class="buySell">
		<form action="" method="post" name="myFormx" class="myForm">

			<div class="form_cont">
				<label for="pairs">Options</label>
				<select id="pairs" onchange="changeCategory()" name="trade_market">
					<option value="forex">Forex</option>
					<option value="crypto">Crypto</option>
					<option value="stock">Stocks</option>
				</select>
			</div>
			
			<div class="form_cont">
				<label for="comm">Commodity</label>
				<select id="comm"  onchange="changeSymbol()" name='pair'>

					<!-- Options for Forex -->
					<optgroup label="Forex">
					<option value="FX:GBPUSD">GBPUSD</option>
					<option value="FX:EURUSD">EURUSD</option>
                    <option value="FX:USDCHF">USDCHF</option>
                    <option value="FX:NZDUSD">NZDUSD</option>
                    <option value="FX:AUDUSD">AUDUSD</option>
                    <option value="FX:EURCAD">EURCAD</option>
                    <option value="FX:EURAUD">EURAUD</option>
                    <option value="FX:EURJPY">EURJPY</option>
                    <option value="FX:GBPCHF">GBPCHF</option>
                    <option value="FX:GBPJPY">GBPJPY</option>
                    <option value="FX:CHFJPY">CHFJPY</option>
                    <option value="FX:AUDJPY">AUDJPY</option>
                    <option value="FX:AUDNZD">AUDNZD</option>
					</optgroup>

					<!-- Options for Crypto -->
					<optgroup label="Crypto">
					<option value="BINANCE:ETHBTC">ETHBTC</option>
					<option value="BINANCE:BTCUSDT">BTCUSDT</option>
                    <option value="BINANCE:DOGEBTC">DOGE/BTC</option>
                    <option value="BINANCE:BNBBTC">BNB/BTC</option>
                    <option value="BINANCE:BTTBTC">BTT/BTC</option>
                    <option value="BINANCE:XMRBTC">XMR/BTC</option>
                    <option value="BINANCE:XMRETH">XMR/ETH</option>
                    <option value="BINANCE:NEOBTC">NEO/BTC</option>
                    <option value="BINANCE:NEOETH">NEO/ETH</option>
                    <option value="BINANCE:ADABTC">ADA/BTC</option>
                    <option value="BINANCE:ADAETH">ADA/ETH</option>
                    <option value="BINANCE:XRPBTC">XRP/BTC</option>
                    <option value="BINANCE:TRXBTC">TRX/BTC</option>
                    <option value="BINANCE:BCHBTC">BCH/BTC</option>
                    <option value="BINANCE:LTCBTC">LTC/BTC</option>
                    <option value="BINANCE:BNBETH">BNB/ETH</option>
                    <option value="BINANCE:BNBETH">BNB/ETH</option>
                    <option value="BINANCE:XRPETH">XRP/ETH</option>
                    <option value="BINANCE:TRXETH">TRX/ETH</option>
                    <option value="BINANCE:LTCETH">LTC/ETH</option>
					</optgroup>

					<!-- Options for Stocks -->
					<optgroup label="Stocks">
					<option value="NASDAQ:TSLA">TSLA</option>
					<option value="NASDAQ:AAPL">AAPL</option>
					<option value="NASDAQ:GOOGL">Google Inc.</option>
                    <option value="NASDAQ:INTC">Intel Corporation</option>
                    <!-- <option value="NASDAQ:KO">Coca-Cola Company (The)</option> -->
                    <option value="NASDAQ:MSFT">Microsoft Corporation</option>
                    <option value="NASDAQ:APPL">Apple Computer, Inc.</option>
                    <option value="NASDAQ:EBAY">eBay Inc.</option>
                    <option value="NASDAQ:DELL">Dell Inc..</option>
                    <option value="NASDAQ:ORCL">Oracle Corporation</option>
                    <option value="NASDAQ:DIS">Walt Disney Company (The)</option>
                    <option value="NASDAQ:UL">Unilever PLC</option>
                    <option value="NASDAQ:AMZN">Amazon.inc</option>
                    <option value="NASDAQ:TSLA">TESLA INC</option>
                    <option value="NASDAQ:NFLX">NETFLIX INC</option>
					</optgroup>
				</select>
				
			</div>
			
			<div class="form_cont">
				<label for="intervalSelect">Time Frame</label>
				<select id="intervalSelect" onchange="changeDefaultInterval()" name="time">
					<option value="1" >1 minute</option>
					<option value="5" >5 minutes</option>
					<option value="15" >15 minutes</option>
					<option value="30">30 minutes</option>
					<option value="60">1 hour</option>
					<option value="240">4 hours</option>
				</select>
			</div>

			
			<div class="form_cont">
				<label for="amount">Amount</label>
				<input type="number" name="trade_amt" id="amount" placeholder="0"  name='trade_amt' required onkeyup="calculateProfit()">
			</div>
			
			<!-- <div class="form_cont">
				<label id="profit">Profit: $0 USD</label>
			</div> -->

			<div class="form_cont">
				<label for="percentage">Percentage Return</label>
				<select  name="percentage" id="percentage" onchange="calculateProfit()">
					<option value="5">5%</option>
					<option value="10">10%</option>
					<option value="20">20%</option>
					<option value="30">30%</option>
					<option value="40">40%</option>
					<option value="50">50%</option>
					<option value="60">60%</option>
					<option value="70">70%</option>
					<option value="80">80%</option>
					<option value="90">90%</option>
					<option value="100">100%</option>
				</select>
			</div>
			
			<div class="form_cont">
				<button type="submit" name="buy_btn" id="buy">Buy</button>
			</div>

			
			<div class="form_cont">
				<label for="cent">Strike Rate</label>
				<select  name="strike" id="cent">
					<option value="1%" selected="selected">1% & 3%</option>
					<option value="2%">2% & 3%</option>
					<option value="5%">5% & 5%</option>
					<option value="3%">2% & 5%</option>
					<option value="21%">21% & 49%</option>
				</select>
			</div>
			
			<div class="form_cont">
				<button type="submit" id="sell" name="sell_btn">Sell</button>
			</div>
		</form>
	</div>
</section>
		</div>

		
		<script type="text/javascript" src="https://s3.tradingview.com/tv.js"></script>
			<script type="text/javascript">
				var tvWidget;
				var defaultCategory = 'forex';
				var defaultSymbol = 'FX:EURUSD';

				function createTradingViewWidget(category, symbol, interval) {
					if (tvWidget) {
					tvWidget.remove();
					}

					tvWidget = new TradingView.widget({
					"autosize": true,
					"symbol": symbol,
					"interval": interval,
					"timezone": "Etc/UTC",
					"theme": "dark",
					"style": "1",
					"locale": "en",
					"enable_publishing": false,
					"withdateranges": true,
					"hide_side_toolbar": false,
					"allow_symbol_change": true,
					"studies": [
						"STD;Bollinger_Bands",
						"STD;RSI"
					],
					"container_id": "tradingview_chart"
					});
				}

			
				function changeCategory() {
				var categorySelect = document.getElementById("pairs");
				defaultCategory = categorySelect.options[categorySelect.selectedIndex].value;
				updateSymbolOptions();
			}

			function updateSymbolOptions() {
			var symbolSelect = document.getElementById("comm");
			symbolSelect.innerHTML = "";

			switch (defaultCategory) {
      case 'forex':
        addOptionsToSelect([
          { value: 'FX:EURUSD', text: 'EURUSD' },
          { value: 'FX:GBPUSD', text: 'GBPUSD' },
		  { value: 'FX:USDCHF', text: 'USDCHF' },
		  { value: 'FX:NZDUSD', text: 'NZDUSD' },
		  { value: 'FX:AUDUSD', text: 'AUDUSD' },
		  { value: 'FX:EURCAD', text: 'EURCAD' },
		  { value: 'FX:EURAUD', text: 'EURAUD' },
		  { value: 'FX:EURJPY', text: 'EURJPY' },
		  { value: 'FX:GBPCHF', text: 'GBPCHF' },
		  { value: 'FX:GBPJPY', text: 'GBPJPY' },
		  { value: 'FX:CHFJPY', text: 'CHFJPY' },
		  { value: 'FX:AUDJPY', text: 'AUDJPY' },
		  { value: 'FX:AUDNZD', text: 'AUDNZD' },
        ]);
        break;
      case 'crypto':
        addOptionsToSelect([
          { value: 'BINANCE:ETHBTC', text: 'ETHBTC' },
          { value: 'BINANCE:BTCUSDT', text: 'BTCUSDT' },
		  { value: "BINANCE:DOGEBTC", text: "DOGEBTC" },
		  { value: "BINANCE:BNBBTC",  text: "BNBBTC" },
		  { value: "BINANCE:XMRBTC",  text: "XMRBTC" },
		  { value: "BINANCE:XMRETH",  text: "XMRETH" },
		  { value: "BINANCE:NEOBTC",  text: "NEOBTC" },
		  { value: "BINANCE:NEOETH",  text: "NEOETH" },
		  { value: "BINANCE:ADABTC",  text: "ADABTC" },
		  { value: "BINANCE:ADAETH",  text: "ADAETH" },
		  { value: "BINANCE:XRPBTC",  text: "XRPBTC" },
		  { value: "BINANCE:TRXBTC",  text: "TRXBTC" },
		  { value: "BINANCE:BCHBTC",  text: "BCHBTC" },
		  { value: "BINANCE:LTCBTC",  text: "LTCBTC" },
		  { value: "BINANCE:BNBETH",  text: "BNBETH" },
		  { value: "BINANCE:BNBETH",  text: "BNBETH" },
		  { value: "BINANCE:XRPETH",  text: "XRPETH" },
		  { value: "BINANCE:TRXETH",  text: "TRXETH" },
		  { value: "BINANCE:LTCETH",  text: "LTCETH" },
        ]);
        break;
      case 'stock':
        addOptionsToSelect([
          { value: 'NASDAQ:TSLA', text: 'TESLA INC' },
          { value: 'NASDAQ:AAPL', text: 'Apple Computer, Inc.' },
		  { value: "NASDAQ:GOOGL", text: "Google Inc."},
		  { value: "NASDAQ:INTC",  text: "Intel Corporation"},
		  { value: "KO",    text: "Coca-Cola Company"},
		  { value: "NASDAQ:MSFT",  text: "Microsoft Corporation"},
		  { value: "NASDAQ:EBAY",  text: "eBay Inc."},
		  { value: "DELL",  text: "Dell Inc."},
		  { value: "ORCL",  text: "Oracle Corporation"},
		  { value: "DIS",   text: "Walt Disney Company (The)"},
		  { value: "UL",    text: "Unilever PLC"},
		  { value: "NASDAQ:AMZN",  text: "Amazon.inc"},
		  { value: "NASDAQ:NFLX",  text: "NETFLIX INC"},
        ]);
        break;
    }

    changeSymbol();

 
		}

		function addOptionsToSelect(options) {
		var symbolSelect = document.getElementById("comm");
		options.forEach(function(option) {
		var optionElement = document.createElement("option");
		optionElement.value = option.value;
		optionElement.text = option.text;
		symbolSelect.add(optionElement);
		});
	}

	function changeSymbol() {
		var symbolSelect = document.getElementById("comm");
		defaultSymbol = symbolSelect.options[symbolSelect.selectedIndex].value;
		createTradingViewWidget(defaultCategory, defaultSymbol, '1');
	}

	function changeDefaultInterval() {
  var intervalSelect = document.getElementById("intervalSelect");
  var selectedInterval = intervalSelect.options[intervalSelect.selectedIndex].value;

  createTradingViewWidget(defaultCategory, defaultSymbol, selectedInterval);
}

	updateSymbolOptions();


			</script>

		
		<!-- <script>

			// function for calc amt and %
        function calculateProfit() {
            // Get the entered amount and selected percentage
            var amount = parseFloat(document.getElementById('amount').value) || 0;
            var percentage = parseFloat(document.getElementById('percentage').value) || 0;

            // Calculate the profit
            var profit = (amount * percentage) / 100;

            // Update the profit display
            var profitDisplay = document.getElementById('profit');
            profitDisplay.textContent = 'Profit: $' + profit.toFixed(2);
        }
    </script> -->

	


<?php 

if(isset($_POST['buy_btn'])){
function clean($value){
	require("../connect.php");
	$value=trim($value);
	$value=htmlspecialchars($value);
	$value=htmlentities($value);
	$value=stripslashes($value);
	$value=mysqli_real_escape_string($conn,$value);
	return $value;
}

$market=clean($_POST['trade_market']);
$pair=clean($_POST['pair']);
$duration=clean($_POST['time']);
$amt=clean($_POST['trade_amt']);
$user_percent=clean($_POST['percentage']);
$strike=clean($_POST['strike']);
$account='spot';
$date=date("d-m-y, h:i:s a");
$buy_sell='buy';


if($amt > $row_details['spot']){ ?>

<script type="text/javascript">
			Swal.fire({
			text: 'Insufficient Spot balance, fund account to trade',
			icon: 'error',
				customClass: {
					content: 'custom-swal-text'
				}
			});
		</script>

<?php
}
else if($amt == 0){ ?>

<script type="text/javascript">
			Swal.fire({
			text: 'Insufficient Demo balance, fund account to trade',
			icon: 'error',
				customClass: {
					content: 'custom-swal-text'
				}
			});
		</script>

<?php
}
else{

	$in_trade="insert into trading_table(name,email,date,account_type,amount,trade_market,trade_signal,user_percent,strike_rate,plan,buy_sell,profit,total_return,accept_time,completed_time,duration,percent_return,status,trader_id)values('$sess_user','$sess_mail','$date','$account','$amt','$market','$pair','$user_percent','$strike','','$buy_sell','','--','','','$duration','--','awaiting','$sess_id')";
	$in_trade_done=$conn->query($in_trade);

	if($in_trade_done){ ?>

<script type="text/javascript">
			Swal.fire({
			text: 'Done',
			icon: 'success',
				customClass: {
					content: 'custom-swal-text'
				}
			});
			window.location.href = 'active-trade.php'
		</script>

	<?php
	}
}}
?>


<?php 

if(isset($_POST['sell_btn'])){
function clean($value){
	require("../connect.php");
	$value=trim($value);
	$value=htmlspecialchars($value);
	$value=htmlentities($value);
	$value=stripslashes($value);
	$value=mysqli_real_escape_string($conn,$value);
	return $value;
}


$market=clean($_POST['trade_market']);
$pair=clean($_POST['pair']);
$duration=clean($_POST['time']);
$amt=clean($_POST['trade_amt']);
$user_percent=clean($_POST['percentage']);
$strike=clean($_POST['strike']);
$account='spot';
$date=date("d-m-y, h:i:s a");
$buy_sell='sell';


if($amt > $row_details['spot']){ ?>


<script type="text/javascript">
			Swal.fire({
			text: 'Insufficient spot balance, fund account to trade',
			icon: 'error',
				customClass: {
					content: 'custom-swal-text'
				}
			});
		</script>


<?php
}
else{

	$in_trade="insert into trading_table(name,email,date,account_type,amount,trade_market,trade_signal,user_percent,strike_rate,plan,buy_sell,profit,total_return,accept_time,completed_time,duration,percent_return,status,trader_id)values('$sess_user','$sess_mail','$date','$account','$amt','$market','$pair','$user_percent','$strike','','$buy_sell','','--','','','$duration','--','awaiting','$sess_id')";
	$in_trade_done=$conn->query($in_trade);

	if($in_trade_done){ ?>


<script type="text/javascript">
			Swal.fire({
			text: 'Done',
			icon: 'success',
				customClass: {
					content: 'custom-swal-text'
				}
			});
			window.location.href = 'active-trade.php'
		</script>
	<?php
	}
}}
?>


<style>
        .custom-swal-text {
            font-size: 14px;
            text-transform: capitalize;
        }
</style>