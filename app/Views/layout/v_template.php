<?= view('layout/header') ?>

<?= view('layout/sidebar') ?>

<main class="app-main">
    <div class="app-content-header">
        </div>
    <div class="app-content">
        <div class="container-fluid">
            <?= $this->renderSection('content') ?>
        </div>
    </div>
</main>

<?= view('layout/footer') ?>