<?php
/**
 * Template Name: Liên hệ & Đặt lịch
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
        <span class="section-label reveal" style="color:var(--accent-gold-light);">KẾT NỐI CÙNG KIẾN TRÚC SƯ</span>
        <h1 class="hero-title reveal stagger-1" style="font-size:clamp(2.2rem, 4vw, 3.4rem); margin-bottom:18px;">
          Hãy Bắt Đầu Dự Án Của Bạn Cùng Whale Interior
        </h1>
        <p class="reveal stagger-2" style="color:#cbd5e1; font-size:1.15rem; line-height:1.8;">
          Chúng tôi luôn sẵn sàng lắng nghe ý tưởng, trao đổi giải pháp vật liệu và hiện thực hóa không gian mơ ước của bạn với chất lượng cao nhất.
        </p>
      </div>
    </section>

    <!-- Quick Contact Channels -->
    <section style="padding:60px 0 30px; background:#fff;">
      <div class="container">
        <div class="grid-4-col">
          <a href="tel:0988223344" class="reveal stagger-1" style="background:var(--bg-cream); padding:30px 24px; border-radius:var(--radius-lg); border:1px solid var(--border-color); text-align:center; transition:var(--transition); display:block;">
            <div style="font-size:2.2rem; margin-bottom:10px;">📞</div>
            <div style="font-size:0.8rem; text-transform:uppercase; color:var(--text-muted); font-weight:700;">Gọi trực tiếp</div>
            <strong style="color:var(--primary); font-size:1.2rem; display:block; margin-top:4px;">0988 223 344</strong>
          </a>

          <a href="https://zalo.me/0988223344" target="_blank" class="reveal stagger-2" style="background:var(--bg-cream); padding:30px 24px; border-radius:var(--radius-lg); border:1px solid var(--border-color); text-align:center; transition:var(--transition); display:block;">
            <div style="font-size:2.2rem; margin-bottom:10px;">💬</div>
            <div style="font-size:0.8rem; text-transform:uppercase; color:var(--text-muted); font-weight:700;">Nhắn Zalo 24/7</div>
            <strong style="color:var(--primary); font-size:1.2rem; display:block; margin-top:4px;">0988 223 344</strong>
          </a>

          <a href="mailto:contact@whaleinterior.vn" class="reveal stagger-3" style="background:var(--bg-cream); padding:30px 24px; border-radius:var(--radius-lg); border:1px solid var(--border-color); text-align:center; transition:var(--transition); display:block;">
            <div style="font-size:2.2rem; margin-bottom:10px;">✉️</div>
            <div style="font-size:0.8rem; text-transform:uppercase; color:var(--text-muted); font-weight:700;">Gửi Email</div>
            <strong style="color:var(--primary); font-size:1rem; display:block; margin-top:4px;">contact@whaleinterior.vn</strong>
          </a>

          <div class="reveal stagger-4" style="background:var(--bg-cream); padding:30px 24px; border-radius:var(--radius-lg); border:1px solid var(--border-color); text-align:center;">
            <div style="font-size:2.2rem; margin-bottom:10px;">⏰</div>
            <div style="font-size:0.8rem; text-transform:uppercase; color:var(--text-muted); font-weight:700;">Giờ tiếp khách</div>
            <strong style="color:var(--primary); font-size:1rem; display:block; margin-top:4px;">08:00 - 18:30 (T2–T7)</strong>
          </div>
        </div>
      </div>
    </section>

    <!-- Consultation Form & Office Info -->
    <section style="padding:60px 0 100px; background:#fff;">
      <div class="container">
        <div class="grid-split">
          <!-- Form -->
          <div class="reveal-left" style="background:var(--bg-cream); padding:44px; border-radius:var(--radius-lg); border:1px solid var(--border-color); box-shadow:var(--shadow-sm);">
            <span class="section-label">PHIẾU ĐĂNG KÝ TƯ VẤN</span>
            <h2 class="section-title" style="font-size:1.85rem; margin-bottom:12px;">Đặt Lịch Khảo Sát & Nhận Báo Giá</h2>
            <p style="color:var(--text-muted); font-size:0.95rem; margin-bottom:28px;">Kiến trúc sư trưởng sẽ liên hệ lại quý khách trong vòng 15 phút để trao đổi chi tiết.</p>

            <form id="consultFormFull">
              <div class="grid-2-col" style="margin-bottom:20px;">
                <div>
                  <label class="calc-label" style="color:var(--text-main);">Họ và tên quý khách *</label>
                  <input type="text" class="calc-input" style="color:var(--text-main); background:#fff; border-color:var(--border-color);" placeholder="Nguyễn Văn A" required>
                </div>
                <div>
                  <label class="calc-label" style="color:var(--text-main);">Số điện thoại di động *</label>
                  <input type="tel" class="calc-input" style="color:var(--text-main); background:#fff; border-color:var(--border-color);" placeholder="0988 223 344" required>
                </div>
              </div>

              <div class="grid-2-col" style="margin-bottom:20px;">
                <div>
                  <label class="calc-label" style="color:var(--text-main);">Địa chỉ email</label>
                  <input type="email" class="calc-input" style="color:var(--text-main); background:#fff; border-color:var(--border-color);" placeholder="email@gmail.com">
                </div>
                <div>
                  <label class="calc-label" style="color:var(--text-main);">Loại hình công trình</label>
                  <select class="calc-select" style="color:var(--text-main); background:#fff; border-color:var(--border-color);">
                    <option>Biệt thự biển / Villa đơn lập</option>
                    <option>Penthouse / Căn hộ cao cấp</option>
                    <option>Nhà phố / Shophouse</option>
                    <option>Khách sạn / Resort nghỉ dưỡng</option>
                  </select>
                </div>
              </div>

              <div class="grid-2-col" style="margin-bottom:20px;">
                <div>
                  <label class="calc-label" style="color:var(--text-main);">Diện tích mặt bằng (m²)</label>
                  <input type="number" class="calc-input" style="color:var(--text-main); background:#fff; border-color:var(--border-color);" placeholder="Ví dụ: 180">
                </div>
                <div>
                  <label class="calc-label" style="color:var(--text-main);">Ngân sách dự kiến</label>
                  <select class="calc-select" style="color:var(--text-main); background:#fff; border-color:var(--border-color);">
                    <option>Dưới 500 triệu</option>
                    <option>Từ 500 triệu - 1 tỷ</option>
                    <option>Từ 1 tỷ - 2 tỷ</option>
                    <option>Trên 2 tỷ</option>
                  </select>
                </div>
              </div>

              <div style="margin-bottom:28px;">
                <label class="calc-label" style="color:var(--text-main);">Mô tả chi tiết mong muốn của bạn</label>
                <textarea rows="4" class="calc-input" style="color:var(--text-main); background:#fff; border-color:var(--border-color);" placeholder="Vị trí công trình, phong cách mong muốn, tiến độ cần nhận nhà..."></textarea>
              </div>

              <button type="submit" class="btn-primary" style="width:100%; justify-content:center; padding:16px;">
                GỬI THÔNG TIN ĐẶT LỊCH (MIỄN PHÍ)
              </button>
            </form>
          </div>

          <!-- Office & Factory Location -->
          <div class="reveal-right">
            <div style="background:#fff; border:1px solid var(--border-color); border-radius:var(--radius-lg); padding:38px; box-shadow:var(--shadow-sm); margin-bottom:30px;">
              <h3 style="font-family:var(--font-serif); font-size:1.45rem; color:var(--primary); margin-bottom:22px;">Hệ Thống Trụ Sở & Xưởng Sản Xuất</h3>
              
              <div style="margin-bottom:24px;">
                <div style="font-weight:700; color:var(--primary); font-size:1.05rem; display:flex; align-items:center; gap:8px;">
                  <span style="color:var(--accent-gold);">🏢</span> Trụ Sở & Showroom Nha Trang
                </div>
                <p style="color:var(--text-muted); font-size:0.925rem; margin-top:6px; line-height:1.6;">Số 88 Đường Trần Phú, Phường Lộc Thọ, TP. Nha Trang, Tỉnh Khánh Hòa</p>
              </div>

              <div style="margin-bottom:24px;">
                <div style="font-weight:700; color:var(--primary); font-size:1.05rem; display:flex; align-items:center; gap:8px;">
                  <span style="color:var(--accent-gold);">🏬</span> Văn Phòng Chi Nhánh TP.HCM
                </div>
                <p style="color:var(--text-muted); font-size:0.925rem; margin-top:6px; line-height:1.6;">Tòa nhà The Landmark 81, Vinhomes Central Park, Quận Bình Thạnh, TP.HCM</p>
              </div>

              <div>
                <div style="font-weight:700; color:var(--primary); font-size:1.05rem; display:flex; align-items:center; gap:8px;">
                  <span style="color:var(--accent-gold);">🏭</span> Xưởng Chế Tác Whale Craft (1.500m²)
                </div>
                <p style="color:var(--text-muted); font-size:0.925rem; margin-top:6px; line-height:1.6;">Cụm Công Nghiệp Diên Phú, Huyện Diên Khánh, Tỉnh Khánh Hòa</p>
              </div>
            </div>

            <!-- FAQ Accordion -->
            <div style="background:var(--bg-cream); border:1px solid var(--border-color); border-radius:var(--radius-lg); padding:32px;">
              <h4 style="font-family:var(--font-serif); font-size:1.25rem; color:var(--primary); margin-bottom:18px;">Câu Hỏi Thường Gặp (FAQ)</h4>
              
              <div style="margin-bottom:16px;">
                <strong style="font-size:0.9rem; color:var(--primary); display:block;">Q: Thời gian thiết kế & thi công mất bao lâu?</strong>
                <p style="font-size:0.875rem; color:var(--text-muted); margin-top:4px;">A: Thiết kế 3D mất từ 10–15 ngày. Thi công trọn gói tại xưởng và lắp đặt hoàn thiện từ 30–45 ngày tùy quy mô diện tích.</p>
              </div>

              <div style="margin-bottom:16px;">
                <strong style="font-size:0.9rem; color:var(--primary); display:block;">Q: Tôi ở tỉnh khác có làm việc được không?</strong>
                <p style="font-size:0.875rem; color:var(--text-muted); margin-top:4px;">A: Whale Interior nhận thiết kế và thi công trên toàn quốc (đặc biệt các tỉnh duyên hải miền Trung, TP.HCM, Hà Nội).</p>
              </div>

              <div>
                <strong style="font-size:0.9rem; color:var(--primary); display:block;">Q: Chi phí khảo sát hiện trạng có mất tiền không?</strong>
                <p style="font-size:0.875rem; color:var(--text-muted); margin-top:4px;">A: Hoàn toàn miễn phí 100%. KTS sẽ trực tiếp đến đo đạc và tư vấn hướng giải pháp cho bạn.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>

<?php
get_footer();
