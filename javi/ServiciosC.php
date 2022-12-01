<?php
class ServiciosC extends CI_Controller
{
function __construct() {
         parent::__construct();
         if(!$this->session->userdata('Logeado')){
          redirect(base_url());
         }
}

  public  function show(){
  $this->load->model('ServiciosM');
  $data['servicios'] = $this->ServiciosM->getServicios();

  $this->load->view('headers/head.php');
  $this->load->view('headers/menu.php');
  $this->load->view('servicios/listaServicios.php',$data);
  $this->load->view('headers/footer.php');
  
}

public function detalleServicio($IdServicio){
 $this->load->model('ServiciosM');
 $data['servicios'] = $this->ServiciosM->getServicio($IdServicio);

  $this->load->view('headers/head.php');
  $this->load->view('headers/menu.php');
  $this->load->view('servicios/detalleServicio.php',$data);
  $this->load->view('headers/footer.php');
}

public function eliminarServicio($IdServicio){
$this->load->model('ServiciosM');
if($this->ServiciosM->deleteServicio($IdServicio)){
  redirect(base_url('index.php/ServiciosC/show'),'refresh');
  }
}

public function insertServicio(){
  $this->load->model('ServiciosM');
  $this->load->helper(array('form', 'url'));
  $this->load->library('form_validation');
  $this->form_validation->set_rules('Agua', 'Agua', 'required');
  $this->form_validation->set_rules('Luz', 'Luz', 'required');
  $this->form_validation->set_rules('Alumbrado', 'Alumbrado', 'required');
  $this->form_validation->set_rules('Drenaje', 'Drenaje', 'required');
  $this->form_validation->set_rules('Gas', 'Gas', 'required');
  $this->form_validation->set_rules('Telefono_Casa', 'Telefono_Casa', 'required');
  $this->form_validation->set_rules('Telefono_Celular', 'Telefono_Celular', 'required');
  $this->form_validation->set_rules('Vigilancia', 'Vigilancia', 'required');
  $this->form_validation->set_rules('Television_Abierta', 'Television_Abierta', 'required');
  $this->form_validation->set_rules('Television_Paga', 'Television_Paga', 'required');
  $this->form_validation->set_rules('Limpieza', 'Limpieza', 'required');
  $this->form_validation->set_rules('Pavimento', 'Pavimento', 'required')
  
  if($this->form_validation->run() == FALSE)
  {

  $this->load->view('headers/head.php');
  $this->load->view('headers/menu.php');
  $this->load->view('servicios/insertServicio');
  $this->load->view('headers/footer.php');
}
  else
{
    $this->ServiciosM->insertServicio();
    redirect(base_url('index.php/ServiciosC/show'),'refresh');
}
  }

public function updateServicio($IdServicio){
  $this->load->model('ServiciosM');
  $data['servicios'] = $this->ServiciosM->getServicio($IdServicio);
  $this->load->helper(array('form', 'url'));
  $this->form_validation->set_rules('Agua', 'Agua', 'required');
  $this->form_validation->set_rules('Luz', 'Luz', 'required');
  $this->form_validation->set_rules('Alumbrado', 'Alumbrado', 'required');
  $this->form_validation->set_rules('Drenaje', 'Drenaje', 'required');
  $this->form_validation->set_rules('Gas', 'Gas', 'required');
  $this->form_validation->set_rules('Telefono_Casa', 'Telefono_Casa', 'required');
  $this->form_validation->set_rules('Telefono_Celular', 'Telefono_Celular', 'required');
  $this->form_validation->set_rules('Vigilancia', 'Vigilancia', 'required');
  $this->form_validation->set_rules('Television_Abierta', 'Television_Abierta', 'required');
  $this->form_validation->set_rules('Television_Paga', 'Television_Paga', 'required');
  $this->form_validation->set_rules('Limpieza', 'Limpieza', 'required');
  $this->form_validation->set_rules('Pavimento', 'Pavimento', 'required')
  $this->load->library('form_validation');
  
 if($this->form_validation->run() == FALSE)
  {
  $this->load->view('headers/head.php');
  $this->load->view('headers/menu.php');
  $this->load->view('servicios/updateServicio',$data);
  $this->load->view('headers/footer.php');
}
else
{
  $this->ServiciosM->updateServicio($IdServicio);
  redirect(base_url('index.php/ServiciosC/show'),'refresh');
}
    }


public function getServicio($IdServicio){
  $this->load->view('headers/head.php');
  $this->load->view('headers/menu.php');
  
  $this->load->view('headers/footer.php');
  
        }
}?>