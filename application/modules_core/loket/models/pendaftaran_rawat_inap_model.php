<?php
class pendaftaran_rawat_inap_model extends Ci_model{
	function add($insert){
		$this->db->insert('tbl_pasien_rawat_inap',$insert);
	}

	function get_data(){
		return $this->db->get('tbl_pasien_rawat_inap');
	}

	function getDetail($nik_pasien,$tanggal_registrasi){
		return $this->db->query("select a.*,b.*,b.id as id_pasien,c.* ,d.*, e.*,f.* from tbl_pasien_rawat_inap a join sosial_anggota_keluarga b on a.pasien_id=b.id join tbl_ruang_kamar c on a.kamar_id=c.id_ruang_kamar join sosial_agama d on b.agama_id=d.id join sosial_pendidikan e on b.pendidikan_id=e.id join sosial_pekerjaan f on b.pekerjaan_id=f.id  where a.tanggal_registrasi='$tanggal_registrasi' and b.nik='$nik_pasien'");
	}

	function delete($id_pasien){
		$this->db->where('id_pasien_rawat_inap',$id_pasien);
		$this->db->delete('tbl_pasien_rawat_inap');
	}
}
?>