<?php
define('DB_SERVER','CSDM-WEBDEV');
define('DB_USERNAME','1813617');
define('DB_PASSWORD','1813617');
define('DB_DATABASE','db1813617_cmm007');

$db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);

if ($db==false)
{
    die("ERROR: could not connect." .mysqli_connect_error());
}

else
{
    echo "Successful";
}
?>

