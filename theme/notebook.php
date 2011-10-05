<?php
	$connection = new Mongo();
	$db = $connection->csf;
	
	//save data
	$db->mylist->save($_POST);
	
?>

<a href="theme.html">Home</a>

<h1>NoteBooks</h1>
<?php foreach($db->mylist->find()as$entry):?>
	<?php echo $entry['notebooks'];?><br />
	
	<form action="note.php" method="post">
		<input type="submit" value="view notes" name="submit">
	</form>
<?endforeach?>
