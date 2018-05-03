<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>LE SITE DU MIROIR</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Cabin:700' rel='stylesheet' type='text/css'>

    <!-- Custom styles for this template -->
    <link href="css/grayscale.min.css" rel="stylesheet">
    <link href="css/diag_zoom.css" rel="stylesheet">
    <link rel="icon" type="image/png" href="img/favicon.ico"/>
    
    <!-- Zoom modal-->
    <style>
      * {box-sizing: border-box;}
      .img-magnifier-container {
        position:relative;
      }
      .img-magnifier-glass {
        position: absolute;
        border: 3px solid #000;
        border-radius: 50%;
        cursor: none;
        /*Set the size of the magnifier glass:*/
        width: 150px;
        height: 150px;
      }
    </style>
    <script>
      function magnify(imgID, zoom) {
        var img, glass, w, h, bw;
        img = document.getElementById(imgID);
        /*create magnifier glass:*/
        glass = document.createElement("DIV");
        glass.setAttribute("class", "img-magnifier-glass");
        /*insert magnifier glass:*/
        img.parentElement.insertBefore(glass, img);
        /*set background properties for the magnifier glass:*/
        glass.style.backgroundImage = "url('" + img.src + "')";
        glass.style.backgroundRepeat = "no-repeat";
        glass.style.backgroundSize = (img.width * zoom) + "px " + (img.height * zoom) + "px";
        bw = 3;
        w = glass.offsetWidth / 2;
        h = glass.offsetHeight / 2;
        /*execute a function when someone moves the magnifier glass over the image:*/
        glass.addEventListener("mousemove", moveMagnifier);
        img.addEventListener("mousemove", moveMagnifier);
        /*and also for touch screens:*/
        glass.addEventListener("touchmove", moveMagnifier);
        img.addEventListener("touchmove", moveMagnifier);

        function moveMagnifier(e) {
          var pos, x, y;
          /*prevent any other actions that may occur when moving over the image*/
          e.preventDefault();
          /*get the cursor's x and y positions:*/
          pos = getCursorPos(e);
          x = pos.x;
          y = pos.y;
          /*prevent the magnifier glass from being positioned outside the image:*/
          if (x > img.width - (w / zoom)) {x = img.width - (w / zoom);}
          if (x < w / zoom) {x = w / zoom;}
          if (y > img.height - (h / zoom)) {y = img.height - (h / zoom);}
          if (y < h / zoom) {y = h / zoom;}
          /*set the position of the magnifier glass:*/
          glass.style.left = (x - w) + "px";
          glass.style.top = (y - h) + "px";
          /*display what the magnifier glass "sees":*/
          glass.style.backgroundPosition = "-" + ((x * zoom) - w + bw) + "px -" + ((y * zoom) - h + bw) + "px";
        }

        function getCursorPos(e) {
          var a, x = 0, y = 0;
          e = e || window.event;
          /*get the x and y positions of the image:*/
          a = img.getBoundingClientRect();
          /*calculate the cursor's x and y coordinates, relative to the image:*/
          x = e.pageX - a.left;
          y = e.pageY - a.top;
          /*consider any page scrolling:*/
          x = x - window.pageXOffset;
          y = y - window.pageYOffset;
          return {x : x, y : y};
        }
      }
    </script>

  </head>

  <body id="page-top" style="font-family: 'Cabin', 'Helvetica Neue', Helvetica, Arial, sans-serif;">

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="index.html#page-top">Smart Mirror</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fa fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="index.html#introduction">Introduction</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="index.html#problematiques">Problématiques</a>
            </li>
            <li class="nav-item">
              <div style="border-right: 2px solid #ffffff;">
                <a class="nav-link js-scroll-trigger" href="index.html#team">L'Équipe</a>
              </div>
            </li>
            <li class="nav-item">
              <div style="border-right: 2px solid #ffffff;">
                <a class="nav-link" href="sigles.html">Sigles</a>
              </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#page-top">Diagrammes</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Download Section -->
    <section id="introduction" class="content-section">

      <div id="downloads">
        <div class="row">
          <div class="col-lg-8 mx-auto text-center">
            <h2 style="border: 3px solid #42DCA3;border-radius:15px;">Liste des Diagrammes</h2><br><br>
          </div>
        </div>

        <div class="row">
          <div id="tab_toggle" class="btn btn-outline-light col-lg-10 mx-auto" style="text-align:left;" data-toggle="collapse" data-target="#tab_dl"> <div id="tab_collapse_text" class="row" style="border-bottom:2px solid white;"><div class="col-lg-4">Téléchargement et consultation des XMind</div><div class="col-lg-1 offset-lg-7"><i id="tab_togg" class="fa fa-arrow-right"></i></div></div> </div>
        </div>

        <br><br>
        <div class="collapse" id="tab_dl">
          <div class="row">
            <div class="col-lg-10 mx-auto">
              <table class="table table-bordered">
                  <thead>
                      <tr class="text-center">
                        <td>Diagramme</td>
                        <td>Taille</td>
                        <td>Télécharger | Consulter</td>
                    </tr>
                  </thead>
                  <tbody>
                      <!--tr><td style="background-color:#3B3B3B;color:black;">Phénomènes</td></tr-->
                      <tr>
                        <td>Phénomène - Régulation thermique refroidir</td>
                        <td style="text-align:center;"><?= round(filesize("xmind_dl/regulation_thermique_refroidir.xmind")/1000) . " kB"?></td>
                        <td style="text-align:center;"><a href="xmind_dl/regulation_thermique_refroidir.xmind" download><i class="fa fa-download"></i></a> | <a href="img/xminds/regulation_thermique_refroidir.png" target="_blank"><i class="fa fa-eye"></i></a></td>
                      </tr>
                      <tr>
                        <td>Phénomène - Régulation thermique réchauffer</td>
                        <td style="text-align:center;"><?= round(filesize("xmind_dl/regulation_thermique_rechauffer.xmind")/1000) . " kB"?></td>
                        <td style="text-align:center;"><a href="xmind_dl/regulation_thermique_rechauffer.xmind" download><i class="fa fa-download"></i></a> | <a href="img/xminds/regulation_thermique_rechauffer.png" target="_blank"><i class="fa fa-eye"></i></a></td>
                      </tr>
                      <tr>
                        <td>Phénomène - Respiration (classique et d'urgence)</td>
                        <td style="text-align:center;"><?= round(filesize("xmind_dl/respiration.xmind")/1000) . " kB"?></td>
                        <td style="text-align:center;"><a href="xmind_dl/respiration.xmind" download><i class="fa fa-download"></i></a> | <a href="img/xminds/respiration.png" target="_blank"><i class="fa fa-eye"></i></a></td>
                      </tr>
                      <tr>
                        <td>OIDC</td>
                        <td style="text-align:center;"><?= round(filesize("xmind_dl/oidc.xmind")/1000) . " kB"?></td>
                        <td style="text-align:center;"><a href="xmind_dl/oidc.xmind" download><i class="fa fa-download"></i></a> | <a href="img/xminds/oidc.png" target="_blank"><i class="fa fa-eye"></i></a></td>
                      </tr>
                      <tr>
                        <td>Activité</td>
                        <td style="text-align:center;"><?= round(filesize("xmind_dl/activite.xmind")/1000) . " kB"?></td>
                        <td style="text-align:center;"><a href="xmind_dl/activite.xmind" target="_blank" download><i class="fa fa-download"></i></a> | <a href="img/xminds/activite.png" target="_blank"><i class="fa fa-eye"></i></a></td>
                      </tr>
                      <tr>
                        <td>Tâche</td>
                        <td style="text-align:center;"><?= round(filesize("xmind_dl/tache.xmind")/1000) . " kB"?></td>
                        <td style="text-align:center;"><a href="xmind_dl/tache.xmind" target="_blank" download><i class="fa fa-download"></i></a> | <a href="img/xminds/tache.png" target="_blank"><i class="fa fa-eye"></i></a></td>
                      </tr>
                      <tr>
                        <td>Concept</td>
                        <td style="text-align:center;"><?= round(filesize("xmind_dl/concept.xmind")/1000) . " kB"?></td>
                        <td style="text-align:center;"><a href="xmind_dl/concept.xmind" target="_blank" download><i class="fa fa-download"></i></a> | <a href="img/xminds/concept.png" target="_blank"><i class="fa fa-eye"></i></a></td>
                      </tr>

                      <!-- ###template###
                      <tr><td style="background-color:#3B3B3B;color:black;">MASTERNAME</td></tr>
                      <tr>
                        <td></td>
                        <td style="text-align:center;"><= round(filesize("xmind_dl/.xmind")/1000) . " kB"?></td>
                        <td style="text-align:center;"><a href="" target="_blank" download><i class="fa fa-download"></i></a> | <a href="img/xminds/.png" target="_blank"><i class="fa fa-eye"></i></a></td>
                      </tr>
                      <tr>
                        <td></td>
                        <td style="text-align:center;"></td>
                        <td style="text-align:center;"><a href="" target="_blank" download><i class="fa fa-download"></i></a> | <a href="img/xminds/.png" target="_blank"><i class="fa fa-eye"></i></a></td>
                      </tr>
                      -->
                  </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
      <br><br>


      <div class="row">
        <div id="prez_toggle" class="btn btn-outline-light col-lg-10 mx-auto" style="text-align:left;" data-toggle="collapse" data-target="#select_xminds" aria-expanded="true"> <div id="xmind_collapse_text" class="row" style="border-bottom:2px solid white;"><div class="col-lg-4">Consultation détaillée des XMind</div><div class="col-lg-1 offset-lg-7"><i id="tab_togg_2" class="fa fa-arrow-down"></i></div></div> </div>
      </div>
      <br><br>

      <!-- Affichage des Xminds par sélection -->
      <div id="select_xminds" class="row collapse show">
        
        <!-- on choisit le xmind à afficher -->
        <div class="col-lg-10 offset-lg-1 well text-center" style="background-color: #2B2B2B;border-radius:30px;"><br>

          <form class="form-group" action="diagrammes.php#prez_toggle" method="POST" id="selected">
            <input type="hidden" id="img_number" value=<?php if(isset($_POST["selected_xmind"])) {echo $_POST["selected_xmind"];} else {echo "regulation_thermique_refroidir";} ?>>
            <select id="select_xmind" name="selected_xmind" class="form-control col-lg-4 offset-lg-8" onchange="$('#selected').submit();">
              <option value="regulation_thermique_refroidir">Régulation thermique refroidir</option>
              <option value="regulation_thermique_rechauffer">Régulation thermique réchauffer</option>
              <option value="respiration">Respiration (classique et d'urgence)</option>
              <option value="oidc">OIDC</option>
              <option value="activite">Activité</option>
              <option value="tache">Tâche</option>
              <option value="concept">Concept</option>
            </select>
          </form>
        <div class="col-lg-4" style="color:#F58E9D; font-size:14px">La loupe ne fonctionne pas ? Appuyez sur F5 !</div>
          

          <div class="img-magnifier-container">
            <img id="current_xmind" src="img/xminds/<?php if(isset($_POST["selected_xmind"])) {echo $_POST["selected_xmind"];} else {echo "regulation_thermique_refroidir";}?>.png" style="border-radius:10px;border:4px solid black" width="100%" height="100%">
          </div>
          <br><br><br>
        </div>
      </div>

    </section>


    <!-- Footer -->
    <footer>
      <div class="container text-center">
        <p>Template of <a href="https://github.com/BlackrockDigital/startbootstrap-grayscale">Grayscale</a> theme, modified with ❤ by <a href="https://ensc.bordeaux-inp.fr/fr">ENSC</a> students.</p>
      </div>
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for this template -->
    <script src="js/grayscale.min.js"></script>

    <script>
      let xmind_nb = $("#img_number").val();
      $('#select_xmind option[value="' + xmind_nb + '"]').prop('selected', true);
      
      $("#tab_toggle").hover(function() {
        $("#tab_collapse_text").attr('style', 'border-bottom:0px solid black');
      });
      $("#tab_toggle").mouseleave(function() {
        $("#tab_collapse_text").attr('style', 'border-bottom:2px solid white;');
      });
      $("#prez_toggle").hover(function() {
        $("#xmind_collapse_text").attr('style', 'border-bottom:0px solid black');
      });
      $("#prez_toggle").mouseleave(function() {
        $("#xmind_collapse_text").attr('style', 'border-bottom:2px solid white;');
      });
      $("#tab_toggle").click(function() {
        $("#tab_togg").toggleClass('fa-rotate-90');
      });
      $("#prez_toggle").click(function() {
        $("#tab_togg_2").toggleClass('fa-rotate-270');
      });

      /*Execute the magnify function:*/
      magnify("current_xmind", 3);      
    </script> 

  </body>

</html>
