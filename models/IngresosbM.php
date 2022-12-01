<?php  
    class IngresosbM extends CI_Model
{
    
    function getIngresos(){
        $query = $this->db->get('Ingresos');
        return $query->result();
    }

    function getIngreso($Id_Ingresosb){
        $this->db->where('Id_Ingresosb',$Id_Ingresosb);
        $query = $this->db->get('Ingresosb');
        return $query->result();
    }

    function getIngresosb($Id_Beneficiario){
    $this->db->where('Id_Beneficiario',$Id_Beneficiario);
    $query = $this->db->get('Ingresosb');
    return $query->result();
  }

}
?>