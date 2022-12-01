<?php 
 
 /**
  * 
  */
 class  AlimentacionM extends CI_Model
 {
 	function getAlimentacion(){
 		$query = $this->db->get('Alimentacion');
 		return $query->result();
 	}

    function getalimentacionb($Id_Beneficiario){
        $this->db->where('Id_Beneficiario',$Id_Beneficiario);
        $query = $this->db->get('Alimentacion');
        return $query->result();
    }

    function getalimentacionI($Id_Alimentacion){
        $this->db->where('Id_Alimentacion',$Id_Alimentacion);
        $query = $this->db->get('alimentacion');
        return $query->result();
    }

    function deleteAlimentacion($Id_Alimentacion){
        this->db->where('Id_Alimentacion',$Id_Alimentacion);
        $this->db->delete('Alimentacion');
        return TRUE;
    }

    function deleteAlimentacionB($Id_Beneficiario){
        $this->db->where('$Id_Beneficiario', $Id_Beneficiario);
        $this->db->delete('alimentacion');
        return TRUE;
    }

    function insertAlimentacion(){
         $data = array(
         'Id_Beneficiario'=>$this->input->post(''),
         'pollo ' =>$this->input->post('pollo'),
         'res ' =>$this->input->post('res'),
         'cerdo ' =>$this->input->post('cerdo'),
         'pescado ' =>$this->input->post('pescado'),
         'leche ' =>$this->input->post('leche'),
         'cereales ' =>$this->input->post('cereales'),
         'huevo ' =>$this->input->post('huevo'),
         'frutas ' =>$this->input->post('frutas'),
         'verduras ' =>$this->input->post('verduras'),
         'leguminosas' =>$this->input->post('leguminosas'),
         'otros ' =>$this->input->post('otros')
         );
         $this->db->insert('Alimentacion', $data);
    }

         function updateAlimentacion($Id_Alimentacion){
         $data = array(
         'pollo ' =>$this->input->post('pollo'),
         'res ' =>$this->input->post('res'),
         'cerdo ' =>$this->input->post('cerdo'),
         'pescado ' =>$this->input->post('pescado'),
         'leche ' =>$this->input->post('leche'),
         'cereales ' =>$this->input->post('cereales'),
         'huevo ' =>$this->input->post('huevo'),
         'frutas ' =>$this->input->post('frutas'),
         'verduras ' =>$this->input->post('verduras'),
         'leguminosas' =>$this->input->post('leguminosas'),
         'otros ' =>$this->input->post('otros')
         );
         $this->db->where('Id_Alimentacion', $Id_Alimentacion);
         $this->db->update('Alimentacion', $data);
         }
     }

 ?>