<?php include 'publicheader.php';
if (isset($_POST['registration'])) {
	extract($_POST);
	 $q="insert into login values(null,'$uname','$pwd','user')";
	 $id=insert($q);
	 $q1="insert into registration values(null,'$id','$fname','$lname','$place','$phone','$email','$lno')";
	 insert($q1);
	 alert('sucessfully');
	 return redirect('traffic_registration.php');
	
}




 ?>

 <center>
<h1>registration</h1>
<form method="post">
<div >
	<table class="table" style="width: 500px;">
		<tr>
			<th>first name</th>
			<td><input type="text"  required="" name="fname" class="form-control"></td>
		</tr>
		<tr>
			<th>last name</th>
			<td><input type="text"  required="" name="lname" class="form-control"></td>
		</tr>
		<tr>
			<th>place</th>
			<td><input type="text"  required="" name="place" class="form-control"></td>
		</tr>
		<tr>
			<th>phone</th>
			<td><input type="text" pattern="[0-9]{10}" name="phone" class="form-control"></td>
		</tr>
		<tr>
			<th>email</th>
			<td><input type="text" name="email" class="form-control"></td>
		</tr>
		<tr>
			<th>license no</th>
			<td><input type="text" required="" name="lno" class="form-control"></td>
		</tr>
		<tr>
			<th>user name</th>
			<td><input type="text" required="" name="uname" class="form-control"></td>
		</tr>
		<tr>
			<th>password</th>
			<td><input type="password" required="" name="pwd" class="form-control"></td>
		</tr>
		<tr>
			<td align="center" colspan="2"><input type="submit" name="registration" value="submit" class="btn btn-success"></td>
		</tr>
	</table>
	</div>
</form>
</center>

<?php include 'footer.php' ?>