<?php

$connection = mysqli_connect("localhost","root","");

$db = mysqli_select_db($connection,"dbcurd");
$delete = $_GET['del'];


$sql = "delete from student where id = '$delete'";  // delete a data form the data base


if(mysqli_query($connection,$sql))
{

    echo '<script> location.replace("idex.php")</script>';
}
else
{
    echo "Some thing Error" . $connection->error;

}

?>