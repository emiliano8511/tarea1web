<?php
class Libro extends CI_Model 
{   
        
    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
		
    }
	
/*

        function listar_tienda()
        {
				/*$query="SELECT Libro.id,Libro.nombre_libro,Libro.nombre_autor,Detalle_tienda.precio FROM Detalle_tienda, Libro WHERE Detalle_tienda.id_tienda=1 and Detalle_tienda.id_libro=Libro.id";
                $query = $this->db->get_where('Detalle_tienda',array('id'=>$id));
                return $query->row();   
				*/
/*			$query = $this->db->get('Tienda', 100);
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
		
*/
		function agregar_libro_tienda($id)
		{
			$datos = explode("-",$id);
			$id_tienda=$datos[0];
			$id_libro=$datos[1];
			$cantidad=$datos[2];
			$precio=$datos[3];
			$query="INSERT into Detalle_tienda(id_tienda,id_libro,cantidad,precio) VALUES('".$id_tienda."','".$id_libro."','".$cantidad."','".$precio."')";
			$q= $this->db->query($query);		
		}
		
		function eliminar_libro_tienda($id)
		{
			$datos = explode("-",$id);
			$id_tienda=$datos[0];
			$id_libro=$datos[1];			
			$query="DELETE FROM Detalle_tienda WHERE id_tienda='".$id_tienda."' and id_libro='".$id_libro."'";		
			$q= $this->db->query($query);		
		}
		
		function listar_todos_los_libros()		
		{
			$query = $this->db->get('Libro', 100);
			return $query->result();
		}
		
		
		function comentar_libro()
		{
			$id_libro= $_POST['id_libro']; 
			$comentario = $_POST['comentario'];		
			$query="INSERT into Comentario_libro(id_libro,id_usuario,comentario) VALUES('".$id_libro."','".$comentario."')";			
			$q= $this->db->query($query);		
		}
		
		function ver_comentarios($id)
		{
			$query="SELECT Comentario_libro.comentario, Usuario.mail From Comentario_libro,Usuario Where Comentario_libro.id_libro='".$id."' and Comentario_libro.id_usuario=Usuario.id";			
			//$query = $this->db->get('Libro', 100);
			$q= $this->db->query($query);
            return $q->result();   			
		}
		
		function busqueda($id)
		{
			$query="SELECT Libro.id,Detalle_tienda.id_tienda, Tienda.nombre,Libro.nombre_autor,Libro.nombre_libro,Libro.descripcion From Libro,Tienda,Detalle_tienda Where Libro.id=Detalle_tienda.id_libro AND Detalle_tienda.id_tienda=Tienda.id AND Libro.nombre_libro like '%".$id."%'   ";			
			$q= $this->db->query($query);
            return $q->result();   			
		}
		
}


