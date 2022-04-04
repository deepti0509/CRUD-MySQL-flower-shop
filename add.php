<!DOCTYPE html>
<html>

<?php include('templates/header.php'); ?>


<?php

include('config/db_connect.php');

$nameOfFlower = $descriptionOfFlower = $priceOfFlower = $flowerImageUrl = '';

$flowerTypesSql = "SELECT * FROM `flower_types`;";

$flowerTypesResult = mysqli_query($conn, $flowerTypesSql);

$flowerTypes = mysqli_fetch_all($flowerTypesResult, MYSQLI_ASSOC);
mysqli_free_result($flowerTypesResult);

if (isset($_POST['submit'])) {


	$userId = $_SESSION['userId'];


	$nameOfFlower = mysqli_real_escape_string($conn, $_POST['nameOfFlower']);
	$descriptionOfFlower = mysqli_real_escape_string($conn, $_POST['descriptionOfFlower']);
	$priceOfFlower = mysqli_real_escape_string($conn, $_POST['priceOfFlower']);
	$typeOfFlower = mysqli_real_escape_string($conn, $_POST['typeOfFlower']);
	$flowerImageUrl = mysqli_real_escape_string($conn, $_POST['flowerImageUrl']);

	// create sql
	$sql = "INSERT INTO flowers(name,description,price,flower_type, created_by, img_url) VALUES('$nameOfFlower','$descriptionOfFlower','$priceOfFlower', '$typeOfFlower', '$userId', '$flowerImageUrl')";

	// save to db and check
	if (mysqli_query($conn, $sql)) {
		// success
		header('Location: index.php');
	} else {
		echo 'query error: ' . mysqli_error($conn);
	}
} // end POST check

?>


<section class="container grey-text">
	<h4 class="center">Add a Pizza</h4>
	<form class="white" action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
		<label>Name of Flower</label>
		<input required type="text" name="nameOfFlower" value="<?php echo htmlspecialchars($nameOfFlower) ?>">
		<label>Description of Flower</label>
		<textarea class="materialize-textarea" required name="descriptionOfFlower" value="<?php echo htmlspecialchars($descriptionOfFlower) ?>"></textarea>
		<label>Price of Flower</label>
		<input required type="number" name="priceOfFlower" value="<?php echo htmlspecialchars($priceOfFlower) ?>">
		<label>Image URL</label>
		<input required type="text" name="flowerImageUrl" value="<?php echo htmlspecialchars($flowerImageUrl) ?>">

		<div class="input-field col s12 m6">
			<select class="icons flower_type_select" name="typeOfFlower">
				<?php foreach ($flowerTypes as $flowerType) : ?>
					<option class="" value="<?php echo htmlspecialchars($flowerType["id"]) ?>" data-icon="img/<?php echo htmlspecialchars($flowerType["name"]) ?>.svg"><?php echo htmlspecialchars($flowerType["name"]) ?></option>
				<?php endforeach; ?>
			</select>
			<label>Flower type</label>
		</div>


		<div class="center">
			<input type="submit" name="submit" value="Submit" class="btn brand z-depth-0">
		</div>

	</form>
</section>
<script>
	document.addEventListener('DOMContentLoaded', function() {
		var elems = document.querySelectorAll('select');
		var instances = M.FormSelect.init(elems);
	});
</script>

<?php include('templates/footer.php'); ?>

</html>