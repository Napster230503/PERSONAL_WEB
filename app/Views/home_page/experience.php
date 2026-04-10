<?= $this->extend('layout/v_template') ?>

<?= $this->section('content') ?>

<div class="content-header">
    <div class="container-fluid">
        <div class="d-flex align-items-center mb-5 border-bottom pb-3">
        <i class="bi bi-briefcase fs-1 me-3 text-primary"></i> <div>
            <h1 class="mb-1 fw-bold text-dark">Work Experience</h1>
        </div>
    </div>
    </div>
</div>

<div class="container-fluid">
    <div class="custom-timeline">
        
        <div class="timeline-container left">
            <span class="time-label-top">Mar 2025 - Present</span>
            <div class="timeline-body-content shadow-sm">
                <h3 class="timeline-header-text text-dark">PT CBA Chemical Industry</h3>
                <p class="timeline-desc-text">
                    Focus on optimizing Oracle ERP systems and databases, particularly the Order Management (OM) 
                    and Accounts Receivable (AR) modules.
                </p><br>
                <p><b>Job Description:</b></p>
                <ul class="timeline-desc-text">
                    <li>Perform maintenance in Oracle applications that will be run by Marketing Support, 
                        Logistics,  Supply Chain, and Accounting .
                    </li>
                    <li>
                        Add function based on user request.
                    </li>
                    <li>
                        Create new report according to user request.
                    </li>
                </ul>
            </div>
        </div>

        <div class="timeline-container right">
        <span class="time-label-top">Feb 2024 - Dec 2024</span>
            <div class="timeline-body-content shadow-sm">
                <h3 class="timeline-header-text text-dark">PT Kirana Megatara</h3>
                <p class="timeline-desc-text">
                    IT System Developer
                </p><br>
                <p><b>Job Description:</b></p>
                <ul class="timeline-desc-text">
                    <li>
                        Website portal development  in accordance with the Functional Specification (FUNSPEC) 
                        provided using PHP and CodeIgniter 3 framework.
                    </li>
                    <li>
                        Collaborate with user to gather project requirements.
                    </li>
                </ul>
            </div>
        </div>

        <div class="timeline-container left">
            <span class="time-label-top">May 2023 - Jul 2023</span>
            <div class="timeline-body-content shadow-sm">
                <h3 class="timeline-header-text text-dark">PT Baron Multi Niaga</h3>
                <p class="timeline-desc-text">
                    Front End Developer
                </p><br>
                <p><b>Job Description:</b></p>
                <ul class="timeline-desc-text">
                    <li>
                        Creating a company profile for PT Baron Multi Niaga, in making it only using PHP Native.
                    </li>
                </ul>
            </div>
        </div>

        <div class="timeline-container right">
            <span class="time-label-top">Sep 2021 - Okt 2022</span>
            <div class="timeline-body-content shadow-sm">
                <h3 class="timeline-header-text text-dark">CEP-CCIT FTUI</h3>
                <p class="timeline-desc-text">
                    Marketing Trainee CCIT Squad
                </p><br>
                <p><b>Job Description:</b></p>
                <ul class="timeline-desc-text">
                    <li>
                        Presenting and promoting the CCIT Profesional program of the Faculty of Engineering,
                        University of Indonesia to selected high schools throughout Indonesia.
                    </li>
                </ul>
            </div>
        </div>

    </div>
</div>

<?= $this->endSection() ?>