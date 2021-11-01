<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="../Controller/C_Student.php?them" method="post">
<table width="60%" boder="0">
			<caption> Thêm sinh viên </caption>
				<tr>
					<td> ID  </td>
					<td><input type="Text" size="20"  name="ID" > </td>
				</tr>
				<tr>
					<td> name </td>
					<td> <input type="Text" size="20" name="name"  > </td>
				</tr>
                <tr>
					<td> age </td>
					<td> <input type="Text" size="20" name="age"  > </td>
				</tr>
				<tr>
					<td> university </td>
					<td> <input type="Text" size="20" name="university"  > </td>
				</tr>
				<tr>
					
					<td> <input type="submit" value="ok" > <input type="reset" value="Reset" > </td>
				</tr>
		
		</table>
        </form>
</body>
</html>