<?= $this->extend('layout/v_template') ?>

<?= $this->section('content') ?>

<div class="app-content-header">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-6">
                <h3 class="mb-0 text-bold" style="color: #333;"><u>Contact Me</u></h3>
            </div>
        </div>
    </div>
</div>

<div class="app-content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-7">
                <?php if (session()->getFlashdata('success')) : ?>
                    <div class="alert alert-success alert-dismissible fade show border-0 shadow-sm" role="alert">
                        <i class="bi bi-check-circle-fill me-2"></i> <?= session()->getFlashdata('success') ?>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                <?php endif; ?>

                <?php if (session()->getFlashdata('error')) : ?>
                    <div class="alert alert-danger alert-dismissible fade show border-0 shadow-sm" role="alert">
                        <i class="bi bi-exclamation-triangle-fill me-2"></i> <?= session()->getFlashdata('error') ?>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                <?php endif; ?>

                <div class="card card-primary card-outline shadow-sm">
                    <div class="card-header">
                        <h3 class="card-title text-bold"><i class="bi bi-chat-dots-fill me-2"></i>Send a Message</h3>
                    </div>
                    <div class="card-body">
                        <form action="<?= base_url('home/sendEmail') ?>" method="post">
                            <?= csrf_field() ?> <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="name" class="form-label text-bold">Name</label>
                                    <input type="text" name="name" id="name" class="form-control" placeholder="Your Name" required>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="email" class="form-label text-bold">Email</label>
                                    <input type="email" name="email" id="email" class="form-control" placeholder="Email Address" required>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="message" class="form-label text-bold">Message</label>
                                <textarea name="message" id="message" class="form-control" rows="5" placeholder="Write your message here..." required></textarea>
                            </div>
                            <div class="text-end">
                                <button type="submit" class="btn btn-primary px-4">
                                    <i class="bi bi-send-fill me-1"></i> Send Message
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <div class="col-md-5">
                <div class="card card-outline card-info shadow-sm">
                    <div class="card-header">
                        <h3 class="card-title text-bold"><i class="bi bi-info-circle-fill me-2"></i>Connect with Me</h3>
                    </div>
                    <div class="card-body p-0">
                        <div class="list-group list-group-flush">
                            <a href="https://instagram.com/fahmialamsyah_" target="_blank" class="list-group-item list-group-item-action py-3">
                                <div class="d-flex w-100 align-items-center">
                                    <i class="bi bi-instagram fs-3 text-danger me-3"></i>
                                    <div>
                                        <h6 class="mb-0 text-bold">Instagram</h6>
                                        <small class="text-muted">@fahmialamsyah_</small>
                                    </div>
                                </div>
                            </a>
                            <a href="https://linkedin.com/in/fahmialamsyahn" target="_blank" class="list-group-item list-group-item-action py-3">
                                <div class="d-flex w-100 align-items-center">
                                    <i class="bi bi-linkedin fs-3 text-primary me-3"></i>
                                    <div>
                                        <h6 class="mb-0 text-bold">LinkedIn</h6>
                                        <small class="text-muted">Fahmi Alamsyah Nugroho</small>
                                    </div>
                                </div>
                            </a>
                            <div class="list-group-item py-3">
                                <div class="d-flex w-100 align-items-center">
                                    <i class="bi bi-envelope-at-fill fs-3 text-warning me-3"></i>
                                    <div>
                                        <h6 class="mb-0 text-bold">Email</h6>
                                        <small class="text-muted">alamsyahfahmi99@gmail.com</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection() ?>