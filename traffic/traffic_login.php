<?php include 'publicheader.php';

if (isset($_POST['login'])) {
	extract($_POST);

	echo$q="select * from login where username='$uname' and password='$pwd'";
	$res=select($q);
    
  if(sizeof($res>0)) {
  		$_SESSION['logid']=$res[0]['login_id'];
		$logid=$_SESSION['logid'];
  	if($res[0]['type']=="admin") {
  		return redirect('admin_home.php');
  	  }elseif($res[0]['type']=="police"){
  	 //  		$q1="select * from police where login_id='$logid'";
 	 	// $r=select($q1);
 	 	// if (sizeof($r)>0)
 	 	//  {
 	 	// 	$_SESSION['pid']=$r[0]['police_id'];
 	 	// 	$pid=$_SESSION['pid'];
 	 	

  	  	return redirect('traffic_police.php');
  	  }elseif ($res[0]['type']=="user") {
  	  $q2="select * from registration where login_id='$logid'";
 	 	$r1=select($q2);
 	 	if (sizeof($r1)>0)
 	 	 {
 	 		$_SESSION['uid']=$r1[0]['user_id'];
 	 		$uid=$_SESSION['uid'];
 	 		return redirect('traffic_user.php');
 	 	
  	  	
  	   }
}
  	}
  }
?><section class=" slider_section">
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
<h1>login</h1>
<form method="post">
	<table class="table" style="width: 500px;color: white">
		<tr>
			<th>user name</th>
			<td><input type="text" name="uname" required="" class="form-control"></td>
		</tr>
		<tr>
			<th>password</th>
			<td><input type="password" name="pwd" required="" class="form-control"></td>
		</tr>
		<tr>
			<td align="center" colspan="2"><input type="submit" name="login" value="submit" class="btn btn-success"></td>
		</tr>
	</table>
</form>
</center>

                   </div></div></div></div></div></div></section>

<?php include 'footer.php' ?>