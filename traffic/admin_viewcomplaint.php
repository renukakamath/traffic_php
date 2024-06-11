<?php include 'adminheader.php' ?>
<center>
<h1>view complaint</h1>
<form>
	<table class="table" style="width: 500px">
		<tr>
			<th>sino</th>
			<th>name & user</th>

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
 	<td><?php echo $row['username'] ?><?php echo $row['type'] ?></td>
 	<td><?php echo $row['complaint'] ?></td>
 	<td><?php echo $row['date'] ?></td>
 		<?php 
 	if ($row['reply']=='pending') {
 		?>
 	 	
 <td><a href="admin_sentreply.php?cid=<?php echo $row['complaint_id'] ?>">send reply</a></td>	


 	<?php 
 	 } 
 	else{
 	?>
 	<td><?php echo $row['reply'] ?></td>
 	
 	
<?php 
}
}

			 ?>
		</tr>
	</table>
</form>
</center>
<?php include 'footer.php' ?>