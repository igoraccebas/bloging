<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>La Pizzeria</title>
    <?php wp_head(); ?>
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
    
  </head>
  <body>

<header class="site-header">
  
    <div class="top-bar">
      <div class="container">
  <div class="top-address">  
  <p>5538 saint patrick street</p>
  <div class="top-phone-num">
  <p>Phone number 514 605 3059</p>
</div>
</div>
</div>
</div>
<div class="menu-bar">
  <div class="container">
  <div class="logo_main">
    <a href="<?php  echo esc_url (home_url( ''/'' ) );  ?>">
          <img src="<?php echo get_template_directory_uri()  ?>/img/TT_logo-01.png" class="logo">
    </a>
  </div> <!--logo-->
  <div class="main-menu">
  <div class="navigation">

    <?php
        wp_nav_menu(array(
          'theme_location' => 'primary' ,
          'container'             => 'nav-menu' ,
          'conatainer_class' => 'menu-main-menu-container nav-menu-wrapper'
        ));
       ?>
        
      </div>
</div>
</div>
  <div class="header-information">
    <div class="socials">


    </div> <!--socials-->

  </div><!--header-information-->

</header>

