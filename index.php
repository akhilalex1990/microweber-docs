<?php
require('one.php'); 
$content = page_content();
 
$this_file_link='https://github.com/microweber/microweber-docs/tree/master/'.url_path().'.php';
?>
<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Microweber docs</title>

    <!-- Bootstrap core CSS -->
    <link href="<?php print site_url(); ?>assets/css/bootstrap.css" rel="stylesheet">

    <!-- Add custom CSS here -->
    <link href="<?php print site_url(); ?>assets/css/simple-sidebar.css" rel="stylesheet">
    <link href="<?php print site_url(); ?>assets/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="<?php print site_url(); ?>assets/js/google-code-prettify/prettify.css" rel="stylesheet">
    <script src="<?php print site_url(); ?>assets/js/jquery.js"></script>
    <script src="<?php print site_url(); ?>assets/js/bootstrap.js"></script>
    <script src="<?php print site_url(); ?>assets/js/google-code-prettify/prettify.js"></script>
    <script>



    $(document).ready(function(){
		prettyPrint();
    });

     $(window).bind("load resize", function(){
       $(document.getElementById('sidebar-wrapper-holder')).css({
         "height":$(window).height() - $("#logotholder").outerHeight(),
         "top":$("#logotholder").outerHeight()
       });
     })

    </script>
    </head>
    <body>
    <script>
    if('ontouchstart' in document.documentElement){
      document.body.className+=' touchdevice'
    }
    </script>
	<div id="wrapper">
		<div id="sidebar-wrapper">
        <span id="fader"></span>
		<div id="sidebar-wrapper-holder">



			<ul class="sidebar-nav">
				<li class="sidebar-brand">
                  <div id="logotholder"><a href="<?php print site_url(); ?>" id="logot">API Documentation</a></div>
                </li>
				<li><a class="nav-title <?php if(url_path() == 'functions/_nav/content') print "active" ; ?>" href="<?php print site_url(); ?>functions/_nav/content">Content</a> <?php print page_content('functions/_nav/content'); ?> </li>
				<li><a class="nav-title <?php if(url_path() == 'functions/_nav/categories') print "active" ; ?>" href="<?php print site_url(); ?>functions/_nav/categories">Categories</a> <?php print page_content('functions/_nav/categories'); ?> </li>
				<li><a class="nav-title <?php if(url_path() == 'functions/_nav/url') print "active" ; ?>" href="<?php print site_url(); ?>functions/_nav/url">URL</a> <?php print page_content('functions/_nav/url'); ?> </li>
				<li><a class="nav-title <?php if(url_path() == 'functions/_nav/template') print "active" ; ?>" href="<?php print site_url(); ?>functions/_nav/template">Template</a> <?php print page_content('functions/_nav/template'); ?> </li>
				<li><a class="nav-title <?php if(url_path() == 'functions/_nav/options') print "active" ; ?>" href="<?php print site_url(); ?>functions/_nav/options">Options</a> <?php print page_content('functions/_nav/options'); ?> </li>
				<li><a class="nav-title <?php if(url_path() == 'functions/_nav/shop') print "active" ; ?>" href="<?php print site_url(); ?>functions/_nav/shop">Shop</a> <?php print page_content('functions/_nav/shop'); ?> </li>
				<li><a class="nav-title <?php if(url_path() == 'functions/_nav/users') print "active" ; ?>" href="<?php print site_url(); ?>functions/_nav/users">Users</a> <?php print page_content('functions/_nav/users'); ?> </li>
				<li><a class="nav-title <?php if(url_path() == 'functions/_nav/db') print "active" ; ?>" href="<?php print site_url(); ?>functions/_nav/db">Database</a> <?php print page_content('functions/_nav/db'); ?> </li>
				<li><a class="nav-title <?php if(url_path() == 'functions/_nav/session') print "active" ; ?>" href="<?php print site_url(); ?>functions/_nav/session">Sessions</a> <?php print page_content('functions/_nav/session'); ?> </li>
			</ul>
		</div>
		</div>

		<!-- Page content -->
		<div id="page-content-wrapper">
			<div class="page-content inset" id="page-content-body"> <?php print $content; ?> </div>
			<?php /*<div class="docs-help-needed"><a class="text-muted" href="<?php print $this_file_link?>">edit this file</a> </div>*/ ?>
		</div>
	</div>
</body>
</html>