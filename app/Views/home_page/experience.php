<?= $this->extend('layout/v_template') ?>

<?= $this->section('content') ?>

<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-bold" style="color: #333;">Milestones</h1>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid">
    <div class="custom-timeline">
        
        <div class="timeline-container left">
            <span class="time-label-top">Present</span>
            <div class="timeline-body-content">
                <h3 class="timeline-header-text">IT Specialist / Oracle ERP Specialist</h3>
                <p class="timeline-desc-text">
                    Fokus pada optimasi sistem dan database Oracle ERP, khususnya modul <b>Order Management (OM)</b> dan <b>Accounts Receivable (AR)</b>. Bertanggung jawab dalam troubleshooting, integrasi data, serta optimasi query SQL.
                </p>
            </div>
        </div>

        <div class="timeline-container right">
            <span class="time-label-top">2024 - 2025</span>
            <div class="timeline-body-content">
                <h3 class="timeline-header-text">Software Engineer & Web Developer</h3>
                <p class="timeline-desc-text">
                    Mengembangkan aplikasi web modern dan melakukan migrasi sistem dari PHP Native ke framework <b>CodeIgniter 4</b> untuk meningkatkan stabilitas serta efisiensi kode.
                </p>
            </div>
        </div>

        <div class="timeline-container left">
            <span class="time-label-top">University Project</span>
            <div class="timeline-body-content">
                <h3 class="timeline-header-text">C# Application & Database Integration</h3>
                <p class="timeline-desc-text">
                    Membangun aplikasi desktop berbasis C# dengan fokus pada logika pemrograman kompleks dan konektivitas database yang aman.
                </p>
            </div>
        </div>

    </div>
</div>

<?= $this->endSection() ?>