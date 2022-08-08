<?php

include("data_class.php");

$addsubid = $_POST['addsubid'];
$addsubname = $_POST['addsubname'];
$addsubcred = $_POST['addsubcred'];


$obj=new data();
$obj->setconnection();
$obj->addnewsubject($addsubid,$addsubname,$addsubcred);
