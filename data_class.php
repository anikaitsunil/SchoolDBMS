<?php
include("db.php");
session_start();

class data extends db{

    function __construct(){
        //echo "working";
    }

    function adminLogin($t1,$t2){
        $q="SELECT * FROM admin where email='$t1' and pass='$t2' ";
        $recordSet = $this->connection->query($q);
        $result = $recordSet->rowCount();

        if($result>0){
            foreach($recordSet->fetchAll() as $row){
            $logid=$row['id'];
            $_SESSION["adminid"]=$logid;
                header("Location:admin_service_dashboard.php");
        }}

        elseif($result <= 0){
            header("Location:index.php?msg=Invalid Credentials");
        }
    }

    function addnewstudent($fname,$mname,$lname,$phone,$sex,$dob,$add,$studid){
        $this->fname=$fname;
        $this->mname=$mname;
        $this->lname=$lname;
        $this->phone=$phone;
        $this->sex=$sex;
        $this->dob=$dob;
        $this->add=$add;
        $this->studid=$studid;

        $q="INSERT INTO student(fname,mname,lname,phone_no,gender,DOB,Address,stud_id)VALUES('$fname','$mname','$lname','$phone','$sex','$dob','$add','$studid')";

        if($this->connection->exec($q)){
            header("Location:admin_service_dashboard.php?msg=New Add done");
        }

        else{
            header("Location:admin_service_dashboard.php?msg=Register Fail");
        }
    }

    function substudent($substudid){
        $this->studid=$substudid;
        $qu="DELETE FROM student where stud_id='$substudid'";

        if($this->connection->exec($qu)){
            header("Location:admin_service_dashboard.php?msg=Deletion done");
        }

        else{
            header("Location:admin_service_dashboard.php?msg=Deletion Fail");
        }
    }


    function addnewteacher($fname,$mname,$lname,$doe,$add,$sal,$tid,$tsubid){
        $this->fname=$fname;
        $this->mname=$mname;
        $this->lname=$lname;
        $this->doe=$doe;
        $this->add=$add;
        $this->sal=$sal;
        $this->tid=$tid;
        $this->tsubid=$tsubid;

        $q="INSERT INTO teacher(fname,mname,lname,DOE,Address,salary,t_id,t_sub_id)VALUES('$fname','$mname','$lname','$doe','$add','$sal','$tid','$tsubid')";

        if($this->connection->exec($q)){
            header("Location:admin_service_dashboard.php?msg=New Add done");
        }

        else{
            header("Location:admin_service_dashboard.php?msg=Register Fail");
        }
    }


    function subteacher($subtid){
        $this->tid=$subtid;
        $qu="DELETE FROM teacher where t_id='$subtid'";

        if($this->connection->exec($qu)){
            header("Location:admin_service_dashboard.php?msg=Deletion done");
        }

        else{
            header("Location:admin_service_dashboard.php?msg=Deletion Fail");
        }
    }


    function addnewsubject($subid,$subname,$subcred){
        $this->subid=$subid;
        $this->subname=$subname;
        $this->subcred=$subcred;

        $q="INSERT INTO subject(sub_id,sub_name,sub_credit)VALUES('$subid','$subname','$subcred')";

        if($this->connection->exec($q)){
            header("Location:admin_service_dashboard.php?msg=New Add done");
        }

        else{
            header("Location:admin_service_dashboard.php?msg=Register Fail");
        }
    }

    function addnewexam($eid,$edate,$emark,$eatt,$estudid,$esubid){
        $this->eid=$eid;
        $this->edate=$edate;
        $this->emark=$emark;
        $this->eatt=$eatt;
        $this->estudid=$estudid;
        $this->esubid=$esubid;

        $q="INSERT INTO exams(e_id,e_date,e_mark,e_attendance,e_stud_id,e_sub_id)VALUES('$eid','$edate','$emark','$eatt','$estudid','$esubid')";

        if($this->connection->exec($q)){
            header("Location:admin_service_dashboard.php?msg=New Add done");
        }

        else{
            header("Location:admin_service_dashboard.php?msg=Register Fail");
        }
    }

