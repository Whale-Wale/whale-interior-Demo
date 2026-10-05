<?php
/**
 * Template Name: Dự án & Công trình
 *
 * @package Whale_Interior
 * @version 1.0.0
 */

get_header();
?>

  <main>
    <!-- Banner -->
    <section style="background:radial-gradient(circle at center, #102747 0%, var(--primary-deep) 100%); color:#fff; padding:90px 0 70px; text-align:center;">
      <div class="container" style="max-width:850px;">
        <span class="section-label reveal" style="color:var(--accent-gold-light);">BỘ SƯU TẬP DỰ ÁN</span>
        <h1 class="hero-title reveal stagger-1" style="font-size:clamp(2.2rem, 4vw, 3.4rem); margin-bottom:18px;">
          Những Công Trình Tiêu Biểu
        </h1>
        <p class="reveal stagger-2" style="color:#cbd5e1; font-size:1.15rem; line-height:1.8;">
          Mỗi không gian là một tác phẩm được "may đo" riêng cho từng nếp sống, kết hợp giữa nghệ thuật kiến trúc đương đại và kỹ nghệ chế tác gỗ đỉnh cao.
        </p>
      </div>
    </section>

    <!-- Projects Section with Filter -->
    <section class="projects-section" style="padding:70px 0 110px;">
      <div class="container">
        <!-- Filter Tabs -->
        <div class="filter-nav reveal">
          <button class="filter-btn active" data-filter="all">TẤT CẢ DỰ ÁN (9)</button>
          <button class="filter-btn" data-filter="villa">BIỆT THỰ BIỂN</button>
          <button class="filter-btn" data-filter="penthouse">PENTHOUSE & DUPLEX</button>
          <button class="filter-btn" data-filter="modern">HIỆN ĐẠI TỐI GIẢN</button>
          <button class="filter-btn" data-filter="neoclassic">TÂN CỔ ĐIỂN LUXURY</button>
        </div>

        <div class="projects-grid">
          <!-- 1 -->
          <div class="project-card reveal stagger-1" data-category="villa">
            <div class="project-thumb">
              <img src="https://images.unsplash.com/photo-1600585154340-be6161a56a0c?auto=format&fit=crop&w=800&q=80" alt="Villa Ocean Horizon">
              <span class="project-badge">VILLA BIỂN</span>
            </div>
            <div class="project-info">
              <div class="project-loc">NHA TRANG · KHÁNH HÒA</div>
              <h3 class="project-name">VILLA OCEAN HORIZON</h3>
              <p class="project-desc">Đường nét uốn lượn lấy cảm hứng từ sóng biển và thân cá voi xanh, kết hợp gỗ Teak tự nhiên chịu mặn và kính tràn viền.</p>
              <div class="project-meta">
                <span>Diện tích: <strong>480m²</strong></span>
                <span>Vật liệu: <strong>Gỗ Óc Chó & Đá Quartz</strong></span>
              </div>
            </div>
          </div>

          <!-- 2 -->
          <div class="project-card reveal stagger-2" data-category="penthouse">
            <div class="project-thumb">
              <img src="https://images.unsplash.com/photo-1600607687920-4e2a09cf159d?auto=format&fit=crop&w=800&q=80" alt="The Marina Pearl Penthouse">
              <span class="project-badge">PENTHOUSE</span>
            </div>
            <div class="project-info">
              <div class="project-loc">ĐÀ NẴNG · VIEW VỊNH BIỂN</div>
              <h3 class="project-name">THE MARINA PEARL PENTHOUSE</h3>
              <p class="project-desc">Không gian thông tầng panorama ngoạn mục nhìn trọn vịnh, tông màu cát biển và đá marble xám khói sang trọng.</p>
              <div class="project-meta">
                <span>Diện tích: <strong>320m²</strong></span>
                <span>Vật liệu: <strong>Gỗ Sồi Trắng & Da Bò Ý</strong></span>
              </div>
            </div>
          </div>

          <!-- 3 -->
          <div class="project-card reveal stagger-3" data-category="modern">
            <div class="project-thumb">
              <img src="https://images.unsplash.com/photo-1600566753376-12c8ab7fb75b?auto=format&fit=crop&w=800&q=80" alt="Whale Serenity Residence">
              <span class="project-badge">NHÀ PHỐ HIỆN ĐẠI</span>
            </div>
            <div class="project-info">
              <div class="project-loc">TP.HCM · THẢO ĐIỀN</div>
              <h3 class="project-name">WHALE SERENITY RESIDENCE</h3>
              <p class="project-desc">Phong cách Japandi kết hợp Organic Modern, tối ưu ánh sáng tự nhiên với giếng trời và tiểu cảnh nước tĩnh tại.</p>
              <div class="project-meta">
                <span>Diện tích: <strong>260m²</strong></span>
                <span>Vật liệu: <strong>Gỗ Ash & Bê Tông Mài</strong></span>
              </div>
            </div>
          </div>

          <!-- 4 -->
          <div class="project-card reveal stagger-1" data-category="neoclassic">
            <div class="project-thumb">
              <img src="https://images.unsplash.com/photo-1618219908412-a29a1bb7b86e?auto=format&fit=crop&w=800&q=80" alt="Dinh Thự Emerald Bay">
              <span class="project-badge">TÂN CỔ ĐIỂN</span>
            </div>
            <div class="project-info">
              <div class="project-loc">BÃI DÀI · CAM RANH</div>
              <h3 class="project-name">DINH THỰ EMERALD BAY</h3>
              <p class="project-desc">Vẻ đẹp tân cổ điển tiết chế nhẹ nhàng, phào chỉ sắc sảo dát kim loại ánh đồng và đồ gỗ óc chó tiện tay tinh xảo.</p>
              <div class="project-meta">
                <span>Diện tích: <strong>650m²</strong></span>
                <span>Vật liệu: <strong>Gỗ Óc Chó & Đồng Thau</strong></span>
              </div>
            </div>
          </div>

          <!-- 5 -->
          <div class="project-card reveal stagger-2" data-category="villa">
            <div class="project-thumb">
              <img src="https://images.unsplash.com/photo-1600573472550-8090b5e0745e?auto=format&fit=crop&w=800&q=80" alt="Cliffside Breeze Retreat">
              <span class="project-badge">RESORT VILLA</span>
            </div>
            <div class="project-info">
              <div class="project-loc">QUY NHƠN · BÌNH ĐỊNH</div>
              <h3 class="project-name">CLIFFSIDE BREEZE RETREAT</h3>
              <p class="project-desc">Biệt thự sườn đồi hướng biển, nội thất mộc tự nhiên chịu muối biển và vi khí hậu nhiệt đới gió mùa.</p>
              <div class="project-meta">
                <span>Diện tích: <strong>520m²</strong></span>
                <span>Vật liệu: <strong>Gỗ Căm Xe & Đá Chẻ Tự Nhiên</strong></span>
              </div>
            </div>
          </div>

          <!-- 6 -->
          <div class="project-card reveal stagger-3" data-category="modern">
            <div class="project-thumb">
              <img src="https://images.unsplash.com/photo-1600210492493-0946911123ea?auto=format&fit=crop&w=800&q=80" alt="Whale Master Sanctuary">
              <span class="project-badge">MASTER SUITE</span>
            </div>
            <div class="project-info">
              <div class="project-loc">NHA TRANG · AN VIÊN</div>
              <h3 class="project-name">WHALE MASTER SANCTUARY</h3>
              <p class="project-desc">Không gian phòng ngủ thông phòng thay đồ walk-in closet sang trọng với hệ tủ cánh kính nhôm slim cao cấp.</p>
              <div class="project-meta">
                <span>Diện tích: <strong>95m²</strong></span>
                <span>Vật liệu: <strong>Kính Khói & Da Bò Cao Cấp</strong></span>
              </div>
            </div>
          </div>

          <!-- 7 -->
          <div class="project-card reveal stagger-1" data-category="penthouse">
            <div class="project-thumb">
              <img src="https://images.unsplash.com/photo-1600607687939-ce8a6c25118c?auto=format&fit=crop&w=800&q=80" alt="Gold Coast Sky Villa">
              <span class="project-badge">DUPLEX SKY VILLA</span>
            </div>
            <div class="project-info">
              <div class="project-loc">NHA TRANG · TRẦN PHÚ</div>
              <h3 class="project-name">GOLD COAST SKY VILLA</h3>
              <p class="project-desc">Căn hộ thông tầng với cầu thang xoắn ốc điêu khắc lấy cảm hứng từ đuôi cá voi, hoàn thiện bằng gỗ óc chó nguyên khối.</p>
              <div class="project-meta">
                <span>Diện tích: <strong>280m²</strong></span>
                <span>Vật liệu: <strong>Gỗ Óc Chó Uốn Cong 3D</strong></span>
              </div>
            </div>
          </div>

          <!-- 8 -->
          <div class="project-card reveal stagger-2" data-category="villa">
            <div class="project-thumb">
              <img src="https://images.unsplash.com/photo-1613977257363-707ba9348227?auto=format&fit=crop&w=800&q=80" alt="Sunset Haven Mansion">
              <span class="project-badge">MANSION</span>
            </div>
            <div class="project-info">
              <div class="project-loc">VŨNG TÀU · BÃI TRƯỚC</div>
              <h3 class="project-name">SUNSET HAVEN MANSION</h3>
              <p class="project-desc">Dinh thự hoàng hôn ven biển với phòng khách mở rộng kết nối trực tiếp bể bơi vô cực và quầy bar rượu gỗ sồi âm tường.</p>
              <div class="project-meta">
                <span>Diện tích: <strong>720m²</strong></span>
                <span>Vật liệu: <strong>Đá Granite Tự Nhiên & Gỗ Sồi</strong></span>
              </div>
            </div>
          </div>

          <!-- 9 -->
          <div class="project-card reveal stagger-3" data-category="modern">
            <div class="project-thumb">
              <img src="https://images.unsplash.com/photo-1600585154526-990dced4db0d?auto=format&fit=crop&w=800&q=80" alt="Nordic Calm Living">
              <span class="project-badge">TỐI GIẢN NORDIC</span>
            </div>
            <div class="project-info">
              <div class="project-loc">ĐÀ LẠT · LÂM ĐỒNG</div>
              <h3 class="project-name">PINE FOREST RESIDENCE</h3>
              <p class="project-desc">Không gian nghỉ dưỡng giữa rừng thông, nhấn mạnh sự ấm áp của lò sưởi hơi nước và sàn gỗ tự nhiên cách nhiệt.</p>
              <div class="project-meta">
                <span>Diện tích: <strong>340m²</strong></span>
                <span>Vật liệu: <strong>Gỗ Thông Trắng & Vải Dạ Lông Cừu</strong></span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Consultation Banner -->
    <section class="cta-banner">
      <div class="container cta-banner-content reveal">
        <h2>Bạn Yêu Thích Phong Cách Công Trình Nào?</h2>
        <p>Gặp gỡ Kiến trúc sư trưởng của Whale Interior để cùng phác thảo giải pháp thiết kế riêng biệt cho ngôi nhà của bạn.</p>
        <button class="btn-primary open-consult-modal">
          ĐẶT LỊCH TƯ VẤN NGAY (MIỄN PHÍ)
        </button>
      </div>
    </section>
  </main>

<?php
get_footer();
