<?php
	include "../controller/student_controller.php";
	include "../config/DBConfig.php";
	$student_controller_obj = new StudentController($db_conn);
	$students_list = $student_controller_obj->getAllStudents();
?>
<!DOCTYPE html>
	<html lang="en">
	<head>
		<meta charset="utf-8">
		<title></title>
	</head>
	<body>
		<table border="1" cellpadding="20">
			<tr>
				<th>S.N.</th>
				<th>Name</th>
				<th>Address</th>
				<th>Mob no.</th>
				<th>Remarks</th>
			</tr>
			<?php
				$sn = 1;
				foreach($students_list as $student){
			?>
			<tr>
				<td><?=$sn?></td>
				<td><?= $student['name']?></td>
				<td><?= $student['address']?></td>
				<td><?= $student['mob_no']?></td>
				<td><?= $student['remarks']?></td>
			</tr>
			<?php $sn++;
			 }?>
		</table>
	</body>
</html>