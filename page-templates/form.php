<?php
/*
Template Name: formInscricao
*/
get_header();
?>
<div class="container">
  <div class="row">
    <div class="col-lg-12 text-center">
      <h2 class="section-heading">Formulário</h2>
      <hr class="primary">
    </div>
    <?php
    while ( have_posts() ) : the_post();
    ?>
    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?> >
      <div class="entry-content description clearfix align-center">
        <?php the_content( __( 'Read more', 'arcade') ); ?>
      </div><!-- .entry-content -->
      <?php get_template_part( 'content', 'footer' ); ?>
    </article>
    <?php
  endwhile;
  ?>
</div>
</div>
<?php
get_footer();
?>
