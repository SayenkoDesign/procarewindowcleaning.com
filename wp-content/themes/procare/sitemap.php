<?php
/*
Template Name: Site Map
*/
?>

<?php get_header(); ?>

<?php get_sidebar(); ?>

<div class="post">

<?php if (have_posts()) : ?><?php while (have_posts()) : the_post(); ?>

<h1><?php the_title(); ?></h1>

<h3>Pages</h3>

<ul>
<?php wp_list_pages('title_li=&exclude=5,45'); ?>
</ul>

<h3>Blog Posts</h3>

  <ul>
 <?php
 global $post;
 $myposts = get_posts('numberposts=all');
 foreach($myposts as $post) :
 ?>
    <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
 <?php endforeach; ?>
 </ul> 

<?php endwhile; ?>
		
<?php else : ?>
<h2>Not found!</h2>
<p>Could not find the requested page. Use the navigation menu to find your target, or use the search box below:</p>
<?php include (TEMPLATEPATH . "/searchform.php"); ?>
<?php endif; ?>


</div>

<?php get_footer(); ?>