<?php
/**
 * Footer template for Whale Interior Theme
 *
 * @package Whale_Interior
 * @version 1.0.0
 */
?>
  <!-- Site Footer -->
  <footer class="site-footer">
    <div class="container">
      <div class="footer-grid">
        <div class="footer-col">
          <div class="brand" style="align-items:flex-start; text-align:left; padding:0; margin-bottom:20px;">
            <span class="brand-title" style="color:#fff;">WHALE</span>
            <span class="brand-sub">INTERIOR & ARCHITECTURE</span>
          </div>
          <p>Thiết kế và thi công nội thất cao cấp cho những không gian sống tinh tế. Tối giản · Phóng khoáng · Tĩnh tại · Trường tồn.</p>
          <p style="font-size:0.85rem; color:var(--text-light);">Sở hữu xưởng sản xuất trực tiếp 1.500m² tại Khánh Hòa & TP.HCM. Không qua trung gian, giá xưởng minh bạch.</p>
        </div>

        <div class="footer-col">
          <h4>ĐIỀU HƯỚNG</h4>
          <ul class="footer-links">
            <li><a href="<?php echo esc_url(home_url('/')); ?>">Trang chủ</a></li>
            <li><a href="<?php echo esc_url(whale_page_url('ve-chung-toi')); ?>">Về chúng tôi & Xưởng</a></li>
            <li><a href="<?php echo esc_url(whale_page_url('du-an')); ?>">Dự án công trình</a></li>
            <li><a href="<?php echo esc_url(whale_page_url('shop')); ?>">Shop đồ nội thất</a></li>
            <li><a href="<?php echo esc_url(whale_page_url('kien-thuc')); ?>">Cẩm nang kiến thức</a></li>
            <li><a href="<?php echo esc_url(whale_page_url('lien-he')); ?>">Liên hệ tư vấn</a></li>
          </ul>
        </div>

        <div class="footer-col">
          <h4>PHONG CÁCH</h4>
          <ul class="footer-links">
            <li><a href="<?php echo esc_url(whale_page_url('du-an')); ?>">Biệt thự ven biển</a></li>
            <li><a href="<?php echo esc_url(whale_page_url('du-an')); ?>">Penthouse & Duplex</a></li>
            <li><a href="<?php echo esc_url(whale_page_url('du-an')); ?>">Organic Contemporary</a></li>
            <li><a href="<?php echo esc_url(whale_page_url('du-an')); ?>">Modern Minimalist</a></li>
            <li><a href="<?php echo esc_url(whale_page_url('du-an')); ?>">Tân cổ điển Luxury</a></li>
          </ul>
        </div>

        <div class="footer-col">
          <h4>LIÊN HỆ TRỰC TIẾP</h4>
          <div class="footer-contact-item">
            <span>📍</span>
            <div>Showroom & Trụ sở: Số 88 Đường Trần Phú, Lộc Thọ, TP. Nha Trang, Khánh Hòa</div>
          </div>
          <div class="footer-contact-item">
            <span>🏭</span>
            <div>Xưởng Whale Craft: Cụm Công Nghiệp Diên Phú, Diên Khánh, Khánh Hòa</div>
          </div>
          <div class="footer-contact-item">
            <span>📞</span>
            <div>Hotline: <strong style="color:#fff;">0988 223 344</strong> (24/7)</div>
          </div>
          <div class="footer-contact-item">
            <span>✉️</span>
            <div>Email: contact@whaleinterior.vn</div>
          </div>
          <div class="footer-contact-item">
            <span>⏰</span>
            <div>Giờ làm việc: 08:00 - 18:30 (Thứ 2 - Thứ 7)</div>
          </div>
        </div>
      </div>

      <div class="footer-bottom">
        <div>© <?php echo date('Y'); ?> WHALE INTERIOR. All rights reserved. Trải nghiệm kiến trúc & nội thất đẳng cấp đại dương.</div>
        <div style="display:flex; gap:20px;">
          <a href="#">Chính sách bảo mật</a>
          <a href="#">Điều khoản dịch vụ</a>
          <a href="#">Chính sách bảo hành 5 năm</a>
        </div>
      </div>
    </div>
  </footer>

  <!-- Floating Contact Buttons & Audio Synthesizer -->
  <div class="floating-contact">
    <button class="float-btn float-audio" id="oceanAudioToggle" title="Bật âm thanh tĩnh lặng đại dương (Whale Soundscape)">
      🌊
    </button>
    <a href="<?php echo esc_url(home_url('/#du-toan')); ?>" class="float-btn float-calc" title="Dự toán chi phí">
      🧮
    </a>
    <a href="https://zalo.me/0988223344" target="_blank" rel="noopener" class="float-btn float-zalo" title="Chat Zalo">
      💬
    </a>
    <a href="tel:0988223344" class="float-btn float-phone" title="Gọi Hotline">
      📞
    </a>
  </div>

  <!-- Cart Drawer -->
  <div class="cart-drawer-overlay" id="cartDrawerOverlay"></div>
  <div class="cart-drawer" id="cartDrawer">
    <div class="cart-drawer-head">
      <h3>Giỏ Hàng Của Bạn</h3>
      <button id="closeCartBtn" style="background:none; border:none; font-size:1.5rem; color:var(--text-main); cursor:pointer;">✕</button>
    </div>
    <div class="cart-items-list" id="cartItemsList"></div>
    <div class="cart-drawer-foot">
      <div class="cart-total-row">
        <span>TỔNG CỘNG:</span>
        <span class="text-gold" id="cartTotalPrice">0 đ</span>
      </div>
      <button class="btn-primary open-consult-modal" style="width:100%; justify-content:center;">
        TIẾN HÀNH ĐẶT HÀNG / TƯ VẤN
      </button>
    </div>
  </div>

  <!-- Consultation Booking Modal -->
  <div class="modal-overlay" id="consultModalOverlay"></div>
  <div class="modal-overlay" id="consultModal">
    <div class="modal-content">
      <button class="modal-close" id="closeConsultModal">✕</button>
      <div style="padding: 40px;">
        <span class="section-label">ĐĂNG KÝ KHẢO SÁT HIỆN TRƯỜNG</span>
        <h3 class="section-title" style="font-size:1.8rem; margin-bottom:12px;">Đặt Lịch Tư Vấn Trực Tiếp Cùng KTS Trưởng</h3>
        <p style="color:var(--text-muted); font-size:0.95rem; margin-bottom:24px;">Miễn phí 100% chi phí khảo sát hiện trạng và phác thảo phương án mặt bằng sơ bộ.</p>

        <form id="consultForm">
          <div class="grid-2-col" style="gap:16px; margin-bottom:16px;">
            <div>
              <label class="calc-label" style="color:var(--text-main);">Họ và tên quý khách *</label>
              <input type="text" class="calc-input" style="color:var(--text-main); border-color:var(--border-color); background:#f8fafc;" placeholder="Nguyễn Văn A" required>
            </div>
            <div>
              <label class="calc-label" style="color:var(--text-main);">Số điện thoại *</label>
              <input type="tel" class="calc-input" style="color:var(--text-main); border-color:var(--border-color); background:#f8fafc;" placeholder="0988 xxx xxx" required>
            </div>
          </div>

          <div class="grid-2-col" style="gap:16px; margin-bottom:16px;">
            <div>
              <label class="calc-label" style="color:var(--text-main);">Loại hình công trình</label>
              <select class="calc-select" style="color:var(--text-main); border-color:var(--border-color); background:#f8fafc;">
                <option>Biệt thự biển / Villa đơn lập</option>
                <option>Penthouse / Căn hộ cao cấp</option>
                <option>Nhà phố / Shophouse</option>
                <option>Khách sạn / Nhà hàng / Cafe</option>
              </select>
            </div>
            <div>
              <label class="calc-label" style="color:var(--text-main);">Địa điểm công trình</label>
              <input type="text" class="calc-input" style="color:var(--text-main); border-color:var(--border-color); background:#f8fafc;" placeholder="Nha Trang, TP.HCM, Đà Nẵng...">
            </div>
          </div>

          <div style="margin-bottom:24px;">
            <label class="calc-label" style="color:var(--text-main);">Ghi chú thêm về mong muốn thiết kế</label>
            <textarea class="calc-input" rows="3" style="color:var(--text-main); border-color:var(--border-color); background:#f8fafc;" placeholder="Phong cách ưa thích, diện tích, thời điểm dự kiến hoàn thiện..."></textarea>
          </div>

          <button type="submit" class="btn-primary" style="width:100%; justify-content:center; padding:16px;">
            GỬI YÊU CẦU TƯ VẤN NGAY (MIỄN PHÍ)
          </button>
        </form>
      </div>
    </div>
  </div>

  <!-- Mobile Bottom App Bar -->
  <nav class="mobile-bottom-nav" id="mobileBottomNav">
    <a href="<?php echo esc_url(home_url('/')); ?>" class="mob-nav-item <?php echo is_front_page() ? 'active' : ''; ?>" data-nav="home">
      <span class="mob-nav-icon">
        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"/><polyline points="9 22 9 12 15 12 15 22"/></svg>
      </span>
      <span>Trang chủ</span>
    </a>
    <a href="<?php echo esc_url(whale_page_url('du-an')); ?>" class="mob-nav-item <?php echo (is_page('du-an') || is_page_template('page-du-an.php')) ? 'active' : ''; ?>" data-nav="projects">
      <span class="mob-nav-icon">
        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="3" width="18" height="18" rx="2"/><circle cx="8.5" cy="8.5" r="1.5"/><polyline points="21 15 16 10 5 21"/></svg>
      </span>
      <span>Dự án</span>
    </a>
    <a href="<?php echo esc_url(home_url('/#roomExplorer')); ?>" class="mob-nav-item highlight" data-nav="room">
      <span class="mob-nav-icon">
        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="11" cy="11" r="8"/><line x1="21" y1="21" x2="16.65" y2="16.65"/></svg>
      </span>
      <span>3D Room</span>
    </a>
    <a href="<?php echo esc_url(whale_page_url('shop')); ?>" class="mob-nav-item <?php echo (is_page('shop') || is_page_template('page-shop.php')) ? 'active' : ''; ?>" data-nav="shop">
      <span class="mob-nav-icon">
        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="9" cy="21" r="1"/><circle cx="20" cy="21" r="1"/><path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"/></svg>
      </span>
      <span>Shop</span>
    </a>
    <button type="button" class="mob-nav-item mob-nav-menu-trigger" data-trigger="mobileNav" title="Menu các trang">
      <span class="mob-nav-icon">
        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="3" y1="12" x2="21" y2="12"/><line x1="3" y1="6" x2="21" y2="6"/><line x1="3" y1="18" x2="21" y2="18"/></svg>
      </span>
      <span>Menu</span>
    </button>
  </nav>

  <!-- Mobile Hotspot Bottom Sheet Modal -->
  <div id="mobileHotspotSheet" class="mobile-hotspot-sheet">
    <div class="mob-hotspot-backdrop" id="mobHotspotBackdrop"></div>
    <div class="mob-hotspot-content">
      <button class="mob-hotspot-close" id="mobHotspotClose" aria-label="Đóng">&times;</button>
      <div class="mob-hotspot-body">
        <img src="" id="mobHotspotImg" class="mob-hotspot-thumb" alt="Product">
        <div class="mob-hotspot-info">
          <div class="mob-hotspot-badge" id="mobHotspotBadge">NỘI THẤT</div>
          <h4 class="mob-hotspot-title" id="mobHotspotTitle">Tên sản phẩm</h4>
          <p class="mob-hotspot-material" id="mobHotspotMaterial">Chất liệu</p>
          <div class="mob-hotspot-footer">
            <span class="mob-hotspot-price" id="mobHotspotPrice">0 đ</span>
            <button class="btn-primary mob-hotspot-btn-add" id="mobHotspotAddBtn">+ Thêm vào giỏ</button>
          </div>
        </div>
      </div>
    </div>
  </div>

  <?php wp_footer(); ?>
</body>
</html>
