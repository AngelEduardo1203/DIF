<?php  
class IngresosC extends CI_Controller
{
    public function show(){
        $this->load->model('IngresosbM');
        $data['ingresosb']=$this->IngresosbM->getIngresos();
  $this->load->view('headers/head.php');
  $this->load->view('headers/menut.php');
  $this->load->view('headers/MInicio.php');this->load->view('headers/head.php');
        $this->load->view('headers/menu.php');
        $this->load->view('tablas/ingresosb.php',$data);
        $this->load->view('headers/fooder.php');
    }
    public function ingresosB($Id_Beneficiario){
        $this->load->model('IngresosbM');
        $data['ingresob']=$this->IngresosbM->getIngresosb($Id_Beneficiario);

  $this->load->view('headers/head.php');
  $this->load->view('headers/menut.php');
  $this->load->view('headers/MInicio.php');
        $this->load->view('detalles/detalleIngresosb.php',$data);
        $this->load->view('headers/fooder.php');
    }

    public function detalleIn($Id_Ingreso){
        $this->load->model('IngresoM');
        $data['ingreso']=$this->IngresosbM->getIngreso($Id_Ingreso);
  $this->load->view('headers/head.php');
  $this->load->view('headers/menut.php');
  $this->load->view('headers/MInicio.php');
        $this->load->view('tablas/Dingresos.php',$data);
        $this->load->view('headers/fooder.php');
    }


}
?>