<?php
    class Pages_model extends CI_Model{
        public function __construct(){
            $this->load->database();
        }

        public function get_adqry($slug=FALSE){
            if($slug === FALSE){
                $this->db->order_by('adq_id','DESC');
                $query = $this->db->get('adqry');
                return $query->result_array();
            }
            $query = $this->db->get_where('adqry',array('slug'=>$slug));
            return $query->row_array();
        }

        
        
    }