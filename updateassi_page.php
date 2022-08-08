<?php

include("data_class.php");

$upastat = $_POST['upastat'];
$upadue = $_POST['upadue'];
$upamark = $_POST['upamark'];
$upastudid = $_POST['upastudid'];
$upasubid = $_POST['upasubid'];

$obj=new data();
$obj->setconnection();
$obj->updatenewassi($upastat,$upadue,$upamark,$upastudid,$upasubid);
