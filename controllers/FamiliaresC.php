<?php 
/**
  * 
  */
 class FamiliaresC extends CI_Controller
 {
    public function show(){
        $this->load->model('FamiliaresM');
        $data['familiares'] = $this->FamiliaresM->getFamiliares();

  $this->load->view('headers/head.php');
  $this->load->view('headers/menut.php');
  $this->load->view('headers/MInicio.php');
        $this->load->view('tablas/listaFamiliares.php',$data);
        $this->load->view('headers/fooder.php');
     }


     public function detalleFamiliar($IdFamiliar){
        $this->load->model('FamiliaresM');
        $data['familiares'] = $this->FamiliaresM->getFamiliar($IdFamiliar);
  $this->load->view('headers/head.php');
  $this->load->view('headers/menut.php');
  $this->load->view('headers/MInicio.php');
        $this->load->view('familiares/detalleFamiliar.php',$data);
        $this->load->view('headers/footer.php');
     }

     public function borrarFamiliar($IdFamiliar){
        $this->load->model('FamiliaresM');
        if($this->FamiliaresM->deleteFamiliar($IdFamiliar)){
            redirect(base_url('index.php/FamiliaresC/show'),'refresh');
        }

     }


     public function insertFamiliar($IdBeneficiario){
        $data['IdBeneficiario'] = $IdBeneficiario;
            $this->load->model('FamiliaresM');
            $this->load->helper(array('form', 'url'));

            $this->load->library('form_validation');
            $this->form_validation->set_rules('Nombre','Nombre', 'required');
            $this->form_validation->set_rules('ApellidoPaterno','Apellido Paterno', 'required');
            
            if($this->form_validation->run() == FALSE)
            {
                $this->load->view('headers/head.php');
                $this->load->view('headers/menu.php');
                $this->load->view('añadir/insertFamiliar',$data);
                $this->load->view('headers/fooder.php');
            }
            else
            {
                $this->FamiliaresM->insertFamiliar();
                redirect(base_url('index.php/FamiliaresC/show'),'refresh');
            }
     }

     public function updateFamiliar($IdFamiliar){
            $this->load->model('FamiliaresM');
            $data['familiares'] = $this->FamiliaresM->getFamiliar($IdFamiliar);
            $this->load->helper(array('form', 'url'));

            $this->load->library('form_validation');
            $this->form_validation->set_rules('IdBeneficiario', 'IdBeneficiario', 'required');
            if($this->form_validation->run() == FALSE)
            {
                $this->load->view('headers/head.php');
                $this->load->view('headers/menu.php');
                $this->load->view('familiares/updateFamiliar',$data);
                $this->load->view('headers/footer.php');
            }
            else
            {
                $this->FamiliaresM->updateFamiliar($IdFamiliar);
                redirect(base_url('index.php/FamiliaresC/show'),'refresh');
            }
     }

     public function getFamiliar($IdFamiliar){
        $this->load->view('headers/head.php');
        $this->load->view('headers/menu.php');

        $this->load->view('headers/footer.php');
     }
 } ?>