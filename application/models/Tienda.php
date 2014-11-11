<?php
class Tienda extends CI_Model 
{   
    var $mail = '';
    var $pass = '';
    
    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
    }

        /*function detalle_tienda($id)
        {
		$query="SELECT Libro.id,Libro.nombre_libro,Libro.nombre_autor,Detalle_tienda.precio FROM Detalle_tienda, Libro WHERE Detalle_tienda.id_tienda=1 and Detalle_tienda.id_libro=Libro.id";
                $query = $this->db->get_where('Detalle_tienda',array('id'=>$id));
                return $query->row();   
        }*/

}


