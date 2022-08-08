<?php

include("data_class.php");

$subtid = $_POST['subtid'];

$obj=new data();
$obj->setconnection();
$obj->subteacher($subtid);
