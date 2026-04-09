<aside class="app-sidebar bg-body-secondary shadow" data-bs-theme="dark">
  <div class="sidebar-brand">
    <a href="<?= base_url('/') ?>" class="brand-link">
      <img
        src="<?= base_url('dist/assets/img/AdminLTELogo.png') ?>"
        alt="AdminLTE Logo"
        class="brand-image opacity-75 shadow"
      />
      <span class="brand-text fw-light">Fahmi Alamsyah N</span>
      </a>
    </div>
  <div class="sidebar-wrapper">
    <nav class="mt-2">
      <ul
        class="nav sidebar-menu flex-column"
        data-lte-toggle="treeview"
        role="navigation"
        aria-label="Main navigation"
        data-accordion="false"
        id="navigation"
      >
        <li class="nav-item">
          <a href="<?= base_url('/') ?>" class="nav-link <?= url_is('/') ? 'active' : '' ?>">
            <i class="nav-icon bi bi-house-door-fill"></i>
            <p>Home Page</p>
          </a>
        </li>

        <li class="nav-item">
          <a href="<?= base_url('contact') ?>" class="nav-link <?= url_is('contact*') ? 'active' : '' ?>">
            <i class="nav-icon bi bi-person-lines-fill"></i>
            <p>Contact</p>
          </a>
        </li>
      </ul>
      </nav>
  </div>
  </aside>