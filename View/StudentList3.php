<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="UTF-8"/>
<title>Danh sach sinh vien</title>
</head>

<body>
    <h2>Danh sach sinh vien (XÓA):</h2>
    <?php
    for($i=1;$i<=sizeof($studentList);$i++)
    {
        echo "<p>".$studentList[$i]->id.".<a href='../Controller/C_Student.php?stid2=".$studentList[$i]->id."'>"
        .$studentList[$i]->name."</a></p>";
    }
        
    ?>
    <br>
    <p> <a href="../index.php">Home page</a></p>
</body>
