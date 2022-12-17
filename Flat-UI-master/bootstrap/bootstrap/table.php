<?php $condb=mysqli_connect("localhost","root","root");
mysqli_query($condb,"set names utf8");
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap -->
    <link href="dist/css/bootstrap.css" rel="stylesheet">
    <!-- Optional theme -->
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap-theme.min.css">
    <!--icon font -->
    <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <div class="container-fluid">
    
    	<div class="page-header">
  			<h1><i class="fa fa-user fa-lg"></i> สมาชิก <small>Members</small></h1>
		</div>
        <?php $major=mysqli_query($condb,"select * from science2.scdb_major order by major_id asc");
		while($major2=mysqli_fetch_array($major,MYSQLI_ASSOC)){
		?>
        <fieldset>
        	<legend><?php echo $major2['major_name'];?></legend>
            	<div class="table-responsive">
    	<table class="table table-bordered table-hover">
        	<thead>
            	<tr class="info">
                	<th width="5%">#</th>
                    <th width="60%">ชื่อ - นาสกุล</th>
                    <th width="35%">Email</th>
                </tr>
            </thead>
            <tbody>
            <?php $rs=mysqli_query($condb,"select * from science2.scdb_user where user_major='$major2[major_id]'order by user_name1 asc");
			while($ob=mysqli_fetch_array($rs,MYSQLI_ASSOC)){
			?>
            	<tr>
                	<td><?php echo ++$i.".";?></td>
                    <td><?php echo $ob['user_name1'];?></td>
                    <td><?php echo $ob['user_email'];?></td>
                </tr>
             <?php
			}
			?>
            </tbody>
        </table>
        	</div>
        </fieldset>
        <?php
		}
		?>
        
	</div>
    
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://code.jquery.com/jquery.js"></script>
    <!-- Latest compiled and minified JavaScript -->
	<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
  </body>
</html>
