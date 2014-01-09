<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title></title>
    

            <link rel="stylesheet" href="<?php echo base_url();?>bootstrap/css/bootstrap.css" />
            <link rel="stylesheet" href="<?php echo base_url();?>bootstrap/css/bootstrap-responsive.min.css" />
     

       

         
            <script src="<?php echo base_url();?>js/jquery-1.8.3.js"></script>

            
            <script type="text/javascript">

            $(document).ready(function(){

                $("#update").live('click',function(){

                    var nama_satuan = $("#nama_satuan").val();
                    var id_satuan= $("#id_satuan").val();

                    if (nama_satuan=="") {
                        alert("Data Tidak Boleh  Kosong");
                        $("#nama_satuan").focus();

                    }
                    else {

                    $.ajax({
                            type:"POST",
                            url :"<?php echo base_url();?>farmasi/apt_satuan/edit",
                            data:"id_satuan="+id_satuan+"&nama_satuan="+nama_satuan,
                            success : function (data) {

                                
                                window.parent.location.reload(true);
                        
                                
                            }


                        });
                }

                });

              

            });


            </script>
    
       



   </head>
    <body>


<div id="real">
  <div id="statusdonor">
   
    <table class="table table-striped">
       
            <tr>
                <td ><b>::. EDIT DATA MASTER SATUAN OBAT</b></td>
                
            </tr>
        
        </table>

        <table class="table table-striped">
            <tbody>
                
                <tr>
                    <td>Nama Satuan Obat</td>
                    <td>:</td>
                    <td>
                        <input type="text" name="nama_satuan" id="nama_satuan" value="<?php echo $nama_satuan ?>"> 
                    </td>
                     <td>&nbsp;</td>
                </tr>

            <input type="hidden" name="id_satuan" id="id_satuan" value="<?php echo $id_satuan ?>" >
                

                 <tr>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td colspan="1"> 
                    <button type="submit" class="btn btn-small" id="update">Update</button>
                    <!-- <INPUT Type="button" class="btn btn-small" VALUE="Kembali" onClick="history.go(-1);return true;"> -->

                </td>
                <td>&nbsp;</td>
                
                </tr>
                
            </tbody>
        </table>
        
        
    </div>
</div>



      
    </div>
  </body>
</html>
