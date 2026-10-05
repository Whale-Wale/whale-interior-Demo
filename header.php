<?php
/**
 * Header template for Whale Interior Theme
 *
 * @package Whale_Interior
 * @version 1.0.0
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

  <!-- Preloader: The Whale Ascent -->
  <div id="preloader">
    <div class="preloader-whale">
      <svg viewBox="0 0 64 40" width="80" height="50" fill="currentColor">
        <path d="M32 20C26 8 10 2 0 0C6 14 16 26 28 32C30 33 34 33 36 32C48 26 58 14 64 0C54 2 38 8 32 20Z"/>
      </svg>
    </div>
    <div class="preloader-brand">WHALE</div>
    <div class="preloader-sub">INTERIOR & ARCHITECTURE</div>
    <div class="preloader-bar-wrap">
      <div class="preloader-bar"></div>
    </div>
  </div>

  <!-- Topbar -->
  <div class="topbar">
    <div class="container">
      <div class="topbar-info">
        <span class="topbar-tag">WHALE CRAFT FACTORY</span>
        <a href="tel:0988223344">
          <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
          0988 223 344
        </a>
        <a href="mailto:contact@whaleinterior.vn">
          <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>
          contact@whaleinterior.vn
        </a>
      </div>
      <div class="topbar-socials">
        <span>Xưởng mộc trực tiếp 1.500m² — Kiểm soát 100% chất lượng từ gốc</span>
      </div>
    </div>
  </div>

  <!-- Site Header -->
  <header class="site-header">
    <div class="container header-wrap">
      <!-- Left Navigation -->
      <nav class="nav-links">
        <a href="<?php echo esc_url(home_url('/')); ?>" class="nav-link <?php echo is_front_page() ? 'active' : ''; ?>">Trang chủ</a>
        <a href="<?php echo esc_url(whale_page_url('ve-chung-toi')); ?>" class="nav-link <?php echo (is_page('ve-chung-toi') || is_page_template('page-ve-chung-toi.php')) ? 'active' : ''; ?>">Giới thiệu & Xưởng</a>
        <a href="<?php echo esc_url(whale_page_url('du-an')); ?>" class="nav-link <?php echo (is_page('du-an') || is_page_template('page-du-an.php')) ? 'active' : ''; ?>">Công trình</a>
      </nav>

      <!-- Center Brand Logo -->
      <a href="<?php echo esc_url(home_url('/')); ?>" class="brand">
        <div class="brand-icon">
          <svg viewBox="0 0 64 40" width="40" height="26" fill="currentColor">
            <path d="M32 20C26 8 10 2 0 0C6 14 16 26 28 32C30 33 34 33 36 32C48 26 58 14 64 0C54 2 38 8 32 20Z"/>
          </svg>
        </div>
        <span class="brand-title">WHALE</span>
        <span class="brand-sub">INTERIOR & ARCHITECTURE</span>
      </a>

      <!-- Right Navigation & Actions -->
      <div class="header-actions">
        <nav class="nav-links">
          <a href="<?php echo esc_url(whale_page_url('shop')); ?>" class="nav-link <?php echo (is_page('shop') || is_page_template('page-shop.php')) ? 'active' : ''; ?>">Shop</a>
          <a href="<?php echo esc_url(whale_page_url('kien-thuc')); ?>" class="nav-link <?php echo (is_page('kien-thuc') || is_page_template('page-kien-thuc.php')) ? 'active' : ''; ?>">Kiến thức</a>
          <a href="<?php echo esc_url(whale_page_url('lien-he')); ?>" class="nav-link <?php echo (is_page('lien-he') || is_page_template('page-lien-he.php')) ? 'active' : ''; ?>">Liên hệ</a>
        </nav>

        <!-- Cart Button -->
        <button class="btn-cart-trigger" id="cartOpenBtn" title="Giỏ hàng">
          <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="9" cy="21" r="1"/><circle cx="20" cy="21" r="1"/><path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"/></svg>
          <span class="cart-badge">0</span>
        </button>

        <!-- Consultation Button -->
        <button class="btn-header-cta open-consult-modal">
          <span>ĐẶT LỊCH HẸN</span>
          <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="7" y1="17" x2="17" y2="7"/><polyline points="7 7 17 7 17 17"/></svg>
        </button>

        <!-- Mobile Toggle -->
        <button class="nav-toggle" aria-label="Menu">
          <span></span><span></span><span></span>
        </button>
      </div>
    </div>
  </header>

  <!-- Mobile Navigation Drawer -->
  <div id="mobileNavOverlay" class="cart-drawer-overlay"></div>
  <div id="mobileNavDrawer" class="cart-drawer">
    <div class="cart-drawer-head">
      <div>
        <h3 style="font-size:1.15rem; margin-bottom:2px; color:var(--primary);">WHALE INTERIOR</h3>
        <p style="font-size:0.7rem; color:var(--accent-gold); letter-spacing:0.12em; text-transform:uppercase;">Kiến trúc & Nội thất hữu cơ</p>
      </div>
      <button class="mobile-nav-close" data-close="mobileNav" style="background:none; border:none; font-size:1.6rem; color:var(--text-main); cursor:pointer; padding:4px;">✕</button>
    </div>
    <div style="padding: 18px 16px; display: flex; flex-direction: column; gap: 8px; flex-grow: 1; overflow-y: auto;">
      <a href="<?php echo esc_url(home_url('/')); ?>" class="mob-drawer-link <?php echo is_front_page() ? 'active' : ''; ?>">
        <span>🏠 Trang chủ</span>
      </a>
      <a href="<?php echo esc_url(whale_page_url('ve-chung-toi')); ?>" class="mob-drawer-link <?php echo (is_page('ve-chung-toi') || is_page_template('page-ve-chung-toi.php')) ? 'active' : ''; ?>">
        <span>⚓ Giới thiệu & Xưởng Whale Craft</span>
      </a>
      <a href="<?php echo esc_url(whale_page_url('du-an')); ?>" class="mob-drawer-link <?php echo (is_page('du-an') || is_page_template('page-du-an.php')) ? 'active' : ''; ?>">
        <span>🏛️ Công trình & Dự án thực tế</span>
      </a>
      <a href="<?php echo esc_url(whale_page_url('shop')); ?>" class="mob-drawer-link <?php echo (is_page('shop') || is_page_template('page-shop.php')) ? 'active' : ''; ?>">
        <span>🛋️ Bộ sưu tập nội thất (Shop)</span>
      </a>
      <a href="<?php echo esc_url(whale_page_url('kien-thuc')); ?>" class="mob-drawer-link <?php echo (is_page('kien-thuc') || is_page_template('page-kien-thuc.php')) ? 'active' : ''; ?>">
        <span>📖 Cẩm nang & Kiến thức</span>
      </a>
      <a href="<?php echo esc_url(whale_page_url('lien-he')); ?>" class="mob-drawer-link <?php echo (is_page('lien-he') || is_page_template('page-lien-he.php')) ? 'active' : ''; ?>">
        <span>📞 Liên hệ & Showroom Nha Trang</span>
      </a>
      <a href="<?php echo esc_url(home_url('/#du-toan')); ?>" class="mob-drawer-link">
        <span>🧮 Dự toán chi phí trực tuyến</span>
      </a>
      <div style="margin-top: 16px; padding: 16px; background: var(--bg-cream); border-radius: var(--radius-md); border: 1px solid var(--border-color);">
        <p style="font-size: 0.8rem; color: var(--text-muted); margin-bottom: 4px;">Hotline tư vấn 24/7:</p>
        <a href="tel:0988223344" style="font-size: 1.2rem; font-weight: 700; color: var(--primary); display: block; margin-bottom: 12px;">0988 223 344</a>
        <button class="btn-primary open-consult-modal mobile-nav-close" style="width: 100%; justify-content: center; padding: 12px 16px; font-size: 0.8rem;">
          ĐẶT LỊCH HẸN KTS (MIỄN PHÍ)
        </button>
      </div>
    </div>
  </div>
