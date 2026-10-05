<?php
/**
 * The template for displaying all single posts
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
      <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <header class="entry-header" style="margin-bottom: 30px; text-align: center;">
          <span class="section-label" style="display:inline-block; margin-bottom:10px;">BÀI VIẾT</span>
          <h1 class="entry-title" style="font-family: var(--font-serif); font-size: clamp(2rem, 3.5vw, 2.8rem); color: var(--primary); line-height: 1.3;">
            <?php the_title(); ?>
          </h1>
          <div class="entry-meta" style="color: var(--text-muted); font-size: 0.9rem; margin-top: 12px;">
            <span>Đăng ngày: <?php echo get_the_date(); ?></span>
            <?php if (has_category()) : ?>
              <span> • Chuyên mục: <?php the_category(', '); ?></span>
            <?php endif; ?>
          </div>
        </header>

        <?php if (has_post_thumbnail()) : ?>
          <div class="entry-thumbnail" style="margin-bottom: 35px; border-radius: var(--radius-md); overflow: hidden; box-shadow: var(--shadow-md);">
            <?php the_post_thumbnail('large', array('style' => 'width:100%; height:auto; display:block;')); ?>
          </div>
        <?php endif; ?>

        <div class="entry-content" style="font-size: 1.1rem; line-height: 1.8; color: var(--text-main);">
          <?php the_content(); ?>
        </div>

        <div class="entry-footer" style="margin-top: 50px; padding-top: 25px; border-top: 1px solid var(--border-color);">
          <a href="<?php echo esc_url(whale_page_url('kien-thuc')); ?>" class="btn-secondary">
            ← Quay lại mục Kiến Thức
          </a>
        </div>
      </article>
    <?php
    endwhile;
    ?>
  </div>
</main>

<?php
get_footer();
