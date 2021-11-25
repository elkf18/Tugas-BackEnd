<div class="container">

    <div class="row mt-3">
        <div class="col-md-6">

            <a href="<?= base_url(); ?>admin/tambah" class="btn btn-primary">Tambah
                Data </a>
        </div>
    </div>

    <div class="row ">
        <div class="col">
            <h3>Daftar Admin</h3>
            <?= $this->session->flashdata('flash'); ?>
            
            <table class="table table-bordered">
                <thead class="table-info">
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Foto</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Email</th>
                        <th scope="col">Password</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($admin as $a) : ?>
                        <tr>
                            <th scope="row"><?= $i++; ?></th>
                            <td><img src="assets/upload/images/<?= $a['foto_admin']; ?> " alt="" class="sampul" width="100px"></td>
                            <td><?= $a['nama_admin']; ?></td>
                            <td><?= $a['email_admin']; ?></td>
                            <td><?= $a['pass_admin']; ?></td>

                            <td>
                                <a href="<?= base_url(); ?>admin/detail/<?= $a['id_admin']; ?>" class="btn btn-success mb-1">detail</a>
                                <a href="<?= base_url(); ?>admin/ubah/<?= $a['id_admin']; ?>" class="btn btn-warning mb-1">ubah</a>
                                <a href="<?= base_url(); ?>admin/hapus/<?= $a['id_admin']; ?>" class="btn btn-danger mb-1">hapus</a>
                            </td>

                        <?php endforeach; ?>
                        </tr>
                </tbody>

        </div>
    </div>

</div>