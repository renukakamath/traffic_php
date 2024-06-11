<?php include 'adminheader.php';


if (isset($_POST['reply'])) {
	{
	extract($_POST);
	$q="update complaint set reply='$rep' where complaint_id='$cid'";
	update($q);
	alert('sucessfully');
	return redirect ('admin_viewcomplaint.php');

}

}







 ?>
 <center>
<h1>send reply</h1>
<form method="post">
	<table class="table" style="width: 500px">
		<tr>
			<th>reply</th>
			<td><input type="text"  required="" name="rep" class="form-control"></td>
		</tr>
		<tr>
			<td align="center" colspan="2"><input type="submit" name="reply" value="submit" class="btn btn-success"></td>
		</tr>

	</table>
</form>
</center>
<?php include 'footer.php' ?>