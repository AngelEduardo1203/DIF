<?php  
class IngresosC extends CI_Controller
{
    public function show(){
        $this->load->model('IngresosM');
        $data['ingresos']=$this->IngresosM->getIngresos();
  $this->load->view('headers/head.php');
  $this->load->view('headers/menut.php');
  $this->load->view('headers/MInicio.php');
          $this->load->view('tablas/ingresos.php',$data);
        $this->load->view('headers/fooder.php');
    }
    public function ingresosF($Id_Familiares){
        $this->load->model('IngresosM');
        $data['ingreso']=$this->IngresosM->getIngresosF($Id_Familiares);

  $this->load->view('headers/head.php');
  $this->load->view('headers/menut.php');
  $this->load->view('headers/MInicio.php');;
        $this->load->view('detalles/detalleIngresos.php',$data);
        $this->load->view('headers/fooder.php');
    }

    public function detalleIn($Id_Ingresos){
        $this->load->model('IngresosM');
        $data['ingreso']=$this->IngresosM->getIngreso($Id_Ingresos);
   
  $this->load->view('headers/head.php');
  $this->load->view('headers/menut.php');
  $this->load->view('headers/MInicio.php');
        $this->load->view('tablas/Dingresos.php',$data);
        $this->load->view('headers/fooder.php');
    }


}
?>