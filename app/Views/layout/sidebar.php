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
        data-accordion="false"
      >
        <li class="nav-item">
          <a href="<?= base_url('/') ?>" class="nav-link <?= url_is('/') ? 'active' : '' ?>">
            <i class="nav-icon bi bi-house-door-fill"></i>
            <p>Home Page</p> </a>
        </li>

        <li class="nav-item">
          <a href="<?= base_url('contact') ?>" class="nav-link <?= url_is('contact*') ? 'active' : '' ?>">
            <i class="nav-icon bi bi-person-lines-fill"></i>
            <p>Contact</p>
          </a>
        </li>

        <li class="nav-item">
          <a href="<?= base_url('experience') ?>" class="nav-link <?= url_is('experience*') ? 'active' : '' ?>">
            <i class="nav-icon bi bi-briefcase-fill"></i>
            <p>Experience</p>
          </a>
        </li>

      <li class="nav-item">
        <a href="<?= base_url('test') ?>" class="nav-link <?= url_is('test*') ? 'active' : '' ?>">
          <i class="nav-icon fas fa-vial"></i> 
          <p>Test</p>
        </a>
      </li>

        <li class="nav-item">
          <a href="#" class="nav-link <?= url_is('admin*') ? 'active' : '' ?>">
            <i class="nav-icon bi bi-shield-lock-fill"></i>
            <p>
              Admin Side
              <i class="nav-arrow bi bi-chevron-right"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="<?= base_url('admin/experience') ?>" class="nav-link <?= url_is('admin/experience*') ? 'active' : '' ?>">
                <i class="nav-icon bi bi-circle"></i>
                <p>Admin Experience</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="nav-icon bi bi-circle"></i>
                <p>Admin Portfolio (Soon)</p>
              </a>
            </li>
          </ul>
        </li>
      </ul>
    </nav>
  </div>
</aside>