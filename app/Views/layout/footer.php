<footer class="app-footer">
        <strong>
          Copyright &copy; 2026&nbsp;
          <a class="text-decoration-none">Fahmi Alamsyah Nugroho</a>.
        </strong>
        All rights reserved.
        </footer>
      </div>
    <script src="https://cdn.jsdelivr.net/npm/overlayscrollbars@2.11.0/browser/overlayscrollbars.browser.es6.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.min.js" crossorigin="anonymous"></script>
    
    <script src="<?= base_url('dist/js/adminlte.js') ?>"></script>

    <script>
      const SELECTOR_SIDEBAR_WRAPPER = '.sidebar-wrapper';
      const Default = {
        scrollbarTheme: 'os-theme-light',
        scrollbarAutoHide: 'leave',
        scrollbarClickScroll: true,
      };
      document.addEventListener('DOMContentLoaded', function () {
        const sidebarWrapper = document.querySelector(SELECTOR_SIDEBAR_WRAPPER);
        const isMobile = window.innerWidth <= 992;
        if (sidebarWrapper && OverlayScrollbarsGlobal?.OverlayScrollbars !== undefined && !isMobile) {
          OverlayScrollbarsGlobal.OverlayScrollbars(sidebarWrapper, {
            scrollbars: {
              theme: Default.scrollbarTheme,
              autoHide: Default.scrollbarAutoHide,
              clickScroll: Default.scrollbarClickScroll,
            },
          });
        }
      });
    </script>

    <script src="https://cdn.jsdelivr.net/npm/sortablejs@1.15.0/Sortable.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/apexcharts@3.37.1/dist/apexcharts.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/jsvectormap@1.5.3/dist/js/jsvectormap.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/jsvectormap@1.5.3/dist/maps/world.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.7/js/dataTables.bootstrap5.min.js"></script>
<script>
    document.addEventListener("DOMContentLoaded", function() {
        const body = document.body;
        const sidebar = document.querySelector('.app-sidebar');
        const sidebarState = localStorage.getItem('sidebar-state');

        if (sidebarState === 'collapsed') {
            // Cek: Apakah kursor lagi di atas sidebar pas halaman baru keload?
            const isHovering = sidebar.matches(':hover');

            if (isHovering) {
                // Kalau lagi dihover, jangan kasih class collapse dulu 
                // Biar dia tetap terbuka sampai kursor keluar
                body.classList.remove('sidebar-collapse');
                
                // Tambahkan event listener sekali jalan (once) 
                // Pas kursor keluar (mouseleave), baru kita hide beneran
                sidebar.addEventListener('mouseleave', function() {
                    body.classList.add('sidebar-collapse');
                }, { once: true });
                
            } else {
                // Kalau kursor nggak di situ, langsung hide aja
                body.classList.add('sidebar-collapse');
            }
        }
    });

    // Bagian simpan status klik (Tetap sama)
    document.addEventListener('click', function (event) {
        const toggleBtn = event.target.closest('[data-lte-toggle="sidebar"]');
        if (toggleBtn) {
            setTimeout(() => {
                if (document.body.classList.contains('sidebar-collapse')) {
                    localStorage.setItem('sidebar-state', 'collapsed');
                } else {
                    localStorage.setItem('sidebar-state', 'expanded');
                }
            }, 150);
        }
    });
</script>
    </body>
</html>