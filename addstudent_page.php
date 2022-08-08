<?php

include("data_class.php");

$addfname = $_POST['addfname'];
$addmname = $_POST['addmname'];
$addlname = $_POST['addlname'];
$addphone = $_POST['addphone'];
$addsex = $_POST['addsex'];
$adddob = $_POST['adddob'];
$addadd = $_POST['addadd'];
$addstudid = $_POST['addstudid'];

$obj=new data();
$obj->setconnection();
$obj->addnewstudent($addfname,$addmname,$addlname,$addphone,$addsex,$adddob,$addadd,$addstudid);
