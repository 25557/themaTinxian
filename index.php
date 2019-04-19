<?php // Header toevoegen ?>
<?php get_header(); ?>

<?php // De wordpress loop ?>
<?php if ( have_posts() ) : ?>
<?php while ( have_posts() ) : the_post() ?>
<article class="bericht">
  <div class="container">
<a href="<?php the_permalink() ?>">
  <h2>
    <?php the_title()?>
  </h2>
</a>
<?php the_content() ?>
</div> 
</article>
<!-- einde container -->
<?php endwhile; ?>
<?php else : ?>
<?php echo '<p>Er zijn geen berichten gevonden.</p>';?>
<?php endif; ?>
<?php // einde Wordpress loop ?>
<?php // Footer toevoegen ?>
<?php get_footer(); ?>