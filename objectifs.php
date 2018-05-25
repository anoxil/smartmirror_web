<!DOCTYPE html>
<html lang="fr">
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
					<h1 class="page-title">Nos objectifs</h1>
				</header>
				
				<p>
					L’objectif est de concevoir un miroir connecté, destiné à la pièce principale du domicile, qui permettrait d’améliorer le quotidien des étudiants 
					en leur apportant des informations contextualisées (météo selon les lieux de déplacement, perturbations de la circulation selon le trajet à 
					effectuer, changements d’emploi du temps, etc.). Il permettra aux utilisateur de :
					<ul>
					<li>disposer de la météo, de la ville de domicile ou d’ailleurs en fonction des lieux de déplacement éventuels,</li>
					<li>disposer des horaires des transport en commun (Tram ou bus) pour les arrêts proches du domicile, </li>
					<li>être informé des éventuelles perturbations sur les lignes de transport (interruption du Tram, retards à prévoir, grève des transports, etc.)</li>
					<li>être informé des éventuelles perturbations de circulation, du trafic routier, sur les trajets effectués régulièrement, </li>
					<li>afficher les événements importants à venir, dans la journée ou les journées à venir, </li>
					<li>afficher son emploi du temps, mis à jour en direct afin d’être informé des éventuels changements d’emploi du temps, </li>
					<li>afficher son calendrier, avec vue sur les différentes journées, </li>
					<li>recevoir des alarmes pour les événements à venir, ou des rappels tels que des médicaments à prendre,... </li>
					</ul>
					
					Le produit final attendu est la réalisation d’un miroir connecté fonctionnel, proposant toutes les fonctions que nous avons définis plus haut.
				</p>
			</article>
			<!-- /Article -->


		</div>
		<?php require("includes/projetCategories.php"); ?>

	</div>	<!-- /container -->
	

<?php require("includes/footer.php"); ?>	
		
<?php require("includes/dependencies.php"); ?>
</body>
</html>