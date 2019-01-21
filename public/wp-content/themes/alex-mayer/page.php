<?php get_header(); ?>
<main>
  <section>
    <?php while ( have_posts() ) : the_post(); ?>
    <div>
      <h2><?php the_title(); ?></h2>
      <?php the_content(); ?>
    </div>
    <?php endwhile; ?>
  </section>
</main>
<?php get_footer(); ?>
