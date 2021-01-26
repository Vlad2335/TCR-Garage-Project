<?php
// Zorgt voor het verwijderen van gegevens

	include 'model.php';
	$model = new Model();
	$id = $_REQUEST['id'];
	$delete = $model->delete($id); // Probleem fixed

	if ($delete) {
		echo "<script>alert('Gegevens zijn verwijderd');</script>";
		echo "<script>window.location.href = 'records.php';</script>";
	}

 ?>
