<html>
<head>
  <title></title>
</head>
<body>
  <div id="real">
    <div id="statusdonor">
      <div><b>::.Data Obat</b></div>
      <table class="table">
        <?php echo form_open('farmasi/farmasi_obats/search','class="navbar-form pull-right"');?>
        <tr>
          <td width="60%"><a href="<?php echo base_url();?>farmasi/farmasi_obats/add" class="btn btn-small btn-success">Tambah Obat</a></td>
          <td><input type"text" name="keysearch" placeholder="Masukkan Kata Kunci.."></td>
          <td><button type="submit" class="btn btn-small btn-success"><i class="icon icon-search icon-white"></i>Cari Obat</button></td>
        </tr>
        <?php echo form_close(); ?>
      </table>
      <center><b style="color:red"><?php echo $this->session->flashdata('message') ?></b></center>
       <ul>
            <?php
              echo $paginator;
            ?>
            </ul>
      <table class="table table-striped">
        <thead>
          <tr>
            <th>No</th>
            <th colspan="2" width="12%">Aksi</th>
            <th>Nama Obat</th>
            <th>Jenis</th>
            <th>Satuan</th>
            <th>Golongan</th>
            <th>Dosis</th>
            <th>Stok</th>
            <th>Harga Beli</th>
            <th>Harga Jual</th>

          </tr>
        </thead>
        <tbody>
          <?php
          $no=1; 
            foreach ($farmasi_obats->result_array() as $data) { ?>
            <tr>
              <td><?php echo $no ?></td>
              <td colspan="2">
                <a href="<?php echo base_url();?>farmasi/farmasi_obats/edit/<?php echo $data['id']; ?>" class="btn btn-small btn-success" ><i class="icon-wrench icon-white"></i></a>
                <a href="<?php echo base_url();?>farmasi/farmasi_obats/delete/<?php echo $data['id']; ?>" class="btn btn-small btn-warning" onclick="return confirm('Apakah Anda Yakin Ingin Mengahapus <?php echo $data['nama_obat']; ?> ?')" ><i class="icon-remove"></i></a>

              </td>
              <td><?php echo $data['nama_obat'] ?></td>
              <td><?php echo $data['nama_obat_jenis']; ?></td>
              <td><?php echo $data['nama_satuan']; ?></td>
              <td><?php echo $data['nama_golongan']; ?></td>
              <td><?php echo $data['dosis']; ?></td>
              <td><?php echo $data['qtt']; ?></td>
              <td><?php echo $data['harga_beli']; ?></td>
              <td><?php echo $data['harga_jual']; ?></td>
            </tr>

            <?php
            $no++;  
            }
            ?>
        </tbody>
      </table>
    </div>
  </div>
  <div class="pagination pagination-centered">
            <ul>
            <?php
              echo $paginator;
            ?>
            </ul>
        </div>
  <?php 
$pesan = $this->session->flashdata('message');
        if ($this->session->flashdata('message')){
echo "<script>alert('$pesan')</script>";
        }
      
      ?>

</body>
</html>