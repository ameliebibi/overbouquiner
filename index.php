<?php
$title="Idées de livre";
include "header.php";
$meta_description="Idées de livre, la communauté de nos lecteurs vous donnent des idées de lecture.";
?>


	<!-- END HEAD-->

	<body>
		<header>
				<!-- TOP NAV 1 EN BOOTSTRAP-->

		<div class="top-nav">
		<nav class="navbar navbar-default" role="navigation">

		  <div class="container-fluid">
		  	<div class="navbar-header">
		      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
		        <span class="sr-only">Toggle navigation</span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		      </button>
		      <!-- <a class="navbar-brand" href="#">BOOKS</a> -->
		    </div>

		    <!-- Brand and toggle get grouped for better mobile display -->


    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#"><p>RECHERCHER</p></a></li>
        <li><a href="#"><p>A OFFRIR</p></a></li>
  
	   
	        <li><a href="#"><p>S'INSCRIRE </p></a></li>
	        <li><a href="#"><p>Déjà membre ?</p></a></li>
	        
      	</div><!-- ESPACE PERSO -->
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
</div><!--/navbar du haut-->

<!-- END TOP NAV 1 EN BOOTSTRAP-->	

		<!-- BIG TOP VISUAL PORTRAIT--
			<div class="row" id="mess">
				<div class="col-xs-2">
					<img src="image/Adrien-Bosc_portrait.jpg">
				</div>
				
				<div class="col-xs-2">
					<img src="image/gregoire-delacourt-portrait.jpg">
				</div>

				<div class="col-xs-2">
					<img src="image/francoise-bourdin-portrait.jpg">
				</div>

				<div class="col-xs-2">
					<img src="image/James-Salter-portrait.jpg">
				</div>

				<div class="col-xs-2">
					<img src="image/Eric-REINHARDT-portrait.jpg">
				</div>

				<div class="col-xs-2">
					<img src="image/amelie-nothomb-portrait.jpg">
				</div>

				<div class="col-xs-2">
					<img src="image/benjamin-wood-portrait.jpg">
				</div>

				<div class="col-xs-2">David-foenkinos-portrait.jpg">
				</div>

				<div class="col-xs-2">
					<img src="image/gregoire-delacourt-portrait.jpg">
				</div>

				<div class="col-xs-2">
					<img src="image/Leila-Slimani-portrait.jpg">
				</div>

				<div class="col-xs-2">
					<img src="image/olivier-adam-portrait.jpg">
				</div>

				<div class="col-xs-2">
					<img src="image/sophie-brocas-portrait.jpg">
				</div>

				<div class="col-xs-2">
					<img src="image/Taiye-Selasi-portrait.jpg">
				</div>

			</div>
			
		<!-- END BIG TOP VISUAL-->	

		<!-- TOP VISUEL FILLE FENETRE-->
		<div class="black-background">
			<div class="container-fluid" id="visual-top">
				<img src="image/femme_fenetre_coupee.png">
				<div class="container-title">
					<h1>LISEZ ENFIN DE BONS LIVRES</h1>
					<p>
					  <button type="button" class="btn btn-primary btn-lg">Trouvez l'inspiration ici</button>
					</p>
				</div>
			</div><!--top-visuel-->
		</div><!--black-background-->


		
	<?php
	include "navbar.php";
	?>
	
		</header>


		
	<div id="wrapper" class="containter">

	<div class="row">
		<!--begin SEARCH-->
		<section class="search">

				<div class="col-md-8">
				<h3>Recherchez un livre :</h3>
				<form type="text">
					  <input id="GET-name" type="text">
					  <button type="submit" class="fa fa-search"></button>
				</form>
				<a href="search-page.html">+ de critères</a>
				</div><!--class col md 8-->

				<div class="col-md-4">
					<button class="inspirez-moi">
					<p>En manque d'inspiration?</p>
					<h2>LAISSEZ-VOUS GUIDER, ON SE CHARGE DE VOUS TROUVER VOTRE LIVRE</h2>
					</button>
				</div><!--class col md 4-->
		</div><!-- row -->
		</section>
	<!--end SEARCH-->

	
		<section class="Bloc-selection">
			<h3>NOTRE SÉLECTION</h3>
			<div class="row" id="article-our-selection">
			
			<div class="col-md-4">
			<article>
				<img src="image/Murakami.png">
				<h4>L'incolore, Tsukuru Tazaki et ses années de pèlerinage</h4>
				<h5>Haruli Murakami</h5>
				<p>Un livre plein de soleil à savourer dans le métro pour se croire encore en vacances</p>
				<i class="fa fa-smile-o fa-2x"></i>
				<i class="fa fa-smile-o fa-2x"></i>
				<i class="fa fa-smile-o fa-2x"></i>
			</article>
			</div><!--div article col-md-4-->

			<div class="col-md-4">
			<article>
				<img src="image/Ken-Follet.png">
				<h4>Aux portes de l'éternité</h4>
				<h5>Ken Follet</h5>
				<p>L'histoire d'une femme qui ne sait plus comment aider son fils. Un très bon roman psychologique.</p>
				<i class="fa fa-smile-o fa-2x"></i>
				<i class="fa fa-smile-o fa-2x"></i>
			</article>
			</div><!--div article col-md-4-->

			<div class="col-md-4">
			<article>
				<img src="image/La-promesse-de-locean.png">
				<h4>La promesse de l'océan</h4>
				<h5>Nom de l'auteur</h5>
				<p>Un livre tout en couleur qui nous fait croire dans le genre humain.</p>
				<i class="fa fa-smile-o fa-2x"></i>
				<i class="fa fa-smile-o fa-2x"></i>
				<i class="fa fa-smile-o fa-2x"></i>
			</article>
			</div><!--div article col-md-4-->
		</div><!-- class row-->
		</section>


		<section class="Bloc 3">
			<h3>Vous aimez voyager, offrez-vous un voyage en Inde....</h3>
			<div class="row">

			<div class="col-md-4">
			<article>
				<img src="image/La colere des aubergines.png">
				<h4>La colère des aubergines</h4>
				<h5>Nom de l'auteur</h5>
				<p>L'histoire d'une femme qui ne sait plus comment aider son fils. Un très bon roman psychologique.</p>
				<i class="fa fa-smile-o fa-2x"></i>
				<i class="fa fa-smile-o fa-2x"></i>		
			</article>
			</div><!--col-md-4-->

			<div class="col-md-4">
			<article>
				<img src="image/Le Dieu des Petits Riens.png">
				<h4>Le Dieu des Petits Riens</h4>
				<h5>Nom de l'auteur</h5>
				<p>L'histoire d'une femme qui ne sait plus comment aider son fils. Un très bon roman psychologique.</p>
				<i class="fa fa-smile-o fa-2x"></i>
				<i class="fa fa-smile-o fa-2x"></i>		
			</article>
			</div><!--col-md-4-->

			<div class="col-md-4">
			<article>
				<img src="image/De la part de la princesse morte.png">
				<h4>De la part de la princesse morte</h4>
				<h5>Nom de l'auteur</h5>
				<p>L'histoire d'une femme qui ne sait plus comment aider son fils. Un très bon roman psychologique.</p>
				<i class="fa fa-smile-o fa-2x"></i>
				<i class="fa fa-smile-o fa-2x"></i>		
			</article>
			</div><!--col-md-4-->


			</div><!--row-->
		</section>
	
	</div><!-- wrapper-->

	<?php
	include "footer.php";
	?>


	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>

	<script type="text/javascript" src="scripts/global.js"></script>
	</body>




</html>