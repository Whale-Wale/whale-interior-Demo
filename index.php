<?php
/**
 * Front Page Template - Whale Interior
 *
 * @package Whale_Interior
 * @version 1.0.0
 */

get_header();
?>

  <main>
    <!-- Hero Cinematic Section (Editorial Typography Sōl Haus Style) -->
    <section class="hero" id="hero">
      <div class="hero-slider">
        <div class="hero-slide active">
          <img src="https://images.unsplash.com/photo-1600210492486-724fe5c67fb0?auto=format&fit=crop&w=1920&q=80" alt="Whale Interior Luxury Living Room">
        </div>
        <div class="hero-slide">
          <img src="https://images.unsplash.com/photo-1618221195710-dd6b41faaea6?auto=format&fit=crop&w=1920&q=80" alt="Modern Ocean Organic Interior">
        </div>
        <div class="hero-slide">
          <img src="https://images.unsplash.com/photo-1600607687939-ce8a6c25118c?auto=format&fit=crop&w=1920&q=80" alt="Penthouse Contemporary Stair & Living">
        </div>
        <div class="hero-slide">
          <img src="https://images.unsplash.com/photo-1616486338812-3dadae4b4ace?auto=format&fit=crop&w=1920&q=80" alt="Luxury Master Suite Minimal Wood">
        </div>
      </div>
      <div class="hero-overlay"></div>

      <div class="hero-content">
        <span class="hero-badge reveal">KIẾN TRÚC & NỘI THẤT HỮU CƠ ĐẲNG CẤP</span>
        <h1 class="hero-title reveal stagger-1">
          VẬT LIỆU. <span class="italic-serif">Tĩnh Tại.</span> KHÔNG GIAN.
        </h1>
        <p class="hero-desc reveal stagger-2">Whale Interior là boutique studio kiến tạo những không gian sống giàu chiều sâu cảm xúc, ngập tràn ánh sáng tự nhiên và chất liệu mộc bản sắc — nơi nghệ thuật đại dương hòa quyện cùng công năng sống thượng lưu.</p>
        
        <div class="hero-actions reveal stagger-3">
          <a href="#roomExplorer" class="btn-primary">
            <span>TRẢI NGHIỆM PHÒNG TƯƠNG TÁC</span>
            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="7" y1="17" x2="17" y2="7"/><polyline points="7 7 17 7 17 17"/></svg>
          </a>
          <button class="btn-secondary open-consult-modal">
            <span>NHẬN BÁO GIÁ XƯỞNG</span>
          </button>
        </div>

        <div class="hero-tags reveal stagger-4">
          <div class="hero-tag-item"><span>✦</span> Kiến Trúc Ven Biển</div>
          <div class="hero-tag-item"><span>✦</span> Xưởng Mộc Whale Craft</div>
          <div class="hero-tag-item"><span>✦</span> Chuẩn Xác 98% Bản Vẽ 3D</div>
          <div class="hero-tag-item"><span>✦</span> Bảo Hành 5 Năm</div>
        </div>
      </div>
    </section>

    <!-- Wave Divider -->
    <div class="wave-divider">
      <svg viewBox="0 0 1200 120" preserveAspectRatio="none">
        <path d="M0,0 C150,90 350,-40 500,45 C650,130 900,10 1200,50 L1200,120 L0,120 Z" class="shape-fill"></path>
      </svg>
    </div>

    <!-- Animated Metrics Strip -->
    <div class="container">
      <div class="metrics-strip reveal">
        <div class="metrics-grid">
          <div class="metric-item">
            <div class="metric-num" data-target="12" data-suffix="+">0<span>+</span></div>
            <div class="metric-label">Năm Kiến Tạo & Đồng Hành</div>
          </div>
          <div class="metric-item">
            <div class="metric-num" data-target="350" data-suffix="+">0<span>+</span></div>
            <div class="metric-label">Công Trình Bàn Giao Hoàn Hảo</div>
          </div>
          <div class="metric-item">
            <div class="metric-num" data-target="1500" data-suffix="m²">0<span>m²</span></div>
            <div class="metric-label">Xưởng Sản Xuất Whale Craft</div>
          </div>
          <div class="metric-item">
            <div class="metric-num" data-target="100" data-suffix="%">0<span>%</span></div>
            <div class="metric-label">Cam Kết Tiến Độ Hợp Đồng</div>
          </div>
        </div>
      </div>
    </div>

    <!-- Infinite Marquee Ticker (Editorial Brand Statement) -->
    <div class="marquee-container">
      <div class="marquee-track">
        <div class="marquee-item">WHALE INTERIOR <span class="marquee-dot">✦</span></div>
        <div class="marquee-item">ORGANIC ARCHITECTURE <span class="marquee-dot">✦</span></div>
        <div class="marquee-item">TĨNH LẶNG BIỂN SÂU <span class="marquee-dot">✦</span></div>
        <div class="marquee-item">XƯỞNG CHẾ TÁC 1.500M² <span class="marquee-dot">✦</span></div>
        <div class="marquee-item">DESIGN WITH INTENTION <span class="marquee-dot">✦</span></div>
        <div class="marquee-item">CHUẨN XÁC 98% BẢN VẼ <span class="marquee-dot">✦</span></div>
        <!-- Duplicated for seamless loop -->
        <div class="marquee-item">WHALE INTERIOR <span class="marquee-dot">✦</span></div>
        <div class="marquee-item">ORGANIC ARCHITECTURE <span class="marquee-dot">✦</span></div>
        <div class="marquee-item">TĨNH LẶNG BIỂN SÂU <span class="marquee-dot">✦</span></div>
        <div class="marquee-item">XƯỞNG CHẾ TÁC 1.500M² <span class="marquee-dot">✦</span></div>
        <div class="marquee-item">DESIGN WITH INTENTION <span class="marquee-dot">✦</span></div>
        <div class="marquee-item">CHUẨN XÁC 98% BẢN VẼ <span class="marquee-dot">✦</span></div>
      </div>
    </div>

    <!-- =======================================================================
         INTERACTIVE ROOM EXPLORER & SHOPPABLE HOTSPOTS (INSPIRATION: ROOMSKETCH)
         ======================================================================= -->
    <section class="room-explorer-section" id="roomExplorer">
      <div class="container">
        <div class="text-center reveal">
          <span class="section-label">TRẢI NGHIỆM KHÔNG GIAN TƯƠNG TÁC</span>
          <h2 class="section-title">Whale Sanctuary — Chạm & Khám Phá</h2>
          <p class="section-desc">Rê chuột hoặc chạm vào các điểm ghim tròn để khám phá chi tiết từng món đồ nội thất độc bản được chế tác tại xưởng Whale Craft trong không gian thực tế.</p>
        </div>

        <div class="room-stage-wrap reveal-scale">
          <!-- Room Canvas Image -->
          <img src="https://images.unsplash.com/photo-1600210492486-724fe5c67fb0?auto=format&fit=crop&w=1600&q=80" alt="Interactive Living Room" id="roomExplorerImg" class="room-canvas-img">

          <!-- Hotspot 1: Armchair (Bottom Left) -->
          <div class="hotspot" style="top: 68%; left: 24%;">
            <div class="hotspot-dot">
              <div class="hotspot-dot-inner"></div>
            </div>
            <div class="hotspot-card">
              <img src="https://images.unsplash.com/photo-1567538096630-e0c55bd6374c?auto=format&fit=crop&w=500&q=80" class="hotspot-card-thumb" alt="Whale Organic Armchair">
              <div class="hotspot-card-badge">GHẾ THƯ GIÃN</div>
              <h4 class="hotspot-card-title">Whale Organic Armchair</h4>
              <div class="hotspot-card-material">Gỗ sồi trắng Bắc Mỹ, nỉ Bỉ cao cấp</div>
              <div class="hotspot-card-footer">
                <span class="hotspot-card-price">14.500.000 đ</span>
                <button class="btn-hotspot-add">+ Thêm vào giỏ</button>
              </div>
            </div>
          </div>

          <!-- Hotspot 2: Marble Coffee Table (Center) -->
          <div class="hotspot" style="top: 76%; left: 52%;">
            <div class="hotspot-dot">
              <div class="hotspot-dot-inner"></div>
            </div>
            <div class="hotspot-card">
              <img src="https://images.unsplash.com/photo-1533090161767-e6ffed986c88?auto=format&fit=crop&w=500&q=80" class="hotspot-card-thumb" alt="Ocean Ripple Table">
              <div class="hotspot-card-badge">BÀN TRÀ TRUNG TÂM</div>
              <h4 class="hotspot-card-title">Ocean Ripple Table</h4>
              <div class="hotspot-card-material">Mặt đá Marble Ý & Khung đồng thau xước</div>
              <div class="hotspot-card-footer">
                <span class="hotspot-card-price">18.900.000 đ</span>
                <button class="btn-hotspot-add">+ Thêm vào giỏ</button>
              </div>
            </div>
          </div>

          <!-- Hotspot 3: Sofa Curve (Right Center) -->
          <div class="hotspot" style="top: 64%; left: 74%;">
            <div class="hotspot-dot">
              <div class="hotspot-dot-inner"></div>
            </div>
            <div class="hotspot-card">
              <img src="https://images.unsplash.com/photo-1617806118233-18e1de247200?auto=format&fit=crop&w=500&q=80" class="hotspot-card-thumb" alt="Whale Curve Sofa">
              <div class="hotspot-card-badge">SOFA PHÒNG KHÁCH</div>
              <h4 class="hotspot-card-title">Whale Curve 3-Seater</h4>
              <div class="hotspot-card-material">Khung sồi Nga, đệm lông vũ mềm mại</div>
              <div class="hotspot-card-footer">
                <span class="hotspot-card-price">42.500.000 đ</span>
                <button class="btn-hotspot-add">+ Thêm vào giỏ</button>
              </div>
            </div>
          </div>

          <!-- Hotspot 4: Brass Floor Lamp (Right Top) -->
          <div class="hotspot" style="top: 38%; left: 82%;">
            <div class="hotspot-dot">
              <div class="hotspot-dot-inner"></div>
            </div>
            <div class="hotspot-card">
              <img src="https://images.unsplash.com/photo-1507473885765-e6ed057f782c?auto=format&fit=crop&w=500&q=80" class="hotspot-card-thumb" alt="Nautilus Brass Lamp">
              <div class="hotspot-card-badge">ĐÈN THIẾT KẾ</div>
              <h4 class="hotspot-card-title">Nautilus Brass Floor Lamp</h4>
              <div class="hotspot-card-material">Đồng thau đúc thủ công & Chao vải linen</div>
              <div class="hotspot-card-footer">
                <span class="hotspot-card-price">9.500.000 đ</span>
                <button class="btn-hotspot-add">+ Thêm vào giỏ</button>
              </div>
            </div>
          </div>

          <!-- Hotspot 5: Fluted Console (Center Wall) -->
          <div class="hotspot" style="top: 45%; left: 42%;">
            <div class="hotspot-dot">
              <div class="hotspot-dot-inner"></div>
            </div>
            <div class="hotspot-card">
              <img src="https://images.unsplash.com/photo-1595428774223-ef52624120d2?auto=format&fit=crop&w=500&q=80" class="hotspot-card-thumb" alt="Fluted Wave Credenza">
              <div class="hotspot-card-badge">TỦ KỆ VÁCH ỐP</div>
              <h4 class="hotspot-card-title">Fluted Wave Console</h4>
              <div class="hotspot-card-material">Gỗ sồi uốn cong CNC phay sọc nước</div>
              <div class="hotspot-card-footer">
                <span class="hotspot-card-price">22.800.000 đ</span>
                <button class="btn-hotspot-add">+ Thêm vào giỏ</button>
              </div>
            </div>
          </div>

          <!-- Floating Bar inside Explorer -->
          <div class="room-explorer-bar">
            <div class="room-bar-cart" id="roomCartTrigger">
              <span>🛒</span> Giỏ đồ tương tác: <strong id="roomCartTotal" style="color:var(--accent-gold-light);">0 đ</strong>
            </div>
            <button class="btn-room-compare" id="btnRoomToggleCompare">
              <span>⚖️</span> SO SÁNH HIỆN TRẠNG / 3D
            </button>
          </div>
        </div>
      </div>
    </section>

    <!-- =======================================================================
         EDITORIAL PORTFOLIO CAROUSEL (INSPIRATION: SŌL HAUS "IMPRESSIONS THAT ENDURE")
         ======================================================================= -->
    <section class="portfolio-editorial-section" id="projects">
      <div class="container">
        <div class="text-center reveal" style="margin-bottom: 50px;">
          <span class="section-label">BỘ SƯU TẬP TUYỂN CHỌN</span>
          <h2 class="section-title">Công Trình Vượt Chuẩn Mực Thời Gian</h2>
          <p class="section-desc">Mỗi công trình là một tác phẩm dung hòa giữa cấu trúc hình khối, ánh sáng khuếch tán và vật liệu bản địa bền vững.</p>
        </div>

        <div class="editorial-slider-wrap reveal-scale">
          <div class="editorial-slide-image-col">
            <img src="https://images.unsplash.com/photo-1600585154340-be6161a56a0c?auto=format&fit=crop&w=1000&q=80" alt="Villa Ocean Horizon" id="editorialSlideImg" class="editorial-slide-img">
          </div>

          <div class="editorial-slide-info">
            <div class="editorial-slide-meta">
              <span id="editorialSlideLoc" style="color:var(--accent-gold); font-weight:700;">NHA TRANG · KHÁNH HÒA</span>
              <span id="editorialSlideNum" style="font-family:var(--font-serif); font-size:1.1rem; color:var(--primary); font-weight:700;">01 / 04</span>
            </div>

            <h3 class="editorial-slide-title" id="editorialSlideTitle">VILLA OCEAN HORIZON</h3>
            <p class="editorial-slide-desc" id="editorialSlideDesc">Đường nét hữu cơ bionic mềm mại lấy cảm hứng từ đại dương, kết hợp hoàn mỹ giữa gỗ Óc chó FAS Bắc Mỹ và đá cẩm thạch trắng Hy Lạp. Không gian mở ngập tràn ánh nắng và gió biển tự nhiên.</p>

            <div class="material-swatches-box">
              <div class="material-swatches-label">BẢNG VẬT LIỆU ĐẶC TRƯNG</div>
              <div class="material-swatches-text" id="editorialSlideMaterials">Gỗ Óc Chó FAS, Đá Quartz Calacatta, Vải Lanh Bỉ Tự Nhiên & Kính Tràn Viền</div>
            </div>

            <div class="editorial-slider-nav">
              <a href="<?php echo esc_url(whale_page_url('du-an')); ?>" class="service-link">XEM CHI TIẾT DỰ ÁN →</a>
              <div class="slider-nav-btns">
                <button class="btn-slider-arrow" id="btnEditorialPrev" title="Công trình trước">←</button>
                <button class="btn-slider-arrow" id="btnEditorialNext" title="Công trình tiếp theo">→</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- =======================================================================
         DARK WOOD SERVICES MATRIX (INSPIRATION: SŌL HAUS "DESIGN THAT RESONATES")
         ======================================================================= -->
    <section class="services-dark-section">
      <div class="container">
        <div class="services-dark-grid">
          <div class="reveal-left">
            <span class="section-label" style="color:var(--accent-gold-light);">DỊCH VỤ TOÀN DIỆN</span>
            <h2 class="section-title text-white">
              Thiết Kế Chạm Vào Cảm Xúc.
            </h2>
            <p class="section-desc text-light">
              Chúng tôi mang đến giải pháp trọn vẹn hơn một bản vẽ thông thường — một quy trình khép kín từ ý niệm kiến trúc, sản xuất đồ gỗ tại xưởng độc quyền cho tới nghệ thuật bài trí không gian.
            </p>
            <button class="btn-primary open-consult-modal">
              <span>ĐẶT LỊCH TƯ VẤN CÙNG KTS</span>
              <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="9 18 15 12 9 6"/></svg>
            </button>
          </div>

          <div class="services-matrix reveal-right">
            <!-- 01 -->
            <div class="service-matrix-card">
              <div class="service-card-num">01 / ARCHITECTURE</div>
              <img src="https://images.unsplash.com/photo-1600607687939-ce8a6c25118c?auto=format&fit=crop&w=500&q=80" class="service-card-thumb" alt="Thiết kế kiến trúc">
              <h4 class="service-card-title">Thiết Kế Không Gian</h4>
              <p class="service-card-desc">Bản vẽ 2D/3D giàu chất nghệ thuật, bám sát lối sống và vi khí hậu nhiệt đới.</p>
            </div>

            <!-- 02 -->
            <div class="service-matrix-card">
              <div class="service-card-num">02 / CRAFTSMANSHIP</div>
              <img src="https://images.unsplash.com/photo-1540575467063-178a50c2df87?auto=format&fit=crop&w=500&q=80" class="service-card-thumb" alt="Xưởng Whale Craft">
              <h4 class="service-card-title">Xưởng Whale Craft</h4>
              <p class="service-card-desc">Quy mô 1.500m², máy CNC Đức 5 trục, gỗ tự nhiên sấy chuẩn 8–12%.</p>
            </div>

            <!-- 03 -->
            <div class="service-matrix-card">
              <div class="service-card-num">03 / SUPERVISION</div>
              <img src="https://images.unsplash.com/photo-1581092160607-ee22621dd758?auto=format&fit=crop&w=500&q=80" class="service-card-thumb" alt="Thi công xây dựng">
              <h4 class="service-card-title">Thi Công Trọn Gói</h4>
              <p class="service-card-desc">Kỹ sư trưởng giám sát hiện trường 24/7, cam kết tiến độ có điều khoản phạt rõ ràng.</p>
            </div>

            <!-- 04 -->
            <div class="service-matrix-card">
              <div class="service-card-num">04 / STYLING</div>
              <img src="https://images.unsplash.com/photo-1507473885765-e6ed057f782c?auto=format&fit=crop&w=500&q=80" class="service-card-thumb" alt="Bài trí nội thất">
              <h4 class="service-card-title">Bài Trí & Nghệ Thuật</h4>
              <p class="service-card-desc">Tạo lập ánh sáng 3 lớp layering, lựa chọn phụ kiện đồng thau và tác phẩm decor thủ công.</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Before & After Interactive Comparison Slider -->
    <section class="before-after-section">
      <svg class="whale-watermark" viewBox="0 0 64 40" fill="currentColor">
        <path d="M32 20C26 8 10 2 0 0C6 14 16 26 28 32C30 33 34 33 36 32C48 26 58 14 64 0C54 2 38 8 32 20Z"/>
      </svg>

      <div class="container">
        <div class="text-center reveal">
          <span class="section-label">CHẤT LƯỢNG THỰC TẾ ĐỘT PHÁ</span>
          <h2 class="section-title">Từ Bản Vẽ 3D Đến Hiện Thực Bàn Giao</h2>
          <p class="section-desc">Kéo thanh trượt để so sánh trực quan giữa bản vẽ thiết kế 3D và không gian hoàn thiện thực tế tại công trình Villa Ocean Horizon (Đạt độ chuẩn xác trên 98%).</p>
        </div>

        <div class="before-after-card reveal-scale">
          <!-- After (Actual Construction) -->
          <img src="https://images.unsplash.com/photo-1600210492486-724fe5c67fb0?auto=format&fit=crop&w=1200&q=80" alt="Thực tế bàn giao" class="ba-image">
          <span class="ba-badge ba-badge-after">THỰC TẾ BÀN GIAO</span>

          <!-- Before (3D Render) -->
          <div class="ba-before">
            <img src="https://images.unsplash.com/photo-1618221195710-dd6b41faaea6?auto=format&fit=crop&w=1200&q=80" alt="Phối cảnh 3D">
            <span class="ba-badge ba-badge-before">BẢN VẼ PHỐI CẢNH 3D</span>
          </div>

          <!-- Handle -->
          <div class="ba-slider-handle">↔</div>
        </div>
      </div>
    </section>

    <!-- Philosophy & Difference Section -->
    <section class="philosophy-section">
      <div class="container">
        <div class="philosophy-grid">
          <div class="philosophy-images reveal-left">
            <div class="philosophy-img-main">
              <img src="https://images.unsplash.com/photo-1616046229478-9901c5536a45?auto=format&fit=crop&w=900&q=80" alt="Whale Craft Woodworking Workshop">
            </div>
            <div class="philosophy-badge-card">
              <div class="badge-card-icon">⚓</div>
              <div class="badge-card-title">Xưởng Whale Craft</div>
              <div class="badge-card-desc">Chủ động 100% công nghệ sản xuất CNC & mộc thủ công, tiết kiệm 25–35% chi phí trung gian.</div>
            </div>
          </div>

          <div class="philosophy-content reveal-right">
            <span class="section-label">TRIẾT LÝ SÁNG TẠO</span>
            <h2 class="section-title">Vẻ đẹp đến từ sự tĩnh tại và chuẩn xác tuyệt đối.</h2>
            <p class="section-desc">Khác biệt với những đơn vị chỉ dừng lại ở bản vẽ phối cảnh 3D, <strong>Whale Interior</strong> khởi nguồn từ lòng say mê chất liệu tự nhiên và xưởng sản xuất cơ khí - mộc mỹ nghệ Whale Craft. Chúng tôi tin rằng không gian sống hoàn hảo phải có sự đối thoại nhịp nhàng giữa thẩm mỹ kiến trúc phóng khoáng như đại dương và độ bền bỉ trường tồn cùng năm tháng.</p>
            
            <div class="features-list">
              <div class="feature-box">
                <div class="feature-icon-circle">01</div>
                <div>
                  <h4>Tự sản xuất tại xưởng</h4>
                  <p>Kiểm soát từng khối gỗ óc chó, sồi Mỹ, đá thạch anh tự nhiên không qua trung gian.</p>
                </div>
              </div>
              <div class="feature-box">
                <div class="feature-icon-circle">02</div>
                <div>
                  <h4>Bản vẽ chi tiết 1:1</h4>
                  <p>Thi công thực tế chuẩn xác tới từng milimet, sắc sảo từ góc vát đến đường sơn phủ.</p>
                </div>
              </div>
              <div class="feature-box">
                <div class="feature-icon-circle">03</div>
                <div>
                  <h4>Minh bạch tài chính</h4>
                  <p>Bóc tách dự toán rõ ràng, cam kết không phát sinh bất kỳ chi phí ngoài hợp đồng.</p>
                </div>
              </div>
              <div class="feature-box">
                <div class="feature-icon-circle">04</div>
                <div>
                  <h4>Bảo hành 5 năm</h4>
                  <p>Đội ngũ bảo trì định kỳ tận tâm, đồng hành trọn đời cùng tổ ấm của quý khách.</p>
                </div>
              </div>
            </div>

            <a href="<?php echo esc_url(whale_page_url('ve-chung-toi')); ?>" class="btn-primary">
              <span>TÌM HIỂU VỀ XƯỞNG & ĐỘI NGŨ</span>
              <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="9 18 15 12 9 6"/></svg>
            </a>
          </div>
        </div>
      </div>
    </section>

    <!-- Interactive Cost Calculator -->
    <section class="calculator-section" id="du-toan">
      <div class="container">
        <div class="text-center reveal" style="margin-bottom: 40px;">
          <span class="section-label" style="color:var(--accent-gold-light);">DỰ TOÁN TRỰC TUYẾN</span>
          <h2 class="section-title text-white">Tính Nhanh Ngân Sách Dự Kiến</h2>
          <p class="section-desc text-light">Công cụ minh bạch giúp gia chủ lập kế hoạch tài chính chính xác trước khi khởi công.</p>
        </div>

        <div class="calculator-box reveal-scale">
          <div class="calculator-grid">
            <div class="calc-inputs">
              <div class="calc-form-group">
                <label class="calc-label">1. Diện tích sàn cần thi công (m²):</label>
                <input type="number" id="calcArea" class="calc-input" value="120" min="20" max="2000">
              </div>

              <div class="calc-form-group">
                <label class="calc-label">2. Loại hình không gian:</label>
                <select id="calcType" class="calc-select">
                  <option value="2500000">Căn hộ chung cư cao cấp (2.5tr/m²)</option>
                  <option value="3200000" selected>Nhà phố hiện đại (3.2tr/m²)</option>
                  <option value="4500000">Biệt thự đơn lập / Song lập (4.5tr/m²)</option>
                  <option value="5800000">Penthouse / Villa View Biển (5.8tr/m²)</option>
                </select>
              </div>

              <div class="calc-form-group">
                <label class="calc-label">3. Gói vật liệu nội thất:</label>
                <select id="calcPackage" class="calc-select">
                  <option value="1.0">Tiêu chuẩn: MDF chống ẩm An Cường cao cấp</option>
                  <option value="1.35" selected>Cao cấp: Gỗ Sồi tự nhiên kết hợp đá Quartz</option>
                  <option value="1.8">Thượng hạng: 100% Gỗ Óc Chó Bắc Mỹ & Da Bò Ý</option>
                </select>
              </div>

              <button id="btnCalculate" class="btn-primary" style="width:100%; justify-content:center; margin-top:10px;">
                CẬP NHẬT DỰ TOÁN NGAY
              </button>
            </div>

            <div class="calc-result-col">
              <div class="calc-result-card">
                <div class="calc-result-title">CHI PHÍ NỘI THẤT ƯỚC TÍNH</div>
                <div class="calc-result-val" id="calcResultValue">518 <span>Triệu VNĐ</span></div>
                <p class="calc-result-note">* Đã bao gồm trọn gói: Thiết kế 3D, sản xuất trực tiếp tại xưởng Whale Craft, vận chuyển & lắp đặt hoàn thiện không phát sinh.</p>
                <button class="btn-primary open-consult-modal" style="width:100%; justify-content:center;">
                  NHẬN BẢNG BÓC TÁCH CHI TIẾT
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Knowledge / Blog Section -->
    <section class="blog-section">
      <div class="container">
        <div class="text-center reveal">
          <span class="section-label">CẨM NANG & KINH NGHIỆM</span>
          <h2 class="section-title">Kiến Thức Xây Dựng & Xu Hướng Nội Thất</h2>
          <p class="section-desc">Tổng hợp những đúc kết thực chiến hơn 12 năm từ các kiến trúc sư trưởng Whale Interior.</p>
        </div>

        <div class="blog-grid">
          <div class="blog-card reveal stagger-1">
            <div class="blog-thumb">
              <img src="https://images.unsplash.com/photo-1618221195710-dd6b41faaea6?auto=format&fit=crop&w=700&q=80" alt="Ocean Organic Design Trend">
              <span class="blog-cat-badge">XU HƯỚNG 2026</span>
            </div>
            <div class="blog-body">
              <div class="blog-meta">5 phút đọc · 15.06.2026</div>
              <h3 class="blog-title">Xu hướng nội thất Organic Coastal: Khi đại dương thổi hồn vào không gian</h3>
              <p class="blog-excerpt">Vì sao những đường nét cong mềm mại và bảng màu trầm ấm tự nhiên đang chinh phục giới tinh hoa biệt thự biển.</p>
              <a href="<?php echo esc_url(whale_page_url('kien-thuc')); ?>" class="blog-readmore">Đọc bài viết →</a>
            </div>
          </div>

          <div class="blog-card reveal stagger-2">
            <div class="blog-thumb">
              <img src="https://images.unsplash.com/photo-1586023492125-27b2c045efd7?auto=format&fit=crop&w=700&q=80" alt="Material Selection">
              <span class="blog-cat-badge">VẬT LIỆU CAO CẤP</span>
            </div>
            <div class="blog-body">
              <div class="blog-meta">7 phút đọc · 08.06.2026</div>
              <h3 class="blog-title">Gỗ óc chó Bắc Mỹ và gỗ sồi: Lựa chọn nào tối ưu cho khí hậu ven biển?</h3>
              <p class="blog-excerpt">Phân tích khả năng chịu ẩm, độ co ngót và phương pháp xử lý sấy tẩm công nghệ cao tại xưởng Whale Craft.</p>
              <a href="<?php echo esc_url(whale_page_url('kien-thuc')); ?>" class="blog-readmore">Đọc bài viết →</a>
            </div>
          </div>

          <div class="blog-card reveal stagger-3">
            <div class="blog-thumb">
              <img src="https://images.unsplash.com/photo-1600585154526-990dced4db0d?auto=format&fit=crop&w=700&q=80" alt="Budget Planning Guide">
              <span class="blog-cat-badge">KINH NGHIỆM</span>
            </div>
            <div class="blog-body">
              <div class="blog-meta">6 phút đọc · 28.05.2026</div>
              <h3 class="blog-title">7 sai lầm thường gặp khiến chi phí thi công nội thất bị đội lên 40%</h3>
              <p class="blog-excerpt">Bài học kinh nghiệm từ khâu chọn nhà thầu không có xưởng đến thiếu sót trong hợp đồng bóc tách vật tư.</p>
              <a href="<?php echo esc_url(whale_page_url('kien-thuc')); ?>" class="blog-readmore">Đọc bài viết →</a>
            </div>
          </div>
        </div>

        <div class="text-center reveal" style="margin-top: 40px;">
          <a href="<?php echo esc_url(whale_page_url('kien-thuc')); ?>" class="btn-primary">
            <span>XEM TẤT CẢ BÀI VIẾT</span>
          </a>
        </div>
      </div>
    </section>

    <!-- Call to Action Banner -->
    <section class="cta-banner">
      <div class="container cta-banner-content reveal">
        <h2>Sẵn Sàng Tạo Nên Không Gian Sống Vượt Thời Gian?</h2>
        <p>Đội ngũ Kiến trúc sư Whale Interior luôn sẵn sàng lắng nghe câu chuyện và hiện thực hóa ngôi nhà trong mơ của bạn.</p>
        <div style="display:flex; justify-content:center; gap:16px; flex-wrap:wrap;">
          <button class="btn-primary open-consult-modal">
            ĐẶT LỊCH TƯ VẤN NGAY
          </button>
          <a href="tel:0988223344" class="btn-secondary">
            GỌI HOTLINE: 0988 223 344
          </a>
        </div>
      </div>
    </section>
  </main>

<?php
get_footer();
