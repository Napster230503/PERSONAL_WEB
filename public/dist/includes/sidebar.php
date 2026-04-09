
<?php
$current_page = basename($_SERVER['PHP_SELF']);
?>


<aside class="app-sidebar bg-body-secondary shadow" data-bs-theme="dark">
  <!--begin::Sidebar Brand-->
  <div class="sidebar-brand">
    <!--begin::Brand Link-->
    <a href="./index.php" class="brand-link">
      <!--begin::Brand Image-->
      <img
        src="./assets/img/AdminLTELogo.png"
        alt="AdminLTE Logo"
        class="brand-image opacity-75 shadow"
      />
      <!--end::Brand Image-->
      <!--begin::Brand Text-->
      <span class="brand-text fw-light">Fahmi Alamsyah N</span>
      <!--end::Brand Text-->
    </a>
    <!--end::Brand Link-->
  </div>
  <!--end::Sidebar Brand-->
  <!--begin::Sidebar Wrapper-->
  <div class="sidebar-wrapper">
    <nav class="mt-2">
      <!--begin::Sidebar Menu-->
      <ul
        class="nav sidebar-menu flex-column"
        data-lte-toggle="treeview"
        role="navigation"
        aria-label="Main navigation"
        data-accordion="false"
        id="navigation"
      >
<li class="nav-item">
  <a href="./index.php" class="nav-link <?php echo (strpos($_SERVER['PHP_SELF'], 'index.php') !== false) ? 'active' : ''; ?>">
    <i class="nav-icon bi bi-house-door-fill"></i>
    <p>Home Page</p>
  </a>
</li>

<li class="nav-item">
  <a href="./contact.php" class="nav-link <?php echo (strpos($_SERVER['PHP_SELF'], 'contact.php') !== false) ? 'active' : ''; ?>">
    <i class="nav-icon bi bi-person-lines-fill"></i>
    <p>Contact</p>
  </a>
</li>
      <!--end::Sidebar Menu-->
    </nav>
  </div>
  <!--end::Sidebar Wrapper-->
</aside>