<?php

include ("db.php");

$getcustomer_id = $_GET['deletecustomer_id'];



$sel = "DELETE FROM `customer` WHERE `customer_id` = '$getcustomer_id'";

$qry = mysqli_query($db, $sel);



if($qry) {

header("location: Customer.php");
 

}

?>