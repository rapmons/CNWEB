<?php 
include_once("../Model/M_Student.php");
 if(isset($_GET['index']))
 {

       
            $modelStudent = new Model_Student();
            $studentList = $modelStudent->getAllStudent();
            include_once("../View/StudentList.php");
}
if(isset($_GET['stid'])){
    $modelStudent = new Model_Student();
    $student = $modelStudent->getStudentDetail($_GET['stid']);
    include_once("../View/StudentDetail.php");
}
if(isset($_GET['index3']))
 {
            $modelStudent = new Model_Student();
            $studentList = $modelStudent->getAllStudent();
            include_once("../View/StudentList3.php");
}
if(isset($_GET['stid2'])){
    $modelStudent = new Model_Student();
    $student = $modelStudent->Xoa($_GET['stid2']);
    $studentList = $modelStudent->getAllStudent();
    include_once("../View/StudentList.php");
}
 
 if(isset($_GET['index1']))
 {  
    include_once("../View/themSV.php");
}
if(isset($_GET['index4']))
 {  
    include_once("../View/timkiem.php");
}
if(isset($_GET['index2']))
 {  
            $modelStudent = new Model_Student();
            $studentList = $modelStudent->getAllStudent();
            include_once("../View/StudentList1.php");
}
if(isset($_GET['stid1'])){
    $modelStudent = new Model_Student();
    $student1 = $modelStudent->getStudentDetail($_GET['stid1']);
    $student=$student1[1];
    include_once("../View/suaSV.php");
}
if(isset($_GET['them']))
 {  $id=$_REQUEST['ID'];
    $ten=$_REQUEST['name'];
    $name=$_REQUEST['age'];
    $university=$_REQUEST['university'];
    $modelStudent = new Model_Student();
   $modelStudent->chenSV( $id,$ten,$name,$university);

            $studentList = $modelStudent->getAllStudent();
    include_once("../View/StudentList.php");
 }
 if(isset($_GET['timkiem']))
 {  $id=$_REQUEST['select1'];
    $tennv=$_REQUEST['text1'];
    $modelStudent = new Model_Student();
    @$student = $modelStudent->timkiem($id,$tennv);
    if($student!=null)
    {
        include_once("../View/StudentDetail1.php");
    }
    else
    {
        include_once("../View/timkiem.php");
    }
   
 }
 if(isset($_GET['ID']))
 {  $id=$_REQUEST['ID'];
    $ten=$_REQUEST['name'];
    $name=$_REQUEST['age'];
    $university=$_REQUEST['university'];
    $modelStudent = new Model_Student();
    $modelStudent->suaSV( $id,$ten,$name,$university);

    $studentList = $modelStudent->getAllStudent();
    include_once("../View/StudentList.php");
 }
 
?>