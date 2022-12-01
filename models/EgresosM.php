<?php 
/**
 * 
 */
class Egresosm extends CI_Model
{
	
	function GetEgresos(){
		$query = $this->db->get('EgresosMensuales');
		return $query->result();
	}
	function getEgreso($Id_Beneficiario){
    $this->db->where('Id_Beneficiario',$Id_Beneficiario);
    $query = $this->db->get('EgresosMensuales');
    return $query->result();
  }
	function getEgresom($Id_EgresosMensuales){
    $this->db->where('Id_EgresosMensuales',$Id_EgresosMensuales);
    $query = $this->db->get('EgresosMensuales');
    return $query->result();
  }
}
?>