<?php include 'adminheader.php';

if (isset($_POST['duties'])) {
	extract($_POST);

	$q="insert into dutyassigned values(null,'$pid','$pla')";
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
<h1>assign duties</h1>
<form method=post>
	<table class="table" style="width: 500px;color: white">
		<tr>
			<th>duty</th>
			<td><select name="pla" required="" class="form-control">
				<option>select</option>
				<?php 
       echo$q="select * from duties inner join place using (place_id)";
        $res=select($q);
        foreach ($res as $row) {
        	?>
      
      <option value="<?php echo $row['duties_id'] ?>"><?php echo $row['place'] ?></option>

        	
       <?php
        }


				 ?>
			</select></td>
		</tr>
		<tr><td align="center" colspan="2"><input type="submit" name="duties" value="submit" class="btn btn-success"></td></tr>
	</table>
</form>
</center>
                   </div></div></div></div></div></div></section>

  
<?php include 'footer.php' ?>