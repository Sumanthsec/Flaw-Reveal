<?php 
// DB credentials.
define('DB_HOST','terraform-20230418235816788400000001.crkrhnlxvxem.us-east-1.rds.amazonaws.com');
define('DB_USER','carrentaltest');
define('DB_PASS','Kumara123');
define('DB_NAME','carrental');
// Establish database connection.
try
{
$dbh = new PDO("mysql:host=".DB_HOST.";dbname=".DB_NAME,DB_USER, DB_PASS,array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'"));
}
catch (PDOException $e)
{
exit("Error: " . $e->getMessage());
}
?>
