<?php get_header (); ?>


	<!-- END HEAD-->

<body <?php body_class(); ?>>	
<header class="black-background">
				<!-- TOP NAV 1 EN BOOTSTRAP-->

	<div class="container-fluid">
		<div class="top-nav"><!--nav du haut-->
			<nav class="navbar navbar-default" role="navigation">
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
				    <li><a href="<?php bloginfo('template_directory'); ?>/page-contact.php"><p>Contact</p></a></li>
				   </ul>
				</div> 

			</nav>
		</div><!--top nav-->
	</div><!--container fluide-->

			<div class="black-background"><!-- TOP VISUEL FILLE FENETRE-->
				<div class="container-fluid text-center" id="visual-top">
					<img src="<?php bloginfo('template_directory'); ?>/image/femme_fenetre.png">
					<div class="mask"></div>
						<div class="container-title">
							<h1>LISEZ ENFIN DE BONS LIVRES</h1>
							<?php get_search_form(); ?>
							<p>
								<h2><button type="button" class="btn btn-primary btn-lg">TROUVEZ L'INSPIRATION ICI</button></h2>
							</p>
						</div>
				</div><!--container fluid -visual top-->
			</div><!--black-background-->

		<?php
		include "navbar.php";
		?>

</header>

	

	<div id="wrapper" class="container">

		<div class="row">

			<div class="col-md-9" id="bloc gauche"><!--left col-->
			
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
					</section>
				</div><!-- class row -->

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
					</section>
				</div><!-- end row-->
			</div><!-- div col bloc gauche-->
			
			<div class="col-md-3" id="aside"><!--row aside-->	
				<ul id="sidebar">		
				<h3>get-title</h3>
			   <?php dynamic_sidebar( 'Main Sidebar' ); ?>
				</ul>
			</div><!--fermeture col-md-4-->

			
		</div><!--fermeture row aside-->
	</div>


<?php get_footer(); ?>
