<?php
	
include('config/db_connect.php');

//Write query for all pizzas
$sql = 'SELECT title, ingredients, id FROM pizzas ORDER BY created_at';

//make query & get result
$result = mysqli_query($conn, $sql);

//fetch resulting rows as an array
$pizzas= mysqli_fetch_all($result , MYSQLI_ASSOC);

mysqli_free_result($result);
// Close connection
mysqli_close($conn);

//print_r($pizzas);
//print_r(explode(',', $pizzas[0]['ingredients']));

?>

<!DOCTYPE html>
<html>
<?php  include('Templates/header.php'); ?>

<h4 class="center grey-text">Pizzas!</h4>
<div class="container">
	<div class="row">
		<?php foreach ($pizzas as $pizza) {?>
			<div class="col s6 md3">
				<div class="card z-depth-0">
					<img src="images/pizza.jpg" class="pizza">
					<div class="card-content center">
						<h6><?php echo htmlspecialchars($pizza['title']); ?></h6>
						<ul>
							<?php
								foreach (explode(',', $pizza['ingredients']) as $ing) {?>
								<li><?php echo htmlspecialchars($ing); ?></li>	
								<?php } ?>
						</ul>
						<!--<div><?php //echo htmlspecialchars($pizza['ingredients']); ?></div>-->
					</div>
					<div class="card-action right-align">
						<a href="details.php?id=<?php echo $pizza['id'];?>" class="brand-text">more info</a>
					</div>
				</div>
			</div>
		<?php } 
			if(count($pizzas) >=2)
			{ ?>
				<p>There are 2 or more pizzas</p>
			<?php }
				else
				{?>
					<p>There are less than 3 pizzas</p>
				<?php }

		?>
	</div>
</div>

<?php  include('Templates/footer.php'); ?>


</html>