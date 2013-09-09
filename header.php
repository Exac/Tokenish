<?php
	get_header();
?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js">
<!--<![endif]-->
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<title><?php bloginfo('name'); ?> <?php wp_title(); ?></title>
<meta name="description" content="">
<meta name="viewport" content="width=device-width">
<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/normalize.min.css">
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/less.css">
<script src="<?php bloginfo('template_url'); ?>/js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>
<!--[if lt IE 9]>
<script src="/cdn/js/html5shiv.js"></script>
<link rel="stylesheet" href="/cdn/css/ie.css">
<![endif]-->
<?php wp_head(); ?>

<?php if ( !is_user_logged_in() ){ ?>
			<style>
            #wpadminbar{ display:none; }
						html{margin-top:0px !important;}
            </style>
		<?php } ?>
</head>
<body>
<!--[if lt IE 8]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
        <![endif]-->

<div class="header-container">
	<header class="wrapper clearfix"> 
		<nav>
			<ul>
				<li class="title"><span>Courtney</span> Shmyr</li>
				<li><a>Biography</a></li>
				<li><a>Achievements</a></li>
				<li><a>Sponsorship</a></li>
				<li><a>Help&nbsp;Out</a></li>
				<li><a>Blog</a></li>
				<li><a>Contact</a></li>
			</ul>
		</nav>
	</header>
</div>
<div class="main-container">
	<div class="main wrapper clearfix">
		<section class="jumbotron">
			<h1>
				<?php
					echo get_the_title();
				?>
			</h1>
		</section>