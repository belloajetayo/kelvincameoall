<?php
/**
 * The main template file
 *
 * @package Kelvin_Cameo
 */

get_header();
?>

  <section class="page-hero hero-about" style="min-height: 40vh; padding: 5rem 0 3rem;">
    <div class="container">
      <div class="page-hero-inner">
        <h1 class="page-hero-title"><?php bloginfo( 'name' ); ?></h1>
        <p class="page-hero-desc"><?php bloginfo( 'description' ); ?></p>
      </div>
    </div>
  </section>

  <main class="section-padding" style="background:var(--sand-50);">
    <div class="container" style="max-width: 900px;">
      <?php if ( have_posts() ) : ?>
        <div style="display: flex; flex-direction: column; gap: 2rem;">
          <?php while ( have_posts() ) : the_post(); ?>
            <article style="background: var(--white); padding: 2rem; border-radius: var(--radius-lg); border: 1px solid var(--slate-200);">
              <h2 style="font-family: var(--font-display); font-size: 1.5rem; margin-bottom: 0.75rem;">
                <a href="<?php the_permalink(); ?>" style="color: var(--navy-900); text-decoration: none;"><?php the_title(); ?></a>
              </h2>
              <div style="font-size: 0.85rem; color: var(--slate-500); margin-bottom: 1rem;">
                Posted on <?php echo get_the_date(); ?>
              </div>
              <div style="color: var(--slate-700); line-height: 1.6;">
                <?php the_excerpt(); ?>
              </div>
              <a href="<?php the_permalink(); ?>" class="btn btn-primary btn-sm" style="margin-top: 1rem;">Read More →</a>
            </article>
          <?php endwhile; ?>
        </div>
      <?php else : ?>
        <p style="text-align: center; color: var(--slate-600);">No posts found.</p>
      <?php endif; ?>
    </div>
  </main>

<?php
get_footer();
