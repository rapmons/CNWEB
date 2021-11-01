<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action='../Controller/C_Student.php?ID=<?php echo "$student->id"?>' method="post">
		<table width="60%" boder="0">
			<caption> cập nhật </caption>
				<tr>
					<td> ID</td>
					<td><input type="Text" size="20"  value ='<?php echo "$student->id"; ?>' disabled> </td>
				</tr>
				<tr>
					<td> name </td>
					<td> <input type="Text" size="20" name="name" value ='<?php echo "$student->name"; ?>' > </td>
				</tr>
                <tr>
					<td> age</td>
					<td> <input type="Text" size="20" name="age" value ='<?php echo "$student->age";?>'> </td>
				</tr>
                <tr>
					<td> university</td>
					<td> <input type="Text" size="20" name="university" value ='<?php echo "$student->university"; ?>'> </td>
				</tr>
				<tr>
					
					<td> <input type="submit" value="ok" > <input type="reset" value="Reset" > </td>
				</tr>
		
		</table>
	</form>
</body>
</html>