<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>

<meta http-equiv="Content-Type" content="<?php bloginfo( 'html_type' ); ?>; charset=<?php bloginfo( 'charset' ); ?>" />
<title><?php hybrid_document_title(); ?></title>
<meta name="viewport" content="width=device-width,initial-scale=1" />

<link rel="apple-touch-icon" href="<?php bloginfo('template_directory'); ?>/images/apple.png">
<link rel="icon" href="<?php bloginfo('template_directory'); ?>/images/favicon.png">
<!--[if IE]><link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/images/favicon.ico"><![endif]-->
<!-- or, set /favicon.ico for IE10 win -->
<meta name="msapplication-TileColor" content="#F5F5F5">
<meta name="msapplication-TileImage" content="<?php bloginfo('template_directory'); ?>/images/tileicon.png">

<link href='http://fonts.googleapis.com/css?family=Oswald:700&subset=latin,latin-ext' rel='stylesheet' type='text/css' />
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<?php wp_head(); // wp_head ?>

<!--[if (lt IE 9)&(!IEMobile)]>
<script src="<?php bloginfo('template_directory'); ?>/js/respond.min.js" type="text/javascript"></script>
<![endif]-->
</head>

<body class="<?php hybrid_body_class(); ?>">
      <header id="header">
          <div class="container">
              <hgroup id="branding">
                  <h1 id="site-title"><a href="<?php echo home_url(); ?>" title="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?>"><?php bloginfo( 'name' ); ?></a></h1>
                  <h2 id="site-description"><?php bloginfo( 'description' ); ?></h2>
              </hgroup><!-- #branding -->
          </div>
        </header><!-- #header -->

      <?php if ( get_header_image() ) echo '<img class="header-image" src="' . esc_url( get_header_image() ) . '" alt="" />'; ?>

      <?php get_template_part( 'menu', 'primary' ); // Loads the menu-primary.php template. ?>

      <div id="main" role="main">
