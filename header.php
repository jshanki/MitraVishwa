<!doctype html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title><?php echo page_title('Page can’t be found'); ?> - <?php echo site_name(); ?></title>

		<meta name="description" content="<?php echo site_description(); ?>">

		<link rel="stylesheet" href="<?php echo theme_url('/assets/css/bootstrap.min.css'); ?>">
		<link rel="stylesheet" href="<?php echo theme_url('/assets/css/bootstrap-responsive.min.css'); ?>">
		<link rel="stylesheet" href="<?php echo theme_url('/assets/css/app.css'); ?>">

		<link rel="alternate" type="application/rss+xml" title="RSS" href="<?php echo rss_url(); ?>">
		<link rel="shortcut icon" href="<?php echo theme_url('img/favicon.png'); ?>">

		<!--[if lt IE 9]>
			<script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->

		<script>var base = '<?php echo theme_url(); ?>';</script>

	    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	    <meta name="generator" content="Anchor CMS">

	    <meta property="og:title" content="<?php echo site_name(); ?>">
	    <meta property="og:type" content="website">
	    <meta property="og:url" content="<?php echo current_url(); ?>">
	    <meta property="og:image" content="<?php echo theme_url('img/og_image.gif'); ?>">
	    <meta property="og:site_name" content="<?php echo site_name(); ?>">
	    <meta property="og:description" content="<?php echo site_description(); ?>">

		<?php if(customised()): ?>
		    <!-- Custom CSS -->
    		<style><?php echo article_css(); ?></style>

    		<!--  Custom Javascript -->
    		<script><?php echo article_js(); ?></script>
		<?php endif; ?>

			
			<?php
			$latestPostURL = base_url() . Registry::get('posts_page')->slug . '/' . latest_post()->data['slug'];
			$latestPostLink = '<a
				href="' . $latestPostURL . '"
				class="latest-post ' . ($latestPostURL == $_SERVER['REQUEST_URI'] ? 'current' : '') . '"
				title="' . latest_post()->data['title'] . '"
				>Latest Post</a>';
		?>
	</head>
	<body class="<?php echo body_class(); ?>" >
					<header>
						<div class="navbar navbar-static-top ">
              <div class="navbar-inner">
                <div class="container">
                  <a class="btn btn-navbar" data-toggle="collapse" data-target=".navbar-inverse-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                  </a>
                  
                  <div class="nav-collapse collapse navbar-inverse-collapse">
                    <ul class="nav">
                    	<?php if(has_menu_items()): ?>
               				 <?php while(menu_items()): ?>
												<li <?php echo (menu_active() ? 'class="active"' : ''); ?>><a href="<?php echo menu_url(); ?>" title="<?php echo menu_title(); ?>"><?php echo menu_name(); ?></a></li>
											 <?php endwhile; ?>
											<?php endif; ?>
					       <?php if(about_url()): ?>
					        <li><a href="<?php echo about_url(); ?>" target="_blank">About</a></li>
					       <?php endif; ?>
                    </ul>
					<a class="brand" href="<?php echo base_url(); ?>"><!--?php echo site_name(); ?!--></a>
                    <form class="navbar-search form-search pull-right" action="<?php echo search_url(); ?>" method="post">
                    	<div class="input-append">
                      	<input class="search-query input-medium" type="text" id="term" name="term" placeholder="<?php echo (search_term() ? search_term() : 'Search'); ?>">
                      	<button type="submit" class="btn"><i class="icon-search"></i></button>
                      </div>
                    </form>
                  </div><!-- /.nav-collapse -->
                </div>
              </div><!-- /navbar-inner -->
            </div>
            <div class="brand alert alert-info" style="margin-bottom:30px">
					<h3 style="margin-left:2.5%"><?php echo site_name(); ?></h3>
					<h4 style="margin-left:2.5%"><small><em><?php echo site_description(); ?></em></small></h4>
            </div>
            <hr />
          </header>
          <div class="container" >