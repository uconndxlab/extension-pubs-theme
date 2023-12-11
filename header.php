<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://unpkg.com/htmx.org/dist/htmx.min.js"></script>

    <?php wp_head(); ?>
    <link rel="stylesheet" href="https://use.typekit.net/lra2zca.css">
    <!-- get banner.min.css from the theme -->
    <link rel="stylesheet" href="https://uconn.edu/content/themes/lobo/vendor/uconn/banner/_site/banner.css?ver=6.3.1">
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/banner.min.css">
    <!-- material design icons -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <title>
     
    <?php 
    // site title
    echo get_bloginfo( 'name' );
    wp_title( '&raquo;', true, 'left' ); ?>


    </title>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>



<div id="site">
<div id="uconn-banner" style="background-color:#000E2F;">
  <div id="uconn-header-container" class="row-container row-fluid container">   
      <div id="home-link-container">
          <a id="home-link" href="https://uconn.edu/">
            <span id="wordmark" aria-hidden="true">UConn</span>
            <span id="university-of-connecticut" style="text-transform: uppercase;">
              University of Connecticut
            </span>
          </a>
      </div>
      <div id="button-container">
          <div class="icon-container" id="icon-container-search">
              <a class="btn" id="uconn-search" href="https://uconn.edu/search">
                  <span class="no-css">Search University of Connecticut</span>  
                  <svg version="1.1" xmlns="http://www.w3.org/2000/svg" width="20" viewBox="0 0 32 32" aria-hidden="true" class="banner-icon">
                      <title>Search UConn</title>
                      <path d="M28.072 24.749l-6.046-6.046c0.912-1.499 1.437-3.256 1.437-5.139 0-5.466-4.738-10.203-10.205-10.203-5.466 0-9.898 4.432-9.898 9.898 0 5.467 4.736 10.205 10.203 10.205 1.818 0 3.52-0.493 4.984-1.349l6.078 6.080c0.597 0.595 1.56 0.595 2.154 0l1.509-1.507c0.594-0.595 0.378-1.344-0.216-1.938zM6.406 13.258c0-3.784 3.067-6.853 6.851-6.853 3.786 0 7.158 3.373 7.158 7.158s-3.067 6.853-6.853 6.853-7.157-3.373-7.157-7.158z"></path>
                  </svg>
              </a>
              <div id="uconn-search-tooltip"></div>
          </div>
          <div class="icon-container" id="icon-container-az">
              <a class="btn" id="uconn-az" href="https://uconn.edu/az">
                  <span class="no-css">A to Z Index</span>
                  <svg version="1.1" xmlns="http://www.w3.org/2000/svg" width="20" viewBox="0 0 32 32" aria-hidden="true" class="banner-icon">
                      <title>UConn A to Z Search</title>
                      <path d="M5.345 8.989h3.304l4.944 13.974h-3.167l-0.923-2.873h-5.147l-0.946 2.873h-3.055l4.989-13.974zM5.152 17.682h3.579l-1.764-5.499-1.815 5.499zM13.966 14.696h5.288v2.56h-5.288v-2.56zM20.848 20.496l7.147-9.032h-6.967v-2.474h10.597v2.341l-7.244 9.165h7.262v2.466h-10.798v-2.466h0.004z"></path>
                  </svg>
              </a>
              <div id="uconn-az-tooltip"></div>
          </div>
      </div>
  </div>
</div>

<div style="background-color:#000E2F;border-bottom:5px solid #3B833F;">
<div class="container" style="padding:0px;">
<nav class="upper-nav">
    <a class="parent-title" href="https://cahnr.uconn.edu/">COLLEGE OF AGRICULTURE, HEALTH AND NATURAL RESOURCES</a>
</nav>
<!--Level 1 Title-->
<nav class="navbar navbar-expand-lg navbar-light shift">
    <a class="navbar-brand" href="/">UConn Extension Publications</a>
</nav>
</div>
</div>

    <?php get_template_part( 'partials', 'skiplinks', array() ); ?>



