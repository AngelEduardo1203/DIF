<?php 
/**
  * 
  */
 class FamiliaresC extends CI_Controller
 {
    function __construct() {
         parent::__construct();
         if(!$this->session->userdata('Logeado')){
          redirect(base_url());
         }
       }

    
     
     public function show(){
        $this->load->model('FamiliaresM');
        $data['familiares'] = $this->FamiliaresM->getFamiliares();

        $this->load->view('headers/head.php');
        $this->load->view('headers/menu.php');
        $this->load->view('familiares/listaFamiliares.php',$data);
        $this->load->view('headers/footer.php');
     }


     public function detalleFamiliar($IdFamiliar){
        $this->load->model('FamiliaresM');
        $data['familiares'] = $this->FamiliaresM->getFamiliar($IdFamiliar);


        $this->load->view('headers/head.php');
        $this->load->view('headers/menu.php');
        $this->load->view('familiares/detalleFamiliar.php',$data);
        $this->load->view('headers/footer.php');
     }

     public function borrarFamiliar($IdFamiliar){
        $this->load->model('FamiliaresM');
        if($this->FamiliaresM->deleteFamiliar($IdFamiliar)){
            redirect(base_url('index.php/FamiliaresC/show'),'refresh');
        }

     }


     public function insertFamiliar(){
            $this->load->model('FamiliaresM');
            $this->load->helper(array('form', 'url'));

            $this->load->library('form_validation');
            $this->form_validation->set_rules('Nombre', 'Nombre', 'required');
            $this->form_validation->set_rules('ApellidoPaterno', 'ApellidoPaterno', 'required');
            $this->form_validation->set_rules('ApellidoMaterno', 'ApellidoMaterno', 'required');
            $this->form_validation->set_rules('FechaNacimiento', 'FechaNacimiento', 'required');
            $this->form_validation->set_rules('Parentesco', 'Parentesco', 'required');
            $this->form_validation->set_rules('GradoEscolar', 'GradoEscolar', 'required');
            $this->form_validation->set_rules('Ocupacion', 'Ocupacion', 'required');
            $this->form_validation->set_rules('SeguroSocial', 'SeguroSocial', 'required');
            if($this->form_validation->run() == FALSE)
            {
                $this->load->view('headers/head.php');
                $this->load->view('headers/menu.php');
                $this->load->view('familiares/insertFamiliar');
                $this->load->view('headers/footer.php');
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