<?php include 'userheader.php' ?>
<center>
<h1>view fines</h1>
<form>
	<table class="table" style="width: 500px">
		<tr>
			<th>sino</th>
			<th>Description</th>
			<th>Amount</th>
			<th>Date</th>
			<th>status</th>
		</tr>
		<?php 
    $q="select * from fine";
    $res=select($q);
    $sino=1;

    foreach ($res as $row) {?>
        <tr>
    	<td><?php echo $sino++; ?></td>
    	<td><?php echo $row['description'] ?></td>
    	<td><?php echo $row['amount'] ?></td>
    	<td><?php echo $row['date'] ?></td>
            <?php 
    if ($row['status']=='pending') {
        ?>
        
     <td><a href="user_makepayment.php?fid=<?php echo $row['fine_id']?>&aid=<?php echo $row['amount'] ?>">make payment</a></td>

    <?php 
     } 
    else{
    ?>

    	<td><?php echo $row['status'] ?></td>
    	
    	</tr>
   <?php }
}

		 ?>
	</table>
</form>
</center>
<?php include 'footer.php' ?>