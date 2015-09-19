<?php

  include_once "../connection/db.php";

	$json          = file_get_contents('php://input');
	$requests      = json_decode($json,true);
	$action        = $requests['action'];
	$email         = $requests['email'];
   
  $respose       = array();
  
  $respose["success"] = 0;
	// 
  
	$order= new Order($params);
  if(!$order){
  	$respose["success"] = 1;
  }

  $order->update();

  // return response
  
  echo json_encode($response);
 
?>