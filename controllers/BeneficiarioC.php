<?php
class BeneficiarioC extends CI_Controller
{ 
  public  function show(){
  $this->load->model('BeneficiarioM');
 $data['beneficiarios'] = $this->BeneficiarioM->getBeneficiarios();

  $this->load->view('headers/head.php');
  $this->load->view('headers/menut.php');
  $this->load->view('headers/MInicio.php');
  $this->load->view('tablas/Beneficiario.php',$data);
  $this->load->view('headers/fooder.php');
  }

 public function detalleBeneficiario($Id_Beneficiario){
 $this->load->model('BeneficiarioM');
 $data['beneficiario'] = $this->BeneficiarioM->getBeneficiario( $Id_Beneficiario);

 $this->load->model('IngresosbM');
 $data5['ingresob']=$this->IngresosbM->getIngresosb($Id_Beneficiario);

 $this->load->model('ViviendasM');
 $data2['Vivienda']=$this->ViviendasM->getViviendaB($Id_Beneficiario);

 $this->load->model('FamiliaresM');
 $data3['familiares']=$this->FamiliaresM-> getFamiliaresB($Id_Beneficiario);

 $this->load->model('EgresosM');
 $data4['Egresos']=$this->EgresosM->getEgreso($Id_Beneficiario);

 $this->load->model('AlimentacionM');
 $data6['alimento']=$this->AlimentacionM->getalimentacionb($Id_Beneficiario);

  $this->load->view('headers/head.php');
  $this->load->view('headers/menut.php');
  $this->load->view('headers/MInicio.php');
  $this->load->view('detalles/detalleBeneficiario.php',$data);
  $this->load->view('detalles/detalleIngresosb.php',$data5);
  $this->load->view('detalles/detalleFamiliar.php',$data3);
  $this->load->view('detalles/detallesEgresos.php',$data4);
  $this->load->view('detalles/detalleAlimentacion.php',$data6);
  $this->load->view('detalles/detalleVivienda.php',$data2);
  $this->load->view('headers/fooder.php');
  }

 public function eliminarBeneficiario($Id_Beneficiario){
 $this->load->model('BeneficiarioM.php');
 if($this->BeneficiarioM->deleteBeneficiario($Id_Beneficiario)){
  redirect(base_url('index.php/BeneficiarioC/show'),'refresh');
  }
 }

 public function insertBeneficiario(){
  $this->load->model('BeneficiarioM');
  $this->load->helper(array('form', 'url'));
  $this->load->library('form_validation');
  $this->form_validation->set_rules('Nombre','Apellido_Paterno', 'Apellido_Paterno', 'Apellido_Materno', 'Estado_Civil', 'Estado_Civil', 'Genero', 'fecha_Nacimiento','Curp', 'required');
     if($this->form_validation->run() == FALSE)
      {
      $this->load->view('headers/head.php');
      $this->load->view('headers/menut.php');
      $this->load->view('headers/MInicio.php');
      $this->load->view('añadir/insertBeneficiario');
      $this->load->view('headers/fooder.php');
      }
      else
      {
        $IdBeneficiario = $this->BeneficiarioM->insertBeneficiario();
        redirect(base_url('index.php/FamiliaresC/insertFamiliar/').$IdBeneficiario,'refresh');
        //redirect(base_url('index.php/BeneficiarioC/show'),'refresh');
      }
 }
 public function updateBeneficiario($Id_Beneficiario){
  $this->load->model('BeneficiarioM');
  $data['beneficiario'] = $this->BeneficiarioM->getBeneficiario($Id_Beneficiario);
  $this->load->helper(array('form', 'url'));

  $this->load->library('form_validation');
  $this->form_validation->set_rules('nombre', 'nombre', 'required');
  $this->form_validation->set_rules('apellido_paterno', 'apellido_paterno', 'required');
  $this->form_validation->set_rules('apellido_materno', 'apellido_materno', 'required');
  $this->form_validation->set_rules('estado_civil', 'estado_civil', 'required');
  $this->form_validation->set_rules('genero', 'genero', 'required');
  $this->form_validation->set_rules('fecha_nacimiento', 'fecha_nacimiento', 'required');
  $this->form_validation->set_rules('curp', 'curp', 'required');
     if($this->form_validation->run() == FALSE)
      {
      $this->load->view('headers/head.php');
      $this->load->view('headers/menut.php');
      $this->load->view('headers/MInicio.php');
      $this->load->view('actualisar/updateBeneficiario',$data);
      $this->load->view('headers/fooder.php');
      }
      else
      {
        $this->BeneficiarioM->updateBeneficiario($Id_Beneficiario);
        redirect(base_url('index.php/BeneficiarioC/detalleBeneficiario/').$Id_Beneficiario,'refresh');
      }
 }

    public function getBeneficiario($Id_Beneficiario){

  $this->load->view('headers/head.php');
  $this->load->view('headers/menut.php');
  $this->load->view('headers/MInicio.php');
      $this->load->view('headers/footer.php'); 
      }
}