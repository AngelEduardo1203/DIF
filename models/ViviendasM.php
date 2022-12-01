
<?php 
/**
  * 
  */
 class ViviendasM extends CI_Model
 {
    
    function getViviendas(){
      $query = $this->db->get('Vivienda');
      return $query->result();
   }

   function getVivienda($Id_Vivienda){
      $this->db->where('IdVivienda',$IdVivienda);
      $query = $this->db->get('Vivienda');
      return $query->result();
   }

   function getViviendaB($Id_Beneficiario){
      $this->db->where('Id_Beneficiario',$Id_Beneficiario);
      $query = $this->db->get('Vivienda');
      return $query->result();
   } 

   function deleteVivienda($IdVivienda){
      $this->db->where('IdVivienda', $IdVivienda);
      $this->db->delete('Viviendas');
      return TRUE;
   }

   function insertVivienda(){
      $data = array(
      'Tenencia' => $this->input->post('Tenencia'),
      'Tipo_Vivienda' => $this->input->post('Tipo_Vivienda'),
      );

      $this->db->insert('Viviendas', $data);
   }

   function updateVivienda($IdVivienda){
      $data = array(
      'Tenencia' => $this->input->post('Tenencia'),
      'Tipo_Vivienda' => $this->input->post('Tipo_Vivienda'),
      );
      $this->db->where('IdVivienda',$IdVivienda);
      $this->db->update('Viviendas', $data);
   }
 } ?>