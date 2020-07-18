<div class="container-fluid">
    <h4>Keranjang Belanja</h4>
    <table class="table table-bordered table-striped table-hover">
        <tr>
            <th>No</th>
            <th>Nama Produk</th>
            <th>Jumlah</th>
            <th class="text-center">Harga</th>
            <th class="text-center">Sub-Total</th>
        </tr>
        <?php $no=1; foreach ($this->cart->contents() as $key ):?>
            <tr>
                <td><?php echo $no++?></td>
                <td><?php echo $key['name']?></td>
                <td><?php echo $key['qty']?></td>
                <td align="right">Rp. <?php echo number_format($key['price'], 0,',','.')?></td>
                <td align="right">Rp. <?php echo number_format($key['subtotal'], 0,',','.')?></td>
            </tr>
        <?php endforeach?>
        <tr>
            <td colspan="4"></td>
            <td align="right">Rp. <?php echo number_format($this->cart->total(), 0,',','.')?></td>
        </tr>

        
    </table>
    <div align="right">
        <a href="<?php echo base_url('dashboard/hapusKeranjang')?>" class="btn btn-sm btn-danger mr-3" data-toggle="tooltip" data-placement="bottom" title="Hapus Semua Keranjang Belanja" ><i class="fas fa-eraser"></i></a>
        <a href="<?php echo base_url('welcome/index')?>" class="btn btn-sm btn-primary mr-3" data-toggle="tooltip" data-placement="bottom" title="Lanjutkan Pembelian"><i class="fas fa-cart-plus" ></i></a>
        <a href="<?php echo base_url('dashboard/pembayaran')?>" class="btn btn-sm btn-success mr-3" data-toggle="tooltip" data-placement="bottom" title="Lanjutkan Ke Pembayaran"><i class="fas fa-cash-register"></i></a>
    </div>
</div>