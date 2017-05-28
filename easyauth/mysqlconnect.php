<?php
//MYSQL CONFIG ---------------------------------------------------------
$HOSTNAME = "127.0.0.1"; //Mysql server location ex. "127.0.0.1"
$DB_USER = "root"; //Mysql username ex. "root"
$DB_PASS = "toor"; //Mysql password ex. "toor"
$DATABASE = "EasyAuth"; //Mysql database ex. "EasyAuth"
$TABLE = "user"; //Mysql table for user data ex. "user" !!DON'T MODIFY!!
//----------------------------------------------------------------------
$connection = mysqli_connect($HOSTNAME, $DB_USER, $DB_PASS, $DATABASE);
if($connection)
{
mysqli_select_db($connection, 'users');
}
else
{
echo "There is a problem with the mysql connection!";
}
?>
