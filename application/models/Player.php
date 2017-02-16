<?php
class Player extends CI_Model {

	function get_player_position_fw() {
        $query = $this->db->query("SELECT * FROM Player WHERE position = 'FW'");
        return $query->result();
    }

	function get_player_position_mf() {
        $query = $this->db->query("SELECT * FROM Player WHERE position = 'MF'");
        return $query->result();
    }

    function get_player_position_df() {
        $query = $this->db->query("SELECT * FROM Player WHERE position = 'DF'");
        return $query->result();
    }


	function get_player_position_gk() {
        $query = $this->db->query("SELECT * FROM Player WHERE position = 'GK'");
        return $query->result();
    }

}
?>