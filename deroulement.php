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
					<h1 class="page-title">Une Conception Centrée Utilisateur</h1>
				</header>

				<p>Plusieurs étapes nous ont permis de cerner les besoins et attentes des utilisateurs.
					Nous avons ainsi pu concevoir un produit qui leur est adapté.</p>

				<br>
				<p>
				<figure class="text-center">
					<img src="assets/images/evolutions/ccu.png" alt="">
					<img src="asset" alt="">
					<figcaption>Les grandes étapes de la CCU</figcaption>
				</figure></p>

				<h2>En résumé</h2>
				<h3>Au démarrage :</h2>
				<p><img src="assets/images/evolutions/etape1.png" alt=""></p>

				<h3>Pendant le développement : </h3>
				<p><img src="assets/images/evolutions/etape2.png" alt=""></p>
			
				<h3>En fin de développement : </h3>
				<p><img src="assets/images/evolutions/etape3.png" alt=""></p>

				<br>
				<br>
				<br>	

				<h2>Les étapes détaillées de la CCU</h2></br>

				<h3>0. Planification du processus de conception (Semestre 1) </h2>
				<p>
					<ul>
						<li>Recherches sur les différents miroirs connectés existant, dans le commerce mais aussi ceux faits par des amateurs.</li>
						<li>Recherche de la plus-value à ajouter à notre miroir. Première idée : miroir pour personnes âgées.</li>
						<li>Idée rejettée par nos clients : ce n'est pas exactement ce qu'ils attendent et cette idée paraît trop ambitieuse
							à la vue des exigences qu'impliquent une solutions pour personnes âgées.</li>
						<li>Une nouvelle idée : un miroir contextualisé.</li>
						<li>Un public visé : les étudiants.</li>
						<li>Recherches sur les différentes fonctionnalités intégrables sur un miroir connecté, et les différentes technologies
						(matérielles et logicielles) utilisables.</li>
					</ul>

					→ Élaboration d'un <a href="assets/documents/Etat de l'art.pdf" target="_blank">état de l'art</a>
				</p>

				<h3>1. Compréhension du contexte d'utilisation (Semestre 1) </h2>
				<p>
					<ul>
						<li>Élaboration d'un <a href="assets/documents/questionnaire1.pdf" target="_blank">premier questionnaire</a> pour se renseigner sur les habitudes et les besoins des 
							utilisateurs potentiels du miroir.</li>
						<li>Analyse des résultats, consultable <a href="https://drive.google.com/open?id=1kvkHph3Cv8JfeHm3FvYiXjpugGbjpFfkp7hWYvDrJ0I" target="_blank">
						ici</a>.</li>
						<li>Élaboration d'un <a href="assets/images/evolutions/persona.png" target="_blank">persona</a>.</li>
						<li>Choix des <a href="assets/documents/fonctionnalites.pdf" target="_blank">fonctionnalités à implémenter</a>, grâce aux résultats du 
						questionnaire</li>
						<li>Validation d'une version finale du <a href="assets/documents/CDC.pdf" target="_blank">cahier des charge</a>, en accord
							avec nos clients mais aussi avec les besoins des utilisateurs.</li>
					</ul>
				</p>
				<br>
				<p>
				<figure class="text-center">
					<img src="assets/images/evolutions/etape1.png" >
					<figcaption>Bilan du premier semestre</figcaption>
				</figure>
				</p>


				<h3>2. Spécification des exigences (Semestre 2)</h3>
				<p>
					<ul>
						<li>Élaboration d'un <a href="assets/documents/questionnaire2.pdf" target="_blank">deuxième questionnaire</a>
						pour savoir comment organiser l'interface et comment afficher les informations à l'écran.</li>
						<li><a href="assets/documents/analyseQ2.pdf" target="_blank">Analyse des résultats</a> et élaboration de maquettes papier.</li>
					</ul>
				</p>
				<br>
				<p><img src="assets/images/evolutions/etape2.png" alt=""></p>

				<h3>3. Production des solutions (Semestre 2)</h3>
				<p>
					<ul>
						<li>Configuration de <a href="https://magicmirror.builders" target="_blank">MagicMirror</a> et de modules pré-existants. </li>
						<li>Intégration de la reconnaissance vocale, via <a href= "https://github.com/kalliope-project/kalliope" target="_blank">Kalliope.</a></li>
						<li>Développement du <a href="https://github.com/Fabien-Couthouis/SmartMirror/tree/master/modules/MMM-VoiceInterface" target="_blank">
						module permettant de visualiser l'état de Kalliope.</a></li>
						<li>Développement du <a href="https://github.com/Fabien-Couthouis/MMM-Bordeaux-Transports" target="_blank">module de transports en commun.</a></li>
						<li>Configuration de la reconnaissance vocale.</li>
						<li>Écriture de la documentation.</li>
					</ul>	
				</p>
				<h3>4. Évaluation des solutions (Semestre 2)</h3>
				<p>
					<ul>
						<li> Élaboration d'un <a href="assets/documents/Protocole test orga papier.pdf" target="_blank">protocole de test</a> afin de vérifier l'utilisabilité du miroir par des utilisateurs étrangers au système. </li>
						<li><a href="assets/documents/ResTestUtil - Feuille 1.pdf" target="_blank">Analyse des résultats</a> et modification ou ajout de certains mots clés pour la détection vocale.</li>
						<li>découverte d'une mauvaise reconaissance des mots clés si précédés dun " L' ".</li>
						<li>Ajout d'une fonction RaZ qui ferme tous les modules ouverts ainsi que d'un mode veille qui passe l'écran du miroir en veille.</li>
					</ul>	
				</p>
				<br>
					<p><img src="assets/images/evolutions/etape3.png" alt=""></p>
					
				<h3>5. La solution satisfait les exigences des utilisateurs</h3>
				
				<br>
				<h3>Plan vert</h3>
				<p>
					<ul>
						<li>Nous avons fait en sorte que notre miroir n'apporte aucun stress à l'utilisateur comme des alertes qu'il pourrait recevoir contre sa volonté. En effet, un de nos objectifs était de créer un objet agréable et reposant à utiliser, c'est pourquoi nous avons supprimé le retour vocal du miroir.</li>
						<li>Afin de prendre en compte la problématique environnementale en compte, 
						nous avons décidé d'implémenter une fonction de mise en veille du miroir qui limite 
						ainsi sa consommation électrique lorsque son utilisation n'est pas requise.
						De plus, la plupart du matériel utilisé est du matériel recyclé.</li>
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