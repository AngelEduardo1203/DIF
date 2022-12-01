<?php 

 class ApoyosM extends CI_Model
 {
 	
 	function getApoyos(){
 		$query = $this->db->get('Apoyos');
 		return $query->result();
 	}
  function getApoyo($Id_Apoyos){
    $this->db->where('Id_Apoyos',$Id_Apoyos);
    $query = $this->db->get('Apoyos');
    return $query->result();
  }

  function deleteApoyo($Id_Apoyos){
    $this->db->where('Id_Apoyos', $Id_Apoyos);
    $this->db->delete('Apoyos');
    return TRUE;
  }

  function insertApoyo(){
     $data = array(
     'nombre_apoyo' => $this->input->post('nombre_apoyo'),
     'descripcion' => $this->input->post('descripcion'),
     );
     $this->db->insert('Apoyos', $data);
  }

     function updateApoyo($Id_Apoyos){
     $data = array(
     'nombre_apoyo' => $this->input->post('nombre_apoyo'),
     'descripcion' => $this->input->post('descripcion'),
     );
     $this->db->where('Id_Apoyos', $Id_Apoyos);
     $this->db->update('Apoyos', $data);
     }
}?>