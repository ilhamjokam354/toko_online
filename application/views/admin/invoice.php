<div class="container-fluid">
    <h4>Invoice Pemesanan Produk</h4>
    <table class="table table-bordered table-striped table-hover">
        <tr>
            <th>Id Pemesan</th>
            <th>Nama Pemesan</th>
            <th>Alamat Pengiriman</th>
            <th>Tanggal Pemesanan</th>
            <th>Batas Pembayaran</th>
            <th>Aksi</th>
        </tr>

        <?php foreach ($invoice as $key ):?>
        <tr>
            <td><?php echo $key->id?></td>
            <td><?php echo $key->nama?></td>
            <td><?php echo $key->alamat?></td>
            <td><?php echo $key->tgl_pesan?></td>
            <td><?php echo $key->batas_bayar?></td>
            <td class="text-center"><a href="<?php echo base_url('admin/invoice/detail/').$key->id ?>" class="btn btn-sm btn-info" data-toggle="tooltip" data-placement="bottom" title="Detail Pemesanan"><i class="fas fa-info"></i></a></td>
        </tr>
        <?php endforeach?>
    </table>
</div>