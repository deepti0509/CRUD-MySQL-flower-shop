<?php

include('config/db_connect.php');

$sql = "SELECT * FROM `flowers` ORDER BY created_at;";

$result = mysqli_query($conn, $sql);

$flowers = mysqli_fetch_all($result, MYSQLI_ASSOC);

mysqli_free_result($result);


?>

<!DOCTYPE html>
<html>

<?php include('templates/header.php'); ?>

<h4 class="center grey-text">Flowers!</h4>

<div class="container">

	<div class="row">


		<?php foreach ($flowers as $flower) : ?>


			<?php
			$flowerTypeId = $flower['flower_type'];
			$flowerTypeSql = "SELECT * FROM `flower_types` WHERE id='$flowerTypeId'";
			$flowerTypeSqlResult = mysqli_query($conn, $flowerTypeSql);
			$flowerType = mysqli_fetch_assoc($flowerTypeSqlResult);
			mysqli_free_result($flowerTypeSqlResult);
			?>

			<div class="col s6 m4 flower_card">
				<div class="card z-depth-0">
					<img src="<?php echo htmlspecialchars($flowerType['img_url']); ?>" class="flower">
					<div class="card-content center">
						<h6><?php echo htmlspecialchars($flower['name']); ?></h6>
						<p><?php echo  substr(htmlspecialchars($flower['description']), 0, 100) . "..."; ?></p>
					</div>
					<div class="card-action" style="display: flex; justify-content: space-between;">
						Price: ₹ <?php echo $flower['price'] ?>
						</span>
						<a class="brand-text" href="details.php?id=<?php echo $flower['id'] ?>">more info</a>
					</div>
				</div>
			</div>

		<?php endforeach; ?>

	</div>
</div>

<?php include('templates/footer.php'); ?>

</html>