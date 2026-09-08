<?php
/**
 * The template for displaying all pages
 *
 * @package Kelvin_Cameo
 */

get_header();
?>

  <section class="page-hero hero-about" style="min-height: 40vh; padding: 5rem 0 3rem;">
    <div class="container">
      <div class="page-hero-inner">
        <h1 class="page-hero-title"><?php the_title(); ?></h1>
      </div>
    </div>
  </section>

  <main class="section-padding" style="background:var(--white);">
    <div class="container" style="max-width: 900px; line-height: 1.8; color: var(--slate-700);">
      <?php
      while ( have_posts() ) :
          the_post();
          the_content();
      endwhile;
      ?>
    </div>
  </main>

<?php
get_footer();
