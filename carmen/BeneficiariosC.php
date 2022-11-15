<?php
class BeneficiariosC extends CI_Controller
{
function __construct() {
         parent::__construct();
         if(!$this->session->userdata('Logeado')){
          redirect(base_url());
         }
       }

  public  function show(){
  $this->load->model('BeneficiariosM');
 $data['beneficiarios'] = $this->BeneficiariosM->getBeneficiarios();

  $this->load->view('headers/head.php');
  $this->load->view('headers/menu.php');
  $this->load->view('beneficiarios/listaBeneficiarios.php',$data);
  $this->load->view('headers/footer.php');
  
  }
public function detalleBeneficiario($IdBeneficiario){
 $this->load->model('BeneficiariosM');
 $data['beneficiario'] = $this->BeneficiariosM->getBeneficiario( $IdBeneficiario);

  $this->load->view('headers/head.php');  
  $this->load->view('headers/menu.php');
  $this->load->view('beneficiarios/detalleBeneficiario.php',$data);
  $this->load->view('headers/footer.php');
  }
public function eliminarBeneficiario($IdBeneficiario){
$this->load->model('BeneficiariosM');
if($this->BeneficiariosM->deleteBeneficiario($IdBeneficiario)){
  redirect(base_url('index.php/BeneficiariosC/show'),'refresh');
  }
 }

public function insertBeneficiario(){
  $this->load->model('BeneficiariosM');
  $this->load->helper(array('form', 'url'));
  $this->load->library('form_validation');
  $this->form_validation->set_rules('Nombre', 'Nombre', 'required');
  $this->form_validation->set_rules('Apellido_Paterno', 'Apellido_Paterno', 'required');
  $this->form_validation->set_rules('Apellido_Materno', 'Apellido_Materno', 'required');
  $this->form_validation->set_rules('Estado_Civil', 'Estado_Civil', 'required');
  $this->form_validation->set_rules('Genero', 'Genero', 'required');
  $this->form_validation->set_rules('Fecha_Nacimiento', 'Fecha_Nacimiento', 'required');
  $this->form_validation->set_rules('Curp', 'Curp', 'required');
 if($this->form_validation->run() == FALSE)
  {
  $this->load->view('headers/head.php');
  $this->load->view('headers/menu.php');
  $this->load->view('beneficiarios/insertBeneficiario');
  $this->load->view('headers/footer.php');
}
else
{
  $this->BeneficiariosM->insertBeneficiario();
  redirect(base_url('index.php/BeneficiariosC/show'),'refresh');
}
    }

public function updateBeneficiario($IdBeneficiario){
  $this->load->model('BeneficiariosM');
  $data['beneficiario'] = $this->BeneficiariosM->getBeneficiario($IdBeneficiario);
  $this->load->helper(array('form', 'url'));

  $this->load->library('form_validation');
  $this->form_validation->set_rules('Nombre', 'Nombre', 'required');
  $this->form_validation->set_rules('Apellido_Paterno', 'Apellido_Paterno', 'required');
  $this->form_validation->set_rules('Apellido_Materno', 'Apellido_Materno', 'required');
  $this->form_validation->set_rules('Estado_Civil', 'Estado_Civil', 'required');
  $this->form_validation->set_rules('Genero', 'Genero', 'required');
  $this->form_validation->set_rules('Fecha_Nacimiento', 'Fecha_Nacimiento', 'required');
  $this->form_validation->set_rules('Curp', 'Curp', 'required');
 if($this->form_validation->run() == FALSE)
  {
  $this->load->view('headers/head.php');
  $this->load->view('headers/menu.php');
  $this->load->view('beneficiarios/updateBeneficiario',$data);
  $this->load->view('headers/footer.php');
}
else
{
  $this->BeneficiariosM->updateBeneficiario($IdBeneficiario);
  redirect(base_url('index.php/BeneficiariosC/show'),'refresh');
}
    }


public function getBeneficiario($IdBeneficiario){
  $this->load->view('headers/head.php');
  $this->load->view('headers/menu.php');
  
  $this->load->view('headers/footer.php');
  
        }
}?>
