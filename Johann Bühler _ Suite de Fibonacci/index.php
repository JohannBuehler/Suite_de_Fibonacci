<?php

include_once('Classes/SuiteDeFibonacci.class.php');

define('MIN', 0);
define('MAX', 999999999);

?>
<!DOCTYPE html>
<html lang="fr">
<head>
	<title>Suite de Fibonacci</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="CSS/styles.css">
</head>
<body>
	<div id="container">

		<header class="text_align_center">
			<h1 id="mainTitleH1">Suite de Fibonacci</h1>
			<h2><span class="text_decoration_underline">Auteur :</span>    Johann Bühler</h2>
		</header>

		<main>

			<div id="div_form">
				<form action="index.php" method="post">
					<label for="userValue">Choisissez la valeur <span class="text_decoration_underline">maximale</span> pour la suite de Fibonacci <br>(entre <?=MIN?> et <?=MAX?>) :</label>
					<input type="number" name="userValue" min="<?=MIN?>" max="<?=MAX?>" value="<?php if(isset($_POST['userValue'])) { echo $_POST['userValue']; } ?>" required>
					<input type="submit" name="submit">
				</form>
			</div>

			<?php 
			if (isset($_POST['userValue'])) 
			{
				?>
				<div id="div_display">
					<h2>
						<span class="text_decoration_underline">
							Vous avez choisi :
						</span>    
						<?=$_POST['userValue']?>
					</h2>
					<?php SuiteDeFibonacci::Display($_POST['userValue']); ?>
				</div>
				<?php
			} // END - if (isset($_POST['userValue']))
			?>
		</main>

		<footer>

		</footer>

	</div>
</body>
</html>