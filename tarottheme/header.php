<!DOCTYPE html>
<html >
<head>
  <!-- Site made with Mobirise Website Builder v4.5.2, https://mobirise.com -->
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="generator" content="Mobirise v4.5.2, mobirise.com">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
  <link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/assets/images/logo.png" type="image/x-icon">
  <meta name="description" content="Web Page Creator Description">
  <title><?php bloginfo('name'); ?></title>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:700,400&subset=cyrillic,latin,greek,vietnamese">
  <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?php bloginfo('template_directory')?>/assets/animate.css/animate.min.css">
  <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/assets/mobirise/css/style.css">
  <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/assets/mobirise/css/mbr-additional.css" type="text/css">
  <?php wp_head(); ?> 
</head>
<body>
<section class="mbr-navbar mbr-navbar--freeze mbr-navbar--absolute mbr-navbar--sticky mbr-navbar--auto-collapse" id="ext_menu-p" data-rv-view="15">
    <div class="mbr-navbar__section mbr-section">
        <div class="mbr-section__container container">
            <div class="mbr-navbar__container">
                <div class="mbr-navbar__column mbr-navbar__column--s mbr-navbar__brand">
                    <span class="mbr-navbar__brand-link mbr-brand mbr-brand--inline">
                        
                        <span class="mbr-brand__name"><a class="mbr-brand__name text-white" href="https://mobirise.com"><?php bloginfo('name'); ?></a></span>
                    </span>
                </div>
                <div class="mbr-navbar__hamburger mbr-hamburger"><span class="mbr-hamburger__line"></span></div>
                <div class="mbr-navbar__column mbr-navbar__menu">
                    <nav class="mbr-navbar__menu-box mbr-navbar__menu-box--inline-right">
                        <div class="mbr-navbar__column">
<?php
wp_nav_menu( array(
    'theme_location'    => 'primary',
    'depth'             => 2,
    'container'         => '',
    'container_class'   => 'mbr-buttons__link btn text-white',
    'container_id'      => '',
    'menu_class'        => 'mbr-navbar__items mbr-navbar__items--right float-left mbr-buttons mbr-buttons--freeze mbr-buttons--right btn-decorator mbr-buttons--active',
    'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
    'walker'            => new WP_Bootstrap_Navwalker(),
) );

?>

                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</section>
