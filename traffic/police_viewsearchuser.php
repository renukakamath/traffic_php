<?php include 'policeheader.php';


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
<h1>user view</h1>
<form method="post">
	<table class="table" style="width: 500px;color: white">
		<tr>
			<th>user</th>
			<td><input type="text"  required="" name="fn" class="form-control"></td>
		</tr>
		<tr><td align="center" colspan="2"><input type="submit" name="user" value="submit" class="btn btn-success"></td></tr>
	</table>
</form>
                 </div></div></div></div></div></div></section>

<center>
<h1>view user</h1>
<form method="post">
	<table class="table" style="width: 500px">
		<tr>
			<th>first name</th>
			<th>last name</th>
			<th>place</th>
			<th>phone</th>
			<th>email</th>
			<th>license no:</th>
		</tr>
		<?php 
    if (isset($_POST['user'])) {
        extract($_POST);

  echo$q="SELECT * FROM registration WHERE fname LIKE '$fn%'";
}
    else{
    $q="select * from  registration";}
    $res=select($q);
    foreach ($res as $row) {
    	?>
    	<tr>
    		<td><?php echo $row['fname'] ?></td>
    		<td><?php echo $row['lname'] ?></td>
    		<td><?php echo $row['place'] ?></td>
    		<td><?php echo $row['phone'] ?></td>
    		<td><?php echo $row['email'] ?></td>
    		<td><?php echo $row['licensenum'] ?></td>
    		<td><a href="police_addfine.php?uid=<?php echo $row['user_id'] ?>">add fine</a></td>
    	</tr>
    	
   <?php
}


		 ?>
	</table>
</form>
<?php include 'footer.php' ?>