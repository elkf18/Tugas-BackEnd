<div class="container">
    <h4>Keranjang</h4>
    <table class="table table-bordered table-striped table-hover">
        <tr>
            <th>No</th>
            <th>Nama Produk</th>
            <th>Jumlah</th>
            <th>Harga</th>
            <th>Sub-Total</th>
        </tr>
        <?php
        $no = 1;
        foreach ($this->cart->contents() as $items) : ?>
            <tr>
                <td><?= $no++; ?></td>
                <td><?= $items['name']; ?></td>
                <td><?= $items['qty']; ?></td>
                <td align="right"><?= format_rupiah($items['price']); ?></td>
                <td align="right">Rp. <?= format_rupiah($items['subtotal']); ?></td>
            </tr>

        <?php endforeach ?>
        <tr>
            <td colspan="4"></td>
            <td align="right"><?= format_rupiah($this->cart->total()); ?></td>
        </tr>
    </table>
    <div align="right">
        <a href="<?= base_url('Barang/cekout/') ?>">
            <div class="btn btn-sm btn-success">Check Out</div>
        </a>

    </div>
</div>