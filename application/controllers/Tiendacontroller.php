<?php
class Tiendacontroller extends CI_Controller {

public function __construct()
	{
		parent::__construct();
		$this->load->model('Tienda');
	
	}
 
   function index()
   {
     header('Location: http://docencia.eit.udp.cl/~15996273/web/swisstool/index.php/Tareacontroller/#inicio');
   }
   
   public function vista_detalle_tienda()
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
	
	
	
}
?>