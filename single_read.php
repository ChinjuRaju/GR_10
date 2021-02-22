<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: POST");
header("Access-Control-Max-Age: 3600");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");
include_once 'database.php';
include_once 'employees.php';
$database = new Database();
$db = $database->getConnection();
$item = new Employee($db);
$item->id = isset($_GET['id']) ? $_GET['id'] : die();
$item->getSingleEmployee();
if($item->name != null){

// create array
$emp_arr = array(
"id" => $item->id,
"name" => $item->name,
"last_name" => $item->last_name,
"height" => $item->height,
"weight" => $item->weight,
"batch" => $item->batch,
"description" => $item->description,
"address" => $item->address,
"city" => $item->city,
"province" => $item->province,
"country" => $item->country,
"phone" => $item->phone,
"email" => $item->email,
"website" => $item->website,
"MAD100" => $item->MAD100,
"MAD105" => $item->MAD105,
"MAD110" => $item->MAD110,
"MAD120" => $item->MAD120,
"MAD125" => $item->MAD125,
"MAD200" => $item->MAD200,
"MAD225" => $item->MAD225,
"status" => $item->status



);

http_response_code(200);
echo json_encode($emp_arr);
}
else{
http_response_code(404);
echo json_encode("Employee not found.");
}
?>