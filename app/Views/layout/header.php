<!doctype html>
<html lang="en">
  <!--begin::Head-->
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Personal Website | Dashboard</title>

    <!--begin::Accessibility Meta Tags-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=yes" />
    <meta name="color-scheme" content="light dark" />
    <meta name="theme-color" content="#007bff" media="(prefers-color-scheme: light)" />
    <meta name="theme-color" content="#1a1a1a" media="(prefers-color-scheme: dark)" />
    <!--end::Accessibility Meta Tags-->



    <!--begin::Accessibility Features-->
    <!-- Skip links will be dynamically added by accessibility.js -->
    <meta name="supported-color-schemes" content="light dark" />
    <link rel="preload" href="<?= base_url('dist/css/adminlte.css') ?>" as="style" />
    <!--end::Accessibility Features-->

    <!--begin::Fonts-->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/@fontsource/source-sans-3@5.0.12/index.css"
      integrity="sha256-tXJfXfp6Ewt1ilPzLDtQnJV4hclT9XuaZUKyUvmyr+Q="
      crossorigin="anonymous"
      media="print"
      onload="this.media = 'all'"
    />
    <!--end::Fonts-->

    <!--begin::Third Party Plugin(OverlayScrollbars)-->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/overlayscrollbars@2.11.0/styles/overlayscrollbars.min.css"
      crossorigin="anonymous"
    />
    <!--end::Third Party Plugin(OverlayScrollbars)-->

    <!--begin::Third Party Plugin(Bootstrap Icons)-->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css"
      crossorigin="anonymous"
    />
    <!--end::Third Party Plugin(Bootstrap Icons)-->

    <!--begin::Required Plugin(AdminLTE)-->
    <link rel="stylesheet" href="<?= base_url('dist/css/adminlte.css') ?>" />
    <!--end::Required Plugin(AdminLTE)-->

    <!-- apexcharts -->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/apexcharts@3.37.1/dist/apexcharts.css"
      integrity="sha256-4MX+61mt9NVvvuPjUWdUdyfZfxSB1/Rf9WtqRHgG5S0="
      crossorigin="anonymous"
    />

    <!-- jsvectormap -->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/jsvectormap@1.5.3/dist/css/jsvectormap.min.css"
      integrity="sha256-+uGLJmmTKOqBr+2E6KDYs/NRsHxSkONXFHUL0fy2O/4="
      crossorigin="anonymous"
    />

    <!-- <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script> -->

    <style>
    /* CSS UNTUK TIMELINE MILESTONES CUSTOM */
    .custom-timeline {
        position: relative;
        max-width: 1200px;
        margin: 20px auto;
        padding: 20px 0;
    }

    /* Garis tengah vertikal */
    .custom-timeline::after {
        content: '';
        position: absolute;
        width: 3px;
        background-color: #1a533c; /* Warna garis hijau tua */
        top: 0;
        bottom: 0;
        left: 50%;
        margin-left: -1.5px;
        z-index: 1;
    }

    /* Kontainer untuk setiap item */
    .timeline-container {
        padding: 10px 40px;
        position: relative;
        background-color: inherit;
        width: 50%;
        z-index: 2;
    }

    /* Bulatan di tengah garis */
    .timeline-container::after {
        content: '';
        position: absolute;
        width: 15px;
        height: 15px;
        right: -7.5px; /* Posisikan bulatan pas di garis */
        background-color: #1a533c; /* Bulatan hijau */
        border: 3px solid #f4f6f9; /* Border warna background biar rapi */
        top: 75px; /* Jarak dari atas kotak tahun */
        border-radius: 50%;
        z-index: 3;
    }

    /* Atur posisi kontainer kiri */
    .left {
        left: 0;
    }

    /* Atur posisi kontainer kanan */
    .right {
        left: 50%;
    }

    /* Perbaiki posisi bulatan untuk kontainer kanan */
    .right::after {
        left: -7.5px;
    }

    /* Styling Label Tahun */
    .time-label-top {
        font-size: 14px;
        color: #999;
        font-weight: 600;
        margin-bottom: 15px;
        display: block;
    }

    /* Kotak Konten (Body) */
    .timeline-body-content {
        padding: 25px;
        background-color: #d1e1e8; /* Warna biru muda background kotak */
        position: relative;
        border-radius: 8px;
        box-shadow: 0 4px 6px rgba(0,0,0,0.1);
    }

    /* Styling Judul (Header) di dalam kotak */
    .timeline-header-text {
        font-size: 20px;
        font-weight: 700;
        color: #333;
        margin-top: 0;
        margin-bottom: 12px;
    }

    /* Styling Paragraf (Isi) di dalam kotak */
    .timeline-desc-text {
        font-size: 14px;
        line-height: 1.6;
        color: #666;
        margin-bottom: 0;
    }

    /* Responsif untuk layar HP */
    @media screen and (max-width: 768px) {
        /* Pindahkan garis ke kiri */
        .custom-timeline::after {
            left: 31px;
        }
        
        /* Lebarkan kontainer jadi full width */
        .timeline-container {
            width: 100%;
            padding-left: 70px;
            padding-right: 25px;
        }
        
        /* Pastikan semua kontainer nempel kiri */
        .timeline-container.left, .timeline-container.right {
            left: 0;
        }
        
        /* Pindahkan semua bulatan ke kiri */
        .timeline-container::after, .right::after {
            left: 23px;
        }
    }

    /* Efek Fade Smooth untuk Teks Sidebar */
    .nav-link p, 
    .brand-text {
        display: inline-block; /* Biar transisi width & opacity jalan */
        transition: opacity 0.3s ease, visibility 0.3s ease, width 0.3s ease;
        opacity: 1;
        visibility: visible;
        white-space: nowrap; /* Biar teks nggak turun ke bawah pas menyempit */
    }

    /* Kondisi pas sidebar lagi sembunyi (collapsed) */
    .sidebar-collapse .nav-link p,
    .sidebar-collapse .brand-text {
        opacity: 0;
        visibility: hidden;
        width: 0;
        margin: 0;
        padding: 0;
        overflow: hidden; /* Biar bener-bener bersih pas ngilang */
    }

    /* Supaya ikon tetep di tengah pas mode mini */
    .sidebar-mini.sidebar-collapse .nav-link {
        text-align: center;
    }

    </style>
  </head>
  <!--end::Head-->
  <!--begin::Body-->
  <body class="layout-fixed sidebar-expand-lg sidebar-mini bg-body-tertiaryapp-header-fixed">
    <!--begin::App Wrapper-->
    <div class="app-wrapper">
      <!--begin::Header-->
      <nav class="app-header navbar navbar-expand bg-body shadow-sm sticky-top">
        <div class="container-fluid">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" data-lte-toggle="sidebar" href="#" role="button">
                <i class="bi bi-list fs-4"></i>
              </a>
            </li>
          </ul>
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <div class="nav-link d-flex align-items-center">
                <span class="d-none d-md-inline fw-bold me-2" style="color: #555;">Fahmi Alamsyah N.</span>
              </div>
            </li>
          </ul>
        </div>
      </nav>