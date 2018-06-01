<!DOCTYPE html>
<html lang="fr">

<?php require("includes/head.php"); ?>
<body class="home">
<?php require("includes/navbar.php"); ?>

	<header id="head" class="secondary"></header>

	<!-- container -->
	<div class="container">

		<?php require("includes/projetCategories.php"); ?>

		<div class="row">
			
			<!-- Article main content -->
			<article class="col-md-8 maincontent">
				<header class="page-header">
					<h1 class="page-title">Bilan</h1>
				</header>
				
				<h2>Les apports de ce projet Transdisciplinaire</h2><br/>
				<h3>En informatique</h3>
				<p>1. Mise en pratique de nos apprentissages en langages de programmation web</p>
				<p>2. Approfondissement de ces connaissances</p>
				<p><img src="assets/images/langages.png" alt=""></p>
				
				
				<h3>En Conception Centrée Utilisateurs</h3>
				<p> 1. Réaliser des questionnaires utilisateurs</p> 
				<p> 2. Mener des tests utilisateurs</p> 
				<p> 3. Un projet entièrement basé sur l'Expérience Utilisateur</p> 

				<h3>En Gestion de Projet</h3>
				<p> 1. Des plannings à respecter</p> 
				<p> 2. Un Cahier des Charges à respecter</p> 
				<p> 3. La gestion d'un travail en équipe</p> 
	
				<h2>Les difficultés rencontrées</h2>
				<p>1. Concevoir un produit innovant, dans un domaine où de nombreuses solutions sont déjà proposées </p>
				<p>2. Un mauvais choix de sujet initial, ayant causé une perte de temps. Nous étions parti sur l'idée d'un miroir social, destinés aux personnes âgées. Ayant une connaissance trop faible de ce public spécifique, nous avons pris la décision de changer de projet.  </p>
				<p>3. Une reconnaissance vocale peu réactive, qui nécessite du temps d'attente et de bien articuler</p>
				<p>4. Des difficultés lors de l'intégration du module des transports en commun. Le module initial ne présentait les transports en commun pour certaines villes seulement</p>
				<p>5. Utilisation d'un micro issu d'une webcam, de faible qualité</p>
				<p>6. Un membre du projet ayant quitté l'école</p>

				<header class="page-header">
					<h1>Les perspectives</h1>
				</header>
				<p> 1. Approfondir l'aspect contextualisation, en proposant par exemple la météo du lieu du prochain événement </p> 
				<p> 2. Conception d'une application User-Friendly, pour la configuration du miroir </p> 
				<p> 3. Ajout de modules</p> 
				<p> 4. Amélioration de la reconnaissance vocale </p>
		
			</article>
			<!-- /Article -->
			
		
		</div>

		<?php require("includes/projetCategories.php"); ?>

	</div>	<!-- /container -->

<?php require("includes/footer.php"); ?>	
<?php require("includes/dependencies.php"); ?>
</body>
</html>