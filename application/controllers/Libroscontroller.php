<?php
class Libroscontroller extends CI_Controller {

public function __construct()
	{
		parent::__construct();
		$this->load->model('Libro');
	
	}
 
   function index()
   {
     header('Location: http://docencia.eit.udp.cl/~15996273/web/swisstool/index.php/Tareacontroller/#inicio');
   }
   
/*   public function vista_detalle_tienda()
	{
		$list=$this->Tienda->listar_tienda();
		$this->load->view('header');
		$this->load->view('tiendas',array('data' => $list));
		$this->load->view('footer');
		
		//$this->load->view('vista_detalle_tienda',array('data' => $list));
	
	}
	
	public function vista_libros_tienda($id)
	{
		$list=$this->Tienda->libros_tienda($id);
		$this->load->view('header');
		$this->load->view('libros_tiendas',array('data' => $list));
		$this->load->view('footer');
		
		//$this->load->view('vista_detalle_tienda',array('data' => $list));
	
	}
	
	public function vista_comentario_tienda($id)
	{
		$list=$this->Tienda->comentario_tienda($id);
		$this->load->view('header');
		$this->load->view('123',array('data' => $list));
		$this->load->view('footer');
		
		//$this->load->view('vista_detalle_tienda',array('data' => $list));
	
	}
	
*/
	public function agregar_libro($id)
	{
		$list=$this->Libro->agregar_libro_tienda($id);
		$datos = explode("-",$id);
		$id_tienda=$datos[0];
		header("Location: http://docencia.eit.udp.cl/~15996273/web/swisstool/index.php/Tiendacontroller/vista_libros_tienda/".$id_tienda);	
	}
	
	public function eliminar_libro($id)
	{
		$list=$this->Libro->eliminar_libro_tienda($id);
		$datos = explode("-",$id);
		$id_tienda=$datos[0];
		header("Location: http://docencia.eit.udp.cl/~15996273/web/swisstool/index.php/Tiendacontroller/vista_libros_tienda/".$id_tienda);		
	}

	public function listar_libros()
	{
		$list=$this->Libro->listar_todos_los_libros();
		$this->load->view('header');
		$this->load->view('mostrar_libros',array('data' => $list));
		$this->load->view('footer');		
		//$this->load->view('vista_detalle_tienda',array('data' => $list));
	
	}
	
	public function comentarios_libros($id)
	{
		$list=$this->Libro->ver_comentarios($id);
		$this->load->view('header');
		$this->load->view('comentar_libro',array('data' => $list));
		$this->load->view('footer');		
	
	
	}
	
	public function buscar_libro($id)
	{
		$list=$this->Libro->busqueda($id);
		$this->load->view('header');		
		$this->load->view('buscar',array('data' => $list));
		$this->load->view('footer');		
	
	
	}
}
?>