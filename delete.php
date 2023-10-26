<?php

session_start();
include "db_conn.php";

$conn = new mysqli ("localhost", "root", "", "login-db") ;

if ($conn->connect_error)
die ("fatal error - cannot connect to the DB");

$sql="DELETE from users  where id ='".$_GET['id']."'";
$result=mysqli_query($conn,$sql);
if(!$result)
{
		die("Unable to execute query");

}
else
{
    Header("Location:admin_view_admins.php");
}
		
?>