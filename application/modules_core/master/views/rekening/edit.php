
<div id="real">
    <div id="statusdonor">
      <center><b style="float:center;  color:red;"><?php echo $this->session->flashdata('message'); ?></b></center>
		<?php echo form_open('master/rekening/edit'); ?>
        <input type="hidden" name="id_rekening" value="<?php echo $id;?>">
			<table class="table table-striped">

				<thead>
            <tr>
                <th colspan="4">::. Input Rekening</th>
            </tr>
            </thead>

            <tbody>

                <tr>
                <td>rekening</td>
                <td>:</td>
                <td><input type="text" name="rekening" placeholder="Masukkan rekening" value="<?php echo $nama_kamar;?>"></td>
                <td style="width:50%; color:red;"><?php echo form_error('rekening'); ?> </td>
                              
                </tr>

            	<tr>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td colspan="2"> <?php echo form_button(array('type'=>'submit','content'=>'Simpan','name'=>'simpan','id'=>'simpan','value'=>'Simpan','class'=>'btn btn-small  '));?>
                    <?php echo form_button(array('type'=>'reset','content'=>'Reset','name'=>'batal','id'=>'batal','value'=>'Reset','class'=>'btn btn-small  '));?>
                    <a href="<?php echo base_url();?>master/rekening" class="btn btn-small  ">Batal</a>
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