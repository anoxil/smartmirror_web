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

				<h2>Organisation</h2>
				<p class="text-justify">Durant le 1er semestre, nous avons tous travaillé sur l'état de l'art et la première version du cachier des charges.
				Nous organisions régulièrement des séances de travail communes. Cela a permis un travail collaboratif et une compréhension
				homogène de l'existant et des différentes problématiques posées.Nous nous sommes ensuite répartis en 2 pôles à partir du 2ème
				semestre, avec une équipe <strong>développement</strong> et une équipe <strong>facteur humain</strong>.
				(voir<a href="team.php"> page team</a>). </p>

				<h2>Communication</h2>
				<figure>
					<img onclick="window.open(this.src); return false;" src="assets/images/equipe.png" alt="">
						
					<figcaption>Communication via différents outils et des réunions fréquentes</figcaption>
				</figure>

				<h2>Plannings</h2>
				<p>L'avancement de la réalisation de notre miroir connecté est représentée sur les Diagrammes de Gantt suivants. </p>

				<h3>Semestre 1</h3>
				<p>Voici le planning suivi au cours du Semestre 1 : </p>
				<p><img src="assets/images/gestionDeProjet/gantts1.png" alt=""></p>

				
				<h3>Semestre 2 </h3>
				<p>Voici le planning suivi au cours du Semestre 2 : </p>
				<p><img src="assets/images/gestionDeProjet/gantts2.png" alt=""></p>
			</article>
			<!-- /Article -->
			

		</div>

		<?php require("includes/projetCategories.php"); ?>

	</div>	<!-- /container -->
	


<?php require("includes/footer.php"); ?>	

<?php require("includes/dependencies.php"); ?>
</body>
</html>