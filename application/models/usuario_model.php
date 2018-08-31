<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Usuario_model extends CI_Model {

    function __construct() {
        parent::__construct();
    }

    public function cadastrar($data) {
        return $this->db->insert('usuario', $data);
    }
    
    public function delete($id){
        $this->db->where('idUsuario', $id);
        return $this->db->delete('usuario');
    }
    
    public function get_user_id($id){
        $this->db->where('idUsuario', $id);
        return $this->db->get('usuario')->result();
    }
    
    public function update($id,$data){
        $this->db->where('idUsuario', $id);
        return $this->db->update('usuario', $data);
    }
    
    public function get_usuarios(){
        $this->db->select('*');
        return $this->db->get('usuario')->result();
    }
    public function get_senha($id){
        $this->db->select('senha');
        $this->db->where('idUsuario', $id);
        return $this->db->get('usuario')->result();
    }

}
