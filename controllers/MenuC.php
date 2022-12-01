<?php
/**
 * 
 */
class MenuC extends CI_Controller
{
	
	function show()	{
		$this->load->view('headers/head.php');
		$this->load->view('headers/menut.php');
        $this->load->view('headers/MInicio.php');
        $this->load->view('headers/carrusel.php');
        $this->load->view('headers/fooder.php');	
	}
}

?>
