<?php 
/**
  * 
  */
 class FamiliaresM extends CI_Model
 {
     
     function getFamiliares(){
        $query = $this->db->get('familiares');
        return $query->result();
     }

     function getFamiliar($IdFamiliar){
        $this->db->where('IdFamiliar',$IdFamiliar);
        $query = $this->db->get('Familiares');
        return $query->result();
     }
     
      function getFamiliaresB($Id_Beneficiario){
        $this->db->where('Id_Beneficiario',$Id_Beneficiario);
        $query = $this->db->get('Familiares');
        return $query->result();
     }

     function deleteFamiliar($IdFamiliar){
        $this->db->where('IdFamiliar', $IdFamiliar);
        $this->db->delete('Familiares');
        return TRUE;
     }

     function insertFamiliar(){
        $data = array(

        'Nombre' => $this->input->post('Nombre'),
        'apellido_paterno' => $this->input->post('ApellidoPaterno'),
        'apellido_materno' => $this->input->post('ApellidoMaterno'),
        'fecha_nacimiento' => $this->input->post('FechaNacimiento'),
        'parentesco' => $this->input->post('Parentesco'),
        'grado_escolar' => $this->input->post('GradoEscolar'),
        'ocupacion' => $this->input->post('Ocupacion'),
        'seguro_social' => $this->input->post('SeguroSocial'),
        'Id_Beneficiario' =>$this->input->post('IdBeneficiario')
        );

        $this->db->insert('Familiares', $data);
     }

     function updateFamiliar($IdFamiliar){
        $data = array(
        'IdBeneficiario' => $this->input->post('IdBeneficiario'),
        'Nombre' => $this->input->post('Nombre'),
        'ApellidoPaterno' => $this->input->post('ApellidoPaterno'),
        'ApellidoMaterno' => $this->input->post('ApellidoMaterno'),
        'FechaNacimiento' => $this->input->post('FechaNacimiento'),
        'Parentesco' => $this->input->post('Parentesco'),
        'GradoEscolar' => $this->input->post('GradoEscolar'),
        'Ocupacion' => $this->input->post('Ocupacion'),
        'SeguroSocial' => $this->input->post('SeguroSocial')
        );
        $this->db->where('IdFamiliar',$IdFamiliar);
        $this->db->update('Familiares', $data);
     }

 } ?>