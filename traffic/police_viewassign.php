<?php include 'policeheader.php' ?>
<center>
<h1 bold>view duty assigned</h1>
<form method="post">
	<table class="table" style="width: 500px">
		<tr>
			<th>sino</th>
			<th>police</th>
			<th>duties</th>
		</tr>
		<?php 
    $q="select * from dutyassigned inner join police using(police_id) inner join duties using(duties_id) inner join place using(place_id)  ";
    $res=select($q);
    $sino=1;
    foreach ($res as $row) {?>
    	<tr>
    		<td><?php echo $sino++; ?></td>
    		<td><?php echo $row['fname'] ?></td>
    		<td><?php echo $row['place'] ?></td>
    	</tr>
    <?php }

		 ?>
	</table>
</form>
</center>
<?php include 'footer.php' ?>
