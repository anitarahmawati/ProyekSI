<div id="real">
	<div id="statusdonor">
		<div><b>::. HASIL CARI PEKERJAAN </b> </div>

		<table class="table table-striped">
			<thead>
				<th>No</th>
				<th>Aksi</th>
				<th>Pekerjaan</th>

			</thead>

			<tbody>

				<?php
				$no = 1;
				if($get_data->num_rows()>0)
				{
					foreach($get_data->result_array() as $db)
					{
				?>
				
				<tr>
					<td><?php echo $no ; ?> </td>
					<td>
						<a class='btn btn-small  ' href="<?php echo base_url(); ?>master/sosial_pekerjaan/edit/<?php echo $db['id']; ?>"><i class="icon-wrench  "></i></a>
						<a class='btn btn-small  ' href="<?php echo base_url(); ?>master/sosial_pekerjaan/delete/<?php echo $db['id']; ?>" onclick="return confirm('Anda yakin ingin mengahapus <?php echo $db['nama_pekerjaan'] ?> ?');"><i class="icon-remove"></i></a>
					

					</td>

					
			
					
					<td><?php echo $db['nama_pekerjaan']; ?></td>
				</tr>

				


				<?php
				$no++;

					}

				}
				else
				{
					?>
					
				<tr style="text-align:center;">
					<td colspan="6">Tidak Ada Data Yang ditemukan</td>
				</tr>
					<?php
				}
			?>


			</tbody>

		</table>

	<a href="<?php echo base_url();?>master/sosial_pekerjaan" class="btn btn-small  ">Kembali</a>
                

	</div>

</div>


