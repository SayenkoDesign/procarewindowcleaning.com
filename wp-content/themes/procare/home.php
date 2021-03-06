<?php get_header(); ?>

<?php get_sidebar('Special'); ?>

<div class="post">

<?php
query_posts('page_id=5');
?>


<?php if (have_posts()) : ?><?php while (have_posts()) : the_post(); ?>

<h1><?php the_title(); ?></h1>

<?php the_content('Read more &raquo;'); ?>

<?php endwhile; ?>
		
<?php else : ?>
<h2>Not found!</h2>
<p>Could not find the requested page. Use the navigation menu to find your target, or use the search box below:</p>
<?php include (TEMPLATEPATH . "/searchform.php"); ?>
<?php endif; ?>


</div>

<?php get_sidebar('Newsletter'); ?>

<?php get_footer(); ?>