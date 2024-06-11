<?php include 'adminheader.php';

if (isset($_POST['place'])) {
	extract($_POST);

	echo$q="insert into place values(null,'$pla','$dis')";
	insert($q);
	alert('successfully');
	return redirect('admin_manageplace.php');
	
}
if (isset($_GET['did'])) {
	extract($_GET);
	$q="delete from place where place_id='$did'";
	delete($q);
	alert('successfully');
	return redirect('admin_manageplace.php');
}
if (isset($_GET['uid'])) {
	extract($_GET);
	$q="select * from place where place_id='$uid'";
	$res=select($q);

	
}
if (isset($_POST['update'])) {
	extract($_POST);
	$q="update place set place='$pla', district='$dis' where place_id='$uid' ";
	update($q);

alert('successfully');
return redirect('admin_manageplace.php');
}


 ?>
<section class=" slider_section">
    <div id="carouselExampleIndicators" class="carousel slide vert" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
      </ol>
  <div class="carousel-inner">
        <div class="carousel-item active">
          <div class="slider_box">
            <div class="fixed_company-detail">
             
            </div>
            <div class="slider-detail">
              <div class="slider_detail-heading">
               
              </div>
              <div class="slider_detail-text">
        <center>
<h1>manage place</h1>
<form method="post">
	<?php if (isset($_GET['uid'])) { ?>
	<table class="table" style="width: 500px;color: white">
		<tr>
			<th>place</th>
			<td><input type="text" name="pla" required="" value="<?php echo $res[0]['place'] ?> "class="form-control"></td>
		</tr>
		<tr>
			<th>District</th>
			<td><input type="text" name="dis" required="" value="<?php echo $res[0]['district'] ?>" class="form-control"></td>
		</tr>
		<tr>
			<td><input type="submit" name="update" value="submit" class="btn btn-success"></td>
		</tr>
	</table>
	</center>
<?php }else{?>
	<center>
	<table class="table" style="width: 500px;color: white">
		<tr>
			<th>place</th>
			<td><input type="text" name="pla" required="" class="form-control"></td>
		</tr>
		<tr>
			<th>District</th>
			<td><input type="text" name="dis" required="" class="form-control"></td>
		</tr>
		<tr>
			<td align="center" colspan="2"><input type="submit" name="place" value="submit" class="btn btn-success"></td>
		</tr>
	</table>
</form>
</center>
<?php } ?>
 </center>
                    </div></div></div></div></div></div></section>
<center>
<h1>view places</h1>
<form method="post">
	<table class="table" style="width: 500px">
		<tr>
			<th>sino</th>
			<th>place</th>
			<th>district</th>
		</tr>
		<?php 
      $q="select * from place ";
      $res=select($q);
      $sino=1;

      foreach ($res as $row) {?>
      <tr>
      	<td><?php echo $sino++; ?></td>
      	<td><?php echo $row['place'] ?></td>
      	<td><?php echo $row['district'] ?></td>
      	<td><a href="?did=<?php echo $row['place_id'] ?>">delete</a></td>
      	<td><a href="?uid=<?php echo $row['place_id'] ?>">update</a></td>
      </tr>
      	
      <?php }


		 ?>
	</table>
</form>
</center>
<?php include 'footer.php' ?>
