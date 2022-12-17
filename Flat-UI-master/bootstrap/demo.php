<!doctype html>
<html>
<head>
<meta charset="utf-8">
<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
<link href="http://bootswatch.com/darkly/bootstrap.min.css" rel="stylesheet">
<style>
@import url(https://fonts.googleapis.com/css?family=Kanit:400,400italic,700,700italic&subset=thai,latin);
body{
	font-family: 'Kanit', sans-serif;
}
</style>
</head>

<body>
<div class="container">
	<h1>ฟอร์ม</h1>
	<form data-toggle="validator" role="form">
    	<div class="form-group">
    		<label for="inputName" class="control-label">Name:</label>
    		<input type="text" class="form-control" id="inputName" placeholder="Cina Saffary" required>
  		</div>
        <div class="form-group has-feedback">
        	<label class="control-label">Email:</label>
        	<input type="email" class="form-control" id="inputName" placeholder="" required>
            <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
        </div>
  		<div class="form-group">
    		<button type="submit" class="btn btn-primary">Submit</button>
  		</div>
    </form>
    
    <hr>
    <strong>เนื้อหา Content</strong>
</div>


<script src="bootstrap/js/tests/vendor/jquery.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
<script src="../bootstrap-validator-master/js/validator.js"></script>

<!--<script>
	$('#myForm').validator();
</script>-->
</body>
</html>