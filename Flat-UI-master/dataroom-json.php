<?php
header("Content-type:application/json; charset=UTF-8");          

$condb=mysqli_connect('localhost','root','root','');
mysqli_query($condb,'set names utf8');

$json_data=array();

//$xml = simplexml_load_file('http://10.13.101.2/karupan/xml/roombkk-xml.php');

//foreach($xml->item as $item){
	//$name=$item->name;
	//echo iconv("tis-620","utf-8",$name).'<br>';
	//$json_data[]=array(
		//"room"=>iconv('tis-620','utf-8',$name),
		//"room"=>$name,
	//);
//}
$sql="SELECT *
FROM karupan.tb_proom, karupan.tb_pbuild, karupan.tb_pfloor
WHERE karupan.tb_proom.pf_id=karupan.tb_pfloor.pf_id
and karupan.tb_pbuild.pb_id =karupan. tb_pfloor.pb_id
and karupan.tb_pbuild.cp_id='1'
ORDER BY karupan.tb_pbuild.pb_name asc, 
karupan.tb_pfloor.pf_order asc,
karupan.tb_proom.pr_id ASC";
$rs=mysqli_query($condb,$sql);
while($ob=mysqli_fetch_assoc($rs)){
	$json_data[]=array(
		"word"=>$ob['pb_name'].' '.$ob['pf_name'].' '.$ob['pr_name'],
	);
}

$json=json_encode($json_data);
print $json;

mysqli_close($condb);
?>