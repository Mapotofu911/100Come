<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="css/style.css">
</head>
<body>

<div class="container">

  <div style="display: inline-flex; margin-top: 10%;">
    <!-- PREMIERE CAROUSEL -->


    <div id="myCarousel1" class="carousel slide" style="width: 40%; margin-top: 5%; margin-left: 25%;">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel1" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel1" data-slide-to="1"></li>
        <li data-target="#myCarousel1" data-slide-to="2"></li>
      </ol>

      <!-- Wrapper for slides -->
      <div class="carousel-inner">

        <div class="item active">
          <a href="https://filmsetemotions.orange.com/wordpress/inscription/" target="_blank">
            <img src="img/filmEmotion.jpg" alt="FilmEmotion"></img>
            <div class="carousel-caption news-content">
              <h3>Films et emotions</h3>
              <p>Partagez votre passion du cinéma</p>
            </div>
          </a>
        </div>

        <div class="item">
          <a href="http://intranet.com.intraorange/fr/Pages/phish_04042017.aspx" target="_blank">
          <img src="img/Phishing.jpg" alt="Phishing">
          <div class="carousel-caption">
            <h3>Phishing</h3>
            <p>Ne mordez pas à l'hameçon !</p>
          </div>          
          </a>
        </div>
      
        <div class="item">
          <a href="http://intranet.com.intraorange/fr/Pages/semaine_17112016.aspx" target="_blank">
            <img src="img/OrangeEtNous.jpg" alt="OrangeEtNous">
            <div class="carousel-caption">
              <h3>Orange et nous</h3>
            </div>
          </a>
        </div>
    
      </div>

      <!-- Left and right controls -->
      <a class="left carousel-control" href="#myCarousel1" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#myCarousel1" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>


<!-- DEUXIEME CAROUSEL -->


    <div id="myCarousel2" class="carousel slide" style="width: 40%; margin-top: 5%; margin-left: 5%;">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel2" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel2" data-slide-to="1"></li>
        <li data-target="#myCarousel2" data-slide-to="2"></li>
      </ol>

      <!-- Wrapper for slides -->
      <div class="carousel-inner">

        <div class="item active">
          <a href="http://intranet.com.intraorange/fr/Pages/actualites.aspx" target="_blank">
            <img src="img/Actualite.jpg" alt="FilmEmotion">
            <div class="carousel-caption">
              <h3>Les Actualités du groupe</h3>
            </div>
          </a>
        </div>

        <div class="item">
          <a href="http://intranet.com.intraorange/fr/blogs/Pages/accueil.aspx" target="_blank">
            <img src="img/SRichard.jpg" alt="SRichard">
            <div class="carousel-caption">
              <h3>Blogs Orange</h3>
            </div>
          </a>
        </div>
      
        <div class="item">
          <a href="http://intranet.com.intraorange/fr/Pages/essentiels.aspx" target="_blank">
            <img src="img/Reportage.jpg" alt="Phishing">
            <div class="carousel-caption">
              <h3>Les reportages</h3>
            </div>
          </a>
        </div>
      </div>

      <!-- Left and right controls -->
      <a class="left carousel-control" href="#myCarousel2" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#myCarousel2" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  </div>

  <!-- TROISIEME CAROUSEL -->


  <div id="myCarousel3" class="carousel slide" data-ride="carousel"style="width: 65%; margin-top: 5%; margin-left: 16.5%;">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel3" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel3" data-slide-to="1"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">

      <div class="item active">
        <a href="http://orange-france.com.francetelecom.fr/spip.php?page=page_unite&id_syndic=137" target="_blank">
          <img src="img/welcome.jpg" alt="FilmEmotion">
          <div class="carousel-caption">
            <h3>DISU Orange</h3>
          </div>
        </a>
      </div>

      <div class="item">
        <a href="http://blog-rc-disu.com.francetelecom.fr/" target="_blank">
          <img src="img/disu.jpg" alt="OrangeEtNous">
          <div class="carousel-caption">
            <h3>Le blog RC DISU</h3>
          </div>
        </a>
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel3" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel3" data-slide="next" style="margin-right: 11.5%">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>

</body>
</html>
