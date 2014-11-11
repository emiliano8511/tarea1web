<?php
class Usuario extends CI_Model 
{   
    var $mail = '';
    var $pass = '';
    
    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
    }
    
	function inscribe_usuario()
	{
	$this->mail = $_POST['mail']; 
	$this->pass = $_POST['pass'];
	
	

	$this->db->insert('Usuario', $this);
	}

	function dame_los_usuarios()
	{
		$query = $this->db->get('Usuario',10);
		return $query->result();	
	}

}
