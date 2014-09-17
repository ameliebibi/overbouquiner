<nav class="navbar navbar-default" role="navigation">
  <div class="dots">
    <div class="container-fluid">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-2">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <!-- <a class="navbar-brand" href="#">BOOKS</a> -->
      </div>

        <?php
        wp_nav_menu( array(
          'menu' => 'secondary-nav',
          'theme_location' => 'secondary-nav',
          'depth' => 2,
          'container' => 'div',
          'container_class' => 'collapse navbar-collapse row',
          'container_id' => 'bs-example-navbar-collapse-2',
          'menu_class' => 'nav navbar-nav',
          'fallback_cb' => 'wp_bootstrap_navwalker::fallback',
          'walker' => new wp_bootstrap_navwalker())
        );
        ?>
     </div> <!-- container-fluid -->
  </div> <!-- dots -->
</nav>


	<!---NAV BAR SEGONDAIRE BOOTSTRAP
		<!--<nav class="navbar navbar-default" role="navigation"><?php echo $navbar ?>




		<div class="dots">
		  <div class="container-fluid">
		  	<div class="navbar-header">
		      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
		        <span class="sr-only">Toggle navigation</span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		      </button>
		      <!-- <a class="navbar-brand" href="#">BOOKS</a> -->
		    <!--</div>--!>

		    <!-- Brand and toggle get grouped for better mobile display -->


    <!-- Collect the nav links, forms, and other content for toggling -->
    <!--<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#"><p>Coup de coeurs</p></a></li>
        <li><a href="#"><p>Roman</p></a></li>
        <li><a href="#"><p>Policier et thriller</p></a></li>
        <li><a href="#"><p>Théâtre</p></a></li>
        <li><a href="#"><p>Fantastique</p></a></li>
        <li><a href="#"><p>BD, Humour</p></a></li>
      </ul>
      <ul class="nav navbar-nav">
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown"><p>Jeunesse <span class="caret"></span></p></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="#">De 3 à 5 ans</a></li>
            <li><a href="#">Mes premières lectures de 6 à 8 ans</a></li>
            <li><a href="#">Des livres pour les 12 / 16 ans</a></li>
            <li class="divider"></li>
            <li><a href="#">Separated link</a></li>
          </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
  </div><!-- dots -->
</nav>

	<!---END NAV BAR SEGONDAIRE BOOTSTRAP-->


	