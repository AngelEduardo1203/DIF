<?php 
class IngresosC extends CI_Controller
{
    public function show(){
        $this->load->view('headers/head.php');
        $this->load->view('headers/menu.php');
        $this->load->view('tablas/ingresos.php');
        $this->load->view('headers/fooder.php');



    }

    public function getIngresos(){

    }
}
?>