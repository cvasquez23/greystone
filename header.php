<?php
/**
  * The header for Greystone
  *
  * @package Greystone
  * @since Greystone 1.0
**/
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <link rel="profile" href="http://gmpg.org/xfn/11" />
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
    <?php if (is_singular() && get_option('thread_comments')) {
      wp_enqueue_script('comment-reply');
    } ?>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <?php wp_head(); ?>
  </head>
  <body>
    <!-- WP Admin Bar Overlapping Fix -->
    <?php if (is_admin_bar_showing()) { ?>
      <style>
        .navbar {
          top: 32px;
        }
        @media screen and (max-width: 782px) {
          .navbar {
            top: 46px;
          }
        }
      </style>
    <?php } ?>
    
    <!-- Desktop Nav -->
    <div class="sidebar-container d-none d-md-block">
        <div class="sidebar-logo text-center">
          <h1>G<span>REYSTONE</span></h1>
        </div>
        <ul class="sidebar-navigation">
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="fas fa-utensils col-3"></i>
              <span class="col-9">Food Menu</span>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="fas fa-beer col-3"></i>
              <span class="col-9">Beer Menu</span>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="fas fa-wine-glass-alt col-3"></i>
              <span class="col-9">Wine Menu</span>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="fas fa-cocktail col-3"></i>
              <span class="col-9">Drink Menu</span>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="fas fa-calendar-alt col-3"></i>
              <span class="col-9">Book a Table</span>
            </a>
          </li>
        </ul>
      </div>

      <!-- Mobile Nav -->
      <nav class="navbar navbar-expand-md d-md-none fixed-top">
        <a class="navbar-brand" href="#">GREYSTONE</a>
        <button
          class="hamburger hamburger--squeeze"
          type="button"
          data-toggle="collapse"
          data-target="#navbarNav"
          aria-controls="navbarNav"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="hamburger-box">
            <span class="hamburger-inner"></span>
          </span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="fas fa-utensils col-3"></i>
                <span class="col-9">Food Menu</span>
              </a>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="fas fa-beer col-3"></i>
                <span class="col-9">Beer Menu</span>
              </a>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="fas fa-wine-glass-alt col-3"></i>
                <span class="col-9">Wine Menu</span>
              </a>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="fas fa-cocktail col-3"></i>
                <span class="col-9">Drink Menu</span>
              </a>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="fas fa-calendar-alt col-3"></i>
                <span class="col-9">Book a Table</span>
              </a>
            </li>
          </ul>
        </div>
      </nav>