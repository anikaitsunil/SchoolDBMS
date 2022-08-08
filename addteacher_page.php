<?php

include("data_class.php");

$addfname = $_POST['addfname'];
$addmname = $_POST['addmname'];
$addlname = $_POST['addlname'];
$adddoe = $_POST['adddoe'];
$addadd = $_POST['addadd'];
$addsal = $_POST['addsal'];
$addtid = $_POST['addtid'];
$addtsubid = $_POST['addtsubid'];

$obj=new data();
$obj->setconnection();
$obj->addnewteacher($addfname,$addmname,$addlname,$adddoe,$addadd,$addsal,$addtid,$addtsubid);
