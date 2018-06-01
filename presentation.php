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
			<article class="col-md-8 maincontent">
				<header class="page-header">
					<h1 class="page-title">SmartMirror, pensé pour les étudiants</h1>
				</header>
				<div class="text-justify">
				<p>
					SmartMirror est un miroir connecté tournant sous Raspberry Pi. Relié à Internet, il est capable de vous renseigner en temps 
					réel sur diverses informations telles que la météo, les actualité, votre agenda, les horaires des prochains transports en commun,
					ou encore le traffic routier environnant. 
				<p>
				<p>SmartMirror se différencie de la plupart des autres miroirs connecté par le fait qu'il proposera toujours une information
				contextualisée, c'est à dire adaptée à l'utilisateur au moment ou il regarde le miroir. Par exemple, les horaires des prochains
				transports en commun disponibles correspondent à ceux pour se rendre au prochain événement entré dans l'agenda.</p>

				<p>Cette partie est dédiée à la présentation du miroir. Vous trouverez ci-dessous différentes photos du miroir puis
				    des vidéos présentant les interactions avec le miroir, via commande vocale. Pour plus d'informations, consultez la
					<a href="tuto_utilisation.php">documentation</a></p>
				
				</div>
				<br>

				<div>
					<figure>
						<img onclick="window.open(this.src); return false;" src="assets/images/miroirinterface.png" controls width="600"></img>
							
						<figcaption>Interface par défaut du miroir</figcaption>
					</figure>
				</div>
				<br>

				<div>
					<figure>
						<img onclick="window.open(this.src); return false;" src="assets/images/miroir2.jpg" controls width="600"></img>
							
						<figcaption>Le miroir et son cadre</figcaption>
					</figure>
				</div>
				<br>

				<div>
					<figure>
						<video src="assets/videos/actualites.mp4" controls width="600"></video>
							
						<figcaption>Actualités</figcaption>
					</figure>
				</div>
				<br>

				<div>
					<figure>
						<video src="assets/videos/agenda.mp4" controls width="600"></video>
							
						<figcaption>Agenda</figcaption>
					</figure>
				</div>
				<br>

				<div>
					<figure>
						<video src="assets/videos/meteo.mp4" controls width="600"></video>
							
						<figcaption>Météo</figcaption>
					</figure>
				</div>
				<br>

				<div>
					<figure>
						<video src="assets/videos/traffic.mp4" controls width="600"></video>
							
						<figcaption>Trafic</figcaption>
					</figure>
				</div>
				<br>

				<div>
					<figure>
						<video src="assets/videos/veille.mp4" controls width="600"></video>
							
						<figcaption>Veille</figcaption>
					</figure>
				</div>

				
				
				
				</p>
			</article>
			<!-- /Article -->
			
			<!-- Sidebar -->
			<!-- <aside class="col-md-4 sidebar sidebar-right">

				<div class="row widget">
					<div class="col-xs-12">
						<h4>Lorem ipsum dolor sit</h4>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere, ratione delectus reiciendis nulla nisi pariatur molestias animi eos repellat? Vel.</p>
					</div>
				</div>
				<div class="row widget">
					<div class="col-xs-12">
						<h4>Lorem ipsum dolor sit</h4>
						<p><img src="../assets/images/1.jpg" alt=""></p>
					</div>
				</div>
				<div class="row widget">
					<div class="col-xs-12">
						<h4>Lorem ipsum dolor sit</h4>
						<p><img src="../assets/images/2.jpg" alt=""></p>
						<p>Qui, debitis, ad, neque reprehenderit laborum soluta dolor voluptate eligendi enim consequuntur eveniet recusandae rerum? Atque eos corporis provident tenetur.</p>
					</div>
				</div>

			</aside> -->
			<!-- /Sidebar -->

		</div>

		<?php require("includes/smartmirrorCategories.php"); ?>
		

	</div>	<!-- /container -->

	<?php require("includes/footer.php"); ?>	
	<?php require("includes/dependencies.php"); ?>

</body>
</html>