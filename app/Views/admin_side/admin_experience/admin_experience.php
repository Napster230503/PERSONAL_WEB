<?= $this->extend('layout/v_template') ?>

<?= $this->section('content') ?>

<div class="flash-data" data-success="<?= session()->getFlashdata('success') ?>"></div>

<div class="row">
    <div class="col-md-8">
        <div class="card card-outline card-success">
            <div class="card-header">
                <h3 class="card-title">Setting Experience</h3>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered table-striped" id="tableExperience">
                        <thead>
                            <tr class="text-center">
                                <th>Tanggal Mulai</th>
                                <th>Tanggal Akhir</th>
                                <th>Instansi / Perusahaan</th>
                                <th>Posisi</th>
                                <th>Deskripsi Jobdesk</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php if (!empty($experience)) : ?>
                                <?php foreach ($experience as $exp) : ?>
                                    <tr>
                                        <td class="text-center"><?= $exp['tgl_mulai'] ?></td>
                                        <td class="text-center"><?= $exp['tgl_akhir'] ?></td>
                                        <td><?= $exp['nama_instansi'] ?></td>
                                        <td><?= $exp['jabatan'] ?></td>
                                        <td><?= $exp['deskripsi'] ?></td>
                                        <td class="text-center">
                                            <select class="form-control form-control-sm select-action" onchange="handleAction(this)">
                                                <option value="" selected disabled>-- Action --</option>
                                                <option value="edit" 
                                                        data-id="<?= $exp['id_experience'] ?>"
                                                        data-mulai="<?= $exp['tgl_mulai'] ?>"
                                                        data-akhir="<?= $exp['tgl_akhir'] ?>"
                                                        data-instansi="<?= $exp['nama_instansi'] ?>"
                                                        data-jabatan="<?= $exp['jabatan'] ?>"
                                                        data-deskripsi="<?= $exp['deskripsi'] ?>">
                                                    📝 Edit Data
                                                </option>
                                                <option value="<?= base_url('admin/experience/delete/' . $exp['id_experience']) ?>" class="text-danger">
                                                    🗑️ Delete Data
                                                </option>
                                            </select>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            <?php else : ?>
                                <tr>
                                    <td colspan="6" class="text-center">Belum ada data experience.</td>
                                </tr>
                            <?php endif; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <div class="col-md-4">
        <div class="card card-outline card-success">
            <div class="card-header">
                <h3 class="card-title">Form Experience & Achievement</h3>
            </div>
            <div class="card-body">
                <form action="<?= base_url('admin/experience/save') ?>" method="post" id="formExperience">
                    <?= csrf_field() ?> <input type="hidden" name="id_experience" id="id_experience"> 

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Tanggal Awal</label>
                                <input type="text" class="form-control" name="tgl_mulai" id="tgl_mulai" placeholder="Contoh: Mar 2025">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Tanggal Akhir</label>
                                <input type="text" class="form-control" name="tgl_akhir" id="tgl_akhir" placeholder="Contoh: Apr 2026 atau Present">
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label>Nama Instansi / Perusahaan</label>
                        <input type="text" class="form-control" name="nama_instansi" id="nama_instansi" placeholder="Contoh: Universitas / PT X">
                    </div>

                    <div class="form-group">
                        <label>Jabatan / Posisi</label>
                        <input type="text" class="form-control" name="jabatan" id="jabatan" placeholder="Contoh: Web Developer">
                    </div>

                    <div class="form-group">
                        <label>Deskripsi Tugas</label>
                        <textarea class="form-control" name="deskripsi" id="deskripsi" rows="3" placeholder="Jelaskan apa yang Anda kerjakan..."></textarea>
                    </div>

                    <div class="mt-3">
                        <button type="reset" class="btn btn-danger" onclick="resetForm()">Reset</button>
                        <button type="submit" class="btn btn-success float-right" id="btnSubmit">Submit</button>
                    </div>
                </form>
                </div>
        </div>
    </div>
</div>


<?= $this->endSection() ?>

<?= $this->section('script') ?>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    
    <script src="<?= base_url('assets/js/admin_side/experience/experience.js') ?>"></script>
<?= $this->endSection() ?>