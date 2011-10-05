<?php
	$connection = new Mongo();
	$db = $connection->csf;
	
	//save data
	$db->cmd3list->save($_POST);
	
?>

<h1>Entries</h1>
<?php foreach($db->cmd3list->find()as$entry):?>
	<?php echo $entry['firstname'];?><br />
<?endforeach?>
