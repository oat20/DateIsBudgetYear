<?php
header("Content-type:application/json; charset=utf-8");
header("Cache-Control: no-store, no-cache, must-revalidate");         
header("Cache-Control: post-check=0, pre-check=0", false);

//$condb=mysqli_connect('localhost','root','root','');
//mysqli_query($condb,'set names utf8');
$condb=mysql_connect('localhost','root','root');
mysql_query('set names utf8');

$json_data=array();

$sql="select * from phper2.personel
where per_email != ''
order by per_email asc";
//$rs=mysqli_query($condb,$sql);
$rs=mysql_query($sql);
//while($ob=mysqli_fetch_assoc($rs)){
while($ob=mysql_fetch_assoc($rs)){
	$json_data[]=array(
		"name"=>$ob['per_fnamet'],
		"email"=>$ob['per_email'].', '.$ob['per_fnamet'],
	);
}

$json= json_encode($json_data);
print $json;

mysqli_close();
?>