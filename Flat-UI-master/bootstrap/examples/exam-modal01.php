<?php
session_start();

$condb = mysqli_connect("localhost","root","12345678","ph_hr_eform");
mysqli_query($condb,"set names utf8");
?>
<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link href="../dist/css/bootstrap.min.css" rel="stylesheet" type="text/css">
</head>

<body>
<?php
//insert/updateTemp tb develop_course_time
if($_POST['action'] == 'save'){
	//if(isset($_POST['tempusername']) and isset($_POST['temppassword'])){
		//$_SESSION['_username'] = $_POST['username']; $_SESSION['_dat2'] = $_POST['password'];
		mysqli_query($condb, "insert into develop_course_time (ct_id, ct_date, ct_timestart, ct_sessionid)
			values ('".date('YmdHis')."', '$_POST[tempusername]', '$_POST[temppassword]', '".session_id()."')");			
	//}
}

if($_POST['action'] == 'edit'){
	mysqli_query($condb, "update develop_course_time set
		ct_date = '$_POST[tempusername]',
		ct_timestart = '$_POST[temppassword]'
		where ct_id = '$_POST[id]'");	
}

if($_GET['mode'] == 'remove'){
	mysqli_query($condb, "delete from develop_course_time where ct_id = '$_GET[ct_id]'");
}

unset($_POST['tempusername']); unset($_POST['temppassword']); unset($_POST['id']); unset($_GET['ct_id']);
///insert/updateTemp tb develop_course_time
?>

<div class="container">
	
    <h1 class="page-header">Modal</h1>
    
    <form method="post">
    	<div class="form-group">
        	<input type="text" name="" value="" class="form-control">
        </div>
    </form>
    
    <legend>ระบุวัน / เวลาไปปฏิบัติงาน</legend>
    <button class="btn btn-default" data-toggle="modal" data-target="#loginModal">Add Data</button>
    
    <table class="table table-striped">
    	<thead>
        	<tr>
            	<th>Col #1</th>
                <th>Col #2</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
        	<?php
			//print session_id();
			//$textbox = array();
			//$_SERVER['_username'] = $_POST['username'];
			//array_push($textbox, $_SERVER['_username']);
			//foreach($textbox as $k => $v){
			$sql = mysqli_query($condb, "select * from develop_course_time");
			while($ob = mysqli_fetch_assoc($sql)){
				print '<tr>
							<td>'.$ob['ct_date'].'</td>
							<td>'.$ob['ct_timestart'].'</td>
							<td>
								<div class="btn-group">
									<a href="#" class="btn btn-link edit-data" data-toggle="modal" data-target="#editModal" data-dat1="'.$ob['ct_date'].'" data-dat2="'.$ob['ct_timestart'].'" data-id="'.$ob['ct_id'].'"><i class="glyphicon glyphicon-edit"></i> แก้ไข</a>
									<a href="'.$_SERVER['PHP_SELF'].'?ct_id='.$ob['ct_id'].'&mode=remove" class="btn btn-link"><i class="glyphicon glyphicon-remove"></i> ลบ</a>
								</div>
							</td>
						</tr>';
			}
			//}
			?>
        </tbody>
    </table>
    
    <!--popup add data-->
    <div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="Login" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h4 class="modal-title">ทดสอบ</h4>
            </div>
			
            <form method="post" class="form-horizontal" action="<?php print $_SERVER['PHP_SELF'];?>">
            <div class="modal-body">
                <!-- The form is placed inside the body of modal -->
                    <div class="form-group">
                        <label class="col-xs-3 control-label">Textbox #1</label>
                        <div class="col-xs-9">
                            <input type="text" class="form-control" name="tempusername" />
                        </div>
                    </div>

                    <!--<div class="form-group">
                        <label class="col-xs-3 control-label">Password</label>
                        <div class="col-xs-5">
                            <input type="password" class="form-control" name="password" />
                        </div>
                    </div>-->
                    <div class="form-group">
                        <label class="col-xs-3 control-label">Textbox #2</label>
                        <div class="col-xs-9">
                            <input type="text" class="form-control" name="temppassword" />
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-xs-5 col-xs-offset-3">
                        	<input type="hidden" name="action" value="save">
                            <button type="submit" class="btn btn-primary">Submit</button>
                            <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                        </div>
                    </div>
                
            </div><!--body-->
            <!--<div class="modal-footer">
				<input type="hidden" name="action" value="save">
                <button type="button" class="btn btn-primary">Save changes</button>
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          	</div>--><!--footer-->
            </form>
        </div>
    </div>
</div>
<!--popup add data-->

 <!--popup edit data-->
    <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h4 class="modal-title">ทดสอบ Edit</h4>
            </div>

            <div class="modal-body">
                <!-- The form is placed inside the body of modal -->
                <form method="post" class="form-horizontal" action="<?php print $_SERVER['PHP_SELF'];?>">
                    <div class="form-group">
                        <label class="col-xs-3 control-label">Textbox #1</label>
                        <div class="col-xs-9">
                            <input type="text" class="form-control" name="tempusername" id="dat1" value="" />
                        </div>
                    </div>

                    <!--<div class="form-group">
                        <label class="col-xs-3 control-label">Password</label>
                        <div class="col-xs-5">
                            <input type="password" class="form-control" name="password" />
                        </div>
                    </div>-->
                    <div class="form-group">
                        <label class="col-xs-3 control-label">Textbox #2</label>
                        <div class="col-xs-9">
                            <input type="text" class="form-control" name="temppassword" id="dat2" value="" />
                        </div>
                    </div>
					
					<div class="form-group">
						<div class="col-xs-9 col-xs-offset-3">
							<p class="form-control-static" id="dat1"></p>
						</div>
					</div>

                    <div class="form-group">
                        <div class="col-xs-5 col-xs-offset-3">
                        	<input type="hidden" name="id" id="id" value=""> 
                            <input type="hidden" name="action" value="edit"> 
                            <button type="submit" class="btn btn-primary">Submit</button>
                            <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!--popup edit data-->

</div>

<script type="text/javascript" src="../docs/assets/js/vendor/jquery.min.js"></script>
<script type="text/javascript" src="../dist/js/bootstrap.min.js"></script>
<script>
$('.edit-data').click(function(){
	// get data from edit btn
	var id = $(this).attr('data-id');
	var dat1 = $(this).attr('data-dat1');
	var dat2 = $(this).attr('data-dat2');
	//var lastname = $(this).attr('data-lastname');
	//var email = $(this).attr('data-email');
	//var country = $(this).attr('data-country');
	//var ip = $(this).attr('data-ip');
	// set value to modal
	$("#id").val(id);
	//$("#id").show(id);
	$("#dat1").val(dat1);
	$("#dat2").val(dat2);
	//$("#lastname").val(lastname);
	//$("#email").val(email);
	//$("#country").val(country);
	//$("#ip").val(ip);
});
</script>
</body>
</html>