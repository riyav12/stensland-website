<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;700;800&display=swap" rel="stylesheet">
    <!-- Main CSS -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/style.css">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<header class="site-header">
    <div class="container header-inner">
        <!-- Left: Logo -->
        <div class="header-left">
            <a href="<?php echo home_url(); ?>" class="brand">
                <div class="logo-circle">
                    <span class="logo-initial">T</span>
                </div>
                <span class="brand-text">STENSLAND</span>
            </a>
        </div>
        <!-- Right: Language + Button -->
        <div class="header-right">
            <div class="lang-select">
                <span class="lang">EN</span>
                <svg class="lang-arrow" xmlns="http://www.w3.org/2000/svg" width="10" height="6" viewBox="0 0 10 6" fill="none">
                    <path d="M1 1L5 5L9 1" stroke="#000" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
            </div>
           <a href="#" class="book-btn">
  Book a Call
  <svg width="16" height="16" style="vertical-align:middle;margin-left:6px;" fill="none" xmlns="http://www.w3.org/2000/svg">
    <path d="M4 12L12 4M12 4H6M12 4V10" stroke="#fff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
  </svg>
</a>
        </div>
    </div>
</header>