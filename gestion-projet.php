<!DOCTYPE html>
<html lang="en">
<?php require("includes/head.php"); ?>

<body>
<?php require("includes/navbar.php"); ?>

	<header id="head" class="secondary"></header>

	<!-- container -->
	<div class="container">

		<?php require("includes/projetCategories.php"); ?>

		<div class="row">
			
			<!-- Article main content -->
			<article class="col-md-8 maincontent">
				<header class="page-header">
					<h1 class="page-title">Gestion de projet</h1>
				</header>
				<p>L'avancement de la réalisation de notre miroir connecté est représentée sur les Diagrammes de Gantt suivants. </p>

				<h2>Semestre 1</h2>
				<p>Voici le planning suivi au cours du Semestre 1 : </p>
				<p><img src="assets/images/GanttS1.png" alt=""></p>

				<blockquote></br></br></blockquote>
				
				<h2>Semestre 2 </h2>
				<p>Voici le planning suivi au cours du Semestre 2 : </p>
				<p><img src="assets/images/GanttS2.png" alt=""></p>
			</article>
			<!-- /Article -->
			

		</div>

		<?php require("includes/projetCategories.php"); ?>

	</div>	<!-- /container -->
	


<?php require("includes/footer.php"); ?>	

<?php require("includes/dependencies.php"); ?>
</body>
</html>