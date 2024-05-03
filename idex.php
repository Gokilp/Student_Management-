<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Crud Application</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">  <!-- // added a Bootstap -->
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-9">
            <div class="card">
                <div class="card-header">  <!-- add bootstrap  to card of body -->
                    <h1> Student Crud Application </h1>
                </div>
                <div class="card-body">

                    <button class="btn btn-success"> <a href="add.php" class="text-light"> Add New </a> </button> <!-- form added on bootstrap -->

                    <br/>
                    <br/>

                    <table class="table">
                        <thead>
                        <tr>
                            <th scope="col">Sno</th>
                            <th scope="col">Name</th>
                            <th scope="col">Address</th>
                            <th scope="col">Mobile</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php  // reterive the data from the data bases
                        $connection = mysqli_connect("localhost", "root", "");  // setup the file's connected to db
                        $db = mysqli_select_db($connection, "dbcurd"); // to connected to db

                        $sql = "SELECT * FROM student";  // fecth the data from db
                        $run = mysqli_query($connection, $sql); // connection setup from db
                        $id = 1; // Initialize ID variable

                        while($row = mysqli_fetch_array($run))  // using loop db display data one by one
                        {
                            $uid = $row['id'];
                            $name = $row['name'];
                            $address = $row['address'];
                            $mobile = $row['mobile'];
                            ?>

                            <tr>
                                <td><?php echo $id ?></td>   <!-- row -> data display on Screen-->
                                <td><?php echo $name ?></td>
                                <td><?php echo $address ?></td>
                                <td><?php echo $mobile ?></td>

                                <td>
                                    <button class="btn btn-success"> <a href='edit.php?edit=<?php echo $uid ?>' class="text-light"> Edit </a> </button> &nbsp; <!-- edit press send to the value to post method -->
                                    <button class="btn btn-danger"><a href='delete.php?del=<?php echo $uid ?>' class="text-light"> Delete </a> </button> <!-- delete press send to the value to post method -->
                                </td>
                            </tr>
                            <?php $id++; } ?> <!-- increment display the value -->
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

     </div>
</body>

</html>