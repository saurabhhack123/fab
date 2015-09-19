<?php

include_once "../connection/db.php";

class Order
{  
   
   var $status;

   function __construct(){

     $this->status = 0;
   }
   
   function create($email_id,$status){
      
      $created_at = date("Y-m-d:h:i:s");

      $this->email_id   = $email_id;
      $this->status     = $status;
      $this->created_at = $created_at;
   
   }
    
 }
 

?>