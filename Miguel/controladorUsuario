<?php 
class UsuarioC extends CI_Controller{
    public function show(){
       $this->load->view('usuariov/usuario.php');
    }
    
    public function insertUsuario(){
		$this->load->model('UsuarioM');
		$this->load->helper(array('form', 'url'));

                $this->load->library('form_validation');
                $this->form_validation->set_rules('Id_Usuario','nombre','apellido_paterno','apellido_materno',
                'genero','telefono','correo_electronico','tipo_usuario','required');
                if ($this->form_validation->run() == FALSE)
                {		
                        $this->load->view('usuariov/usuario.php');
                }

                else
                {
                       $this->UsuarioM->insertUsuario();
                       redirect(base_url('index.php/UsuarioC/show'),'refresh');
                }
	}
} 
?>
