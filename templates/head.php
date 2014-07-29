<!DOCTYPE html><!-- 
   _      ___    ____                
 /' \   /'___`\ /\  _`\   /'\_/`\    
/\_, \ /\_\ /\ \\ \,\L\_\/\      \   
\/_/\ \\/_/// /__\/_\__ \\ \ \__\ \  
   \ \ \  // /_\ \ /\ \L\ \ \ \_/\ \ 
    \ \_\/\______/ \ `\____\ \_\\ \_\
     \/_/\/_____/   \/_____/\/_/ \/_/                                                                                                           
 
built by 12South Music
http://12southmusic.com/
 
 -->
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" <?php language_attributes(); ?>> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" <?php language_attributes(); ?>> <!--<![endif]-->
<head>
  <meta charset="utf-8">
  <title><?php wp_title('|', true, 'right'); ?></title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <?php wp_head(); ?>
  
  <?php if (GOOGLE_ANALYTICS_ID) : ?>
    <!-- Begin Google Analytics <!-->   
    <script type="text/javascript">
	    var _gaq = _gaq || [];
	    _gaq.push(['_setAccount', '<?php echo GOOGLE_ANALYTICS_ID; ?>']);
	    _gaq.push(['_trackPageview']);
	    (function() {
		    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
		    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
		    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
		})();
	</script>
	<!-- End Google Analytics <!--> 
  <?php endif; ?>
  
  <!-- Begin 12SM Network Analytics <!-->   
  <script type="text/javascript">
	var _gaq = _gaq || [];
  	_gaq.push(['_setAccount', 'UA-27814560-1']);
  	_gaq.push(['_setDomainName', '12southmusic.com']);
  	_gaq.push(['_setAllowLinker', true]);
  	_gaq.push(['_trackPageview']);
 	(function() {
	  	var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
	  	ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
	  	var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
	  	})();
	</script>
  <!-- End 12SM Network Analytics <!--> 

  <link rel="alternate" type="application/rss+xml" title="<?php echo get_bloginfo('name'); ?> Feed" href="<?php echo home_url(); ?>/feed/">
  
  <link rel="shortcut icon" href="<?php echo of_get_option('favicon_upload'); ?>" />

  <script type="text/javascript" src="//use.typekit.net/jrj3rdu.js"></script>
  <script type="text/javascript">try{Typekit.load();}catch(e){}</script>

</head>
