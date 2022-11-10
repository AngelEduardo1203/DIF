<?php 
class ServiciosC extends CI_Controller
{
    public function show(){
        $this->load->view('headers/head.php');
        $this->load->view('headers/menu.php');
        $this->load->view('tablas/servicios.php');
        $this->load->view('headers/fooder.php');


}

    public function getServisios(){

    }
}
?>

