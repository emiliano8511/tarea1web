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
	//$mail = $_POST['mail']; 
	//$SESSION['mail'] = $mail;
	}

	function dame_los_usuarios()
	{
		$query = $this->db->get('Usuario',10);
		return $query->result();	
	}
	
	function log($mail,$pass)
	{
		//$this->mail = $_POST['mail']; 	
		$query = $this->db->get_where ('Usuario', array('mail' => $mail));
		return $query->result();
	}
}
