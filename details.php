<?php

include('config/db_connect.php');

if (isset($_POST['delete']) and isset($_SESSION['username'])) {

	$id_to_delete = mysqli_real_escape_string($conn, $_POST['id_to_delete']);

	$sql = "DELETE FROM flowers WHERE id = $id_to_delete";

	if (mysqli_query($conn, $sql)) {
		header('Location: index.php');
	} else {
		echo 'query error: ' . mysqli_error($conn);
	}
}

// check GET request id param
if (isset($_GET['id'])) {

	// escape sql chars
	$id = mysqli_real_escape_string($conn, $_GET['id']);

	// make sql
	$sql = "SELECT * FROM flowers WHERE id = $id";

	// get the query result
	$result = mysqli_query($conn, $sql);

	// fetch result in array format
	$flower = mysqli_fetch_assoc($result);

	mysqli_free_result($result);
	mysqli_close($conn);
}

?>

<!DOCTYPE html>
<html>

<?php include('templates/header.php'); ?>


<div class="container center">







	<?php if ($flower) : ?>

		<div class="container">
			<div class="row valign-wrapper">
				<div class="col s12 m10 offset-s1 offset-m1 valign">
					<div class="card z-depth-0">
						<div class="card-image">
							<img src="<?php echo $flower['img_url']; ?>">
							<span class="card-title"><?php echo $flower['name'] ?></span>
						</div>
						<div class="card-content">
							<?php echo $flower['description']; ?>
						</div>
						<div class="card-action" style="display: flex; justify-content: space-between;">
							<span>
								Price: ₹ <?php echo $flower['price'] ?>
							</span>

							<!-- DELETE FORM -->

							<?php
							if (isset($_SESSION['username'])) : ?>
								<form style="margin: 0; padding:0;" action="details.php" method="POST" style="">
									<input style="margin: 0;" type="hidden" name="id_to_delete" value="<?php echo $flower['id']; ?>">
									<input style="margin: 0;" type="submit" name="delete" value="Delete" class="btn brand z-depth-0">
								</form>
							<?php
							else : ?>

								<a href="signin.php" style="margin: 0;" name="delete" value="Delete" class="btn brand z-depth-0"> Sign in to Delete </a>

							<?php endif ?>


						</div>
					</div>
				</div>
			</div>
		</div>

	<?php else : ?>
		<h5>No such flower exists.</h5>
	<?php endif ?>
</div>

<?php include('templates/footer.php'); ?>

</html>