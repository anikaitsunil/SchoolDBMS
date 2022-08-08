<?php

include("data_class.php");

$substudid = $_POST['substudid'];

$obj=new data();
$obj->setconnection();
$obj->substudent($substudid);
