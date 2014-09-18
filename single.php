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
           </ul>
        </div> 

      </nav>
    </div><!--top nav-->
  </div><!--container fluide-->


    <?php
    include "navbar.php";
    ?>

</header>

<div class="row">
	<div class="col-md-10 col-md-offset-1">
		<section>
			<?php if (have_posts()) : ?>
			<?php while (have_posts()) : the_post(); ?>
				<div class="post">
					<div class="date">
					<?php the_date(); ?></div>
					<h2>
					<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
					</h2>
					<div class="image">
					<?php the_post_thumbnail('full', array("class" => "img-responsive")); ?>
					</div>
					<div class="post-content">
					<?php the_content(); ?>
					</div>
					<div lass="tags">
					<?php the_tags( 'Mots-clés : ', ', ', '' );?>
					</div>
					<p class="post-info">
					Posté dans <?php the_category(', '); ?> par <?php the_author(); ?>.
					</p>
					<div class="post-comments">
					<div>
					<?php comments_template('', true); ?>
					</div>
				</div>
			<?php endwhile; ?>
			<?php else : ?>
			<p class="nothing">
			Cette page n'existe pas, reportez-vous à la barre de recherche pour faire une nouvelle recherche.
			</p>
			<?php endif; ?>
		</section>
	</div>
</div> <!-- fermeture div class row -->




	<!---END NAV BAR SEGONDAIRE BOOTSTRAP-->

	<div class="row">
		<!--begin SEARCH-->
		<section class="search">

				<div class="col-md-8">
				<h3>Recherchez une idée de livre :</h3>
				<?php get_search_form(); ?>
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
		<!-- end SEARCH-->



</html>


<?php get_footer(); ?>