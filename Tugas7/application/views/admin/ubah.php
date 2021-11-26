<div class="container ">

    <div class="row mt-3  justify-content-center align-items-center">
        <div class="col-md-10 ">
            <div class="card ">
                <div class="card-header ">
                    Form Ubah Admin
                </div>
                <div class="card-body">
                    <form action="" method="post">
                        <div class="form-group">
                            <label for="id_admin">ID</label>
                            <input type="hidden" name="id_admin" class="form-control" id="id_admin" value="<?= $admin['id_admin'] ?>">
                            <small class="form-text text-danger"><?= form_error('id_admin'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="nama_admin">Nama</label>
                            <input type="text" name="nama_admin" class="form-control" id="nama_admin" value="<?= $admin['nama_admin'] ?>">
                            <small class="form-text text-danger"><?= form_error('nama_admin'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="alamat_admin">Alamat</label>
                            <textarea name="alamat_admin" class="form-control" id="alamat_admin" value="<?= $admin['alamat_admin'] ?>"></textarea>
                            <small class="form-text text-danger"><?= form_error('alamat_admin'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="email_admin">Email</label>
                            <input type="email" name="email_admin" class="form-control" id="email_admin" value="<?= $admin['email_admin'] ?>">
                            <small class="form-text text-danger"><?= form_error('email_admin'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="pass_admin">Password</label>
                            <input type="password" name="pass_admin" class="form-control" id="pass_admin" value="<?= $admin['pass_admin'] ?>">
                            <small class="form-text text-danger"><?= form_error('pass_admin'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="tl_admin">Tanggal Lahir</label>
                            <input type="date" name="tl_admin" class="form-control" id="tl_admin" value="<?= $admin['tl_admin'] ?>">
                            <small class="form-text text-danger"><?= form_error('tl_admin'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="agama_admin">Agama</label>
                            <select name="agama_admin" class="form-control" id="agama_admin">
                                <option value=""></option>
                                <option value="Islam" <?php if ($admin['agama_admin'] == 'Islam') echo "selected"; ?>>Islam</option>
                                <option value="Kristen" <?php if ($admin['agama_admin'] == 'Kristen') echo "selected"; ?>>Kristen</option>
                                <option value="Hindu" <?php if ($admin['agama_admin'] == 'Hindu') echo "selected"; ?>>Hindu</option>
                                <option value="Budha" <?php if ($admin['agama_admin'] == 'Budha') echo "selected"; ?>>Budha</option>
                                <option value="Lainnya" <?php if ($admin['agama_admin'] == 'Lainnya') echo "selected"; ?>>Lainnya</option>
                            </select>
                            <small class="form-text text-danger"><?= form_error('agama_admin'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="hobi_admin">Hobi</label><br>
                            <input type="checkbox" name="hobi_admin" id="hobi_admin" value="Nonton" <?php if ($admin['hobi_admin'] == 'Nonton') echo "checked"; ?>> Nonton<br>
                            <input type="checkbox" name="hobi_admin" id="hobi_admin" value="Menulis" <?php if ($admin['hobi_admin'] == 'Menulis') echo "checked"; ?>> Menulis<br>
                            <input type="checkbox" name="hobi_admin" id="hobi_admin" value="Traveling" <?php if ($admin['hobi_admin'] == 'Travelling') echo "checked"; ?>> Traveling<br>
                            <input type="checkbox" name="hobi_admin" id="hobi_admin" value="Otomotif" <?php if ($admin['hobi_admin'] == 'Otomotif') echo "checked"; ?>> Otomotif<br>
                            <input type="checkbox" name="hobi_admin" id="hobi_admin" value="Fotografi" <?php if ($admin['hobi_admin'] == 'Fotografi') echo "checked"; ?>> Fotografi<br>
                            <input type="checkbox" name="hobi_admin" id="hobi_admin" value="Programming" <?php if ($admin['hobi_admin'] == 'Programming') echo "checked"; ?>> Programming
                            <small class="form-text text-danger"><?= form_error('hobi_admin'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="jk_admin">Jenis Kelamin</label><br>
                            <input type="radio" name="jk_admin" value="Laki-laki" <?php if ($admin['jk_admin'] == 'Laki-laki') echo "checked"; ?>> Laki-laki<br>
                            <input type="radio" name="jk_admin" value="Perempuan" <?php if ($admin['jk_admin'] == 'Perempuan') echo "checked"; ?>> Perempuan<br>
                            <small class="form-text text-danger"><?= form_error('jk_admin'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="foto_admin">Foto</label>
                            <input type="file" name="foto_admin" class="form-control" id="foto_admin" value="<?= $admin['foto_admin'] ?>">
                            <small class="form-text text-danger"><?= form_error('foto_admin'); ?></small>
                        </div>

                        <button type="submit" name="ubah" class="btn btn-primary float-right" onclick="ubahData()>Ubah Data</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="<?= base_url() ?>assets/plugin/ckeditor/ckeditor.js"></script>
<script>
    CKEDITOR.replace('alamat_admin');
</script>
                                                                 
                                                                 <script>
    function ubahData() {
        swal({
            title: 'Data Admin',
            text: 'Berhasil di ubah!',
            type: "success"
        })
    }
</script>
