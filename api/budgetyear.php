<?php
//กำหนดค่า Access-Control-Allow-Origin ให้ เครื่อง อื่น ๆ สามารถเรียกใช้งานหน้านี้ได้
    header("Access-Control-Allow-Origin: *");
    
    header("Content-Type: application/json; charset=UTF-8");
    
    header("Access-Control-Allow-Methods: OPTIONS,GET,POST,PUT,DELETE");
    
    header("Access-Control-Max-Age: 3600");
    
    header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

error_reporting(E_ALL & ~E_NOTICE);

// คำนวณปีงบประมาณ
function budgetyear($str=0){
	$str = (!$str)? date('Y-m-d'): $str;
	$str_d = substr($str,8,2);
	$str_m = substr($str,5,2);
	$str_y = substr($str,0,4);
	$str_y = ($str_m > '09')? $str_y+544 : $str_y+543;
	return $str_y;
}

if($_SERVER['REQUEST_METHOD'] == 'GET'){

    $data = ($_GET['date'] == '') ? date('Y-m-d') : $_GET['date'];
    $respone = array(
        'status' => true,
        'budgetyear' => budgetyear($data)
    );
    http_response_code(200);
    echo json_encode($respone);

}else{
    http_response_code(400);
    echo json_encode(array(
        'status'=> 'invalid request method'
    ));
}
?>