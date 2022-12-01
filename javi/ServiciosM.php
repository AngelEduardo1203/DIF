<?php 

 class ServiciosM extends CI_Model
 {
  
  function getServicios(){
    $query = $this->db->get('Servicios');
    return $query->result();
  }

  function getServicio($IdServicio){
    $this->db->where('IdServicio',$IdServicio);
    $query = $this->db->get('Servicios');
    return $query->result();
  }

  function deleteServicio($IdServicio){
    $this->db->where('IdServicio', $IdServicio);
    $this->db->delete('Servicios');
    return TRUE;
  }

  function insertServicio(){
     $data = array(
     'Agua' => $this->input->post('Agua'),
     'Luz' => $this->input->post('Luz'),
     'Alumbrado' => $this->input->post('Alumbrado'),
     'Drenaje' => $this->input->post('Drenaje'),
     'Gas' => $this->input->post('Gas'),
     'Telefono_Casa' => $this->input->post('Telefono_Casa'),
     'Telefono_Celular' => $this->input->post('Telefono_Celular'),
     'Vigilancia' => $this->input->post('Vigilancia'),
     'Television_Abierta' => $this->input->post('Television_Abierta'),
     'Television_Paga' => $this->input->post('Television_Paga'),
     'Limpieza' => $this->input->post('Limpieza')
     );
     $this->db->insert('Servicios', $data);
  }

     function updateServicio($IdServicio){
     $data = array(
     'Agua' => $this->input->post('Agua'),
     'Luz' => $this->input->post('Luz'),
     'Alumbrado' => $this->input->post('Alumbrado'),
     'Drenaje' => $this->input->post('Drenaje'),
     'Gas' => $this->input->post('Gas'),
     'Telefono_Casa' => $this->input->post('Telefono_Casa'),
     'Telefono_Celular' => $this->input->post('Telefono_Celular'),
     'Vigilancia' => $this->input->post('Vigilancia'),
     'Television_Abierta' => $this->input->post('Television_Abierta'),
     'Television_Paga' => $this->input->post('Television_Paga'),
     'Limpieza' => $this->input->post('Limpieza')
     );

     $this->db->where('IdServicio', $IdServicio);
     $this->db->update('Servicios', $data);
     }
}?>