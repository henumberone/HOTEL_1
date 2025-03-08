<?php
    class gumanakana_model extends CI_Model {
        public function __construct() {
            parent::__construct();
            $this->load->database();
        }
        public function get_data() {
            return $this->db->get('reservations')->result_array();
        }

        public function add_data($data){
            $this->db->insert('reservations',$data);
        }
        public function delete_data($id){
            $this->db->where('ID',$id);
            $this->db->delete('reservations');
        }

    }
?>