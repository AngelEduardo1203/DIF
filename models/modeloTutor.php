<?php
class TutorM extends CI_Model
{

    function insertTutor()
    {
        $data = array(
            'Id_Tutor' => $this->input->post('Id_Tutor'),
            'nombre' => $this->input->post('nombre'),
            'apellido_paterno' => $this->input->post('apellido_paterno'),
            'apellido_materno' => $this->input->post('apellido_materno'),
            'curp' => $this->input->post('curp'),
            'fecha_nacimiento' => $this->input->post('fecha_nacimiento'),
            'genero' => $this->input->post('genero'),
            'telefono' => $this->input->post('telefono'),
            'correo_electronico' => $this->input->post('correo_electronico'),
            
        );
        $this->db->insert('tutor', $data);
    }
    }
?>  
