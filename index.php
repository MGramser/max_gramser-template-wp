<?php require 'frames/html.head.php'; ?>

<div class="top" id='top'><video autoplay loop poster="<?php bloginfo('template_directory') ?>/images/video/video.jpg">
	<source src="<?php echo bloginfo('template_directory'); ?>/images/video/video.m4v" type="video/mp4">
	<source src="<?php echo bloginfo('template_directory'); ?>/images/video/video.webm" type="video/webm">
</video><div class="overlay"><div class="logo"></div></div></div>

<div class="container">

<nav class="site-nav">
	<?php 
		$args = ['theme_location' => 'primary'];
		wp_nav_menu($args) 
	?>
</nav>
	
<div class="maincontent">
<?php 
	if(have_posts()){
		while(have_posts()) : the_post(); ?>
		
		<h2><?php the_title() ?></h2>
		<p><?php the_content() ?></p>
		
		<?php endwhile; 
		} // endif
?>

<div class="facebooklike">
	<div class="fb-like" data-href="https://www.facebook.com/gramsersports/" data-layout="standard" data-action="like" data-size="small" data-show-faces="true" data-share="true"></div>
</div>

</div>

<?php require 'frames/html.footer.php'; ?>