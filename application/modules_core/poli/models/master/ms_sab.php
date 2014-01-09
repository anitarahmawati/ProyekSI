<?

class ms_sab extends CI_Model {

    function __construct() {

        // Call the Model constructor

        parent::__construct();


    }

function list_data($count=false) {
        if($count){
            return $this->db->count_all_results('sanitasi_m_sab');
        }else{
            if($limit=$this->input->post('iDisplayLength')){
                $this->db->limit($limit,$this->input->post('iDisplayStart'));
            }else{
                $this->db->limit(10);
            }
            return $this->db->get('sanitasi_m_sab');
        }
    }

    function create() {
        $this->db->set('nama', $this->input->post('nama'));
        return $this->db->insert('sanitasi_m_sab'); 
    }

    function update() {
        $this->db->set('nama', $this->input->post('nama'));
        $this->db->where('id', $this->input->post('id'));
        return $this->db->update('sanitasi_m_sab');
    }

    function delete($id) {
        $this->db->where('id', $id);
        return $this->db->delete('sanitasi_m_sab');
    }
}
/*****/