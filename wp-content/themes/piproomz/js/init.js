(function($) {

	$('body :not(script)').contents().filter(function() {
		return this.nodeType = 3;
	}).replaceWith(function() {
		return this.nodeValue.replace(/-1o9-2202/g,'room');
	});

});


