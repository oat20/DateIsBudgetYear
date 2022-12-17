<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Typeahead</title>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<link href="dist/css/flat-ui.min.css" rel="stylesheet" type="text/css">
</head>

<body>
<div class="container">

	<div class="page-header">
    	<h2>Typeahead</h2>
    </div>
    <form>
    	<div class="form-group">
        	<input class="form-control" type="text" id="typeahead-demo-02" />
        </div>
    </form>

</div>

<script src="dist/js/vendor/jquery.min.js"></script>
<script src="dist/js/flat-ui.min.js"></script>
<script src="docs/assets/js/prettify.js"></script>
<script src="docs/assets/js/application.js"></script>
<script>
$(document).ready(function(e) {
    var states_02 = new Bloodhound({
	  datumTokenizer: function(d) { return Bloodhound.tokenizers.whitespace(d.word); },
	  //datumTokenizer: function(d) { return Bloodhound.tokenizers.whitespace(d.room); },
	  queryTokenizer: Bloodhound.tokenizers.whitespace,
	  limit: 10,
	  /*local: [
		{ word: "กกก" },
		{ word: "ขขข" },
		{ word: "คคค" },
		{ word: "งงง" },
		{ word: "จจจ" },
		{ word: "ฉฉฉ" }
	  ]*/
	  prefetch: 'dataroom-json.php'
	});

	states_02.initialize();

	$('#typeahead-demo-02').typeahead(null, {
	  name: 'states_02',
	  displayKey: 'word',
	  source: states_02.ttAdapter()
	});
});
</script>
</body>
</html>