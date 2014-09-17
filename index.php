<?php get_header (); ?>


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
	</div> 


		<!-- TOP VISUEL FILLE FENETRE-->
		<div class="black-background">
			<div class="container-fluid  text-center" id="visual-top">
				<img src="<?php bloginfo('template_directory'); ?>/image/femme_fenetre.png">
				<div class="container-title">
				<div class="mask"></div>
					<h1>LISEZ ENFIN DE BONS LIVRES</h1>
					<p>
					  <h2><button type="button" class="btn btn-primary btn-lg">TROUVEZ L'INSPIRATION ICI</button></h2>
					</p>
				</div>
			</div><!--top-visuel-->
		</div><!--black-background-->
</div>

	
<?php
include "navbar.php";
?>

		</header>
		
	<div id="wrapper" class="container">

		<div class="row">
			<div class="col-md-4" id="aside"><!--row aside-->	
				<ul id="sidebar">
			   <?php dynamic_sidebar( 'Main Sidebar' ); ?>
				</ul>
			</div><!--fermeture col-md-4-->
		</div><!--fermeture row aside-->



		<div class="col-md-8" id="bloc gauche"><!--left col-->
<!--begin SEARCH-->
			<div class="row"><!--search row-->
				<section class="search">
					<div class="col-md-8"><!--search form class col md 8-->
						<h3>Recherchez un livre :</h3>
						<form type="text">
							  <input id="GET-name" type="text">
							  <button type="submit" class="fa fa-search"></button>
						</form>
						<a href="search-page.html">+ de critères</a>
					</div><!--search form class col md 8-->

					<div class="col-md-4">
						<button class="inspirez-moi">
							<p>En manque d'inspiration?</p>
							<h2>LAISSEZ-VOUS GUIDER, ON SE CHARGE DE VOUS TROUVER VOTRE LIVRE</h2>
						</button>
					</div><!--inspire class col md 4-->
				</section><!--end section search-->	
			</div><!-- end search row -->


		
		<div class="row"><!-- begin bloc selection-->
			<section class="Bloc-selection">
				<h3>NOTRE SÉLECTION</h3>
						
					<?php query_posts("cat=5&showposts=3"); ?>
						<?php if (have_posts()) : ?>
							<?php $counter=3; ?>
							<?php while (have_posts()) : the_post(); ?>
								
								<div class="col-md-4">
									<article class="home-article">
										<a href="<?php echo get_permalink(); ?>"><?php the_post_thumbnail("full", array("class" => "img-responsive")); ?></a>
										<h3><a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a></h3>
										<p>
									<?php the_excerpt (); ?>
										</p>
									</article>
								</div>
							<?php endwhile; ?>
						<?php endif; ?>
			</div><!-- end section-->
		</div><!--end class row-->


		<div class="row">
			<section class="Bloc 3">
			<h3>Vous aimez voyager, offrez-vous un voyage en Inde....</h3>
				<?php query_posts("cat=6&showposts=3"); ?>
					<?php if (have_posts()) : ?>
						<?php $counter=3; ?>
						<?php while (have_posts()) : the_post(); ?>
							<div class="col-md-4">
								<article class="home-article">
									<a href="<?php echo get_permalink(); ?>"><?php the_post_thumbnail("full", array("class" => "img-responsive")); ?></a>
									<h3><a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a></h3>
									<p>
								<?php the_excerpt (); ?>
									</p>
								</article>
							</div>
						<?php endwhile; ?>
					<?php endif; ?>
			</div><!-- end section-->
		</div><!--end class row-->
	</div><!-- close row aside +bloc-->
	</div><!-- wrapper-->

<?php get_footer(); ?>
