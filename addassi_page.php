<?php

include("data_class.php");
#pmauser
$addastat = $_POST['addastat'];
$addadue = $_POST['addadue'];
$addamark = $_POST['addamark'];
$addastudid = $_POST['addastudid'];
$addasubid = $_POST['addasubid'];

$obj=new data();
$obj->setconnection();
$obj->addnewassi($addastat,$addadue,$addamark,$addastudid,$addasubid);
