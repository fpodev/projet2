<?php 
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package Travelogged
 */
get_header();
?> 

<section class="page-title-section content-center" style="background:linear-gradient(4deg, rgba(0, 0, 0, 0.88) 17%, rgba(0, 0, 0, 0.42) 69%), url(<?php header_image(); ?>);" >
    <div class="container wow fadeInDown animated" data-wow-duration="2s" data-wow-offset="250">
        <div class="page-heading white ">
			<h1 class="title">
				<?php 
					printf( esc_html( 'Résultat de recherche pour: %s', 'travelogged' ), esc_html( get_search_query() ) );
				?>
			</h1>
         </div>
    </div>
</section>

<div class="page-blog main-container space-top">
	<main id="main" class="site-main">
		<div class="container">
			<div class="blog-post-all row">
				<div class="col-lg-8 col-md-12">
					<?php get_template_part( 'template-parts/content', 'Rechercher' ); ?>
				</div>
			   <?php get_sidebar(); ?>
			</div>
		</div>
    </main>
</div>
<?php get_footer(); ?>