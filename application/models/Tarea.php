<?php
class Tarea extends CI_Model {

    var $titulo   = '';
    var $contenido = '';
    
    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
    }
    
    function get_last_ten_entries()
    {
        $query = $this->db->get('Tarea', 100);
        return $query->result();
    }

	function getbyid($id)
	{
		$query = $this->db->get_where('Tarea',array('id'=>$id));
		return $query->row();
	}

	function insert_entry()
	{
		$this->titulo = $_POST['titulo']; // please read the below note
		$this->contenido = $_POST['contenido'];
		$this->db->insert('Tarea', $this);
	}



    function update_entry()
    {
	//$this ->id  = $_POST['id'];
        $this->titulo   = $_POST['titulo'];
        $this->contenido = $_POST['contenido'];

        $this->db->update('Tarea', $this,array('id' => $_POST['id']));
	header( 'Location:  listar' ) ;
    }

	function dame_los_usuarios()
	{
		$query = $this->db->get('usuarios',10);
		return $query->result();	
	}

}
