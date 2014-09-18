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


<div class="container" style="text-align:center">
	<div class="row">
		<div class="col-md-9" id="content" role="main">
			<section>
				<h2><?php wp_title( '', true); ?></h2>
				<?php if (have_posts()) : ?>
				<?php while (have_posts()) : the_post(); ?>
					<div class="excerpt">
						<?php the_content(); ?>
					</div>
				<?php endwhile; ?>
				<?php endif; ?>
			</section>
		</div><!-- fermeture col-md-9 -->
			<div class="col-md-3">
				<aside>
					<?php dynamic_sidebar('main-sidebar'); ?>
				</aside>
			</div> <!-- fermeture sidebar -->
	</div> <!-- fermeture div class row -->
</div> <!--fermeture div class container:text-align center-->

<?php get_footer(); ?>
		
		