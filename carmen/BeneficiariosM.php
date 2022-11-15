<?php 

 class BeneficiariosM extends CI_Model
 {
 	
 	function getBeneficiarios(){
 		$query = $this->db->get('Beneficiarios');
 		return $query->result();
 	}
  function getBeneficiario($IdBeneficiario){
    $this->db->where('IdBeneficiario',$IdBeneficiario);
    $query = $this->db->get('Beneficiarios');
    return $query->result();
  }

  function deleteBeneficiario($IdBeneficiario){
    $this->db->where('IdBeneficiario', $IdBeneficiario);
    $this->db->delete('Beneficiarios');
    return TRUE;
  }

  function insertBeneficiario(){
     $data = array(
     'Nombre' => $this->input->post('Nombre'),
     'Apellido_Paterno' => $this->input->post('Apellido_Paterno'),
     'Apellido_Materno' => $this->input->post('Apellido_Materno'),
     'Estado_Civil' => $this->input->post('Estado_Civil'),
     'Genero' => $this->input->post('Genero'),
     'Fecha_Nacimiento' => $this->input->post('Fecha_Nacimiento'),
     'Curp' => $this->input->post('Curp'),
     );
     $this->db->insert('Beneficiarios', $data);
  }

     function updateBeneficiario($IdBeneficiario){
     $data = array(
     'Nombre' => $this->input->post('Nombre'),
     'Apellido_Paterno' => $this->input->post('Apellido_Paterno'),
     'Apellido_Materno' => $this->input->post('Apellido_Materno'),
     'Estado_Civil' => $this->input->post('Estado_Civil'),
     'Genero' => $this->input->post('Genero'),
     'Fecha_Nacimiento' => $this->input->post('Fecha_Nacimiento'),
     'Curp' => $this->input->post('Curp'),
     );
     $this->db->where('IdBeneficiario', $IdBeneficiario);
     $this->db->update('beneficiarios', $data);
     }
}?>