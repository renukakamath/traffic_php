<?php include 'userheader.php';
extract($_POST);
$lid=$_SESSION['logid'];
if (isset($_POST['complaint'])) {
	extract($_POST);

	$q="insert into complaint values(null,'$lid','$com','pending',curdate())";
	insert($q);

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
<h1>sent complaint</h1>
<form method="post">
	<table class="table" style="width: 500px;color: white">
		<tr>
			<th>complaint</th>
			<td><input type="text" name="com" class="form-control"></td>
		</tr>
		
		<tr>
			<td align="center" colspan="2"><input type="submit" name="complaint" value="submit" class="btn btn-success"></td>
		</tr>

	</table>
</form>
</center>
                 </div></div></div></div></div></div></section>

<center>
<h1>view complaint</h1>
<form>
	<table class="table" style="width: 500px">
		<tr>
			<th>sino</th>
			<th>name</th>
             <th>type</th>
			<th>complaint</th>
			<th>date</th>
			<th>reply</th>
			
	</tr>
			<?php 

 $q="select * from complaint inner join  login using(login_id)";
 $res=select($q);
 $sino=1;

 foreach ($res as $row) {
 	?>
<tr>
 	<td><?php echo $sino++; ?></td>
 	<td><?php echo $row['username'] ?></td>
 	<td><?php echo $row['type'] ?></td>
 	<td><?php echo $row['complaint'] ?></td>
 	<td><?php echo $row['date'] ?></td>
 	<td><?php echo $row['reply'] ?></td>
 	
 	
<?php 

}

			 ?>
		</tr>
	</table>
</form>
</center>
<?php include 'footer.php' ?>