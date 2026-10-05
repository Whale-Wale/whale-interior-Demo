<?php
/**
 * The template for displaying all regular pages
 *
 * @package Whale_Interior
 * @version 1.0.0
 */

get_header();
?>

<main style="padding: 100px 0 60px; min-height: 70vh;">
  <div class="container" style="max-width: 900px;">
    <?php
    while (have_posts()) :
        the_post();
    ?>
      <article id="page-<?php the_ID(); ?>" <?php post_class(); ?>>
        <header class="entry-header" style="margin-bottom: 30px; text-align: center;">
          <h1 class="entry-title" style="font-family: var(--font-serif); font-size: clamp(2rem, 3.5vw, 2.8rem); color: var(--primary);">
            <?php the_title(); ?>
          </h1>
        </header>

        <div class="entry-content" style="font-size: 1.05rem; line-height: 1.8; color: var(--text-main);">
          <?php the_content(); ?>
        </div>
      </article>
    <?php
    endwhile;
    ?>
  </div>
</main>

<?php
get_footer();
