<?php
get_header();
?>
<br>
<div class="row">
	<div id="primary" class="site-content small-12 medium-9 columns"> 
		<div class="row">
				<div class="medium-12 columns small-12">
							<div class="wrapper-banner">
					<img width="900px" src="<?php echo get_stylesheet_directory_uri().'/images/samargote-banner-rounded.png'; ?>">
				</div>
			</div>
		</div>
		<div class="wrapper-blog">
			<div id="content" role="main">		
			<?php
				$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
				query_posts('cat=15&order=DESC&post_per_page=10&paged='.$paged);
				if(have_posts()){
					while(have_posts()):the_post(); ?>
					<div class="row">	
					  <div class="large-12 columns">
						<a href="<?php the_permalink(); ?>"><h3><?php the_title(); ?></h3></a>
					</div>
					</div>
					<div class="row">
					  <div class="small-12 columns large-8 columns">
						<?php the_excerpt(); ?>
					  </div>
					  <div class="small-12 columns large-4 columns">			
						<?php if(has_post_thumbnail()){ ?>
							<a href="<?php the_permalink(); ?>">
							<?php the_post_thumbnail(); ?>
							</a>
						<?php } ?>
					  </div>
					 </div>
					<?php endwhile;
				}
			?>
			</div>
		</div>
	</div>
<?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>

