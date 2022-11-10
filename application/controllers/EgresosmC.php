<?php 
class EgresosmC extends CI_Controller
{
    public function show(){
        $this->load->view('headers/head.php');
        $this->load->view('headers/menu.php');
        $this->loas->view('tablas/egresosm.php')
        $this->load->view('headers/fooder.php');

    }

    public function getAlimentacion(){

    }
}
?>