<?php include 'adminheader.php';

if (isset($_POST['police'])) {
	extract($_POST);
	echo$q="insert into login values(null,'$uname','$pwd','police')";
     $id=insert($q);

	echo$q1="insert into police values(null,'$id','$fname','$lname','$place','$phone','$email')";
         insert($q1);
         alert('sucessfully');
         return redirect('admin_managepolice.php');
}

if (isset($_GET['did'])) {
	extract($_GET);
	$q="delete from police where police_id='$did'";
	delete($q);
	alert('sucessfully');
	return redirect('admin_managepolice.php');
	alert('sucessfully');
         return redirect('admin_managepolice.php');
}
if (isset($_GET['uid'])) {
	extract($_GET);
   $q="select * from police where police_id='$uid'";
	$res=select($q);
}
if (isset($_POST['update'])) {
	extract($_POST);
	echo$q="update police set fname='$fname',lname='$lname',place='$place',phone='$phone',email='$email'where police_id='$uid' ";
    update($q);
    alert('sucessfully');
         return redirect('admin_managepolice.php');

}

 ?>
 <header class="header_section" style="height: 700px">
    <div class="container">
      <nav class="navbar navbar-expand-lg custom_nav-container ">
        <a class="navbar-brand" href="#">
          
        </a>
        <center>
<h1>manage police</h1>
<form method="post">
	<?php if (isset($_GET['uid'])) { ?>
	<table class="table" style="width: 500px;color: white">
		<tr>
			<th>first name</th>
			<td><input type="text" name="fname" required="" value="<?php echo $res[0]['fname'] ?>" class="form-control"></td>
		</tr>
		<tr>
			<th>last name</th>
			<td><input type="text" required="" name="lname" value="<?php echo $res[0]['lname'] ?>" class="form-control"></td>
		</tr>
		<tr>
			<th>place</th>
			<td><input type="text"  required="" name="place" value="<?php echo $res[0]['place'] ?>" class="form-control"></td>

		</tr>
		<tr>
			<th>phone</th>
			<td><input type="number" pattern="[0-9]{10}" name="phone" value="<?php echo $res[0]['phone'] ?>" class="form-control"></td>
		</tr>
		<tr>
			<th>email</th>
			<td><input type="email" name="email" value="<?php echo $res[0]['email'] ?>" class="form-control"></td>
	   
		 <tr>
	    	<td><input type="submit" name="update" value="submit" class="btn btn-success"></td>
	    </tr>
	</table>
<?php }else{?>
	<table class="table" style="width: 500px;color: white">
		<tr>
			<th>first name</th>
			<td><input type="text" name="fname" required="" class="form-control"></td>
		</tr>
		<tr>
			<th>last name</th>
			<td><input type="text" name="lname" class="form-control"></td>
		</tr>
		<tr>
			<th>place</th>
			<td><input type="text" name="place" class="form-control"></td>

		</tr>
		<tr>
			<th>phone</th>
			<td><input type="text" name="phone" pattern="[0-9]{10}" class="form-control"></td>
		</tr>
		<tr>
			<th>email</th>
			<td><input type="email" name="email" class="form-control"></td>
	    </tr>
	   
	    	<th>user name</th>
			<td><input type="text" name="uname" class="form-control"></td>
		</tr>
		<tr>
			<th>password</th>
			<td><input type="password" name="pwd" class="form-control"></td>
		</tr>
		 <tr>
	    	<td align="center" colspan="2"><input type="submit" name="police" value="submit" class="btn btn-success"></td>
	    </tr>
	</table>
<?php } ?>
</form>
</div>
      </nav>
    </div>
  </header>
  <center>
<h1>view manage police</h1>
<form>
	<table class="table" style="width: 500px">
		<tr>
			<th>sino</th>
			<th>firstname</th>
			<th>last name</th>
			<th>place</th>
			<th>phone</th>
			<th>email</th>
		</tr>
		<?php 

$q="select * from police";
$res=select($q);
$sino=1;
 
 foreach ($res as $row) {?>
 	<tr>
 		<td><?php echo $sino++; ?></td>
 		<td><?php echo $row['fname'] ?></td>
 		<td><?php echo $row['lname'] ?></td>
 		<td><?php echo $row['place'] ?></td>
 		<td><?php echo $row['phone'] ?></td>
 		<td><?php echo $row['email'] ?></td>
 		<td><a href="?did=<?php echo $row['police_id'] ?>">delete</a></td>
 		<td><a href="?uid=<?php echo $row['police_id'] ?>">update</a></td>
 		<td><a href="admin_dutyassign.php?pid=<?php echo $row['police_id'] ?>">duty assign</a></td>
 	</tr>
 	
 <?php }


		 ?>
		<tr></tr>
	</table>
</form>
<?php include 'footer.php' ?>