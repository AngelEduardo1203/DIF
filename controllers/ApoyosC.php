<?php
class ApoyosC extends CI_Controller
{
  public  function show(){
  $this->load->model('ApoyosM');
 $data['apoyos'] = $this->ApoyosM->getApoyos();

  $this->load->view('headers/head.php');
  $this->load->view('headers/menu.php');
  $this->load->view('tablas/listaApoyos.php',$data);
  $this->load->view('headers/fooder.php');
  
  }

public function detalleApoyo($Id_Apoyo){
 $this->load->model('ApoyosM');
 $data['apoyo'] = $this->ApoyosM->getApoyo($Id_Apoyo);

  $this->load->view('headers/head.php');
  $this->load->view('headers/menu.php');
  $this->load->view('detalles/detalleApoyo.php',$data);
  $this->load->view('headers/fooder.php');
  }
  
public function eliminarApoyo($Id_Apoyo){
$this->load->model('ApoyosM');
if($this->ApoyosM->deleteApoyo($Id_Apoyo)){
  redirect(base_url('index.php/ApoyosC/show'),'refresh');
  }
 }

public function insertApoyo(){
  $this->load->model('ApoyosM');
  $this->load->helper(array('form', 'url'));
  $this->load->library('form_validation');
  $this->form_validation->set_rules('Nombre_Apoyo', 'Nombre_Apoyo', 'required');
  $this->form_validation->set_rules('Descripcion', 'Descripcion', 'required');
 if($this->form_validation->run() == FALSE)
  {
  $this->load->view('headers/head.php');
  $this->load->view('headers/menu.php');
  $this->load->view('apoyos/insertApoyo');
  $this->load->view('headers/fooder.php');
}
else
{
  $this->ApoyosM->insertApoyo();
  redirect(base_url('index.php/ApoyosC/show'),'refresh');
}
    }

public function updateApoyo($Id_Apoyo){
  $this->load->model('ApoyosM');
  $data['apoyo'] = $this->ApoyosM->getApoyo($Id_Apoyo);
  $this->load->helper(array('form', 'url'));

  $this->load->library('form_validation');
  $this->form_validation->set_rules('nombre_apoyo', 'nombre_apoyo', 'required');
   if($this->form_validation->run() == FALSE)
  {
  $this->load->view('headers/head.php');
  $this->load->view('headers/menu.php');
  $this->load->view('actualisar/updateApoyo',$data);
  $this->load->view('headers/fooder.php');
}
else
{
  $this->ApoyosM->updateApoyo($Id_Apoyo);
  redirect(base_url('index.php/ApoyosC/show'),'refresh');
}
    }


public function getApoyo($Id_Apoyo){
  $this->load->view('headers/head.php');
  $this->load->view('headers/menu.php');
  
  $this->load->view('headers/footer.php');
  
        }
}?>

