<!DOCTYPE html>
<html <?php language_attributes(); ?> lang="<?php echo esc_attr(get_bloginfo('language')); ?>">
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php wp_head(); ?>
  <!-- Google tag (gtag.js) -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=AW-17383327544"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());
    gtag('config', 'AW-17383327544');
  </script>
  <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "LocalBusiness",
      "name": "GG Dev",
      "image": "https://gg-dev.co/wp-content/uploads/2025/07/gg-og-image.jpg",
      "url": "https://gg-dev.co",
      "telephone": "+1-704-576-4313",
      "address": {
        "@type": "PostalAddress",
        "streetAddress": "329 Sumner St",
        "addressLocality": "Longmont",
        "addressRegion": "CO",
        "postalCode": "80501",
        "addressCountry": "US"
      },
      "description": "Custom WordPress development studio in Colorado specializing in fast, accessible, modern websites for small businesses and nonprofits.",
      "priceRange": "$$"
    }
  </script>
  <!-- Google tag (gtag.js) -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=AW-17383327544">
  </script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'AW-17383327544');
  </script>
</head>
<body <?php body_class(); ?>>

<header class="site-header" role="banner">
  <div class="o-container header-inner">
    <div class="c-header__logo">
      <?php if (get_theme_mod('ggdevportfolio_header_logo')) : ?>
        <a href="<?php echo esc_url(home_url('/')); ?>" aria-label="Home - <?php bloginfo('name'); ?>">
          <img src="<?php echo esc_url(get_theme_mod('ggdevportfolio_header_logo')); ?>" alt="<?php bloginfo('name'); ?>">
        </a>
      <?php elseif (has_custom_logo()) : ?>
        <a href="<?php echo esc_url(home_url('/')); ?>" aria-label="Home - <?php bloginfo('name'); ?>">
          <?php the_custom_logo(); ?>
        </a>
      <?php else : ?>
        <a href="<?php echo esc_url(home_url('/')); ?>" aria-label="Home - <?php bloginfo('name'); ?>"><?php bloginfo('name'); ?></a>
      <?php endif; ?>
    </div>

    <!-- Desktop Navigation -->
    <nav class="header-nav" role="navigation" aria-label="<?php esc_attr_e('Primary navigation', 'ggdevportfolio'); ?>">
      <?php
      wp_nav_menu([
        'theme_location' => 'primary',
        'container'      => false,
        'menu_class'     => 'menu',
        'walker'         => new GGDevPortfolio_Walker_Nav_Menu(),
      ]);
      ?>
    </nav>

    <!-- Mobile Toggle Navigation -->
    <nav id="site-navigation" class="main-navigation" role="navigation" aria-label="<?php esc_attr_e('Mobile navigation', 'ggdevportfolio'); ?>">
      <button 
        class="menu-toggle" 
        aria-controls="mobile-primary-menu" 
        aria-expanded="false" 
        aria-label="<?php esc_attr_e('Toggle mobile menu', 'ggdevportfolio'); ?>"
      >
        <svg class="hamburger-icon" width="24" height="18" viewBox="0 0 24 18" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" focusable="false">
          <rect y="0" width="24" height="3" fill="#fff"/>
          <rect y="7.5" width="24" height="3" fill="#fff"/>
          <rect y="15" width="24" height="3" fill="#fff"/>
        </svg>
      </button>
    </nav>
  </div>

  <!-- Mobile Menu -->
  <div class="main-mobile-menu" id="mobile-primary-menu" aria-label="<?php esc_attr_e('Mobile menu', 'ggdevportfolio'); ?>" aria-hidden="true">
    <?php
    wp_nav_menu([
      'theme_location' => 'primary',
      'container'      => false,
      'menu_class'     => 'menu',
      'walker'         => new GGDevPortfolio_Walker_Nav_Menu(),
    ]);
    ?>
  </div>
</header>

<div id="content">
