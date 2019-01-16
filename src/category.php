<?php get_header(); ?>
<main>
  <section id="<?= $category_name; ?>">
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <article>
      <h2><a href='<?php echo get_permalink(); ?>'><?php the_title(); ?></a></h2>
      <?php the_content(); ?>
    </article>
    <?php endwhile; endif; ?>
  </section>
</main>
<?php get_footer(); ?>