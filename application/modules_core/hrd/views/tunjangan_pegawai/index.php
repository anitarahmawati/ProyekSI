<html>
<head>
  <title></title>
</head>
<body>
  <div id="real">
    <div id="statusdonor">
      <div><b>::. DATA TUNJANGAN PEGAWAI</b></div>
      
      <table class="table">
        <?php echo form_open('hrd/tunjangan_pegawai/search','class="navbar-form pull-right"');?>
        <tr>
          <td width="60%"></td>
          <td><input type"text" name="keysearch" placeholder="Masukkan NIP,Nama atau Jabatan.."></td>
          <td><button type="submit" class="btn btn-small"  ><i class="icon icon-search"></i> Cari Pegawai</button></td>
        </tr>
        <?php echo form_close(); ?>
      </table>
      <center><b style="float:center;  color:red;"><?php echo $this->session->flashdata('message'); ?></b></center>
      <table class="table table-striped">
        <thead>
          <tr>
            <th>No</th>
            <th>Aksi</th>
            <th>NIP</th>
            <th>Nama Pegawai</th>
            <th>Jabatan</th>
           
            
          </tr>
        </thead>
        <tbody>

         <?php
    $no=$tot+1;
    $no2=1;
                if($tunjangan_pegawai->num_rows()>0)
                {
              foreach ($tunjangan_pegawai->result_array() as $tampil) { ?>
              <tr>
                <td><?php echo $no ?></td>
                <td>
                  
                  <a class="btn small-box" rel="group" href="<?php echo base_url().'hrd/tunjangan_pegawai/edit/'.$tampil['id_pegawai'];?>"><i class="icon-edit"></i> Tambah/Edit Tunjangan</a>
                        <a class="btn small-box" rel="group" href="<?php echo base_url().'hrd/tunjangan_pegawai/detail/'.$tampil['id_pegawai'];?>"><i class="icon-share"></i> Detail</a>
                  
                        
          </td>
                <td><?php echo $tampil['nip_pegawai'] ?></td>
                <td><?php echo $tampil['nama_pegawai'] ?></td>
                <td><?php echo $tampil['nama_jabatan'] ?></td>
                
                

              </tr>
                
              <?php
              $no++;
              $no2++; 
              }
            }
                 else
        {
          ?>
          
        <tr style="text-align:center;">
          <td colspan="9">Tidak Ada Data Pegawai</td>
        </tr>
          <?php
        }
      ?>
            
          
          
        </tbody>

      </table>
      

  <div class="w-box-footer">
                    <div class="pagination pagination-centered">
                      <ul>
                        
                        <li> 
                          <?php
                            echo $paginator;
                          ?>
                        </li>
                       
                      </ul>
                    </div>
                  </div>

    </div>
  </div>

  

</body>
</html>