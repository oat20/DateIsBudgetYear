<?php
header("Content-type:application/json; charset=UTF-8");          

$xml = simplexml_load_file('http://10.13.101.2/karupan/xml/roombkk-xml.php');

//$json_data=array();

foreach($xml->item as $item){
	$json_data[]=array(
		$item->name,
	);
}

$json=json_encode($json_data);
print $json;
?>