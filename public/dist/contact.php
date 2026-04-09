<?php include 'includes/header.php'; ?>
<?php include 'includes/sidebar.php'; ?>

<main class="app-main">
  <div class="app-content-header">
    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-6">
          <h3 class="mb-0">Contact Me</h3>
        </div>
      </div>
    </div>
  </div>
  <div class="app-content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-7">
          <div class="card card-primary card-outline">
            <div class="card-header">
              <h3 class="card-title">Send a Message</h3>
            </div>
            <div class="card-body">
              <form action="#" method="post">
                <div class="mb-3">
                  <label for="name" class="form-label">Name</label>
                  <input type="text" id="name" class="form-control" placeholder="Your Name" required>
                </div>
                <div class="mb-3">
                  <label for="email" class="form-label">Email</label>
                  <input type="email" id="email" class="form-control" placeholder="Email Address" required>
                </div>
                <div class="mb-3">
                  <label for="message" class="form-label">Message</label>
                  <textarea id="message" class="form-control" rows="4" placeholder="Write your message here..."></textarea>
                </div>
                <button type="submit" class="btn btn-primary">
                  <i class="bi bi-send-fill me-1"></i> Submit
                </button>
              </form>
            </div>
          </div>
        </div>

        <div class="col-md-5">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Connect with Me</h3>
            </div>
            <div class="card-body p-0">
              <ul class="list-group list-group-flush">
                <li class="list-group-item">
                  <i class="bi bi-instagram text-primary me-2"></i>
                  <strong>Instagram:</strong> <br>
                  <span class="text-muted">Fahmi Nugroho</span>
                </li>
                <li class="list-group-item">
                  <i class="bi bi-linkedin text-primary me-2"></i>
                  <strong>LinkedIn:</strong> <br>
                  <span class="text-muted">Fahmi .A. Nugroho</span>
                </li>
                <li class="list-group-item">
                  <i class="bi bi-envelope-fill text-primary me-2"></i>
                  <strong>Email:</strong> <br>
                  <span class="text-muted">alamsyahfahmi99@gmail.com</span>
                </li>
                <li class="list-group-item">
                  <i class="bi bi-geo-alt-fill text-danger me-2"></i>
                  <strong>Location:</strong> <br>
                  <span class="text-muted">West Java, Indonesia</span>
                </li>
              </ul>
            </div>
            <div class="card-footer text-center">
               <p class="small text-muted mb-0">You can contact me!</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  </main>

<?php include 'includes/footer.php'; ?>