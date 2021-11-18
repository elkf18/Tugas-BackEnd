<div class="container ">
    <div class="row text-center ">
        <?php foreach ($barang as $brg) : ?>
            <div class="card ml-3" style="width: 16rem;">
                <img src="<?= base_url() . 'img/' . $brg->gambar_barang; ?>" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title mb-1"><?= $brg->nama_barang; ?></h5>
                    <small><?= $brg->keterangan_barang; ?></small><br>
                    <span class="badge rounded-pill bg-warning"><?= format_rupiah($brg->harga_barang); ?></span><br>
                    <?= anchor('Barang/tambah_ke_keranjang/' . $brg->id_barang, '<div class = "btn btn-sm btn-primary">Tambah ke Keranjang</div>') ?>
                    <a href="#" class="btn btn-sm btn-success">Detail</a>
                </div>
            </div>
        <?php endforeach; ?>

    </div>
</div>
</div>