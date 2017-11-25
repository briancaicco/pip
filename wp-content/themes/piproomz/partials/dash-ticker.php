<p class="h5 mb-3">Realtime Quotes</p>
<div class="forex-ticker">

<!-- 	<p class="h5 mt-3 mt-md-0 mb-3">Major Pairs</p>
 -->
	<div class="col-headings d-flex flex mx-4  mb-1 align-items-start justify-content-between">
		<p>Pair</p>
		<p>Bid</p>
		<p>Ask</p>
		<p>Price</p>
	</div>

	<div class="card mb-2 ticker-pair border-0 super-el">
		<div class="card-body">
			<div class="d-flex flex align-items-start justify-content-between" data-currency-pair="EURUSD">
				<p class="currency-pair font-weight-bold mb-0">EURUSD</p>
				<p class="bid" data-output-bid="" ></p>
				<p class="ask" data-output-ask="" ></p>
				<p class="price" data-output-price="" ></p>
			</div>
		</div>
	</div>
	<div class="card mb-2 ticker-pair border-0 super-el">
		<div class="card-body">
			<div class="d-flex flex align-items-start justify-content-between" data-currency-pair="USDJPY">
				<p class="currency-pair font-weight-bold mb-0">USDJPY</p>
				<p class="bid" data-output-bid="" ></p>
				<p class="ask" data-output-ask="" ></p>
				<p class="price" data-output-price="" ></p>
			</div>
		</div>
	</div>
	<div class="card mb-2 ticker-pair border-0 super-el">
		<div class="card-body">
			<div class="d-flex flex align-items-start justify-content-between" data-currency-pair="GBPUSD">
				<p class="currency-pair font-weight-bold mb-0">GBPUSD</p>
				<p class="bid" data-output-bid="" ></p>
				<p class="ask" data-output-ask="" ></p>
				<p class="price" data-output-price="" ></p>
			</div>
		</div>
	</div>
	<div class="card mb-2 ticker-pair border-0 super-el">
		<div class="card-body">
			<div class="d-flex flex align-items-start justify-content-between" data-currency-pair="USDCHF">
				<p class="currency-pair font-weight-bold mb-0">USDCHF</p>
				<p class="bid" data-output-bid="" ></p>
				<p class="ask" data-output-ask="" ></p>
				<p class="price" data-output-price="" ></p>
			</div>
		</div>
	</div>

<!-- 	<p class="h5 my-3">Commodity Pairs</p>
		<div class="col-headings d-flex flex mx-4 align-items-start justify-content-between">
			<p>Pair</p>
			<p>Bid</p>
			<p>Ask</p>
			<p>Price</p>
		</div>
	<div class="card mb-2 ticker-pair border-0 super-el">
		<div class="card-body">
			<div class="d-flex flex align-items-start justify-content-between" data-currency-pair="AUDUSD">
				<span class="currency-pair">AUD/USD</span>
				<span class="bid" data-output-bid="" ></span>
				<span class="ask" data-output-ask="" ></span>
				<span class="price" data-output-price="" ></span>
			</div>
		</div>
	</div>
	<div class="card mb-2 ticker-pair border-0 super-el">
		<div class="card-body">
			<div class="d-flex flex align-items-start justify-content-between" data-currency-pair="USDCAD">
				<span class="currency-pair">USD/CAD</span>
				<span class="bid" data-output-bid="" ></span>
				<span class="ask" data-output-ask="" ></span>
				<span class="price" data-output-price="" ></span>
			</div>
		</div>
	</div>
	<div class="card mb-2 ticker-pair border-0 super-el">
		<div class="card-body">
			<div class="d-flex flex align-items-start justify-content-between" data-currency-pair="NZDUSD">
				<span class="currency-pair">NZD/USD</span>
				<span class="bid" data-output-bid="" ></span>
				<span class="ask" data-output-ask="" ></span>
				<span class="price" data-output-price="" ></span>
			</div>
		</div>
	</div> -->

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

							jquery_object.find(".p ." + field).removeClass('up down even transition').addClass(direction);
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
