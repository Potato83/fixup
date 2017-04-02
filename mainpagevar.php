<?php
/*
Template Name: MainPageVar
 */
get_header(); 
//$embed_type = get_field('embed_type');
$banner_gif = get_field('banner_gif');

$bandcamp_1 = get_field('bandcamp_1');
$bandcamp_2 = get_field('bandcamp_2');
$bandcamp_3 = get_field('bandcamp_3');
$bandcamp_4 = get_field('bandcamp_4');
?>
<!-- <div id="load"></div> -->
<div id="contents">
<section id="home">
	<div class="top-banner sneak-away"></div>
	<div class="social-banner sneak-away"></div>
	<div id="home-inner">

		<div id="hero-banner" class="sneak-away">			
  		<img src="<?php bloginfo ('template_url'); ?>/assets/img/Jaff56b.png" alt="Living~Stone" id="main56" class="sneak-away">
  		<img src="https://livingstonedubz.com/wp-content/uploads/2016/04/Jaff2.gif" alt="Living~Stone" id="main-gif56" class="sneak-away">
  		<!-- <img src="<?php echo $banner_gif['url']; ?>" alt="Living~Stone" id="main-gif56" class="sneak-away"> -->

		</div>

			<div class="social-link-conta">
				<ul class="social56 social-links-custom57 social-links sneak-away">
					<li class="spacer-fb56"></li>
					<li class="giffy"><a href="http://www.facebook.com/Livingstonedubz/" target="_blank"><img src="<?php bloginfo('template_directory'); ?>/assets/img/fbw2.png" alt="Facebook" class="ico-border" id="fb-border"></a></li>
					<li class="spacer56"></li>
					<li class="giffy"><a href="http://twitter.com/livingstonedubz" target="_blank"><img src="<?php bloginfo('template_directory'); ?>/assets/img/tww2.png" alt="Twitter" class="ico-border"></a></li>
					<li class="spacer56"></li>
					<li class="giffy"><a href="http://soundcloud.com/livingstonesound" target="_blank"><img src="<?php bloginfo('template_directory'); ?>/assets/img/scw.png" alt="Soundcloud" class="ico-border"></a></li>
					<li class="spacer56"></li>
					<li class="giffy"><a href="http://livingstonesound.tumblr.com/" target="_blank"><img src="<?php bloginfo('template_directory'); ?>/assets/img/tmw.png" alt="Tumblr" class="ico-border"></a></li>
					<li class="spacer56"></li>
					<li class="giffy"><a href="http://www.mixcloud.com/livingstonesound" target="_blank"><img src="<?php bloginfo('template_directory'); ?>/assets/img/mcw.png" alt="Mixcloud" class="ico-border"></a></li>
					<li class="spacer56x"></li>								
					<li class="giffy giffy-bc56"><a href="http://livingstone.bandcamp.com/" target="_blank"><img src="<?php bloginfo('template_directory'); ?>/assets/img/bcw.png" alt="Bandcamp" class="ico-border"></a></li>				
					<li class="spacer-bc56"></li>
					<li class="giffym"><a href="mailto:livingstonedubz@gmail.com"><img src="<?php bloginfo('template_directory'); ?>/assets/img/email4e.png" alt="Email" class="ico-border"></a></li>
					<li class="spacer56m"></li>
				</ul>
			</div>
		

<div id="fade-out" class="headline hide"><?php the_field('fading_headline'); ?></div>
<!-- <button id="tast">TST</button> -->

		<div class="visual-between visual-fade bandcamper">
		
		<div class="bandbox">
			<iframe src="https://bandcamp.com/EmbeddedPlayer/album=<?php echo $bandcamp_1; ?>/size=large/bgcol=ffffff/linkcol=0687f5/minimal=true/transparent=true/" frameborder="0" class="album"></iframe>
		</div>
		
		<div class="bandbox">
			<iframe src="https://bandcamp.com/EmbeddedPlayer/album=<?php echo $bandcamp_2; ?>/size=large/bgcol=ffffff/linkcol=0687f5/minimal=true/transparent=true/" frameborder="0" class="album"></iframe>
		</div>

		<div class="bandbox">
			<iframe src="https://bandcamp.com/EmbeddedPlayer/album=<?php echo $bandcamp_3; ?>/size=large/bgcol=ffffff/linkcol=0687f5/minimal=true/transparent=true/" frameborder="0" class="album"></iframe>
		</div>

		<div class="bandbox">
			<iframe src="https://bandcamp.com/EmbeddedPlayer/album=<?php echo $bandcamp_4; ?>/size=large/bgcol=ffffff/linkcol=0687f5/minimal=true/transparent=true/" frameborder="0" class="album"></iframe>
		</div>

		<div class="bandbox-mobile">
			<iframe src="https://bandcamp.com/EmbeddedPlayer/album=<?php echo $bandcamp_1; ?>/size=large/bgcol=ffffff/linkcol=0687f5/minimal=true/transparent=true/" frameborder="0" class="album"></iframe>
		</div>

	</div><!-- .visual-between -->           

		<div class="scroller soundcloud-scroller">			
			<div class="link-scroll hide" id="scroller-1">
				<a href="#soundcloud" id="1" ><i class="fa fa-chevron-down center"></i></a>
			</div>			
		</div><!-- .scroller -->
		
	</div><!-- #home-inner56 -->		
		
</section><!-- #home-page -->
<?php get_template_part('content', 'bandcamp'); ?>
<?php get_template_part('content', 'mix'); ?>
<?php get_template_part('content', 'visual'); ?>
<?php get_template_part('content', 'events'); ?>
<?php get_template_part('content', 'contact'); ?>

</div><!-- #contents -->
 <!--<script>
// 	var jimmy = "<?php //echo $embed_type; ?>";
 </script> -->
<?php get_footer(); ?>