<?php

include("data_class.php");

$upeid = $_POST['upeid'];
$upedate = $_POST['upedate'];
$upemark = $_POST['upemark'];
$upeatt = $_POST['upeatt'];
$upestudid = $_POST['upestudid'];
$upesubid = $_POST['upesubid'];

$obj=new data();
$obj->setconnection();
$obj->updatenewexam($upeid,$upedate,$upemark,$upeatt,$upestudid,$upesubid);