    function updatenewexam($eid,$edate,$emark,$eatt,$estudid,$esubid){
        $this->eid=$eid;
        $this->edate=$edate;
        $this->emark=$emark;
        $this->eatt=$eatt;
        $this->estudid=$estudid;
        $this->esubid=$esubid;

        $q="UPDATE exams SET e_date='$edate',e_mark='$emark',e_attendance='$eatt' where e_id='$eid' and e_stud_id='$estudid' and e_sub_id='$esubid'";

        if($this->connection->exec($q)){
            header("Location:admin_service_dashboard.php?msg=Updation done");
        }

        else{
            header("Location:admin_service_dashboard.php?msg=Updation Fail");
        }

    }

    function subexam($subeid){
        $this->eid=$subeid;
        $qu="DELETE FROM exams where e_id='$subeid'";

        if($this->connection->exec($qu)){
            header("Location:admin_service_dashboard.php?msg=Deletion done");
        }

        else{
            header("Location:admin_service_dashboard.php?msg=Deletion Fail");
        }

    }

    function addnewassi($astat,$adue,$amark,$astudid,$asubid){
        $this->astat=$astat;
        $this->adue=$adue;
        $this->amark=$amark;
        $this->astudid=$astudid;
        $this->asubid=$asubid;

        $q="INSERT INTO assignment(assi_status,assi_due,assi_mark,assi_stud_id,assi_sub_id)VALUES('$astat','$adue','$amark','$astudid','$asubid')";

        if($this->connection->exec($q)){
            header("Location:admin_service_dashboard.php?msg=New Add done");
        }

        else{
            header("Location:admin_service_dashboard.php?msg=Register Fail");
        }


    }


    function updatenewassi($astat,$adue,$amark,$astudid,$asubid){
        $this->astat=$astat;
        $this->adue=$adue;
        $this->amark=$amark;
        $this->astudid=$astudid;
        $this->asubid=$asubid;

        $q="UPDATE assignment SET assi_status='$astat',assi_due='$adue',assi_mark='$amark' where assi_stud_id='$astudid' and assi_sub_id='$asubid'";

        if($this->connection->exec($q)){
            header("Location:admin_service_dashboard.php?msg=Updation done");
        }

        else{
            header("Location:admin_service_dashboard.php?msg=Updation Fail");
        }

    }


    function subassi($astudid,$asubid){
        $this->studid=$astudid;
        $this->subid=$asubid;
        $qu="DELETE FROM assignment where assi_stud_id='$astudid' and assi_sub_id='$asubid'";

        if($this->connection->exec($qu)){
            header("Location:admin_service_dashboard.php?msg=Deletion done");
        }

        else{
            header("Location:admin_service_dashboard.php?msg=Deletion Fail");
        }

    }

    function updatenewsub($subid,$subname,$subcred){
        $this->subid=$subid;
        $this->subname=$subname;
        $this->subcred=$subcred;

        $q="UPDATE subject SET sub_name='$subname',sub_credit='$subcred' where sub_id='$subid'";

        if($this->connection->exec($q)){
            header("Location:admin_service_dashboard.php?msg=Updation done");
        }

        else{
            header("Location:admin_service_dashboard.php?msg=Updation Fail");
        }

    }

    function viewstud() {
        $u="SELECT * FROM student";
        $data=$this->connection->query($u);
        return $data;
    }

    function viewteac() {
        $u="SELECT * FROM teacher";
        $data=$this->connection->query($u);
        return $data;
    }

    function viewexam() {
        $u="SELECT * FROM exams";
        $data=$this->connection->query($u);
        return $data;
    }

    function viewsub() {
        $u="SELECT * FROM subject";
        $data=$this->connection->query($u);
        return $data;
    }

    function viewassi() {
        $u="SELECT * FROM assignment";
        $data=$this->connection->query($u);
        return $data;
    }


    function viewunder() {
        $u="SELECT student.stud_id,student.fname,student.mname,student.lname,COUNT(*)
        FROM student inner join exams
        on student.stud_id=exams.e_stud_id
        where exams.e_mark<90
        GROUP BY student.stud_id
        HAVING COUNT(*) >= 1";
        $data=$this->connection->query($u);
        return $data;
    }

    function viewnoassi() {
        $u="SELECT * FROM assignment where assi_status=0";
        $data=$this->connection->query($u);
        return $data;
    }

    function viewmax() {
        $u="select student.fname,student.mname,student.lname,exams.e_id,exams.e_stud_id,exams.e_mark from student inner join exams on student.stud_id=exams.e_stud_id where exams.e_mark in (SELECT max(e_mark) from exams group by e_id);";
        $data=$this->connection->query($u);
        return $data;
    }

}