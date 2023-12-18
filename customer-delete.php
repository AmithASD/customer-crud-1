<?php
    include 'mysql_connect.php';

    if(isset($_GET['customerNic'])){
        $nic= $_GET['customerNic'];
        $sql="DELETE FROM customer WHERE nic=$nic";
        $result= mysqli_query($con, $sql);
        if($result){
            echo 'SUCCESFULY';
            header("location:customer-list.php");
        }else{
            die(mysqli_error($con));
        }
    }
?>
