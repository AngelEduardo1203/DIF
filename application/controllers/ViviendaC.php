<?php 
class ViviendaC extends CI_Controller
{
    public function show(){
        $this->load->view('views/heders/head.php');
        $this->load->view('heders/menu.php');
        $this->loas->view('tablas/vivienda.php')
        $this->load->view('heders/fooder.php');

    }
    public function GetVivienda(){
        print "hola";

    }
}
?>