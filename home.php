<?php get_header(); ?>

<div id="headline">

	<h1>My name is <a href="/about/">Chris Basham</a>.</h1>
	
	<p>I'm a web developer and designer with the <strong>passion</strong> and <strong>knowledge</strong> to create the <strong>extraordinary</strong>.<br/>Though my <a href="/about/">journey</a> has only begun, let me <a href="/">share</a> with you what I've learned along the way.</p>
	
</div>
				
<div class="body">
	
	<div class="col5-3-wrap">
	
			<div class="col5">

				<h4>Latest Project</h4>
				
				<h2><a href="/portfolio/lakeview-church/">Lakeview Church</a></h2>
				
				<p><a href="/portfolio/lakeview-church/">
					<img src="http://chris.bash.am/wp-content/uploads/2008/12/lakeview-header.jpg" width="560" height="300" alt="Lakeview Church Homepage" title="Lakeview Church Homepage" />
				</a></p>
				
				<p>Working alongside of the church's Network and System's Manager, <a href="http://infotech.lakeviewchurch.org/">David Szpunar</a>, we redesigned the website for <a href="http://www.lakeviewchurch.org/">Lakeview Church</a> of Indianapolis, IN, including converting the backend to utilize <a href="http://wordpress.org/">WordPress</a> as the content management system, developing a custom WordPress theme, and restructuring the sitemap.</p>
				
				<p class="links"><a href="/portfolio/lakeview-church/"><strong>Read More</strong></a></p>

			</div>
			
			<div class="col3">

				<div id="twitter-widget-container" class="widget">
					<h3 class="loading"><small>Recent</small> Twitter Updates</h3>
					<div class="widget-body">
						<ul></ul>
						<p class="meta"></p>
					</div>
				</div>
				
			</div>
		
		<hr/>
		
	</div>
	
</div>

<?php

function scriptIt($value) {
	$a = '<script type="text/javascript" src="' . get_bloginfo('template_url');
	$b = '"></script>';
	return ( $a . $value . $b );
}

function widgets() {
	$js = '';
	// Helper Scripts
	$js .= scriptIt( '/js/jquery-1.2.6.min.js' );
	$js .= scriptIt( '/js/pretty.js' );
	// Delicious API service is faster, so put it first
	//$js .= scriptIt( '/js/delicious-widget.js' );
	$js .= scriptIt( '/js/twitter-widget.js' );
	//$js .= scriptIt( '/js/digg-widget.js' );
	echo $js;
}

add_action('wp_footer', 'widgets');

?>

<?php get_footer(); ?>
