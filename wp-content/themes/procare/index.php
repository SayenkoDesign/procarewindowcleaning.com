<?php get_header(); ?>

<?php get_sidebar(); ?>

<div class="post">

<?php if (have_posts()) : ?><?php while (have_posts()) : the_post(); ?>

<h2><?php the_title(); ?></h2>

<?php the_content('Read more &raquo;'); ?>

<?php endwhile; ?>
		
<?php else : ?>
<h2>Not found!</h2>
<p>Could not find the requested page. Use the navigation menu to find your target, or use the search box below:</p>
<?php include (TEMPLATEPATH . "/searchform.php"); ?>
<?php endif; ?>


</div>

<?php get_footer(); ?>