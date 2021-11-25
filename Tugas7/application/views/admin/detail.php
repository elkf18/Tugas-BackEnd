<div class="container">
    <div class="row ">
        <div class="col-md-6">

            <div class="card ">
                <div class="card-header">
                    Detail Data Admin
                </div>
                <div class="card-body">
                    <h5 class="card-title"><?= $admin['id_admin']; ?></h5>
                    <h6 class="card-subtitle mb-2 text-muted">Nama : <?= $admin['nama_admin']; ?></h6>
                    <p class="card-text">Alamat : <?= $admin['alamat_admin']; ?></p>
                    <p class="card-text">Email : <?= $admin['email_admin']; ?></p>
                    <p class="card-text">Password : <?= $admin['pass_admin']; ?></p>
                    <p class="card-text">Tanggal Lahir : <?= $admin['tl_admin']; ?></p>
                    <p class="card-text">Agama : <?= $admin['agama_admin']; ?></p>
                    <p class="card-text">Hobi : <?= $admin['hobi_admin']; ?></p>
                    <p class="card-text">Jenis Kelamin : <?= $admin['jk_admin']; ?></p>

                    <a href="<?= base_url(); ?>admin" class="btn btn-primary">Kembali</a>
                </div>
            </div>

        </div>
    </div>
</div>