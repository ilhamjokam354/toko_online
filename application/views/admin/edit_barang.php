<div class="container-fluid">
    <h3><i class="fas fa-search-plus"></i> Edit Barang</h3>
    <?php foreach ($barang as $key):?>
    <form action="<?php echo base_url().'admin/data_barang/update'?>" method="post">
    
        <div class="form-group">
            <label for="nama">Nama Barang</label>
            <input type="hidden" name="id" value="<?php echo $key->id_barang?>" >
            <input type="text" name="nama" value="<?php echo $key->nama_barang?>" class="form-control">
        </div>

        <div class="form-group">
            <label for="ket">Keterangan</label>
            <input type="text" name="ket" value="<?php echo $key->keterangan?>" class="form-control">
        </div>

        <div class="form-group">
            <label for="kategori">Kategori</label>
            <input type="text" name="kategori" value="<?php echo $key->kategori?>" class="form-control">
        </div>

        <div class="form-group">
            <label for="harga">Harga</label>
            <input type="text" name="harga" value="<?php echo $key->harga?>" class="form-control">
        </div>
        
        <div class="form-group">
            <label for="ket">Stok</label>
            <input type="text" name="stok" value="<?php echo $key->stok?>" class="form-control">
        </div>

        <button type="submit" class="btn btn-sm btn-primary mt-3">Simpan</button>
    </form>
    <?php endforeach?>
</div>