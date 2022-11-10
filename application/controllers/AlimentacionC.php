<?php 
class AlimentacionC extends CI_Controller
{
    public function show(){
        $this->load->model('AlimentacionM');
        $data['alimentacion'] = $this->AlimentacionM->getAlimentacion();

        $this->load->view('headers/head.php');
        $this->load->view('headers/menu.php');
        $this->loas->view('tablas/alimentacion.php',$data);
        $this->load->view('headers/fooder.php');

    }

    public function getAlimentacion(){

    }
}
?>