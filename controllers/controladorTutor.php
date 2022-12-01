<?php 
 class TutorC extends CI_Controller{
    public function show(){
       $this->load->view('tutorv/tutor.php');
    }

    public function insertTutor(){
		$this->load->model('TutorM');
		$this->load->helper(array('form', 'url'));

                $this->load->library('form_validation');
                $this->form_validation->set_rules('Id_Tutor','nombre','apellido_paterno','apellido_materno','curp','fecha_nacimiento',
                'genero','telefono','correo_electronico','required');
                if ($this->form_validation->run() == FALSE)
                {		
                        $this->load->view('tutorv/tutor.php');
                }

                else
                {
                       $this->TutorM->insertTutor();
                       redirect(base_url('index.php/TutorC/show'),'refresh');
                }
	} 
 }
?>
