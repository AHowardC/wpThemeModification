<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

get_header();

$description = get_the_archive_description();
?>
<?php if ( have_posts() ) : ?>
	<header class="page-header alignwide">
		<?php the_archive_title( '<h1 class="page-title">', '</h1>' ); ?>
		<?php if ( $description ) : ?>
			<div class="archive-description"><?php echo wp_kses_post( wpautop( $description ) ); ?></div>
		<?php endif; ?>
	</header><!-- .page-header -->

    <div class="cards-container">
    <!-- Added search form functionality, created searchform.php -->
    <?php get_search_form(); ?>
        <div class="cards">
            <?php while ( have_posts() ) : ?>
                    <?php the_post(); ?>
                    <!-- created card layout for posts -->
                    <div class="card">
                    <!-- separated and reordered post parts: thumbnail, title, excerpt -->
                    <?php the_post_thumbnail(); ?>
                    <div class="internal-card-content">
                        <h3><?php the_title(); ?></h3>
                        <?php the_excerpt(); ?>
                    </div>
                    </div>
            <?php endwhile; ?>
        </div>
    </div>
	<?php twenty_twenty_one_the_posts_navigation(); ?>

<?php else : ?>
	<?php get_template_part( 'template-parts/content/content-none' ); ?>
<?php endif; ?>

<?php get_footer(); ?>

