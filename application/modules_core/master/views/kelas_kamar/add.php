
<div id="real">
    <div id="statusdonor">
      <center><b style="float:center;  color:red;"><?php echo $this->session->flashdata('message'); ?></b></center>
		<?php echo form_open('master/kelas_kamar/add'); ?>
			<table class="table table-striped">

				<thead>
            <tr>
                <th colspan="4">::. Input Kelas Kamar</th>
            </tr>
            </thead>

            <tbody>

                <tr>
                <td>Kelas Kamar</td>
                <td>:</td>
                <td><input type="text" name="kelas_kamar" placeholder="Masukkan Kelas Kamar"></td>
                <td style="width:50%; color:red;"><?php echo form_error('kelas_kamar'); ?> </td>
                
               
                </tr>

            	<tr>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td colspan="2"> <?php echo form_button(array('type'=>'submit','content'=>'Simpan','name'=>'simpan','id'=>'simpan','value'=>'Simpan','class'=>'btn btn-small  '));?>
                    <?php echo form_button(array('type'=>'reset','content'=>'Reset','name'=>'batal','id'=>'batal','value'=>'Reset','class'=>'btn btn-small  '));?>
                    <a href="<?php echo base_url();?>master/kelas_kamar" class="btn btn-small  ">Batal</a>
                </td>
                <td>&nbsp;</td>
            </tr>
				
				
				</tbody>
			</table>
			<?php echo form_close(); ?>
		
		</div>
	</div>
</body>
</html>