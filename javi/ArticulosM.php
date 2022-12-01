<?php 

 class ArticulosM extends CI_Model
 {
  
  function getArticulos(){
    $query = $this->db->get('Articulos');
    return $query->result();
  }

  function getArticulo($IdArticulo){
    $this->db->where('IdArticulo',$IdArticulo);
    $query = $this->db->get('Articulos');
    return $query->result();
  }

  function deleteArticulo($IdArticulo){
    $this->db->where('IdArticulo', $IdArticulo);
    $this->db->delete('Articulo');
    return TRUE;
  }

  function insertArticulo(){
     $data = array(
     'Juego_Sala' => $this->input->post('Juego_Sala'),
     'Juego_Comedor' => $this->input->post('Juego_Comedor'),
     'Estufa' => $this->input->post('Estufa'),
     'Refrigerador' => $this->input->post('Refrigerador'),
     'Microondas' => $this->input->post('Microondas'),
     'Television' => $this->input->post('Television'),
     'Dvd' => $this->input->post('Dvd'),
     'Equipo_Sonido' => $this->input->post('Equipo_Sonido'),
     'Computadora_Escritorio' => $this->input->post('Computadora_Escritorio'),
     'Computadora_Portatil' => $this->input->post('Computadora_Portatil'),
     'Lavadora' => $this->input->post('Lavadora'),
     'Juegos_Video' => $this->input->post('Juegos_Video')
     );
     $this->db->insert('Articulos', $data);
  }

     function updateArticulo($IdArticulo){
     $data = array(
     'Juego_Sala' => $this->input->post('Juego_Sala'),
     'Juego_Comedor' => $this->input->post('Juego_Comedor'),
     'Estufa' => $this->input->post('Estufa'),
     'Refrigerador' => $this->input->post('Refrigerador'),
     'Microondas' => $this->input->post('Microondas'),
     'Television' => $this->input->post('Television'),
     'Dvd' => $this->input->post('Dvd'),
     'Equipo_Sonido' => $this->input->post('Equipo_Sonido'),
     'Computadora_Escritorio' => $this->input->post('Computadora_Escritorio'),
     'Computadora_Portatil' => $this->input->post('Computadora_Portatil'),
     'Lavadora' => $this->input->post('Lavadora'),
     'Juegos_Video' => $this->input->post('Juegos_Video')
     );

     $this->db->where('IdArticulo', $IdArticulo);
     $this->db->update('Articulos', $data);
     }
}?>