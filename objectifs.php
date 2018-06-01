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
					<h1 class="page-title">Les objectifs</h1>
				</header>
				
				<h2>L'objectif général</h2><br/><br/>
				<p><b>L'objectif : </b> Concevoir un miroir intelligent, permettant d'améliorer le quotidien de ses utilisateurs, en se basant sur l'emploi du temps.</p>
				<p><b>Les utilisateurs : </b> Le public visé sont les étudiants, qui sont les personnes les plus susceptibles d'avoir leur emploi du temps en ligne.</p> 
				<p><b>L'emplacement : </b>Il est destiné à la pièce principale du domicile.</p>
				<p><b>L'innovation : </b>Fournir des informations <u>contextualisées</u>.
				
				<h2>Les fonctionnalités</h2><br/><br/>
				<p><img src="assets/images/fonctions.png" alt=""></p>
				<p>Le miroir apportera à ses utilisateurs des informations sur : </p>
					<ul>
					<li>La météo de la ville de domicile, ou d'ailleurs en fonction des déplacements éventuels ; </li>
					<li>Les horaires des transports en commun, pour les arrêts proches du domicile, en fonction des lieux des prochains événements ; </li>
					<li>Les éventuelles perturbations sur les lignes de transport (interruption, retard, grève,...) ;</li>
					<li>Les éventuelles perturbations du trafic routier, sur les trajets effectués régulièrement (embouteillages, accidents,...) ; </li>
					<li>Les prochains événements à venir, avec une mise à jour en direct de l'emploi du temps, afin d'être informé des éventuels modifications ; </li>
					<li>Les actualités.</li>
					</ul>
					
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