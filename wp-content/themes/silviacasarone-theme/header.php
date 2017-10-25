<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>

		<link href="//www.google-analytics.com" rel="dns-prefetch">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico" rel="shortcut icon">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">

		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="<?php bloginfo('description'); ?>">

		<?php wp_head(); ?>
		<script>
        // conditionizr.com
        // configure environment tests
        conditionizr.config({
            assets: '<?php echo get_template_directory_uri(); ?>',
            tests: {}
        });
        </script>

	</head>
	<body <?php body_class(); ?>>

		<!-- wrapper -->
		<div class="wrapper">

			<!-- header -->
			<header class="header clear" role="banner">

					<!-- logo -->
                <div class="main-header-container">
                    <div class="container">
                        <div class="sc-written-logo-container text-center">
                            <a href="<?php echo home_url(); ?>">
                                <h1 class="sc-written-logo-inner">SILVIA<span class="green">CASARONE</span></h1>
                                <h2>teatro applicato al mondo</h2>
                            </a>
                        </div>
                    </div>
                </div>
					<!-- /logo -->

					<!-- nav -->
                    <div class="container">
                        <nav class="nav sc-nav" role="navigation">
                            <div class="container-fluid">
                                <div class="hidden-xs hidden-sm"><?php html5blank_nav(); ?></div>
                                <div class="mobile-nav-icon">
                                    <a href="#" id="nav-icon3" class="hidden-md hidden-lg">
                                      <span></span>
                                      <span></span>
                                      <span></span>
                                      <span></span>
                                    </a>
                                </div>
                            </div>
                            
                        </nav>
                        
                    </div>
                    <nav class="mobile-nav">
                        <div class="icon-close-container"><a href="#" class="mobile-nav-close"><i class="icon icon-close"></i></a></div>
                        <ul class="list-unstyled">
                            <?php html5blank_nav(); ?>
                        </ul>
                        
                    </nav>
					<!-- /nav -->

					<!-- /nav -->

			</header>
			<!-- /header -->
