<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1" name="viewport" />
  <?php wp_head(); ?>
  <title><?php wp_title( '|', true, 'right' ); bloginfo( 'name' ); ?></title>
</head>

<body>
  <div class="animsition">
  <header>
    <nav>
      <div class="jk-nav">
        <i class="fas fa-bars"></i>
      </div>
      <div class="jk-nav-cont">
        <i class="fas fa-times"></i>
        <ul>
          <li class="active"> <a class="animsition-link">home</a> </li>
          <li> <a href="./posts.html" class="animsition-link">posts</a> </li>
          <li> <a href="./about.html" class="animsition-link">about</a> </li>
          <li> <a href="#">link</a> </li>
        </ul>
        <?php

                    $defaults = array(
                      'container' => 'ul',
                      'theme_location' => 'primary-menu',
                      'menu_class' => 'navbar-nav'
                    );

                    wp_nav_menu( $defaults );

                  ?>
      </div>
    </nav>
  </header>
  <main>
