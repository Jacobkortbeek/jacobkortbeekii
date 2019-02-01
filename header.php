<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1" name="viewport" />
  <?php wp_head(); ?>
  <style media="screen">
    <?php
    $fontColor = get_field( 'font_color', 'options' );
    $btnColor = get_field( 'button_colour', 'options' );
    $btnHvrColor = get_field( 'button_hover_colour', 'options' );
    ?>
    body{
      color: <?php echo $fontColor; ?>
    }
    .jk-card .jk-card-reveal a{
      color: limegreen;
      background-color: <?php echo  $btnColor; ?>;
      border-color: <?php echo  $btnColor; ?>;
    }
    .jk-card .jk-card-reveal a:hover{
      background-color: <?php echo $btnHvrColor ?>;
      border-color: <?php echo $btnHvrColor ?>;
    }
    .btn-primary{
      color: limegreen;
      background-color: <?php echo  $btnColor; ?>;
      border-color: <?php echo  $btnColor; ?>;
    }
    .btn-primary:hover{
      background-color: <?php echo $btnHvrColor ?>;
      border-color: <?php echo $btnHvrColor ?>;
    }
  </style>
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
