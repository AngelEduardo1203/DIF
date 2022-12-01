<?php 
class EgresosC extends CI_Controller
{
    public function show(){
        $this->load->model('Egresosm');
        $data['Egresos']=$this->Egresosm->Getegresos();
  $this->load->view('headers/head.php');
  $this->load->view('headers/menut.php');
  $this->load->view('headers/MInicio.php');
        $this->load->view('tablas/Egresos.php',$data);
        $this->load->view('headers/fooder.php');
    }
    public function egresoD($Id_EgresosMensuales){
        $this->load->model('Egresosm');
        $data['Egresos']=$this->Egresosm->getEgresoM($Id_EgresosMensuales);

  $this->load->view('headers/head.php');
  $this->load->view('headers/menut.php');
  $this->load->view('headers/MInicio.php');
        $this->load->view('detalles/detallesEgresos.php',$data);
        $this->load->view('headers/fooder.php');

    }
    
}
?>