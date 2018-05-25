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
					<h1 class="page-title">Documentation technique</h1>
				</header>
				<table>
						<tr>
						<td> <iframe src="assets/documents/docUtilisateur.pdf" width=400% height=1000% align="middle"></iframe></td>
						</tr>
				</table>

			</article>
			<!-- /Article -->
			

		</div>

		<?php require("includes/projetCategories.php"); ?>

	</div>	<!-- /container -->
	

<?php require("includes/footer.php"); ?>	
		
<?php require("includes/dependencies.php"); ?>
</body>
</html>