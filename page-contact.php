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

	
<h2>Abonnez-vous à notre newsletter</h2>
<p>Vous êtes sur le point de vous abonner à notre newsletter </p>

<?php
$widgetNL = new WYSIJA_NL_Widget(true);
echo $widgetNL->widget(array('form' => 3, 'form_type' => 'php'));
?>
	
	<?php get_footer(); ?>
	
	