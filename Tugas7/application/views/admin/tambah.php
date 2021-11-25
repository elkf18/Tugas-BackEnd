<div class="container ">

    <div class="row mt-3  justify-content-center align-items-center">
        <div class="col-md-10 ">
            <div class="card ">
                <div class="card-header ">
                    Form Tambah Admin
                </div>
                <!--  -->
                <div class="card-body">
                    <form action="" method="post">
                        <div class="form-group">
                            <label for="id_admin">ID</label>
                            <input type="number" name="id_admin" class="form-control" id="id_admin">
                            <small class="form-text text-danger"><?= form_error('id_admin'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="nama_admin">Nama</label>
                            <input type="text" name="nama_admin" class="form-control" id="nama_admin">
                            <small class="form-text text-danger"><?= form_error('nama_admin'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="alamat_admin">Alamat</label>
                            <textarea name="alamat_admin" class="form-control" id="alamat_admin"></textarea>
                            <small class="form-text text-danger"><?= form_error('alamat_admin'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="email_admin">Email</label>
                            <input type="email" name="email_admin" class="form-control" id="email_admin">
                            <small class="form-text text-danger"><?= form_error('email_admin'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="pass_admin">Password</label>
                            <input type="password" name="pass_admin" class="form-control" id="pass_admin">
                            <small class="form-text text-danger"><?= form_error('pass_admin'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="tl_admin">Tanggal Lahir</label>
                            <input type="date" name="tl_admin" class="form-control" id="tl_admin">
                            <small class="form-text text-danger"><?= form_error('tl_admin'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="agama_admin">Agama</label>
                            <select name="agama_admin" class="form-control" id="agama_admin">
                                <option value=""></option>
                                <option value="Islam">Islam</option>
                                <option value="Kristen">Kristen</option>
                                <option value="Hindu">Hindu</option>
                                <option value="Budha">Budha</option>
                                <option value="Lainnya">Lainnya</option>
                            </select>
                            <small class="form-text text-danger"><?= form_error('agama_admin'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="hobi_admin">Hobi</label><br>
                            <input type="checkbox" name="hobi_admin" id="hobi_admin" value="Nonton"> Nonton<br>
                            <input type="checkbox" name="hobi_admin" id="hobi_admin" value="Menulis"> Menulis<br>
                            <input type="checkbox" name="hobi_admin" id="hobi_admin" value="Traveling"> Traveling<br>
                            <input type="checkbox" name="hobi_admin" id="hobi_admin" value="Otomotif"> Otomotif<br>
                            <input type="checkbox" name="hobi_admin" id="hobi_admin" value="Fotografi"> Fotografi<br>
                            <input type="checkbox" name="hobi_admin" id="hobi_admin" value="Programming"> Programming
                            <small class="form-text text-danger"><?= form_error('hobi_admin'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="jk_admin">Jenis Kelamin</label><br>
                            <input type="radio" name="jk_admin" value="Laki-laki"> Laki-laki<br>
                            <input type="radio" name="jk_admin" value="Perempuan"> Perempuan<br>
                            <small class="form-text text-danger"><?= form_error('jk_admin'); ?></small>
                        </div>

                        <div class="form-group">
                            <label for="foto_admin">Foto</label>
                            <input type="file" name="foto_admin" class="form-control" id="foto_admin">
                            <small class="form-text text-danger"><?= form_error('foto_admin'); ?></small>
                        </div>

                        <button type="submit" name="tambah" class="btn btn-primary float-right">Tambah Data</button>
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