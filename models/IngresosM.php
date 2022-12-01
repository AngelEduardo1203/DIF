<?php  
    class IngresosM extends CI_Model
{
    
    function getIngresos(){
        $query = $this->db->get('Ingresos');
        return $query->result();
    }

    function getIngreso($Id_Ingresos){
        $this->db->where('Id_Ingresos',$Id_Ingresos);
        $query = $this->db->get('Ingresos');
        return $query->result();
    }

    function getIngresos($Id_Familiares){
    $this->db->where('Id_Familiares',$Id_Familiares);
    $query = $this->db->get('Ingresos');
    return $query->result();
  }

}
?>