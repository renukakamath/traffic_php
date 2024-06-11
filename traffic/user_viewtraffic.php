<?php include 'userheader.php' ?>
<center>
<h1>view traffic rules</h1>
<form method="post">
	<table class="table" style="width: 500px">
		<tr>
			<th>sino</th>
			<th>rules</th>
			<th>description</th>
			<th>date</th>
		</tr>
		<?php 

  $q="select * from trafficrules ";
  $res=select($q);
  $sino=1;

  foreach ($res as $row) {?>
  	<tr>
  		<td><?php echo $sino++; ?></td>
  		<td><?php echo $row['rule'] ?></td>
  		<td><?php echo $row['description'] ?></td>
  		<td><?php echo $row['date'] ?></td>
  	</tr>
  	
 <?php  }

		 ?>
	</table>
</form>
</center>
<?php include 'footer.php' ?>