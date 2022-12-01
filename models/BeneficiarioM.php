<?php 

 class BeneficiarioM extends CI_Model
 {
 	
 	function getBeneficiarios(){
 		$query = $this->db->get('Beneficiario');
 		return $query->result();
 	}
  function getBeneficiario($Id_Beneficiario){
    $this->db->where('Id_Beneficiario',$Id_Beneficiario);
    $query = $this->db->get('Beneficiario');
    return $query->result();
  }

  function deleteBeneficiario($Id_Beneficiario){
    $this->db->where('Id_Beneficiario', $Id_Beneficiario);
    $this->db->delete('Beneficiario');
    return TRUE;
  }

  function insertBeneficiario(){
     $data = array(
     'nombre' => $this->input->post('nombre'),
     'apellido_paterno' => $this->input->post('apellido_paterno'),
     'apellido_materno' => $this->input->post('apellido_materno'),
     'estado_civil' => $this->input->post('estado_civil'),
     'genero' => $this->input->post('genero'),
     'fecha_nacimiento' => $this->input->post('fecha_Nacimiento'),
     'curp' => $this->input->post('curp')

     );
     $this->db->insert('Beneficiario', $data);
     return $this->db->insert_id();
  }

     function updateBeneficiario($Id_Beneficiario){
     $data = array(
     'nombre' => $this->input->post('nombre'),
     'apellido_paterno' => $this->input->post('apellido_paterno'),
     'apellido_materno' => $this->input->post('apellido_materno'),
     'estado_civil' => $this->input->post('estado_civil'),
     'genero' => $this->input->post('genero'),
     'fecha_nacimiento' => $this->input->post('fecha_nacimiento'),
     'curp' => $this->input->post('curp'),
     );
     $this->db->where('Id_Beneficiario', $Id_Beneficiario);
     $this->db->update('Beneficiario', $data);
     }
}?>