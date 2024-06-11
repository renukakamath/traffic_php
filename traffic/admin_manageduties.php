<?php include 'adminheader.php';

if (isset($_POST['duties'])) {
	extract($_POST);

	$q="insert into duties values(null,'$place','$dat')";
	insert($q);
	alert('sucessfully');
	return redirect('admin_manageduties.php');

}
if (isset($_GET['did'])) {
	extract($_GET);

	$q="delete from duties where duties_id='$did'";
	delete($q);
alert('sucessfully');
	return redirect('admin_manageduties.php');
}
if (isset($_GET['uid'])) {
	extract($_GET);

	$q="select * from duties where duties_id='$uid'";
	select($q);

	
}
if (isset($_POST['update'])) {
	extract($_POST);

	$q="update duties set place_id='$place',date='$dat' where duties_id='$uid'";
	update($q);
	alert('sucessfully');
	return redirect('admin_manageduties.php');	

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
<h1>manage duties</h1>
<form method="post">
	<?php if (isset($_GET['uid']))
	 
	{ ?>
	<table class="table" style="width: 500px;color: white">
		<tr>
			<th>place</th>
			<td>
				<select name="place" required="" class="form-control">
					<option>select</option>
					<?php 

                   $q="select * from place";
                   $res=select($q);

                   foreach ($res as $row) {
                   	?>

                   	<option value="<?php echo $row['place_id'] ?>"><?php echo $row['place'] ?></option>
                   	
                   <?php
               }

					 ?>
				</select>
			</td>
			<tr>
				<th>date</th>
				<td><input type="date" name="dat" required="" class="form-control"></td>
			</tr>
		</tr>
		<tr><td align="center" colspan="2"><input type="submit" name="update" value="submit" class="btn btn-success"></td></tr>
	</table>
	</center>
<?php
 }
else
	{
		?>
	<center>
	<table class="table" style="width: 500px;color: white">
		<tr>
			<th>place</th>
			<td>
				<select name="place" required="" class="form-control">
					<option>select</option>
					<?php 

                   $q="select * from place";
                   $res=select($q);

                   foreach ($res as $row) {
                   	?>

                   	<option value="<?php echo $row['place_id'] ?>"><?php echo $row['place'] ?></option>
                   	
                   <?php
               }

					 ?>
				</select>
			</td>
			<tr>
				<th>date</th>
				<td><input type="date" name="dat" required="" class="form-control"></td>
			</tr>
		</tr>
		<tr><td align="center" colspan="2"><input type="submit" name="duties" value="submit" class="btn btn-success"></td></tr>
	</table>
	</center>
<?php
 }
  ?>
</form>
</center>
                 </div></div></div></div></div></div></section>
<center>
<h1>view manage duties</h1>
<form method="post">
	<table class="table" style="width: 500px">
		<tr>
			<th>sino</th>
			<th>palce</th>
			<th>date</th>
		</tr>
		<?php 
    $q="select * from duties inner join place using(place_id)";
    $res=select($q);
    $sino=1;
    foreach ($res as $row) {?>
    	<tr>
    		<td><?php echo $sino++; ?></td>
    		<td><?php echo $row['place'] ?></td>
    		<td><?php echo $row['date'] ?></td>
    		<td><a href="?did=<?php echo $row['place_id'] ?>">delete</a></td>
    		<td><a href="?uid=<?php echo $row['place_id'] ?>">update</a></td>
    	</tr>
    	
   <?php }



		 ?>
	</table>
</form>
</center>
<?php include 'footer.php' ?>