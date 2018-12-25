<?php
    class Ustadz_model extends CI_model{
        public function getAllUstadz()
        {
            return $this->db->get('ustadz')->result_array();
        }
    }