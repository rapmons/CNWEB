<?php 
include_once("E_Student.php");
class Model_Student{
    public function __construct(){}
    public function getAllStudent(){
        $link = mysqli_connect("localhost", "root", "") or die ("khong the ket noi den csdl");       
        mysqli_select_db($link,"dulieu");
        $sql = "select * from sinhvien";
        $rs = mysqli_query($link,$sql);
        $i=1;
        
        while($row = mysqli_fetch_array($rs)){
            $id=$row['id'];
            $name=$row['name'];
            $age=$row['age'];
            $university=$row['university'];
            $students[$i]= new Entity_Student($id,$name,$age,$university);
            $i++;
        }
        return $students;
    }
    public function getStudentDetail($stid){
        $link = mysqli_connect("localhost", "root", "") or die ("khong the ket noi den csdl");       
        mysqli_select_db($link,"dulieu");
        $sql = "select * from sinhvien where id='$stid'";
        $rs = mysqli_query($link,$sql);
        $i=1;
        
        while($row = mysqli_fetch_array($rs)){
            $id=$row['id'];
            $name=$row['name'];
            $age=$row['age'];
            $university=$row['university'];
            $students[$i]= new Entity_Student($id,$name,$age,$university);
            $i++;
        }
        return $students;
    }
    public function chenSV( $id,$name,$age,$university){
        $link = mysqli_connect("localhost", "root", "");
    if (!$link) {   // Check connection 
        die("Connection failed: " . mysqli_connect_error());
    }
    mysqli_select_db($link,"dulieu");
    
    $sql = " INSERT INTO sinhvien  VALUES ('$id', '$name', '$age', '$university');";
    $result = mysqli_query($link, $sql);
   
   
}
public function suaSV( $id,$name,$age,$university){
    $link = mysqli_connect("localhost", "root", "");
if (!$link) {   // Check connection 
    die("Connection failed: " . mysqli_connect_error());
}
mysqli_select_db($link,"dulieu");

$sql = "UPDATE sinhvien SET name='$name', age = '$age' ,university='$university' where id='$id'";
$result = mysqli_query($link, $sql);


}
public function Xoa( $id){
    $link = mysqli_connect("localhost", "root", "");
if (!$link) {   // Check connection 
    die("Connection failed: " . mysqli_connect_error());
}
mysqli_select_db($link,"dulieu");

$sql = "DELETE FROM sinhvien where id='$id'";
$result = mysqli_query($link, $sql);


}
public function timkiem($id1,$tennv)
{ $link = mysqli_connect("localhost", "root", "");
    if (!$link) {   // Check connection 
        die("Connection failed: " . mysqli_connect_error());
    }
    mysqli_select_db($link,"dulieu");
    if($id1=='1')
    {
    $sql = "SELECT * FROM sinhvien where id='$tennv' ";
    }
    if($id1=='2')
    {
    $sql = "SELECT * FROM sinhvien where name='$tennv' ";
    }
    
    $result = mysqli_query($link, $sql);
    $i=1;
        
    while($row = mysqli_fetch_array($result)){
        $id=$row['id'];
        $name=$row['name'];
        $age=$row['age'];
        $university=$row['university'];
        $students[$i]= new Entity_Student($id,$name,$age,$university);
        $i++;
    }
    return $students;
}
}
?>