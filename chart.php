<!-- TradingView Widget BEGIN -->
<div class="tradingview-widget-container" style="height:100%;width:100%">
  <div id="tradingview_739cb" style="height:calc(100% - 32px);width:100%"></div>
  <div class="tradingview-widget-copyright">
    <a href="https://www.tradingview.com/" rel="noopener nofollow" target="_blank">
        <span class="blue-text"> </span>
    </a>
</div>
  <script type="text/javascript" src="https://s3.tradingview.com/tv.js"></script>
  <script type="text/javascript">
  new TradingView.widget(
  {
  "autosize": true,
  "symbol": "NASDAQ:AAPL",
  "timezone": "Etc/UTC",
  "theme": "dark",
  "style": "1",
  "locale": "en",
  "enable_publishing": true,
  "hide_legend": true,
  "withdateranges": true,
  "range": "ALL",
  "hide_side_toolbar": false,
  "allow_symbol_change": true,
  "watchlist": [
    "OANDA:XAUUSD",
    "BITSTAMP:BTCUSD",
    "FX:EURUSD",
    "FX:GBPUSD",
    "OANDA:GBPUSD",
    "NASDAQ:TSLA",
    "BINANCE:BTCUSDT",
    "OANDA:USDJPY",
    "FX:AUDUSD",
    "FX:USDCHF",
    "FX:EURAUD",
    "OANDA:USDZAR",
    "FX:CADJPY",
    "FX:USDJPY",
    "OANDA:GBPJPY",
    "FX:NZDUSD",
    "OANDA:NZDJPY",
    "OANDA:AUDUSD",
    "FX:CADCHF",
    "OANDA:CHFJPY",
    "FOREXCOM:USDCAD"
  ],
  "hotlist": true,
  "calendar": true,
  "container_id": "tradingview_739cb"
}
  );
  </script>
</div>
<!-- TradingView Widget END -->



<div class="col-sm-12 col-md-5 col-lg-6 text-center">
                        <script src="https://static.coinstats.app/widgets/coin-chart-widget.js"></script>
                        <coin-stats-chart-widget type="large" coin-id="bitcoin" width="650" chart-height="300" currency="USD" locale="en" bg-color="#1C1B1B" status-up-color="#74D492" status-down-color="#FE4747" text-color="#FFFFFF" buttons-color="#1C1B1B" chart-color="#FFA959" chart-gradient-from="rgba(255,255,255,0.07)" chart-gradient-to="rgba(0,0,0,0)" border-color="rgba(255,255,255,0.15)" btc-color="#6DD400" eth-color="#67B5FF" chart-label-background="#000000" font="Roboto, Arial, Helvetica" candle-grids-color="rgba(255,255,255,0.1)"></coin-stats-chart-widget>
                    </div>


<!-- TradingView Widget BEGIN -->
<div class="tradingview-widget-container" style="height:100%;width:100%">
  <div id="tradingview_d1a1d" style="height:calc(100% - 32px);width:100%"></div>
  <div class="tradingview-widget-copyright"><a href="https://www.tradingview.com/" rel="noopener nofollow" target="_blank"><span class="blue-text">Track all markets on TradingView</span></a></div>
  <script type="text/javascript" src="https://s3.tradingview.com/tv.js"></script>
  <script type="text/javascript">
  new TradingView.widget(
  {
  "autosize": true,
  "symbol": "FX:EURUSD",
  "interval": "1",
  "timezone": "Etc/UTC",
  "theme": "dark",
  "style": "1",
  "locale": "en",
  "enable_publishing": false,
  "hide_side_toolbar": false,
  "allow_symbol_change": true,
  "container_id": "tradingview_d1a1d"
}
  );
  </script>
</div>
<!-- TradingView Widget END -->



                    <!-- Bitcoin Calculator Form Starts -->
                    <div class="col-md-12 text-center">
                        <form class="bitcoin-calculator" id="bitcoin-calculator">
                            <!-- Input #1 Starts -->
                            <input class="form-input" name="btc-calculator-value" value="1">
                            <!-- Input #1 Ends -->
                            <div class="form-info"><i class="fa fa-bitcoin"></i></div>
                            <div class="form-equal">=</div>
                            <!-- Input/Result Starts -->
                            <input class="form-input form-input-result" name="btc-calculator-result">
                            <!-- Input/Result Ends -->
                            <!-- Select Currency Starts -->
                            <div class="form-wrap">
                                <select id="currency-select" class="form-input select-currency select-primary" name="btc-calculator-currency" data-dropdown-class="select-primary-dropdown"></select>
                            </div>
                            <!-- Select Currency Ends -->
                        </form>
                        <p class="info"><i>* Data updated every 15 minutes</i></p>
                    </div>
                    <!-- Bitcoin Calculator Form Ends -->




                    <!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Countdown Example</title>
</head>
<body>

<table id="myTable">
  <tr>
    <td>Task 1</td>
    <td id="countdownCell">10:00</td>
  </tr>
  <!-- Add more rows as needed -->
</table>

<script>
function startCountdown(durationInSeconds, tableRowId) {
  var countdownCell = document.getElementById("countdownCell");
  var countdown = durationInSeconds;

  function updateCountdown() {
    var minutes = Math.floor(countdown / 60);
    var seconds = countdown % 60;

    countdownCell.textContent = minutes + ":" + (seconds < 10 ? "0" : "") + seconds;

    if (countdown <= 0) {
      clearInterval(countdownInterval);

      // Update the table cell or perform other actions when countdown reaches zero
      countdownCell.textContent = "Completed";
    }

    countdown--;
  }

  // Call the updateCountdown function every second
  var countdownInterval = setInterval(updateCountdown, 1000);
}

// Start the countdown with a duration of 10 minutes for the first row
startCountdown(600, "row1");

// You can start additional countdowns for other rows as needed
// startCountdown(durationInSeconds, tableRowId);
</script>

</body>
</html>
