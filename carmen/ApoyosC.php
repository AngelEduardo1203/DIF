<?php
class ApoyosC extends CI_Controller
{
function __construct() {
         parent::__construct();
         if(!$this->session->userdata('Logeado')){
          redirect(base_url());
         }
       }

  public  function show(){
  $this->load->model('ApoyosM');
 $data['apoyos'] = $this->ApoyosM->getApoyos();

  $this->load->view('headers/head.php');
  $this->load->view('headers/menu.php');
  $this->load->view('apoyos/listaApoyos.php',$data);
  $this->load->view('headers/footer.php');
  
  }
public function detalleApoyo($IdApoyo){
 $this->load->model('ApoyosM');
 $data['apoyo'] = $this->ApoyosM->getApoyo( $IdApoyo);

  $this->load->view('headers/head.php');
  $this->load->view('headers/menu.php');
  $this->load->view('apoyos/detalleApoyo.php',$data);
  $this->load->view('headers/footer.php');
  }
public function eliminarApoyo($IdApoyo){
$this->load->model('ApoyosM');
if($this->ApoyosM->deleteApoyo($IdApoyo)){
  redirect(base_url('index.php/ApoyoC/show'),'refresh');
  }
 }

public function insertApoyo(){
  $this->load->model('ApoyosM');
  $this->load->helper(array('form', 'url'));
  $this->load->library('form_validation');
  $this->form_validation->set_rules('Nombre_Apoyo', 'Nombre_Apoyo', 'required');
  $this->form_validation->set_rules('Fecha_Entrega', 'Fecha_Entrega', 'required');
  $this->form_validation->set_rules('Nombre_Beneficiario', 'Nombre_Beneficiario', 'required');
  $this->form_validation->set_rules('Nombre_Tutor', 'Nombre_Tutor', 'required');
  $this->form_validation->set_rules('Descripcion', 'Descripcion', 'required');
 if($this->form_validation->run() == FALSE)
  {
  $this->load->view('headers/head.php');
  $this->load->view('headers/menu.php');
  $this->load->view('apoyos/insertApoyo');
  $this->load->view('headers/footer.php');
}
else
{
  $this->ApoyosM->insertApoyo();
  redirect(base_url('index.php/ApoyosC/show'),'refresh');
}
    }

public function updateApoyo($IdApoyo){
  $this->load->model('ApoyosM');
  $data['apoyo'] = $this->ApoyosM->getApoyo($IdApoyo);
  $this->load->helper(array('form', 'url'));

  $this->load->library('form_validation');
  $this->form_validation->set_rules('Nombre_Apoyo', 'Nombre_Apoyo', 'required');
  $this->form_validation->set_rules('Fecha_Entrega', 'Fecha_Entrega', 'required');
  $this->form_validation->set_rules('Nombre_Beneficiario', 'Nombre_Beneficiario', 'required');
  $this->form_validation->set_rules('Nombre_Tutor', 'Nombre_Tutor', 'required');
  $this->form_validation->set_rules('Descripcion', 'Descripcion', 'required');
 if($this->form_validation->run() == FALSE)
  {
  $this->load->view('headers/head.php');
  $this->load->view('headers/menu.php');
  $this->load->view('apoyos/updateApoyo',$data);
  $this->load->view('headers/footer.php');
}
else
{
  $this->ApoyosM->updateApoyo($IdApoyo);
  redirect(base_url('index.php/ApoyosC/show'),'refresh');
}
    }


public function getApoyo($IdApoyo){
  $this->load->view('headers/head.php');
  $this->load->view('headers/menu.php');
  
  $this->load->view('headers/footer.php');
  
        }
}?>

