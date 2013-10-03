<html lang="en" xml:lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta content="text/html; charset=UTF-8" http-equiv="content-type"/>
<meta name="description"/>
<meta name="keywords"/>
<meta content="Patrick Godbey" name="author"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<link href="<?php echo theme_url('/images/favicon.ico'); ?>" rel="icon" type="image/x-icon"/>
<link href="<?php echo theme_url('/images/favicon.ico'); ?>" rel="shortcut icon" type="image/x-icon"/>
<link href='http://fonts.googleapis.com/css?family=Droid+Serif:400,700' rel='stylesheet' type='text/css'>
<link href="<?php echo theme_url('/css/bootstrap.min.css'); ?>" rel="stylesheet" type="text/css"/>
<link href="<?php echo theme_url('/css/style.css'); ?>" rel="stylesheet" type="text/css"/>
<title><?php echo page_title("Page can't be found"); ?> - <?php echo site_name(); ?></title>
</head>
<body>
<div class="header">
	<nav class="navbar navbar-fixed-top" role="navigation">
	<div class="container">
		<div class="navbar-header">
			<button class="navbar-toggle" data-target=".navbar-ex1-collapse" data-toggle="collapse" type="button"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button><a class="navbar-brand" href="/"><?php echo site_name(); ?></a>
		</div>
		<div class="collapse navbar-collapse navbar-ex1-collapse">
			<?php if(has_menu_items()) : ?>
			    <nav role="main">
			    	<ul class="nav navbar-nav">
				        <?php while(menu_items()) : ?>
				            <li><a href="<?php echo menu_url(); ?>" title="<?php echo menu_title(); ?>"><?php echo menu_name(); ?></a></li>
				        <?php endwhile; ?>
			        </ul>
			    </nav>
			<?php endif; ?>			
			<ul class="nav navbar-nav navbar-right">
				<li><a class="icon-header" href="http://github.com/mrpatg"><i class="icon-github icon-2x"></i></a>
				<li><a class="icon-header" href="http://twitter.com/mrpatg"><i class="icon-twitter icon-2x"></i></a>
				<li><a class="icon-header" href="http://www.linkedin.com/in/mrpatg"><i class="icon-linkedin icon-2x"></i></a></li>
				</li>
				</li>
			</ul>
		</div>
	</div>
	</nav>
</div>