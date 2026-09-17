<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <title>Kabar & Berita Terkini Desa Melung</title>
    
    <!-- Standard CSS & Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <link href="css/bootstrap.4.5.3.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <style>
        * {
            box-sizing: border-box;
        }

        html {
            scroll-behavior: smooth;
        }

        body { 
            font-family: 'Plus Jakarta Sans', sans-serif; 
            background-color: #f1f5f9; 
            margin: 0;
            padding: 0;
        }
        
        /* --- STICKY HEADER --- */
        header {
            position: sticky;
            top: 0;
            z-index: 1000;
            width: 100%;
            background-color: #043d38;
            transition: box-shadow 0.3s ease, transform 0.3s ease;
        }

        header.is-scrolled {
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.25);
        }

        header.is-scrolled .top-header {
            padding-top: 8px;
            padding-bottom: 8px;
            background-color: #043d38;
        }

        header.is-scrolled .nav-bar-strip {
            padding-top: 8px;
            padding-bottom: 8px;
            background-color: #ffffff;
        }

        /* --- NAVBAR TOP GREEN --- */
        .top-header {
            background-color: #043d38;
            padding: 12px 90px;
            color: #ffffff;
            display: flex;
            align-items: center;
            justify-content: space-between;
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        }

        .brand-box {
            display: flex;
            align-items: center;
            gap: 12px;
            text-decoration: none !important;
        }

        .brand-logo {
            width: 36px;
            height: 36px;
            object-fit: contain;
        }

        .brand-text-sub {
            font-size: 10px;
            color: #a7f3d0;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            line-height: 1.1;
        }

        .brand-text-main {
            font-size: 16px;
            font-weight: 800;
            color: #ffffff;
            line-height: 1.1;
        }

        .header-time {
            font-size: 12px;
            color: rgba(255, 255, 255, 0.9);
            display: flex;
            align-items: center;
            gap: 6px;
        }

        .nav-bar-strip {
            background-color: #ffffff;
            padding: 10px 90px;
            border-bottom: 1px solid #e2e8f0;
            display: flex;
            align-items: center;
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        }

        .btn-hamburger {
            background: transparent;
            border: none;
            font-size: 22px;
            color: #043d38;
            cursor: pointer;
            padding: 0;
            display: flex;
            align-items: center;
        }

        /* --- MENU NAVBAR --- */
        .nav-menu-wrapper {
            display: flex;
            align-items: center;
            gap: 16px 24px; /* 16px jarak atas-bawah, 24px jarak kiri-kanan */
            margin-left: 0px;
            margin: 0 auto;
            justify-content: space-between;
            flex-grow: 1;
            flex-wrap: wrap; /* KUNCI: Biar menu pindah ke baris bawah */
        }

        .nav-link-custom {
            text-decoration: none !important;
            color: #043d38;
            font-weight: 700;
            font-size: 14px;
            transition: color 0.2s ease;
        }

        .nav-link-custom:hover, 
        .nav-link-custom.active {
            color: #059669;
        }
        
        /* Sembunyiin menu teks di mobile, sisa hamburger */
        @media (max-width: 991px) {
            .nav-menu-wrapper {
                display: none;
            }
        }

        /* --- HERO BANNER SECTION --- */
        .hero-banner-custom {
            background: linear-gradient(180deg, #043d38 0%, #032e2a 100%);
            padding: 40px 24px 90px 24px;
            color: #ffffff;
            position: relative;
        }

        .hero-container {
            max-width: 1400px;
            margin: 0 auto;
            display: flex;
            justify-content: space-between; /* Menjauhkan teks ke kiri & tombol ke kanan */
            align-items: flex-start;          /* Menyejajarkan tombol di bagian bawah sejajar teks */
            gap: 20px;                      /* Jarak aman jika layar menyempit */
        }

        .hero-text-content {
            flex: 1;
        }

        .hero-title-wrapper {
            border-left: 4px solid #34d399;
            padding-left: 16px;
            margin-bottom: 16px;
        }

        .hero-title-main {
            font-size: 28px;
            font-weight: 800;
            line-height: 1.2;
            color: #ffffff;
            margin-bottom: 2px;
        }

        .hero-title-sub {
            font-size: 28px;
            font-weight: 800;
            color: #34d399;
        }

        .hero-desc {
            font-size: 13.5px;
            color: rgba(255, 255, 255, 0.85);
            line-height: 1.6;
            max-width: 580px;
            margin-bottom: 0; /* Diubah dari 24px ke 0 */
        }

        .btn-kembali-beranda {
            background-color: #ffffff;
            color: #043d38;
            font-weight: 700;
            font-size: 13px;
            padding: 10px 22px;
            border-radius: 50px;
            border: none;
            display: inline-flex;
            align-items: center;
            gap: 8px;
            text-decoration: none !important;
            box-shadow: 0 4px 12px rgba(0,0,0,0.12);
            transition: all 0.2s ease;
            white-space: nowrap;

            margin-top: 45px;
        }

        .btn-kembali-beranda:hover {
            background-color: #f8fafc;
            color: #022623;
        }

        /* --- CONTENT CONTAINER --- */
        .content-container {
            max-width: 1440px;
            margin: -60px auto 60px auto;
            padding: 0 15px;
            position: relative;
            z-index: 10;
        }

        .content-card-wrapper {
            background: #ffffff;
            border-radius: 20px;
            padding: 30px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.05);
        }

        .section-header {
            display: flex;
            align-items: flex-start;
            justify-content: space-between;
            border-bottom: 1px solid #f1f5f9;
            padding-bottom: 20px;
            margin-bottom: 28px;
        }

        .section-title {
            font-size: 20px;
            font-weight: 800;
            color: #0f172a;
            display: flex;
            align-items: center;
            gap: 10px;
            margin-bottom: 4px;
        }

        .section-desc {
            font-size: 13px;
            color: #64748b;
            margin: 0;
        }

        .total-news-badge {
            background-color: #043d38;
            color: #ffffff;
            font-weight: 700;
            font-size: 12px;
            padding: 8px 18px;
            border-radius: 50px;
            white-space: nowrap;
        }

        /* --- NEWS CARDS --- */
        .news-item-card {
            border: 1px solid #e2e8f0;
            border-radius: 16px;
            overflow: hidden;
            background: #ffffff;
            transition: all 0.25s ease;
            height: 100%;
            display: flex;
            flex-direction: column;
            text-decoration: none !important;
        }

        .news-item-card:hover {
            transform: translateY(-4px);
            box-shadow: 0 12px 20px rgba(0,0,0,0.06);
            border-color: #cbd5e1;
        }

        .news-img-box {
            position: relative;
            width: 100%;
            height: 190px;
            overflow: hidden;
            background-color: #f1f5f9;
        }

        .news-img-box img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .badge-berita-desa {
            position: absolute;
            top: 12px;
            left: 12px;
            background-color: #0f172a;
            color: #ffffff;
            font-weight: 800;
            font-size: 10px;
            padding: 5px 10px;
            border-radius: 6px;
            letter-spacing: 0.5px;
            z-index: 2;
        }

        .news-card-body {
            padding: 18px;
            display: flex;
            flex-direction: column;
            flex-grow: 1;
        }

        .news-card-title {
            font-size: 14.5px;
            font-weight: 700;
            color: #0f172a;
            line-height: 1.45;
            margin-bottom: 12px;
            display: -webkit-box;
            -webkit-line-clamp: 2;
            -webkit-box-orient: vertical;
            overflow: hidden;
        }

        .news-card-date {
            font-size: 12px;
            color: #64748b;
            margin-bottom: 16px;
            display: flex;
            align-items: center;
            gap: 6px;
        }

        /* TOMBOL BACA */
        .btn-baca {
            margin-top: auto;
            padding-top: 12px;
            border-top: 1px dashed #e2e8f0;
            font-size: 13px;
            font-weight: 700;
            color: #043d38;
            display: flex;
            align-items: center;
            justify-content: space-between;
            transition: color 0.2s ease;
        }

        .news-item-card:hover .btn-baca {
            color: #059669;
        }

        .btn-baca i {
            transition: transform 0.2s ease;
        }

        .news-item-card:hover .btn-baca i {
            transform: translateX(4px);
        }

        /* Sticky Widget Aksesibilitas */
        .accessibility-btn {
            position: fixed;
            right: 0;
            top: 50%;
            transform: translateY(-50%);
            background-color: #ef4444;
            color: #ffffff;
            width: 40px;
            height: 40px;
            border-top-left-radius: 50%;
            border-bottom-left-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            box-shadow: -2px 4px 10px rgba(0,0,0,0.15);
            z-index: 999;
            cursor: pointer;
        }

        /* Tombol Scroll To Top Melayang */
        .btn-scroll-top-fixed {
            position: fixed;
            bottom: 30px;
            right: 30px;
            width: 50px;
            height: 50px;
            background-color: #043d38;
            color: #ffffff;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 18px;
            box-shadow: 0 4px 16px rgba(0, 0, 0, 0.3);
            z-index: 9999;
            cursor: pointer;
            border: none;
            outline: none;
            text-decoration: none !important;
            
            opacity: 0;
            visibility: hidden;
            transform: scale(0.8) translateY(20px);
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        }

        .btn-scroll-top-fixed.active {
            opacity: 1;
            visibility: visible;
            transform: scale(1) translateY(0);
        }

        .btn-scroll-top-fixed:hover {
            background-color: #022e2a;
            color: #34d399;
            transform: translateY(-3px);
            box-shadow: 0 6px 20px rgba(0, 0, 0, 0.4);
        }

        /* --- CUSTOM FOOTER STYLES --- */
        .custom-footer {
            background-color: #032e2a !important;
            background-image: 
                radial-gradient(rgba(255, 255, 255, 0.12) 1px, transparent 1px),
                linear-gradient(180deg, #043d38 0%, #022623 100%) !important;
            background-size: 20px 20px, 100% 100% !important;
            color: #ffffff !important;
            padding-top: 50px;
            padding-bottom: 35px;
            position: relative;
        }

        .footer-brand-title {
            font-weight: 800;
            font-size: 18px;
            color: #ffffff !important;
            line-height: 1.2;
        }

        .footer-brand-sub {
            color: #34d399 !important;
            font-size: 12px;
            font-weight: 600;
        }

        .footer-logo {
            width: 42px;
            height: 42px;
            object-fit: contain;
        }

        .footer-desc {
            font-size: 13px;
            color: rgba(255, 255, 255, 0.85) !important;
            line-height: 1.6;
            max-width: 400px;
        }

        .footer-title {
            font-size: 18px;
            font-weight: 800;
            color: #ffffff !important;
            margin-bottom: 16px;
        }

        .footer-title::after {
            content: '';
            display: block;
            width: 32px;
            height: 3px;
            background-color: #34d399;
            border-radius: 2px;
            margin-top: 6px;
        }

        /* STATISTIK BOX */
        .stat-box {
            background: rgba(255, 255, 255, 0.05) !important;
            border: 1px solid rgba(255, 255, 255, 0.1) !important;
            border-radius: 12px;
            padding: 12px 18px;
            margin-bottom: 12px;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .stat-info {
            display: flex;
            align-items: center;
            gap: 14px;
        }

        .stat-icon {
            width: 34px;
            height: 34px;
            border-radius: 8px;
            background: rgba(52, 211, 153, 0.18);
            color: #34d399;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 14px;
        }

        .stat-label {
            font-size: 13px;
            font-weight: 600;
            color: rgba(255, 255, 255, 0.9) !important;
        }

        .stat-value {
            font-size: 18px;
            font-weight: 800;
            color: #ffffff !important;
        }

        /* KONTAK ITEM */
        .contact-item {
            display: flex;
            align-items: flex-start;
            gap: 14px;
            margin-bottom: 16px;
        }

        .contact-icon {
            width: 38px;
            height: 38px;
            border-radius: 10px;
            background: rgba(52, 211, 153, 0.15);
            border: 1px solid rgba(52, 211, 153, 0.25);
            color: #34d399;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 15px;
            flex-shrink: 0;
        }

        .contact-label {
            font-size: 10px;
            font-weight: 800;
            color: #34d399;
            letter-spacing: 0.5px;
            margin-bottom: 2px;
        }

        .contact-value {
            font-size: 13.5px;
            font-weight: 700;
            color: #ffffff !important;
            line-height: 1.4;
        }

        /* FOOTER DIVIDER & COPYRIGHT */
        .footer-divider {
            border-top: 1px solid rgba(255, 255, 255, 0.15) !important;
            margin-top: 40px;
            margin-bottom: 25px;
        }

        .copyright-text {
            font-size: 13px;
            color: rgba(255, 255, 255, 0.85) !important;
            text-align: center;
            line-height: 1.7;
            margin: 0;
        }

        .copyright-text strong {
            color: #ffffff !important;
            font-weight: 700;
        }
        /* Atur container di dalam footer agar lebih lebar */
        .custom-footer .container, 
        .custom-footer .container-fluid {
            max-width: 95% !important; /* Nilai bawaan Bootstrap biasanya 1140px/1320px, ubah ke 95% atau 100% agar makin lebar */
            padding-left: 50px !important;  /* Jarak aman pinggir kiri */
            padding-right: 50px !important; /* Jarak aman pinggir kanan */
        }

        .footer-desc {
            max-width: 100% !important; 
        }
    </style>
</head>

<body>

    <!-- Sticky Header Lengkap dengan Menu -->
    <header id="mainNav">
        <div class="top-header">
            <a href="/" class="brand-box">
                <img src="images/logo-bms.png" alt="Logo Melung" class="brand-logo">
                <div>
                    <div class="brand-text-sub">Sistem Informasi Desa</div>
                    <div class="brand-text-main">Melung</div>
                </div>
            </a>
            <div class="header-time d-none d-md-flex">
                <i class="far fa-clock"></i> Rabu, 16 Sep 2026 • 18:13:02 WIB
            </div>
        </div>

        <div class="nav-bar-strip">
            <!-- Tombol hamburger khusus mobile -->
            <button class="btn-hamburger d-lg-none" aria-label="Toggle Navigation">
                <i class="fas fa-bars"></i>
            </button>

            <!-- Menu Navbar Utama -->
            <div class="nav-menu-wrapper">
                <a href="#" class="nav-link-custom">Home</a>
                <a href="#" class="nav-link-custom">Profil</a>
                <a href="#" class="nav-link-custom">Statistik</a>
                <a href="#" class="nav-link-custom">Potensi Desa</a>
                <a href="#" class="nav-link-custom">Kelembagaan</a>
                <a href="#" class="nav-link-custom">Transparasi</a>
				<a href="#" class="nav-link-custom">Produk Hukum</a>
				<a href="#" class="nav-link-custom">Desa Wisata</a>
				<a href="#" class="nav-link-custom">Bumdes</a>
				<a href="#" class="nav-link-custom">Ppid</a>
				<a href="#" class="nav-link-custom active">Kabar Desa</a>
				<a href="#" class="nav-link-custom">Pelayanan</a>
				<a href="#" class="nav-link-custom">Festival Desa</a>
				<a href="#" class="nav-link-custom">Kontak Kami</a>
				<a href="#" class="nav-link-custom">Desa Anti Korupsi</a>
            </div>
        </div>
    </header>

    <!-- Hero Banner Section -->
    <section class="hero-banner-custom">
        <div class="hero-container">
            <!-- Pembungkus Teks Sisi Kiri -->
            <div class="hero-text-content">
                <div class="hero-title-wrapper">
                    <div class="hero-title-main">Kabar & Berita Terkini</div>
                    <div class="hero-title-sub">Desa Melung</div>
                    <div class="hero-desc">Informasi resmi, perkembangan pembangunan, dan kabar terbaru seputar kegiatan masyarakat Melung.</div>
                </div>
            </div>

            <!-- Tombol Kembali Sisi Kanan (Posisi Ungu) -->
            <div>
                <a href="/" class="btn-kembali-beranda">
                    <i class="fas fa-home"></i> Kembali ke Beranda
                </a>
            </div>
        </div>
    </section>
    <!-- Main Content Container -->
    <main class="content-container">
        <div class="content-card-wrapper">
            
            <!-- Section Header -->
            <div class="section-header">
                <div>
                    <h2 class="section-title">
                        <i class="far fa-newspaper text-success"></i> Seluruh Berita Desa
                    </h2>
                    <p class="section-desc">Publikasi dan berita resmi yang dirilis Pemerintah Melung.</p>
                </div>
                <div>
                    <span class="total-news-badge">Total 519 Berita</span>
                </div>
            </div>

            <!-- News Cards Grid (Lengkap 10 Berita) -->
            <div class="row">

                <!-- Berita 1 -->
                <div class="col-lg-4 col-md-6 mb-4">
                    <a href="#" class="news-item-card">
                        <div class="news-img-box">
                            <span class="badge-berita-desa">BERITA DESA</span>
                            <img src="https://images.unsplash.com/photo-1540575467063-178a50c2df87?w=600&auto=format&fit=crop&q=80" alt="HUT RI">
                        </div>
                        
                        <!-- BAGIAN YANG DIGANTI KODE DI BAWAH INI -->
                        <div class="news-card-body">
                            <h3 class="news-card-title">Jere Meng Malang Rep Kuliah. Mumet Karo Matkul, Yanai Malah Dadi Streamer Roblox Nang Tiktok</h3>
                            
                            <div class="d-flex justify-content-between align-items-center pt-3 border-top mt-3">
                                <!-- Tanggal di Kiri -->
                                <div class="text-muted small">
                                    <i class="far fa-calendar-alt text-warning mr-1"></i> 18 Agustus 2026
                                </div>

                                <!-- Tombol Baca Gelap di Kanan -->
                                <span class="btn btn-dark btn-sm px-3 py-2 fw-bold" style="background-color: #0d1b2a; border-radius: 8px; font-size: 12px;">
                                    Baca <i class="fas fa-arrow-right ml-1"></i>
                                </span>
                            </div>
                        </div>
                    </a>
                </div>

                <!-- Berita 2 -->
                <div class="col-lg-4 col-md-6 mb-4">
                    <a href="#" class="news-item-card">
                        <div class="news-img-box">
                            <span class="badge-berita-desa">BERITA DESA</span>
                            <img src="https://images.unsplash.com/photo-1506744038136-46273834b3fb?w=600&auto=format&fit=crop&q=80" alt="Pendidikan">
                        </div>
                        <div class="news-card-body">
                            <h3 class="news-card-title">Pemerintah Desa Melung Rilis Standar Pelayanan Bidang Pendidikan</h3>
                            <div class="d-flex justify-content-between align-items-center pt-3 border-top mt-3">
                                <div class="text-muted small">
                                    <i class="far fa-calendar-alt text-warning mr-1"></i> 07 Juli 2026
                                </div>
                                <span class="btn btn-dark btn-sm px-3 py-2 fw-bold" style="background-color: #0d1b2a; border-radius: 8px; font-size: 12px;">
                                    Baca <i class="fas fa-arrow-right ml-1"></i>
                                </span>
                            </div>
                        </div>
                    </a>
                </div>

                <!-- Berita 3 -->
                <div class="col-lg-4 col-md-6 mb-4">
                    <a href="#" class="news-item-card">
                        <div class="news-img-box">
                            <span class="badge-berita-desa">BERITA DESA</span>
                            <img src="https://images.unsplash.com/photo-1454165804606-c3d57bc86b40?w=600&auto=format&fit=crop&q=80" alt="SOP">
                        </div>
                        <div class="news-card-body">
                            <h3 class="news-card-title">Wujudkan Transparansi, Pemdes Melung Rilis Panduan SOP Pelayanan Publik</h3>
                            <div class="d-flex justify-content-between align-items-center pt-3 border-top mt-3">
                                <div class="text-muted small">
                                    <i class="far fa-calendar-alt text-warning mr-1"></i> 07 Juli 2026
                                </div>
                                <span class="btn btn-dark btn-sm px-3 py-2 fw-bold" style="background-color: #0d1b2a; border-radius: 8px; font-size: 12px;">
                                    Baca <i class="fas fa-arrow-right ml-1"></i>
                                </span>
                            </div>
                        </div>
                    </a>
                </div>

                <!-- Berita 4 -->
                <div class="col-lg-4 col-md-6 mb-4">
                    <a href="#" class="news-item-card">
                        <div class="news-img-box">
                            <span class="badge-berita-desa">BERITA DESA</span>
                            <img src="https://images.unsplash.com/photo-1577495508048-b635879837f1?w=600&auto=format&fit=crop&q=80" alt="Musrenbang">
                        </div>
                        <div class="news-card-body">
                            <h3 class="news-card-title">Pelaksanaan Musrenbangdes Tahun 2026 Penetapan Prioritas Pembangunan</h3>
                            <div class="d-flex justify-content-between align-items-center pt-3 border-top mt-3">
                                <div class="text-muted small">
                                    <i class="far fa-calendar-alt text-warning mr-1"></i> 24 Juni 2026
                                </div>
                                <span class="btn btn-dark btn-sm px-3 py-2 fw-bold" style="background-color: #0d1b2a; border-radius: 8px; font-size: 12px;">
                                    Baca <i class="fas fa-arrow-right ml-1"></i>
                                </span>
                            </div>
                        </div>
                    </a>
                </div>

                <!-- Berita 5 -->
                <div class="col-lg-4 col-md-6 mb-4">
                    <a href="#" class="news-item-card">
                        <div class="news-img-box">
                            <span class="badge-berita-desa">BERITA DESA</span>
                            <img src="https://images.unsplash.com/photo-1517048676732-d65bc937f952?w=600&auto=format&fit=crop&q=80" alt="Pelatihan Posyandu">
                        </div>
                        <div class="news-card-body">
                            <h3 class="news-card-title">Pelatihan Kader Posyandu Desa Melung Guna Pencegahan Stunting Dini</h3>
                            <div class="d-flex justify-content-between align-items-center pt-3 border-top mt-3">
                                <div class="text-muted small">
                                    <i class="far fa-calendar-alt text-warning mr-1"></i> 12 Mei 2026
                                </div>
                                <span class="btn btn-dark btn-sm px-3 py-2 fw-bold" style="background-color: #0d1b2a; border-radius: 8px; font-size: 12px;">
                                    Baca <i class="fas fa-arrow-right ml-1"></i>
                                </span>
                            </div>
                        </div>
                    </a>
                </div>

                <!-- Berita 6 -->
                <div class="col-lg-4 col-md-6 mb-4">
                    <a href="#" class="news-item-card">
                        <div class="news-img-box">
                            <span class="badge-berita-desa">BERITA DESA</span>
                            <img src="https://images.unsplash.com/photo-1500382017468-9049fed747ef?w=600&auto=format&fit=crop&q=80" alt="Pertanian">
                        </div>
                        <div class="news-card-body">
                            <h3 class="news-card-title">Penyaluran Bantuan Biji Pupuk Organik Bagi Kelompok Tani Dusun II</h3>
                            <div class="d-flex justify-content-between align-items-center pt-3 border-top mt-3">
                                <div class="text-muted small">
                                    <i class="far fa-calendar-alt text-warning mr-1"></i> 03 April 2026
                                </div>
                                <span class="btn btn-dark btn-sm px-3 py-2 fw-bold" style="background-color: #0d1b2a; border-radius: 8px; font-size: 12px;">
                                    Baca <i class="fas fa-arrow-right ml-1"></i>
                                </span>
                            </div>
                        </div>
                    </a>
                </div>

                <!-- Berita 7 -->
                <div class="col-lg-4 col-md-6 mb-4">
                    <a href="#" class="news-item-card">
                        <div class="news-img-box">
                            <span class="badge-berita-desa">BERITA DESA</span>
                            <img src="https://images.unsplash.com/photo-1582213782179-e0d53f98f2ca?w=600&auto=format&fit=crop&q=80" alt="Gotong Royong">
                        </div>
                        <div class="news-card-body">
                            <h3 class="news-card-title">Kegiatan Kerja Bakti Massal Membersihkan Saluran Air Sambut Musim Hujan</h3>
                            <div class="d-flex justify-content-between align-items-center pt-3 border-top mt-3">
                                <div class="text-muted small">
                                    <i class="far fa-calendar-alt text-warning mr-1"></i> 19 Maret 2026
                                </div>
                                <span class="btn btn-dark btn-sm px-3 py-2 fw-bold" style="background-color: #0d1b2a; border-radius: 8px; font-size: 12px;">
                                    Baca <i class="fas fa-arrow-right ml-1"></i>
                                </span>
                            </div>
                        </div>
                    </a>
                </div>

                <!-- Berita 8 -->
                <div class="col-lg-4 col-md-6 mb-4">
                    <a href="#" class="news-item-card">
                        <div class="news-img-box">
                            <span class="badge-berita-desa">BERITA DESA</span>
                            <img src="https://images.unsplash.com/photo-1526304640581-d334cdbbf45e?w=600&auto=format&fit=crop&q=80" alt="Bansos BLT">
                        </div>
                        <div class="news-card-body">
                            <h3 class="news-card-title">Penyaluran Bantuan Langsung Tunai (BLT-DD) Tahap I Tahun Anggaran 2026</h3>
                            <div class="d-flex justify-content-between align-items-center pt-3 border-top mt-3">
                                <div class="text-muted small">
                                    <i class="far fa-calendar-alt text-warning mr-1"></i> 10 Februari 2026
                                </div>
                                <span class="btn btn-dark btn-sm px-3 py-2 fw-bold" style="background-color: #0d1b2a; border-radius: 8px; font-size: 12px;">
                                    Baca <i class="fas fa-arrow-right ml-1"></i>
                                </span>
                            </div>
                        </div>
                    </a>
                </div>

                <!-- Berita 9 -->
                <div class="col-lg-4 col-md-6 mb-4">
                    <a href="#" class="news-item-card">
                        <div class="news-img-box">
                            <span class="badge-berita-desa">BERITA DESA</span>
                            <img src="https://images.unsplash.com/photo-1531482615713-2afd69097998?w=600&auto=format&fit=crop&q=80" alt="UMKM Desa">
                        </div>
                        <div class="news-card-body">
                            <h3 class="news-card-title">Bimbingan Teknis Digital Pemasaran Produk UMKM Lokal Desa Melung</h3>
                            <div class="d-flex justify-content-between align-items-center pt-3 border-top mt-3">
                                <div class="text-muted small">
                                    <i class="far fa-calendar-alt text-warning mr-1"></i> 15 Januari 2026
                                </div>
                                <span class="btn btn-dark btn-sm px-3 py-2 fw-bold" style="background-color: #0d1b2a; border-radius: 8px; font-size: 12px;">
                                    Baca <i class="fas fa-arrow-right ml-1"></i>
                                </span>
                            </div>
                        </div>
                    </a>
                </div>

                <!-- Berita 10 -->
                <div class="col-lg-4 col-md-6 mb-4">
                    <a href="#" class="news-item-card">
                        <div class="news-img-box">
                            <span class="badge-berita-desa">BERITA DESA</span>
                            <img src="https://images.unsplash.com/photo-1497366216548-37526070297c?w=600&auto=format&fit=crop&q=80" alt="Layanan Digital">
                        </div>
                        <div class="news-card-body">
                            <h3 class="news-card-title">Sosialisasi Aplikasi Pelayanan Surat Menyurat Online Mandiri Desa</h3>
                            <div class="d-flex justify-content-between align-items-center pt-3 border-top mt-3">
                                <div class="text-muted small">
                                    <i class="far fa-calendar-alt text-warning mr-1"></i> 05 Januari 2026
                                </div>
                                <span class="btn btn-dark btn-sm px-3 py-2 fw-bold" style="background-color: #0d1b2a; border-radius: 8px; font-size: 12px;">
                                    Baca <i class="fas fa-arrow-right ml-1"></i>
                                </span>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
                <!-- PAGINATION (TOMBOL HALAMAN) -->
                <style>
                    .custom-box {
                        width: 36px !important;
                        height: 36px !important;
                        padding: 0 !important;
                        display: flex !important;
                        align-items: center;
                        justify-content: center;
                        font-size: 13px !important;
                        color: #333 !important;
                        background-color: #ffffff !important;
                        border: 1.5px solid #dee2e6 !important;
                        border-radius: 10px !important;
                        transition: all 0.13s ease-in-out !important;
                    }
                    
                    /* Efek pas kursor lewat (Hover) untuk selain tombol aktif */
                    .custom-box:hover {
                        background-color: #f0fdf4 !important; /* Background hijau muda lembut */
                        color: #0d5c58 !important;            /* Teks hijau tua */
                        border-color: #0d5c58 !important;       /* Border hijau tua */
                    }
                    
                    /* Tombol Aktif (Angka 1) */
                    .active-box {
                        background-color: #0d5c58 !important;
                        border-color: #0d5c58 !important;
                        color: #ffffff !important;
                        font-weight: 600 !important;
                    }
                </style>

                <div class="row mt-2">
                    <div class="col-12 d-flex justify-content-center">
                        <nav aria-label="Page navigation">
                            <ul class="pagination" style="gap: 5px;">
                                <li class="page-item"><a class="page-link custom-box" href="#">&lsaquo;</a></li>
                                <li class="page-item"><a class="page-link custom-box active-box" href="#">1</a></li>
                                <li class="page-item"><a class="page-link custom-box" href="#">2</a></li>
                                <li class="page-item"><a class="page-link custom-box" href="#">3</a></li>
                                <li class="page-item"><a class="page-link custom-box" href="#">4</a></li>
                                <li class="page-item"><a class="page-link custom-box" href="#">5</a></li>
                                <li class="page-item"><a class="page-link custom-box" href="#">6</a></li>
                                <li class="page-item"><a class="page-link custom-box" href="#">7</a></li>
                                <li class="page-item"><a class="page-link custom-box" href="#">8</a></li>
                                <li class="page-item"><a class="page-link custom-box" href="#">9</a></li>
                                <li class="page-item"><a class="page-link custom-box" href="#">10</a></li>
                                <li class="page-item"><a class="page-link custom-box" href="#">...</a></li>
                                <li class="page-item"><a class="page-link custom-box" href="#">51</a></li>
                                <li class="page-item"><a class="page-link custom-box" href="#">52</a></li>
                                <li class="page-item"><a class="page-link custom-box" href="#">&rsaquo;</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>

        </div>
    </main>

    <!-- Button Aksesibilitas -->
    <div class="accessibility-btn" title="Aksesibilitas">
        <i class="fas fa-wheelchair"></i>
    </div>

    <!-- Tombol Floating Scroll To Top -->
    <button id="scrollToTopBtn" class="btn-scroll-top-fixed" title="Kembali ke atas">
        <i class="fas fa-chevron-up"></i>
    </button>

    <!-- Custom Footer -->
    <footer class="custom-footer">
        <div class="container">
            
            <!-- SATU BARIS UNTUK 3 KOLOM SEJAJAR -->
            <div class="row align-items-start mb-5">
                
                <!-- KOLOM 1: PROFIL DESA (KIRI) -->
                <div class="col-lg-4 mb-4 mb-lg-0">
                    <div class="d-flex align-items-center mb-3">
                        <img src="images/logo-bms.png" alt="Logo Desa" class="footer-logo mr-3">
                        <div>
                            <div class="footer-brand-title">Desa Melung</div>
                            <div class="footer-brand-sub">Kabupaten Banyumas</div>
                        </div>
                    </div>
                    <p class="footer-desc">
                        Website resmi Desa Melung Kabupaten Banyumas. Menyajikan layanan publik mandiri, transparansi anggaran, serta informasi perkembangan pembangunan wilayah secara akurat dan terbuka.
                    </p>
                </div>

                <!-- KOLOM 2: STATISTIK PENGUNJUNG (TENGAH) -->
                <div class="col-lg-4 mb-4 mb-lg-0">
                    <div class="footer-title">Statistik Pengunjung</div>
                    
                    <div class="stat-box">
                        <div class="stat-info">
                            <div class="stat-icon"><i class="fas fa-user-friends"></i></div>
                            <span class="stat-label">Hari ini</span>
                        </div>
                        <span class="stat-value">242</span>
                    </div>

                    <div class="stat-box">
                        <div class="stat-info">
                            <div class="stat-icon"><i class="fas fa-calendar-alt"></i></div>
                            <span class="stat-label">Bulan ini</span>
                        </div>
                        <span class="stat-value">4.810</span>
                    </div>

                    <div class="stat-box">
                        <div class="stat-info">
                            <div class="stat-icon"><i class="fas fa-chart-line"></i></div>
                            <span class="stat-label">Total Pengunjung</span>
                        </div>
                        <span class="stat-value">79.711</span>
                    </div>
                </div>

                <!-- KOLOM 3: KONTAK DESA (KANAN) -->
                <div class="col-lg-4">
                    <div class="footer-title">Kontak Desa</div>
                    
                    <div class="contact-item">
                        <div class="contact-icon"><i class="fas fa-map-marker-alt"></i></div>
                        <div>
                            <div class="contact-label">ALAMAT KANTOR</div>
                            <div class="contact-value">Jalan Raya No.50-51, Dusun II, Melung, Kec. Kedungbanteng</div>
                        </div>
                    </div>
                    
                    <div class="contact-item">
                        <div class="contact-icon"><i class="fas fa-envelope"></i></div>
                        <div>
                            <div class="contact-label">EMAIL RESMI</div>
                            <div class="contact-value">pemdes@melung.desa.id</div>
                        </div>
                    </div>
                    
                    <div class="contact-item">
                        <div class="contact-icon"><i class="fas fa-phone-alt"></i></div>
                        <div>
                            <div class="contact-label">TELEPON</div>
                            <div class="contact-value">(0281) 1234567</div>
                        </div>
                    </div>
                </div>

            </div>

            <!-- FOOTER DIVIDER & COPYRIGHT -->
            <div class="footer-divider"></div>
            <p class="copyright-text">
                &copy; 2026 <strong>Pemerintah Desa Melung</strong>. Semua Hak Cipta Dilindungi.<br>
                Sistem Informasi Desa Terpadu Kabupaten Banyumas.
            </p>
        </div>
    </footer>
    
    <!-- Scripts JavaScript -->
    <script>
        // Deteksi scroll untuk Sticky Header & Tombol Scroll to Top
        window.addEventListener('scroll', function() {
            // Header Sticky Class
            const header = document.getElementById('mainNav');
            if (window.scrollY > 50) {
                header.classList.add('is-scrolled');
            } else {
                header.classList.remove('is-scrolled');
            }
            
            // Scroll to Top Button Visibility
            const scrollBtn = document.getElementById('scrollToTopBtn');
            if (window.scrollY > 300) {
                scrollBtn.classList.add('active');
            } else {
                scrollBtn.classList.remove('active');
            }
        });

        // Aksi ketika Tombol Scroll to Top diklik
        document.getElementById('scrollToTopBtn').addEventListener('click', function() {
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        });
    </script>
</body>
</html>