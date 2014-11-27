<?php
class Tienda extends CI_Model 
{   
        
    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
		
    }

        function listar_tienda()
        {
				/*$query="SELECT Libro.id,Libro.nombre_libro,Libro.nombre_autor,Detalle_tienda.precio FROM Detalle_tienda, Libro WHERE Detalle_tienda.id_tienda=1 and Detalle_tienda.id_libro=Libro.id";
                $query = $this->db->get_where('Detalle_tienda',array('id'=>$id));
                return $query->row();   
				*/
			$query = $this->db->get('Tienda', 100);
			return $query->result();
				
        }
		function libros_tienda($id)
		{
		 		$query="SELECT Libro.id,Libro.nombre_libro,Libro.nombre_autor,Detalle_tienda.precio FROM Detalle_tienda, Libro WHERE Detalle_tienda.id_tienda='".$id."' and Detalle_tienda.id_libro=Libro.id";
                $q= $this->db->query($query);
                return $q->result();   
				
			//$query = $this->db->get('Tienda', 100);
		}
		
		function comentario_tienda($id)
		{						
				$query="SELECT Comentario_tienda.id_usuario,Comentario_tienda.comentario From Comentario_tienda Where id_tienda='".$id."'";
                $q= $this->db->query($query);
                return $q->result();   					
		}
		
		
		
}


