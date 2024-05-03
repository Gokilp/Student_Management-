<?php
$connection = mysqli_connect("localhost","root","");  // establish a connection to a MySQL database server
$db = mysqli_select_db($connection,"dbcurd"); // select a specific database on the MySQL server

if(isset($_POST['submit']))  // post value recievce
{
    $name = $_POST['name'];
    $address = $_POST['address'];
   echo  $mobile = $_POST['mobile'];

    $sql = "insert into student(name,address,mobile)values(' $name',' $address',' $mobile')"; //  insert a table in db

    if(mysqli_query($connection,$sql))  //  mysqli_query() performs a query against a database
    {
        echo '<script> location.replace("idex.php")</script>';  // Relocate the file index.php
    }
    else
    {
        echo "Some thing Error" . $connection->error;
    }
}
?>


<!-- // doc file for add new form menu application-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Crud Application</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-9">
            <div class="card">
                <div class="card-header">
                    <h2> Add Student details </h2>
                    <form action="add.php" method="post">
                        <div class="form-group">
                            <label>Name</label>
                            <input type="text" name="name" class="form-control"  placeholder="Enter Name">
                        </div>

                        <div class="form-group">
                            <label>Address</label>
                            <input type="text" name="address" class="form-control"  placeholder="Enter Address">
                        </div>

                        <div class="form-group">
                            <label>Mobile</label>
                            <input type="text" name ="mobile" class="form-control"  placeholder="Enter Mobile">
                        </div>
                        <br/>
                        <input type="submit" class="btn btn-primary" name="submit" value="Save">
                    </form>
                </div>
            </div>
        </div>

     </div>
</body>

</html>