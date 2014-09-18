
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

<?php get_search_form(); ?>

<div id="wrapper" class="container">

    <div class="row">

      <div class="col-md-8" id="bloc gauche"><!--left col-->  
          <div class="row"><!-- begin bloc selection-->
            <h3>A définir</h3>  
                  <?php if (have_posts()) : ?>
                    <?php $counter=1; ?>
                    <?php while (have_posts()) : the_post(); ?>
                        <article class="category-article">
                          <div class="col-md-2">
                          <a href="<?php echo get_permalink(); ?>"><?php the_post_thumbnail("full", array("class" => "img-responsive")); ?></a>
                          </div>
                          <div class="col-md-10">
                          <h3><a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a></h3>
                          <p>
                        <?php the_excerpt (); ?>
                          </p>
                          </div>
                        </article>
                    <?php endwhile; ?>
                  <?php endif; ?>
          </div><!-- class row -->
      </div><!--fermeture row aside-->    
          
          <div class="col-md-3" id="aside"><!--row aside--> 
            <ul id="sidebar">   
              <h3>get-title</h3>
              <?php dynamic_sidebar( 'Main Sidebar' ); ?>
            </ul>
          </div><!--fermeture col-md-4-->    
    </div>




<?php get_footer(); ?>