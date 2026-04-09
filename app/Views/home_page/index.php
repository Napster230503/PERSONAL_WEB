<?= $this->extend('layout/v_template') ?>

<?= $this->section('content') ?>

<div class="content-wrapper bg-white"> 
    <section class="content">
        <div class="container-fluid">
            <div class="row align-items-center" style="min-height: 80vh;">
                <div class="col-md-6 px-5">
                    <h5 class="text-muted">Halo, I'am Fahmi Alamsyah N.</h5>
                    <h5 class="display-6 font-weight-bold">I'am a <span class="text-primary">Web Developer, Software Engineer, and Oracle ERP Specialist</span></h5>
                    <p class="lead">Focus on system optimization, databases, and efficient IT development.</p>
                    
                    <div class="mt-4">
                        <a href="<?= base_url('experience') ?>" class="btn btn-dark btn-lg mr-2">Read More</a>
                        <a href="#" class="btn btn-outline-dark btn-lg">Download CV</a>
                    </div>
                </div>

                <div class="col-md-6 text-center">
                    <img src="<?= base_url('dist/assets/img/FahmiAlamsyahN.jpeg') ?>" 
                         class="img-fluid" 
                         style="max-height: 500px; filter: grayscale(100%);" 
                         alt="Fahmi Profile">
                </div>
            </div>
        </div>
    </section>
</div>

<section class="content mt-5">
    <div class="container"> 
        <div class="row bg-light py-5 shadow-sm">
            <div class="col-md-5">
                <div class="position-relative">
                    <div class="bg-dark p-4 position-absolute" style="bottom: -255px; right: 0px; width: 90%; z-index: 10;">
                        <h6 class="text-white mb-3">MY SKILLS</h6>
                        
                        <div class="progress-group text-white-50 small">
                            PHP 
                            <div class="progress progress-sm mb-2">
                                <div class="progress-bar bg-primary" style="width: 90%"></div>
                            </div>
                        </div>

                        <div class="progress-group text-white-50 small">
                            SQL Query 
                            <div class="progress progress-sm mb-2">
                                <div class="progress-bar bg-primary" style="width: 90%"></div>
                            </div>
                        </div>

                        <div class="progress-group text-white-50 small">
                            JavaScript
                            <div class="progress progress-sm mb-2">
                                <div class="progress-bar bg-primary" style="width: 85%"></div>
                            </div>
                        </div>

                        <div class="progress-group text-white-50 small">
                            Java
                            <div class="progress progress-sm mb-2">
                                <div class="progress-bar bg-primary" style="width: 85%"></div>
                            </div>
                        </div>

                        <div class="progress-group text-white-50 small">
                            C#
                            <div class="progress progress-sm mb-2">
                                <div class="progress-bar bg-primary" style="width: 85%"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-6 px-5">
                <h2 class="font-weight-bold text-uppercase">About Me !</h2>
                <hr align="left" width="50px" style="border-top: 3px solid #007bff; margin-left: 0;">
                <p class="text-muted mt-4" style="line-height: 1.8; text-align: justify;">
                    I am an IT professional specializing in Web Development, 
                    Software Engineering, and Oracle ERP Database. I have experience in website development,
                    website maintenance, reporting using Oracle, managing Order Management (OM) and 
                    Accounts Receivable (AR) modules, and am proficient in optimizing SQL queries for 
                    accurate business reporting needs.
                </p>
            </div>
        </div>
    </div>
</section>

<?= $this->endSection() ?>