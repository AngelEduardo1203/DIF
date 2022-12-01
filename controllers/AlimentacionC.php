<?php 
class AlimentacionC extends CI_Controller
{
    public function show(){
        $this->load->model('AlimentacionM');
        $data['alimentacion'] = $this->AlimentacionM->getAlimentacion();

        $
  $this->load->view('headers/head.php');
  $this->load->view('headers/menut.php');
  $this->load->view('headers/MInicio.php');
        $this->load->view('tablas/alimentacion.php',$data);
        $this->load->view('headers/fooder.php');

    }
public function detalleAlimentacion($Id_Alimentacion){
 $this->load->model('AlimentacionM');
 $data['alimento'] = $this->AlimentacionM->getalimentacionI($Id_Alimentacion);

  
  $this->load->view('headers/head.php');
  $this->load->view('headers/menut.php');
  $this->load->view('headers/MInicio.php');
  $this->load->view('detalles/detalleAlimentacion.php',$data);
  $this->load->view('headers/fooder.php');
  }
  
  public function eliminarAlimentacion($Id_Alimentacion){
  $this->load->model('AlimentacionM');
  if($this->ApoyosM->deletAlimentacion($Id_Alimentacion)){
    redirect(base_url('index.php/ApoyoC/show'),'refresh');
    }
 }

public function insertAlimentacion(){
  $this->load->model('Alimentacion;');
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
  $this->load->view('headers/menut.php');
  $this->load->view('headers/MInicio.php');
  $this->load->view('apoyos/insertApoyo');
  $this->load->view('headers/footer.php');
}
else
{
  $this->ApoyosM->insertAlimentacion();
  redirect(base_url('index.php/ApoyosC/show'),'refresh');
}
    }

public function updateAlimentacion($Id_Alimentacion){
  $this->load->model('AlimentacionM');
  $data['alimento'] = $this->AlimentacionM->getAlimentacion($Id_Alimentacion);
  $this->load->helper(array('form', 'url'));
  $this->load->library('form_validation');
  $this->form_validation->set_rules('pollo','pollo','required');
  $this->form_validation->set_rules('res','res','required');
  $this->form_validation->set_rules('cerdo','cerdo','required');
  $this->form_validation->set_rules('pescado','pescado', 'required');
  if($this->form_validation->run() == FALSE)
  {

  $this->load->view('headers/head.php');
  $this->load->view('headers/menut.php');
  $this->load->view('headers/MInicio.php');
  $this->load->view('actualisar/uodateAlimentacion',$data);
  $this->load->view('headers/fooder.php');
    }
    else
    {
  $this->AlimentacionM->updatealimentacion($Id_Alimentacion);
  redirect(base_url('index.php/BeneficiarioC/show'),'refresh');
    }
}

public function getAlimentacion($Id_Alimentacion){

  $this->load->view('headers/head.php');
  $this->load->view('headers/menut.php');
  $this->load->view('headers/MInicio.php');
  $this->load->view('headers/footer.php');
  
        }
}?> 
