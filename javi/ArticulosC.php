<?php
class ArticulosC extends CI_Controller
{
function __construct() {
         parent::__construct();
         if(!$this->session->userdata('Logeado')){
          redirect(base_url());
         }
       }

  public function show(){
  $this->load->model('ArticulosM');
  $data['articulos'] = $this->ArticulosM->getArticulos();

  $this->load->view('headers/head.php');
  $this->load->view('headers/menu.php');
  $this->load->view('articulos/listaArticulos.php',$data);
  $this->load->view('headers/footer.php');
  
}

public function detalleArticulo($IdArticulo){
 $this->load->model('ArticulosM');
 $data['articulos'] = $this->ArticulosM->getArticulo($IdArticulo);

  $this->load->view('headers/head.php');
  $this->load->view('headers/menu.php');
  $this->load->view('articulos/detalleArticulo.php',$data);
  $this->load->view('headers/footer.php');
}

public function eliminarArticulo($IdArticulo){
$this->load->model('ArticulosM');
if($this->ArticulosM->deleteArticulo($IdArticulo)){
  redirect(base_url('index.php/ArticulosC/show'),'refresh');
  }
 }

public function insertArticulo(){
  $this->load->model('ArticulosM');
  $this->load->helper(array('form', 'url'));
  $this->load->library('form_validation');
  $this->form_validation->set_rules('Juego_Sala', 'Juego_Sala', 'required');
  $this->form_validation->set_rules('Juego_Comedor', 'Fecha_Entrega', 'required');
  $this->form_validation->set_rules('Estufa', 'Estufa', 'required');
  $this->form_validation->set_rules('Refrigerador', 'Refrigerador', 'required');
  $this->form_validation->set_rules('Microondas', 'Microondas', 'required');
  $this->form_validation->set_rules('Television', 'Television', 'required');
  $this->form_validation->set_rules('Dvd', 'Dvd', 'required');
  $this->form_validation->set_rules('Equipo_Sonido', 'Equipo_Sonido', 'required');
  $this->form_validation->set_rules('Computadora_Escritoio', 'Computadora_Escritoio', 'required');
  $this->form_validation->set_rules('Computadora_Portatil', 'Computadora_Portatil', 'required');
  $this->form_validation->set_rules('Lavadora', 'Lavadora', 'required');
  $this->form_validation->set_rules('Juegos_Video', 'Juegos_Video', 'required')
 if($this->form_validation->run() == FALSE)
  {
  $this->load->view('headers/head.php');
  $this->load->view('headers/menu.php');
  $this->load->view('articulos/insertArticulo');
  $this->load->view('headers/footer.php');
}
else
{
  $this->ArticulosM->insertArticulo();
  redirect(base_url('index.php/ArticulosC/show'),'refresh');
}
    }

public function updateArticulo($IdArticulo){
  $this->load->model('ArticulosM');
  $data['articulos'] = $this->ArticulosM->getArticulo($IdArticulo);
  $this->load->helper(array('form', 'url'));

  $this->load->library('form_validation');
  $this->form_validation->set_rules('Juego_Sala', 'Juego_Sala', 'required');
  $this->form_validation->set_rules('Juego_Comedor', 'Fecha_Entrega', 'required');
  $this->form_validation->set_rules('Estufa', 'Estufa', 'required');
  $this->form_validation->set_rules('Refrigerador', 'Refrigerador', 'required');
  $this->form_validation->set_rules('Microondas', 'Microondas', 'required');
  $this->form_validation->set_rules('Television', 'Television', 'required');
  $this->form_validation->set_rules('Dvd', 'Dvd', 'required');
  $this->form_validation->set_rules('Equipo_Sonido', 'Equipo_Sonido', 'required');
  $this->form_validation->set_rules('Computadora_Escritoio', 'Computadora_Escritoio', 'required');
  $this->form_validation->set_rules('Computadora_Portatil', 'Computadora_Portatil', 'required');
  $this->form_validation->set_rules('Lavadora', 'Lavadora', 'required');
  $this->form_validation->set_rules('Juegos_Video', 'Juegos_Video', 'required')
 if($this->form_validation->run() == FALSE)
  {
  $this->load->view('headers/head.php');
  $this->load->view('headers/menu.php');
  $this->load->view('articulos/updateArticulo',$data);
  $this->load->view('headers/footer.php');
}
else
{
  $this->ArticulosM->updateArticulo($IdArticulo);
  redirect(base_url('index.php/ArticulosC/show'),'refresh');
}
    }


public function getArticulo($IdArticulo){
  $this->load->view('headers/head.php');
  $this->load->view('headers/menu.php');
  
  $this->load->view('headers/footer.php');
  
}

}?>