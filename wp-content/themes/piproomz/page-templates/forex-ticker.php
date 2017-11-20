<?php 
/**
 * Template Name: Live Quotes Page
 *
 * Template for displaying a list of forex quotes the full-width of the page.
 *
 * @package piproomz
 */

get_header();
?>

<script type="text/javascript">
	if (!library)
	    var library = {};
	library.json = {
	    replacer: function(match, pIndent, pKey, pVal, pEnd) {
	        var key = '<span class="json key">';
	        var val = '<span class="json value">';
	        var str = '<span class="json string">';
	        var r = pIndent || '';
	        if (pKey)
	            r = r + key + pKey.replace(/[": ]/g, '') + '</span>: ';
	        if (pVal)
	            r = r + (pVal[0] == '"' ? str : val) + pVal + '</span>';
	        return r + (pEnd || '');
	    },
	    prettyPrint: function(obj) { var jsonLine = /^( *)("[\w]+": )?("[^"]*"|[\w.+-]*)?([,[{])?$/mg; return JSON.stringify(obj, null, 5).replace(/&/g, '&amp;').replace(/\\"/g, '&quot;').replace(/</g, '&lt;').replace(/>/g, '&gt;').replace(jsonLine, library.json.replacer); }
	};

	function symbolsOnPage() { 
		var symbols = [];
	    $('[data-symbol]').each(function() { 
	    	symbols.push($(this).attr('data-symbol')); 
	    }); return symbols; 
	}
	// function() {
	//     for (var i = 0; i < arguments.length; i++) { if (this.hasClass(arguments[i])) { return true; } }
	//     return false;
	//};

	// $(document).ready(function() { $(document).foundation(); var conversion_response = library.json.prettyPrint({ "value": 89.3164183, "text": "100 USD is worth 89.3164183 EUR", "timestamp": 1497186516 }); var symbols_response = library.json.prettyPrint(["AUDJPY", "AUDUSD", "CHFJPY", "EURAUD", "EURCAD", "EURCHF", "EURGBP", "EURJPY", "EURUSD", "GBPAUD", "GBPCAD", "GBPCHF", "GBPJPY", "NZDJPY", "NZDUSD", "USDCAD", "USDCHF", "USDJPY", "AUDCAD", "AUDCHF", "etc......."]); var quotes_response = library.json.prettyPrint([{ "symbol": "AUDJPY", "price": 87.6965, "bid": 87.694, "ask": 87.699, "timestamp": 1502160770 }, { "symbol": "AUDUSD", "price": 0.7925, "bid": 0.79249, "ask": 0.79251, "timestamp": 1502160767 }, { "symbol": "CHFJPY", "price": 113.705, "bid": 113.7, "ask": 113.71, "timestamp": 1502160772 }, { "symbol": "EURAUD", "price": 1.490255, "bid": 1.49021, "ask": 1.4903, "timestamp": 1502160770 }, { "symbol": "EURCAD", "price": 1.49628, "bid": 1.49622, "ask": 1.49634, "timestamp": 1502160770 }, { etc: '........' }]); var some_quotes_response = library.json.prettyPrint([{ "symbol": "AUDUSD", "price": 0.792495, "bid": 0.79248, "ask": 0.79251, "timestamp": 1502160793 }, { "symbol": "EURUSD", "price": 1.181, "bid": 1.18099, "ask": 1.18101, "timestamp": 1502160794 }, { "symbol": "GBPJPY", "price": 144.3715, "bid": 144.368, "ask": 144.375, "timestamp": 1502160794 }]); var market_status_response = library.json.prettyPrint({ "market_is_open": true }); var quota_response = library.json.prettyPrint({ "quota_used": 53232, "quot

</script>
<div class="<?php echo esc_attr( $container ); ?>" id="content">
	<div class="row">
		<div class="col">
			<div class="forex-ticker">
				<table class="table">
					<thead>
					  <tr data-currency-pair="">
				    <th>Instrument name</th>
					    <th>Bid Price</th>
					    <th>Ask Price</th>
					    <th>Price</th>
					  </tr>
					</thead>
					<tbody>
					<tr data-currency-pair="EURUSD">
						<td>
							<span class="currency-pair">EUR/USD</span>
						</td>
						<td>
							<span class="bid" data-output-bid="" ></span>
						</td>
						<td>
							<span class="ask" data-output-ask="" ></span>
						</td>
						<td>
							<span class="price" data-output-price="" ></span>
						</td>
					</tr>
					<tr data-currency-pair="USDJPY">
						<td>
							<span class="currency-pair">USD/JPY</span>
						</td>
						<td>
							<span class="bid" data-output-bid="" ></span>
						</td>
						<td>
							<span class="ask" data-output-ask="" ></span>
						</td>
						<td>
							<span class="price" data-output-price="" ></span>
						</td>
					</tr>
					<tr data-currency-pair="GBPUSD">
						<td>
							<span class="currency-pair">GBP/USD</span>
						</td>
						<td>
							<span class="bid" data-output-bid="" ></span>
						</td>
						<td>
							<span class="ask" data-output-ask="" ></span>
						</td>
						<td>
							<span class="price" data-output-price="" ></span>
						</td>
					</tr>
					<tr data-currency-pair="USDCHF">
						<td>
							<span class="currency-pair">USD/CHF</span>
						</td>
						<td>
							<span class="bid" data-output-bid="" ></span>
						</td>
						<td>
							<span class="ask" data-output-ask="" ></span>
						</td>
						<td>
							<span class="price" data-output-price="" ></span>
						</td>
					</tr>
					<tr data-currency-pair="AUDJPY">
						<td>
							<span class="currency-pair">AUD/JPY</span>
						</td>
						<td>
							<span class="bid" data-output-bid="" ></span>
						</td>
						<td>
							<span class="ask" data-output-ask="" ></span>
						</td>
						<td>
							<span class="price" data-output-price="" ></span>
						</td>
					</tr>
					<tr data-currency-pair="EURJPY">
						<td>
							<span class="currency-pair">EUR/JPY</span>
						</td>
						<td>
							<span class="bid" data-output-bid="" ></span>
						</td>
						<td>
							<span class="ask" data-output-ask="" ></span>
						</td>
						<td>
							<span class="price" data-output-price="" ></span>
						</td>
					</tr>
					<tr data-currency-pair="GBPAUD">
						<td>
							<span class="currency-pair">GBP/AUD</span>
						</td>
						<td>
							<span class="bid" data-output-bid="" ></span>
						</td>
						<td>
							<span class="ask" data-output-ask="" ></span>
						</td>
						<td>
							<span class="price" data-output-price="" ></span>
						</td>
					</tr>
					<tr data-currency-pair="EURNZD">
						<td>
							<span class="currency-pair">EUR/NZD</span>
						</td>
						<td>
							<span class="bid" data-output-bid="" ></span>
						</td>
						<td>
							<span class="ask" data-output-ask="" ></span>
						</td>
						<td>
							<span class="price" data-output-price="" ></span>
						</td>
					</tr>
					<tr data-currency-pair="GBPCHF">
						<td>
							<span class="currency-pair">GBP/CHF</span>
						</td>
						<td>
							<span class="bid" data-output-bid="" ></span>
						</td>
						<td>
							<span class="ask" data-output-ask="" ></span>
						</td>
						<td>
							<span class="price" data-output-price="" ></span>
						</td>
					</tr>
					<tr data-currency-pair="XAGUSD">
						<td>
							<span class="currency-pair">XAG/USD</span>
						</td>
						<td>
							<span class="bid" data-output-bid="" ></span>
						</td>
						<td>
							<span class="ask" data-output-ask="" ></span>
						</td>
						<td>
							<span class="price" data-output-price="" ></span>
						</td>
					</tr>
					<tr data-currency-pair="XAUUSD">
						<td>
							<span class="currency-pair">XAU/USD</span>
						</td>
						<td>
							<span class="bid" data-output-bid="" ></span>
						</td>
						<td>
							<span class="ask" data-output-ask="" ></span>
						</td>
						<td>
							<span class="price" data-output-price="" ></span>
						</td>
					</tr>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>
<script type="text/javascript">
jQuery(function ($) {	
	function ForexTicker(update_interval, max_updates) { 
		this.update_interval = update_interval || 500;
		this.max_updates = max_updates || 100000;
		this.current_updates = 0;
		this.max_threads = 1;
		this.threads = 0;
		this.start(); 
	}
	ForexTicker.fields = function() {
		return ['price', 'bid', 'ask']; 
	};

	ForexTicker.prototype.start = function() {
		ForexTicker.updateQuotes(null, true);
		var self = this;
		this.interval = setInterval(function() {
			if (self.current_updates > self.max_updates) { self.stop(); }
			if (self.threads >= self.max_threads) { return; }
			self.threads++;
			ForexTicker.updateQuotes(function() { self.threads--;
				self.current_updates++; });
		}, this.update_interval);
	};
	ForexTicker.prototype.stop = function() { 
		clearInterval(this.interval); 
	};
	ForexTicker.isScrolledIntoView = function(elem) { 
		var leeway = 50; var docViewTop = $(window).scrollTop(); var docViewBottom = docViewTop + $(window).height(); var elemTop = $(elem).offset().top; var elemBottom = elemTop + $(elem).height(); return ((elemBottom <= docViewBottom) && (elemTop >= docViewTop)); 
	};
	ForexTicker.allVisibleCurrencyPairs = function() { 
		var pairs = [];
		$('[data-currency-pair]').each(function() { 
			if (ForexTicker.isScrolledIntoView($(this))) { 
				pairs.push($(this).attr('data-currency-pair')); 
			} 
		}); 
		return pairs; 
	};
	ForexTicker.allCurrencyPairsOnPage = function() { 
		var pairs = [];
		$('[data-currency-pair]').each(function() { 
			pairs.push($(this).attr('data-currency-pair')); 
		});
		return pairs; 
	};
	ForexTicker.updateQuotes = function(when_done, force_all) {
		var all_pairs = [];
		if (force_all) { 
			all_pairs = ForexTicker.allCurrencyPairsOnPage(); 
		} else { 
			all_pairs = ForexTicker.allVisibleCurrencyPairs(); 
		}
		//$.ajax({ url: "https://eu.forex.1forge.com/1.0.2/quotes?api_key=QSVIvodIgopkDm9CMFS6R4ejAF1G302J&referer=" + window.location.hostname + "&pairs=" + all_pairs.join(',') }).done(function(response) {
		$.ajax({ 
			url: "https://eu.forex.1forge.com/1.0.2/quotes?api_key=vJHZqgJf7V3tvd7BA3MGThaB3NqVX7F9&referer=1forge.com" + "&pairs=" + all_pairs.join(',') 
		}).done(function(response) {
			
			for (var i = 0; i < response.length; i++) {
			
				var item = response[i];
			
				var jquery_object = $('[data-currency-pair=' + item.symbol + ']');
				
				var fields = ForexTicker.fields();

				for (var j = 0; j < fields.length; j++) {
					
					var field = fields[j];
					
					var current_value = parseFloat(jquery_object.attr('data-' + field));
					
					var new_value = item[field].toFixed(5);
					
					if (current_value !== new_value) { 

					jquery_object.attr('data-' + field, new_value);

					jquery_object.find( '.' + field ).text(new_value.substring(0, 7)); }
					
					var direction = '';
					
					var transition = '';
					
					if (new_value - current_value > 0) { 
						direction = 'up'; 
					} else if (new_value - current_value < 0) { 
						direction = 'down'; 
					}

					if (direction === '') { 
						direction = 'transition'; 
					}
					
					jquery_object.find(".span ." + field).removeClass('up down even transition').addClass(direction);
				}
			}
			if (when_done) { when_done(); }
		});
	};

	new ForexTicker(100);

});



// $('input[name=currency]').click(function () {
// 	var type = $(this).attr('data-type');
// 	var currency = $(this).val();

// 	if ($(this).is(':checked')) {
// 		$('.' + type + '-' + currency).show();
// 	}
// 	else {
// 		$('.' + type + '-' + currency).hide();
// 	}
// });

</script>
<?php
get_footer(); 
?>
