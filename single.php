<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Travelogged
 */
get_header();
get_template_part( 'inc/header-section' );
?> 

<div class="page-blog main-container post-details">
	<main id="main" class="site-main">
		<div class="space container ">
			<!--blogo-post-->
			<div class="row">
				<div class="col-lg-8 col-md-12 view_post">
					<?php if( have_posts() ) { while( have_posts() ) { the_post(); ?>
					<figure>
						<?php if ( has_post_thumbnail() ) { ?>
						<img src="<?php the_post_thumbnail_url(); ?>" class="img-fluid " alt="<?php the_title_attribute(); ?>">
						<?php } ?>
						<figcaption class="text-left">
							<h2> <?php the_title(); ?> </h2>
							<ul class="nav like_cmt_shr">
								<li><a href="<?php  echo esc_url( get_author_posts_url(  get_the_author_meta( 'ID' ) ) ); ?>"> <i class="far fa-user-circle"> </i> <?php the_author(); ?> </a></li>
								<li><i class="fa fa-list-alt"> </i> <?php the_category( ',' ); ?></li>
								<li><i class="fa fa-tag"> </i> <?php if ( get_the_tag_list() != '') { the_tags(); } ?></li>
								<li><i class="fa fa-comments"> </i> <?php echo esc_html( get_comments_number() ); ?></li>
							</ul>
							<?php the_content(); ?>
							
						</figcaption>
					</figure>
					<?php } } ?>
					<!--post-->				
					<?php // If comments are open or we have at least one comment, load up the comment template.
					 if ( comments_open() || get_comments_number() ) {
						 comments_template();
					 } ?> 
				</div>			
			</div>
		</div>
    </main>
</div>

<?php get_footer(); ?>