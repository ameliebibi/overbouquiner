<?php
/**
 * The template for displaying 404 pages (Not Found)
 *
 * @package WordPress
 * @subpackage idee_livres
 * @since idee_livres v1.0
 */

get_header(); ?>

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

    <?php
    include "navbar.php";
    ?>

</header>
<div class="404">

<div class="black-background">
        <div class="container-fluid text-center" id="visual-top">
          <img src="<?php bloginfo('template_directory'); ?>/image/page-404.jpg">
            <div class="container-title">
              <h4>PAGE 404</h4>
              <p>Eteint ton ordi et prends un livre !
              </p>
            </div>
        </div><!--container fluid -visual top-->
    </div><!--end class 404-->


<?php get_footer(); ?>