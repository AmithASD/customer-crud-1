<?php
    include 'mysql_connect.php';
    if(isset($_POST['submit'])){
        $nic=$_POST['nic'];
        $name=$_POST['name'];
        $address=$_POST['address'];
        $salary=$_POST['salary'];
    }
    $sql="INSERT INTO `customer` ('nic','name','address','salary') 
    VALUES('$nic','$name','$address','$salary')";

    $result= mysqli_query($con,$sql);
    if($reult){
        echo 'Customer Record Added';
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Customer</title>
</head>
<body>
    <form method="post" >
        <div class="container">
            <h1>Customer Form</h1><br><hr>
            <div class="row">
                <div class="col-3">
                    <form-group>
                        <lable for='nic'>NIC</lable>
                        <input type="text" name="nic" id="nic" class="form-control" required>
                    </form-group>
                </div>
                <div class="col-3">
                <form-group>
                        <lable for='name'>Name</lable>
                        <input type="text" name="name" id="name" class="form-control" required>
                    </form-group>
                </div>
                <div class="col-3">
                <form-group>
                        <lable for='address'>Address</lable>
                        <input type="text" name="address" id="address" class="form-control" required>
                    </form-group>
                </div>
                <div class="col-3">
                <form-group>
                        <lable for='salary'>Salary</lable>
                        <input type="double" name="salary" id="salary" class="form-control" required>
                    </form-group>
                </div>
                <br>
                <input type="submit" class="btn btn-primary" value="Submit">
            </div>
        </div>
    </form>
</body>
</html>