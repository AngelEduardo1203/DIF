<?php 
/**
  * 
  */
 class ViviendasC extends CI_Controller
 {
    function __construct() {
         parent::__construct();
         if(!$this->session->userdata('Logeado')){
          redirect(base_url());
         }
       }

     
     public function show(){
        $this->load->model('ViviendasM');
        $data['viviendas'] = $this->ViviendasM->getViviendas();

        $this->load->view('headers/head.php');
        $this->load->view('headers/menu.php');
        $this->load->view('viviendas/listaViviendas.php',$data);
        $this->load->view('headers/footer.php');
     }

     public function detalleVivienda($IdVivienda){
        $this->load->model('ViviendasM');
        $data['viviendas'] = $this->ViviendasM->getVivienda($IdVivienda);


        $this->load->view('headers/head.php');
        $this->load->view('headers/menu.php');
        $this->load->view('viviendas/detalleVivienda.php',$data);
        $this->load->view('headers/footer.php');
     }

     public function borrarVivienda($IdVivienda){
        $this->load->model('ViviendasM');
        if($this->ViviendasM->deleteVivienda($IdVivienda)){
            redirect(base_url('index.php/ViviendasC/show'),'refresh');
        }

     }

     public function insertVivienda(){
            $this->load->model('ViviendasM');
            $this->load->helper(array('form', 'url'));

            $this->load->library('form_validation');
            $this->form_validation->set_rules('Tenencia', 'Tenencia', 'required');
            $this->form_validation->set_rules('Tipo_Vivienda', 'Tipo_Vivienda', 'required');
            if($this->form_validation->run() == FALSE)
            {
                $this->load->view('headers/head.php');
                $this->load->view('headers/menu.php');
                $this->load->view('viviendas/insertVivienda');
                $this->load->view('headers/footer.php');
            }
            else
            {
                $this->ViviendasM->insertVivienda();
                redirect(base_url('index.php/ViviendasC/show'),'refresh');
            }
     }

     public function updateVivienda(){
            $this->load->model('ViviendasM');
            $this->load->helper(array('form', 'url'));

            $this->load->library('form_validation');
            $this->form_validation->set_rules('Tenencia', 'Tenencia', 'required');
            $this->form_validation->set_rules('Tipo_Vivienda', 'Tipo_Vivienda', 'required');
            if($this->form_validation->run() == FALSE)
            {
                $this->load->view('headers/head.php');
                $this->load->view('headers/menu.php');
                $this->load->view('viviendas/insertVivienda');
                $this->load->view('headers/footer.php');
            }
            else
            {
                $this->ViviendasM->updateVivienda($IdVivienda);
                redirect(base_url('index.php/ViviendasC/show'),'refresh');
            }
     }

     public function getVivienda($IdVivienda){
        $this->load->view('headers/head.php');
        $this->load->view('headers/menu.php');
    
        $this->load->view('headers/footer.php');
     }
 } ?>