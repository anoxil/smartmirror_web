<!DOCTYPE html>
<html lang="fr">

<?php require("includes/head.php"); ?>
<body class="home">
<?php require("includes/navbar.php"); ?>

	<header id="head" class="secondary"></header>

	<!-- container -->
	<div class="container">

	<?php require("includes/smartmirrorCategories.php"); ?>	

		<div class="row">
			
			<!-- Article main content -->
			<article class="col-md-12 maincontent">
				<header class="page-header">
					<h1 class="page-title">Matériel et prérequis</h1>
				</header>
			
				<p>
					Le matériel requis pour l’installation de SmartMirror est le suivant :
					
					<ul>
					<li>1 Raspberry pi >3 sous Raspbian (et son alimentation) ou 1 ordinateur (sous une distribution Linux basée sur Debian)</li>
					<li>1 câble HDMI</li>
					<li>1 carte micro sd (au moins 8Go)</li>
					<li>1 microphone</li>
					<li>1 structure composée d’un écran, d’un cadre et d’un film sans tain pour le miroir (ou un simple écran)</li>
					</ul>
				</p>

				<img src="assets/images/materiel/materiel.png" height=50% width=50%>
			
			</article>
			<!-- /Article -->

		</div>

	<?php require("includes/smartmirrorCategories.php"); ?>

	</div>	<!-- /container -->
	

<?php require("includes/footer.php"); ?>	
<?php require("includes/dependencies.php"); ?>
</body>
</html>