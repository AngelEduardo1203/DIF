<?php  

class usuarioM extends CI_Model
{


    function insertUsuario()
    {
        $data = array(
            'Id_Usuario' => $this->input->post('Id_Usuario'),
            'nombre' => $this->input->post('nombre'),
            'apellido_paterno' => $this->input->post('apellido_paterno'),
            'apellido_materno' => $this->input->post('apellido_materno'),
            'genero' => $this->input->post('genero'),
            'telefono' => $this->input->post('telefono'),
            'correo_electronico' => $this->input->post('correo_electronico'),
            'tipo_Usuario' => $this->input->post('tipo_Usuario')
            
        );
        $this->db->insert('usuario', $data);
    }
}?> 
