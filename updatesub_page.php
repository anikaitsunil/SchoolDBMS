<?php

include("data_class.php");

$upsubid = $_POST['upsubid'];
$upsubname = $_POST['upsubname'];
$upsubcred = $_POST['upsubcred'];

$obj=new data();
$obj->setconnection();
$obj->updatenewsub($upsubid,$upsubname,$upsubcred);
