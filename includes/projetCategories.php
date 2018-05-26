<?php
$categories = ["objectifs.php", "deroulement.php", "gestion-projet.php", "bilan.php"];
$intitules = ["Introduction et objectifs", "Déroulement du projet", "Gestion de projet", "Bilan et perspectives"];
?>
<ol class="breadcrumb">
	<?php 
	for ($c = 0 ;$c < count($categories); $c++){
		if ($categories[$c] == $_SERVER['PHP_SELF']){?>
			<li><?echo $intitules[$c]?></li>
		<?php
		}
		else{?>
			<li><a href="<?php echo $categories[$c] ?>" ><?php echo $intitules[$c]?></a></li>

	<?php
		}
	}
	?>
			<!-- <li>Objectifs</li>
			<li><a href="materiel.php">Matériel et pré-requis</a></li>			
			<li><a href="donnees.php">Recueil des données</a></li>
			<li><a href="tuto_fabrication.php">Tutoriel de fabrication</a></li>
			<li><a href="tuto_utilisation.html">Tutoriel d'utilisation</a></li> -->
</ol>