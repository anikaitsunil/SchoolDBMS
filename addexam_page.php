<?php

include("data_class.php");
#mysql
$addeid = $_POST['addeid'];
$addedate = $_POST['addedate'];
$addemark = $_POST['addemark'];
$addeatt = $_POST['addeatt'];
$addestudid = $_POST['addestudid'];
$addesubid = $_POST['addesubid'];

$obj=new data();
$obj->setconnection();
$obj->addnewexam($addeid,$addedate,$addemark,$addeatt,$addestudid,$addesubid);
