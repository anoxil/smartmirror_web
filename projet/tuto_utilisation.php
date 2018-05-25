<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport"    content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author"      content="Sergey Pozhilov (GetTemplate.com)">
	
	<title>Right Sidebar template - Progressus Bootstrap template</title>

	<link rel="shortcut icon" href="../assets/images/gt_favicon.png">
	
	<link rel="stylesheet" media="screen" href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700">
	<link rel="stylesheet" href="../assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="../assets/css/font-awesome.min.css">

	<!-- Custom styles for our template -->
	<link rel="stylesheet" href="../assets/css/bootstrap-theme.css" media="screen" >
	<link rel="stylesheet" href="../assets/css/main.css">

	<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
	<script src="assets/js/html5shiv.js"></script>
	<script src="assets/js/respond.min.js"></script>
	<![endif]-->
</head>

<body>
	<!-- Fixed navbar -->
	<?php
		require("navbar.php");
	?>
	<!-- /.navbar -->

	<header id="head" class="secondary"></header>

	<!-- container -->
	<div class="container">

		<ol class="breadcrumb">
			<li><a href="objectifs.html">Objectifs</a></li>
			<li><a href="materiel.html">Matériel et pré-requis</a></li>			
			<li><a href="donnees.html">Recueil des données</a></li>
			<li><a href="tuto_fabrication.html">Tutoriel de fabrication</a></li>
			<li>Tutoriel d'utilisation</li>
		</ol>

		<div class="row">
			
			<!-- Article main content -->
			<article class="col-md-8 maincontent">
				<header class="page-header">
					<h1 class="page-title">Documentation technique</h1>
				</header>
				<table>
						<tr>
						<td> <iframe src="../documents/docUtilisateur.pdf" width=400% height=1000% align="middle"></iframe></td>
						</tr>
				</table>

			</article>
			<!-- /Article -->
			

		</div>

		<ol class="breadcrumb">
			<li><a href="objectifs.html">Objectifs</a></li>
			<li><a href="materiel.html">Matériel et pré-requis</a></li>			
			<li><a href="donnees.html">Recueil des données</a></li>
			<li><a href="tuto_fabrication.html">Tutoriel de fabrication</a></li>
			<li>Tutoriel d'utilisation</li>
		</ol>

	</div>	<!-- /container -->
	

	<footer id="footer" class="top-space">

		<div class="footer2">
			<div class="container">
				<div class="row">

					<div class="col-md-6 col-md-offset-6 widget">
						<div class="widget-body">
							<p class="text-right">
								Designed by <a href="http://gettemplate.com/" rel="designer">gettemplate</a>, modified by <a href="https://ensc.bordeaux-inp.fr/fr">ENSC</a> students. 
							</p>
						</div>
					</div>

				</div> <!-- /row of widgets -->
			</div>
		</div>

	</footer>	
		




	<!-- JavaScript libs are placed at the end of the document so the pages load faster -->
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
	<script src="../assets/js/headroom.min.js"></script>
	<script src="../assets/js/jQuery.headroom.min.js"></script>
	<script src="../assets/js/template.js"></script>
</body>
</html>