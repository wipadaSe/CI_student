<?php echo form_open('student/set_student_profile');?>
	<lable>name</lable>
	<input type='text' name='name'>

	<lable>surname</lable>
	<input type='text' name='surname'>

	<lable>age</lable>
	<input type='text' name='age'>

	<button type='submit'>save</button>

<?php echo form_close();?>
 <hr>
 <?php //echo '<pre>',print_r($student_list);?>
 <table border ="1">
 	<tr>
 		<th>Name</th>
 		<th>Surname</th>
 		<th>Age</th>
 		<th>Delete</th>
 	</tr>
 	<?php
 		foreach ($student_list as $key => $value) {
 			?>
 				<tr>
 					<td><?php echo $value['name'];?></td>
 					<td><?php echo $value['surname'];?></td>
 					<td><?php echo $value['age'];?></td>
 					<td> <a href="<?php echo site_url('student/delete_student_profile/'.$value['id']);?>">delete_student</a></td>
 				</tr>
 			<?php
 		}
 	?>
 </table>