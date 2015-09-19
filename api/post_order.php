<?php
  include_once "../connection/db.php";
  $json          = file_get_contents('php://input');
  $requests      = json_decode($json,true);
  $action        = $requests['action'];
  $email         = $requests['email'];
   
  $respose       = array();
  
  $respose["success"] = 0;
  
  //
  if($action=="create"){
   
    $order= new Order;
    $order->create($email,$status);

  }
  elseif($action=="index")
  {
    $orders = Order.fetch();
    echo json_encode($orders);

  }
  elseif($action=="delete")
  {
    # code...
    $success = Order.delete($id);
    $respose["success"]=$success; 
    echo json_encode($respose);

  }else{
    
    $order   = Order.new;
    $success = $order->update($status,$id);
    $respose["success"] =$success;
    echo json_encode($respose);

  }

  // return response
  
  echo json_encode($response);
 
?>