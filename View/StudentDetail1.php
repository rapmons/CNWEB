<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="UTF-8"/>
<title>Thong tin chi tiet sinh vien</title>
</head>

<body>
    <h2>Chi tiet sinh vien:</h2>
    <?php
       for($i=1;$i<=sizeof($student);$i++)
       { echo "<p><b>ID:".$student[$i]->id."</b></p>";
        echo "<p><b>Name:".$student[$i]->name."</b></p>";
        echo "<p><b>Age : ".$student[$i]->age."</b></p>";
        echo "<p><b>University : ".$student[$i]->university."</b></p>";
       }
    ?>
        <p> <a href="javascript:history.back()">Back</a></p>
</body>

</html>