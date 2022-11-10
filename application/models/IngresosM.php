<?php 
class IngresosC extends CI_Model
{
    
    public function getIngresos(){
        $query = &$this->db->get('Ingresos');
    }
}
?>