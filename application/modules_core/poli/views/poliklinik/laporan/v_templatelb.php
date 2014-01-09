<?php
/**/?>
<div class="span9">
<table>
	<tr>
		<td colspan="2">LAPORAN <?php echo $judul;?></td>
  <tr>
    <tr>
		<td colspan="2">Periode</td>
  </tr>
  <tr>
	 <?php $this->load->view('poliklinik/laporan/v_templatetahun');?>
   <?php $this->load->view('poliklinik/laporan/v_templatefilterpuskesmas');?>
        <td>&nbsp;</td>
        <input type="hidden" value='<?php echo $poli;?>' id="poli" name="poli" >
        <td valign="top"><button type="button" onclick="tampil();"  class="btn btn-small btn-primary">Tampilkan</button></td>
        <td valign="top"><button type="button" onclick="simpan();" class="btn btn-small" id="btnExport" name="btnExport" disabled>Export</button></td>
  </tr>
</tr>
<tr>
</tr>
</table>
<br/>
<br>
<div id="laporanPrev" class="scrollable" style="overflow-y: auto; overflow-x:auto"> <!-- height: 768px; --> 
	<?php //$this->load->view($file); ?>
</div>
</div>
<script type="text/javascript">

 jQuery(document).ready(function() {
      var items="";
      var purl = '<?php echo site_url("poli/laporan/lap_lb3/ajaxTahun");?>';
       $.getJSON(purl,function(kdatas){
       if (jQuery.isEmptyObject(kdatas)){
      }else{
        for(var i in kdatas){
          var kat = kdatas[i];
         items+="<option value='"+kat.tgl+"'>"+kat.tgl+"</option>";
       } 
         $("#tahun option").remove();
         $("#tahun").append(items); 
        }
        }
    );
});
function simpan(){
          var tahun=$('#tahun').val()
          var unker=$('#id_unit_kerja').val()
          var url='<?php echo site_url('poli/'.'laporan/'.$this->uri->segment(3).'/getLaporanRekamExcel/'.$poli.'/'.$judul);?>'+'/'+unker+'/'+tahun
          window.location = url
         //end submit function
      }
       
function tampil(){
        $('#laporanPrev').html('');
          data={
            tahun:$('#tahun').val(),
            poli:$('#poli').val(),
            unker:$('#id_unit_kerja').val()
            };
        $.ajax({
          url: '<?php echo site_url('poli/'.'laporan/'. $this->uri->segment(3) .'/getLaporanRekam')?>',
          data:data,
          method:'post',
          dataType: 'html',

          success: function(data){
            if(!data){
              data = 'Data Belum Tersedia';
              $('#btnExport').prop('disabled',true);
            }else
            {
              $('#btnExport').prop('disabled',false);
            }
            $('#laporanPrev').html(data);

          },
        });
         //end submit function
      }
</script>