<?php

include("data_class.php");

$subeid = $_POST['subeid'];

$obj=new data();
$obj->setconnection();
$obj->subexam($subeid);
