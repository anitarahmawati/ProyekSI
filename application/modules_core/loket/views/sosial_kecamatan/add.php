<html>
<head>
    <title></title>

</head>

</body>
<div id="real">
    <div id="statusdonor">
      
        <?php echo form_open('loket/sosial_kecamatan/add'); ?>
            <table class="table table-striped">

                <thead>
            <tr>
                <th colspan="4">::. Input Kecamatan</th>
            </tr>
            </thead>

            <tbody>

                <tr>
                <td>Kecamatan</td>
                <td>:</td>
                <td><input type="text" name="nama_kecamatan" placeholder="Masukkan Kecamatan"> </td>
                <td style="width:70%; color:red;"><?php echo form_error('nama_kecamatan'); ?> </td>
                
               
                </tr>

                <tr>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td colspan="2"> <?php echo form_button(array('type'=>'submit','content'=>'Simpan','name'=>'simpan','id'=>'simpan','value'=>'Simpan','class'=>'btn btn-small  '));?>
                    <?php echo form_button(array('type'=>'reset','content'=>'Reset','name'=>'batal','id'=>'batal','value'=>'Reset','class'=>'btn btn-small  '));?>
                    <a href="<?php echo base_url();?>loket/sosial_kecamatan" class="btn btn-small  ">Batal</a>
                </td>
                <td>&nbsp;</td>
            </tr>
                
                
                <input type="hidden" name="id_kecamatan" value="<?php echo $id_kecamatan; ?>" />
                </tbody>
            </table>
            <?php echo form_close(); ?>
        
        </div>
    </div>
</body>
</html>