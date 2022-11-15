<?php 

 class ApoyosM extends CI_Model
 {
 	
 	function getApoyos(){
 		$query = $this->db->get('Apoyos');
 		return $query->result();
 	}
  function getApoyo($IdApoyo){
    $this->db->where('IdApoyo',$IdApoyo);
    $query = $this->db->get('Apoyos');
    return $query->result();
  }

  function deleteApoyo($IdApoyo){
    $this->db->where('IdApoyo', $IdApoyo);
    $this->db->delete('Apoyos');
    return TRUE;
  }

  function insertApoyo(){
     $data = array(
     'Nombre_Apoyo' => $this->input->post('Nombre_Apoyo'),
     'Fecha_Entrega' => $this->input->post('Fecha_Entrega'),
     'Nombre_Beneficiario' => $this->input->post('Nombre_Beneficiario'),
     'Nombre_Tutor' => $this->input->post('Nombre_Tutor'),
     'Descripcion' => $this->input->post('Descripcion'),
     );
     $this->db->insert('Apoyos', $data);
  }

     function updateApoyo($IdApoyo){
     $data = array(
     'Nombre_Apoyo' => $this->input->post('Nombre_Apoyo'),
     'Fecha_Entrega' => $this->input->post('Fecha_Entrega'),
     'Nombre_Beneficiario' => $this->input->post('Nombre_Beneficiario'),
     'Nombre_Tutor' => $this->input->post('Nombre_Tutor'),
     'Descripcion' => $this->input->post('Descripcion'),
     );
     $this->db->where('IdApoyo', $IdApoyo);
     $this->db->update('Apoyos', $data);
     }
}?>