<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="../dist/css/bootstrap.min.css" rel="stylesheet" type="text/css">
<style>
@import 'fonts/thsarabunnew/fonts/thsarabunnew.css';
body{
	font-family: 'THSarabunNew', sans-serif;
	font-size: 15px;
}
</style>
</head>

<body>
<nav class="navbar navbar-inverse navbar-static-top">
	<div class="container-fluid">
    	<!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#"><i class="glyphicon glyphicon-arrow-left"></i> Navs</a>
        </div>
        
    </div>
</nav>

<div class="container-fluid">
	<!--<h1 class="page-header">Navs</h1>-->
    
	<div class="row">
    	<div class="col-sm-2">
        	
        	<ul class="nav nav-pills nav-stacked">
              <li role="presentation"><a href="#">Home</a></li>
              <li role="presentation" class="dropdown">
              	<a href="#" class="dropdown-toggle" id="profile" data-toggle="dropdown">Profile <span class="caret"></span></a>
                <ul class="dropdown-menu" aria-labelledby="profile">
                    <li><a href="#">Action</a></li>
                    <li><a href="#">Another action</a></li>
                    <li><a href="#">Something else here</a></li>
                    <li role="separator" class="divider"></li>
                    <li><a href="#">Separated link</a></li>
                  </ul>
              </li>
              <li role="presentation"><a href="#">Messages</a></li>
            </ul>
            <hr/>
            
        </div><!--col-->
        
        <div class="col-sm-6">
        	<div class="panel panel-default">
            	<div class="panel-heading">
                	<h3 class="panel-title">ลงทะเบียน</h3>
                </div>
                <div class="panel-body">
                	<form action="" method="post">
                    	<div class="form-group">
                        	<label class="control-label">Email Address:</label>
                            <input type="text" class="form-control">
                        </div>
                        <button type="submit" class="btn btn-primary"><i class="glyphicon glyphicon-ok"></i> ลงทะเบียน</button>
                    </form>
                </div>
            </div>
        </div><!--col-->
    </div><!--row-->
</div>

<script type="text/javascript" src="../js/tests/vendor/jquery.min.js"></script>
<script type="text/javascript" src="../dist/js/bootstrap.min.js"></script>
</body>
</html>