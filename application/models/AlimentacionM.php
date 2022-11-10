<?php 
 
 /**
  * 
  */
 class  AlimentacionM extends CI_Model
 {
 	function getlAlimentacion(){
 		$query = $this->db->get('alimentacion');
 		return $query->result();
 	}
 }

 ?>