<!DOCTYPE html> 
<html lang="fr">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
		<title>Portail Orange</title>
		<script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.2.1.min.js"></script>
    	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    	<script src="jquery-ui-1.12.1/jquery-ui.js"></script>
    	<script src="js/script.js"></script>
		<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
		<!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">-->
		<link rel="stylesheet" href="css/style.css">
		<link rel="shortcut icon" type="image/x-icon" href="img/LogoOrange.png" />
	</head>
	<?php

	session_name('filemanager');
	session_start();

	?>
	<body>
		<div id="monChat" style="display: none">
			<button type="button" id="closeChat" onclick="" style="float: right; background:url('img/closeBtn.png') center no-repeat; background-size: 100% 100%; width: 30px; height: 30px;"  class="btn btn-default"></button>		
			<iframe src="AjaxChat/index.php" id="monChat2" width="100%" height="100%"></iframe>
		</div>
		<div id="container" class = "container">
			<div id = "title" class= "row">
				<div class="col-lg-4 col-md-4 col-sm-4">
					<img alt="logo orange" id="logo" src="img/LogoOrange.png">
					<h1>100%Come</h1> 
				</div>
				<div id="nav" class="col-lg-4 col-md-4 col-sm-4" style="width: 25%; float:left; text-align: center; margin-top: 45px">
					<img alt="icon accueil" src="img/accueil.png" style="margin: 5px;">
					<a href = "http://welcome.com.intraorange/" target = "_blank" style="margin: 5px;">Accueil Orange</a>
					<img alt="icon contact" src="img/contact.png" style="margin: 5px;">
					<a href = "" target = "_blank" style="margin: 5px;">Nous contacter</a>
					<input type="image" value="Rafraichir" id="refresh" src="img/sinchronize-512.png" width="32" height="32" style="-moz-box-sizing: border-box; box-sizing: border-box; margin: 5px;"/>
					<a href="javascript:void(0)" style="margin: 5px;" id="refreshHref">Rafraichir</a>
				</div>
				<div id="research" class = "col-lg-3 col-md-4 col-sm-4">
					<input id="recherche" class="form-control" placeholder="recherche" name="s" type="text"></input>
					<button id="button" class="btn btn-secondary" type="button" style="color:orange">
						Chercher 
					</button>
				</div>
			</div>

			<div id = "contain" class="row">
				<div id = "leftMiddleContain" class="col-lg-5 col-md-5 col-sm-5">
					<h1 id ="middleTitle">Bienvenue sur 100%Come, que recherchez-vous?</h1>
					<button type="button" id="Tutoriels" onclick=""><img src="img/tuto.png">Tutoriels</img></button>
					<button type="button" id="Guides" onclick=""><img src="img/guide.png">Guides</img></button>
					<button type="button" id="DocumentsTechniques" onclick=""><img src="img/doc.png">Documents Techniques</img></button>
				<br/>
					<button type="button" id="Outils" onclick=""><img src="img/outils.png">Outils</img></button>
					<button type="button" id="Informations" onclick=""><img src="img/info.png">Informations</img></button>
					<button type="button" id="NotesDeVersion" onclick=""><img src="img/maj.png">Notes de version</img></button>
					<div id="menuDeroulant">
						<!--<button class="dropbtn" id="toggleChat">Chat</button>
						<button class="dropbtn" id="toggleOrganigramme">Organigramme</button>-->
						<!--<div  class="dropdown">
							<button class="dropbtn">Statistiques</button>
							<div class="dropdown-content">
								<a href="#" id="N1">N1</a>
								<a href="#" id="N2">N2</a>
								<a href="#" id="N3">N3</a>
								<a href="#" id="BQA">BQA</a>
								<a href="#" id="GLOBALE">GLOBALE</a>
								<a href="#" id="CARTOGRAPHIE">CARTOGRAPHIE</a>
							</div>
						</div>
						
						 <div class="dropdownPlace">
						    <button class="dropbtn" type="button" data-toggle="dropdown">Statistiques
						    <span></span></button>
						    <ul class="dropdown-menu">
						      <li class="dropdown-submenu">
						        <a class="test" tabindex="-1" href="#">Confiance<span class="caret"></span></a>
						        <ul class="dropdown-menu">
						          <li><a tabindex="-1" href="#">Confiance SIE</a></li>
						          <li><a tabindex="-1" href="#">Come OB</a></li>
						        </ul>
						      </li>
						   		<li><a tabindex="-1" href="#">BQA</a></li>
						      	<li><a tabindex="-1" href="#">Météo du SI</a></li>
						    </ul>
						  </div>-->
						  <ul id="menu">
							<li class="parent" style="margin: auto;"><a href="#" id="toggleChat">Chat</a></li>
							<li class="parent"><a href="#" id="Statistiques">Statistiques</a>
							<ul class="child" style="width: 100%;">			
								<li class="parent"><a href="#" id='Confiance'>Confiance SIE<span class="expand">»</span></a>
									<ul class="child">
									<li><a href="#" nowrap id="comop">COMOP</a></li>
									</ul>
								</li>
								<li><a href="#" id="BQA">BQA</a></li>
								<li><a href="#" id="meteo">Météo du SI</a></li>
							</ul>
							</li>
							<li class="parent"><a href="#" id="organigramme">Organigramme</a></li>
							<!--http://www.institut-numerique.org/wp-content/uploads/2013/06/Organigramme2.png-->
						</ul>
						<div class="clr"></div>
					</div>
					<ul id="ulOrange">
						<li><a id="firstli" href="http://pratique.itn.ftgroup/FR/Pages/accueil100pratique.aspx" target= "_blank"><span>100% Pratique</span></a></li>
						<li><a href="https://www.ce-orange.fr/CAS/login" target= "_blank"><span>Activités Sociales</span></a></li>
						<li><a href="http://basic.sso.francetelecom.fr/basic/ccil_custom/employee/index.jsp" target= "_blank"><span>Basic Salariés</span></a></li>
						<li><a href="https://coopnet.sso.infra.ftgroup/DirectAccess/ParticipantParticipate.aspx" target= "_blank"><span>Coop' net</span></a></li>
						<li><a href="http://welcome.com.intraorange/#messagerie" target= "_blank"><span>Messagerie</span></a></li>
						<li><a href="https://monkiosque.orange.fr/" target= "_blank"><span>Mon Kiosque</span></a></li>
						<li><a href="http://mytools.sso.infra.ftgroup/binbeemytools/Home/Portfolio" target= "_blank"><span>MyTools</span></a></li>
						<li><a href="http://jobsmap.sso.infra.ftgroup/jobs/jobsearch.do?do=portal&name=CARTO&lang=FR" target= "_blank"><span>Offres D'emploi</span></a></li>
					</ul>
				</div>
				<div id="rightMiddleContent1" class="col-lg-7 col-md-7 col-sm-7" style="text-align:center;">
					<iframe src="carousel.php" width="100%" height="100%" name="myFrame" id="myFrame"></iframe>
					<iframe src="" width="100%" height="100%" name="myFrame2" id="myFrame2" style="display: none;"></iframe>
				</div>
			</div>
		</div>
	</body>
	<footer id= "footer">
		<div id = "foot" class="row">
			<div class="cell_12">
				<ul class="tertiary-nav">
					<li>Interne Orange</li>
					<li><a href="mailto:info.internecom@orange.com" title="">Contactez-nous</a></li>
					<li><a href="http://intranet.com.intraorange/fr/Pages/le-dispositif-d-alerte.aspx" title="">Lancer une alerte</a></li>
					<li><a title="" href="http://intranet.com.intraorange/fr/Pages/aide-ogi.aspx">Aide</a></li>
					<li><a href="http://intranet.com.intraorange/fr/Pages/Passeport.aspx">Passeport</a></li>
					<li><a href="#plus-pays" class="btn-fancybox plus-pays odd" data-fancy="checkbox">Changer mon pays</a></li>
					<li><a href="http://webidea.si.francetelecom.fr/spip/spip.php?article425"><img alt="label accessibilité" style="border-width:0px;vertical-align: middle;" src="img/label-32x96-03.png"></a></li>
			</div>
		</div>
	</footer >
</html>
