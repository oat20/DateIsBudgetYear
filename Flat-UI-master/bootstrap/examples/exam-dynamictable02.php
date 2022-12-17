<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link href="../dist/css/bootstrap.min.css" rel="stylesheet" type="text/css">
</head>

<body>
<div class="container">

	<h1 class="page-header">jQuery Dynamic table input</h1>

	<form action="page2.php" id="frmMain" name="frmMain" method="post">

            <table class="table" border="1" id="myTable">
            <!-- head table -->
            <thead>
              <tr>
                <td width="91"> <div align="center">CustomerID </div></td>
                <td width="98"> <div align="center">Name </div></td>
                <td width="198"> <div align="center">Email </div></td>
                <td width="97"> <div align="center">CountryCode </div></td>
                <td width="59"> <div align="center">Budget </div></td>
                <td width="71"> <div align="center">Used </div></td>
              </tr>
            </thead>
            <!-- body dynamic rows -->
            <tbody></tbody>
            </table>
            <br />
            <input type="button" id="createRows" value="Add">
            <input type="button" id="deleteRows" value="Del">
            <!--<input type="button" id="clearRows" value="Clear">-->
             <center>
             <br>
             <input type="hidden" id="hdnCount" name="hdnCount">
            <input type="submit" value="Submit">
     </form>

</div>

<script type="text/javascript" src="../docs/assets/js/vendor/jquery.min.js"></script>
<script type="text/javascript" src="../dist/js/bootstrap.min.js"></script>

<script type="text/javascript">
$(document).ready(function(){

	var rows = 1;
	$("#createRows").click(function(){
						var tr = "<tr>";
						tr = tr + "<td><input type='text' name='txtCustomerID"+rows+"' id='txtCustomerID"+rows+"' size='5' class='form-control'></td>";
						tr = tr + "<td><input type='text' name='txtName"+rows+"' id='txtName"+rows+"' size='10' class='form-control'></td>";
						tr = tr + "<td><input type='text' name='txtEmail"+rows+"' id='txtEmail"+rows+"' size='15' class='form-control'></td>";
						tr = tr + "<td><input type='text' name='txtCountryCode"+rows+"' id='txtCountryCode"+rows+"' size='5' class='form-control'></td>";
						tr = tr + "<td><input type='text' name='txtBudget"+rows+"' id='txtBudget"+rows+"' size='5' class='form-control'></td>";
						tr = tr + "<td><input type='text' name='txtUsed"+rows+"' id='txtUsed"+rows+"' size='5' class='form-control'></td>";
						tr = tr + "</tr>";
						$('#myTable > tbody:last').append(tr);
					
						$('#hdnCount').val(rows);
						rows = rows + 1;
		});

		$("#deleteRows").click(function(){
				if ($("#myTable tr").length != 1) {
					 $("#myTable tr:last").remove();
				}
		});

		$("#clearRows").click(function(){
				rows = 1;
				$('#hdnCount').val(rows);
				$('#myTable > tbody:last').empty(); // remove all
		});

	});
</script>
</body>
</html>