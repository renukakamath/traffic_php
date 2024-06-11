<?php include 'policeheader.php';

if (isset($_POST['payment'])) {
	extract($_POST);

	echo$q="insert into payment values(null,'$fid','police',$aid',curdate())";
	insert($q);
 $q1="update fine set status='paid' where fine_id='$fid'";
  update($q1);


	alert('sucessfully');
	return redirect('police_viewpayment.php');
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
<h1>make payment</h1>
<form method="post">
	<table class="table" style="width: 500px;color: white">
		<tr>
			<th>amount</th>
			<td><input type="text"  required="" value="<?php echo $aid; ?>" name="amount" class="form-control"></td>
		</tr>
		<tr>
			<td align="center" colspan="2"><input type="submit" name="payment" value="submit"class="btn btn-success"></td>
		</tr>
	</table>
</form>
</center>
                    </div></div></div></div></div></div></section>

<?php include 'footer.php' ?>