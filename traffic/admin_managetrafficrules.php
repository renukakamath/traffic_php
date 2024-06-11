<?php include 'adminheader.php';

if (isset($_POST['traffic'])) {
	extract($_POST);

$q="insert into trafficrules values(null,'$rule','$des',curdate())";
insert($q);
alert('sucessfully');
return redirect('admin_managetrafficrules.php');

	
}
if (isset($_GET['did'])) {
	extract($_GET);

	$q="delete from trafficrules where rules_id='$did'";
	delete($q);
	alert('sucessfully');
return redirect('admin_managetrafficrules.php');
}
if (isset($_GET['uid'])) {
	extract($_GET);

	$q="select * from trafficrules where rules_id='$uid'";
	$res=select($q);

}
if (isset($_POST['update'])) {
	extract($_POST);

	$q="update trafficrules set rule='$rule',description='$des' where rules_id='$uid'";
     update($q);
     alert('sucessfully');
return redirect('admin_managetrafficrules.php');
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
<h1>manage traffic rules</h1>
<form method="post">
	<?php if (isset($_GET['uid'])) { ?>
	<table class="table" style="width: 500px;color: white">
		<tr>
			<th>rule</th>
			<td><input type="text" name="rule" required="" value="<?php echo $res[0]['rule'] ?>" class="form-control"></td>
		</tr>
		<tr>
			<th>Description</th>
			<td><input type="text"  required="" name="des" value="<?php echo $res[0]['description'] ?>" class="form-control"></td>
		</tr>
		<tr>
			<td align="center" colspan="2"><input type="submit" name="update" value="submit" class="btn btn-success"></td>
		</tr>
	</table>
<?php }else{ ?>
	<table class="table" style="width: 500px;color: white">
		<tr>
			<th>rule</th>
			<td><input type="text"  required="" name="rule" class="form-control"></td>
		</tr>
		<tr>
			<th>Description</th>
			<td><input type="text"  required="" name="des" class="form-control"></td>
		</tr>
		<tr>
			<td align="center" colspan="2"><input type="submit" name="traffic" value="submit" class="btn btn-success"></td>
		</tr>
	</table>
<?php } ?>
</form>
</center>
                   </div></div></div></div></div></div></section>
<center>
<h1>view trafic rules</h1>
<form method="post">
	<table class="table" style="width: 500px">
		<tr>
			<th>sino</th>
			<th>rule</th>
			<th>description</th>
			<th>date</th>
		</tr>
		<?php 
 $q="select * from trafficrules";
 $res=select($q);
 $sino=1;
 foreach ($res as $row) {?>
 	<tr>
 		<td><?php echo $sino++; ?></td>
 		<td><?php echo $row['rule'] ?></td>
 		<td><?php echo $row['description'] ?></td>
 		<td><?php echo $row['date'] ?></td>
 		<td><a href="?did=<?php echo $row['rules_id'] ?>">delete</a></td>
 		<td><a href="?uid=<?php echo $row['rules_id'] ?>">update</a></td>
 	</tr>
 	
 <?php }

		 ?>
	</table>
</form>
<?php include 'footer.php' ?>