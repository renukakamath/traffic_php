<?php include 'policeheader.php';

if (isset($_POST['fine'])) {
	extract($_POST);
	$q="insert into fine values(null,'$uid','$des','$amo',curdate(),'pending')";
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
<h1>add fine</h1>
<form method="post">
	<table class="table" style="width: 500px;color: white">
		<tr>
			<th>description</th>
			<td><input type="text"  required="" name="des" class="form-control"></td>
		</tr>
		<tr>
			<th>amount</th>
			<td><input type="text"  required="" name="amo" class="form-control"></td>
		</tr>
		
		<tr>
			<td align="center" colspan="2"><input type="submit" name="fine" value="submit" class="btn btn-success"></td>
		</tr>
	</table>
</form>
                 </div></div></div></div></div></div></section>

<?php include 'footer.php' ?>