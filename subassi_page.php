<?php

include("data_class.php");

$subastudid = $_POST['subastudid'];
$subasubid = $_POST['subasubid'];

$obj=new data();
$obj->setconnection();
$obj->subassi($subastudid,$subasubid);