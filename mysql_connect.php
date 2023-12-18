<?php
$con = new mysqli('localhost','root','root','customer_crud'); 
if(!$con){
    die(mysqli_error($con));
}
?>