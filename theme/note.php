<?php
	$connection = new Mongo();
	$db = $connection->csf;
	
	//save data
	$db->mylist->save($_POST);
	
?>
<?php foreach($db->mylist->find()as$entry):?>
<h1>Notes in <?php echo $entry['notebooks'];?></h1>


