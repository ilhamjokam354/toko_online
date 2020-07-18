<div class="container-fluid">
    <button class="btn btn-sm btn-success mb-3" data-toggle="modal" data-target="#tdatabarang"><i class="fas fa-plus fa-sm"></i> Tambah Barang</button>

    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Nama Barang</th>
            <th>Keterangan</th>
            <th>Kategori</th>
            <th>Harga</th>
            <th>Stok</th>
            <th colspan="3" class="text-center">Aksi</th>
        </tr>
        <?php $no=1; foreach ($barang as $key):?>
        <tr>
            <td><?php echo $no++?></td>
            <td><?php echo $key->nama_barang?></td>
            <td><?php echo $key->keterangan?></td>
            <td><?php echo $key->kategori?></td>
            <td><?php echo $key->harga?></td>
            <td><?php echo $key->stok?></td>
            <td><?php echo anchor('admin/data_barang/detail/'.$key->id_barang, '<div class="btn btn-sm btn-info" data-toggle="tooltip" data-placement="bottom" title="Detail Barang"><i class="fas fa-search-plus" ></i> </div>')?></td>
            <td onclick="return confirm('Apakah Anda Yakin Ingin Mengubah!')"><?php echo anchor('admin/data_barang/edit/'.$key->id_barang, '<div class="btn btn-sm btn-primary" data-toggle="tooltip" data-placement="bottom" title="Update"> <i class="fa fa-edit" ></i></div>')?></td>
            <td onclick="return confirm('Apakah Anda Yakin Ingin Menghapus!')"><?php echo anchor('admin/data_barang/hapus/'.$key->id_barang, '<div class="btn btn-sm btn-danger" data-toggle="tooltip" data-placement="bottom" title="Hapus"><i class="fa fa-trash"></i> </div>')?></td>
        </tr>
        <?php endforeach?>
    </table>

</div>

<!-- Modal -->
<div class="modal fade" id="tdatabarang" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah Barang</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="<?php echo base_url().'admin/data_barang/tambahData'?>" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="nama">Nama Barang</label>
                <input type="text" name="nama" id="nama" autofocus required class="form-control"> 
            </div>

            <div class="form-group">
                <label for="ket">Keterangan</label>
                <input type="text" name="ket" id="ket" autofocus required class="form-control"> 
            </div>

            <div class="form-group">
                <label for="kat">Kategori</label>
                <select name="kategori" id="" class="form-control">
                  <option value="">Elektronik</option>
                  <option value="">Pakaian Pria</option>
                  <option value="">Pakaian Wanita</option>
                  <option value="">Pakaian Anak Anak</option>
                  <option value="">Pakaian Olahraga</option>
                </select>
            </div>

            <div class="form-group">
                <label for="harga">Harga</label>
                <input type="text" name="harga" id="harga" autofocus required class="form-control"> 
            </div>

            <div class="form-group">
                <label for="stok">Stok</label>
                <input type="text" name="stok" id="stok" autofocus required class="form-control"> 
            </div>

            <div class="form-group">
                <label for="gambar">Gambar Produk</label><br>
                <input type="file" name="gambar" id="gambar" autofocus required > 
            </div>

            <div class="modal-footer">
        
                <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
        </form>
      </div>
      
    </div>
  </div>
</div>