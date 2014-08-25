<?php
/**
 * CodeIgniter
 *
 * An open source application development framework for PHP 5.2.4 or newer
 *
 * NOTICE OF LICENSE
 *
 * Licensed under the Academic Free License version 3.0
 *
 * This source file is subject to the Academic Free License (AFL 3.0) that is
 * bundled with this package in the files license_afl.txt / license_afl.rst.
 * It is also available through the world wide web at this URL:
 * http://opensource.org/licenses/AFL-3.0
 * If you did not receive a copy of the license and are unable to obtain it
 * through the world wide web, please send an email to
 * licensing@ellislab.com so we can send you a copy immediately.
 *
 * @package		CodeIgniterOnfire
 * @author		Diego Portales University
 * @copyright	Copyright (c) 2014 - 2014, Diego Portales University (http://udp.cl/)
 * @license		http://opensource.org/licenses/OSL-3.0 Open Software License (OSL 3.0)
 * @link		http://codeigniteronfire.com
 * @since		Version 1.0
 * @filesource
 */
defined('BASEPATH') OR exit('No direct script access allowed');

class Tareacontroller extends CI_Controller
{
  public function __construct()
       {
            parent::__construct();
            // Add your models here
            $this->load->model('Tarea');

       }
	
	public function index()
	{
	 	$this->load->view('indice');
	}



	public function byid($id)
	{
		$entry=$this->Tarea->getbyid($id);
		$this->load->view('entry',array('singleentry' => $entry));
	}

	public function insertar()
	{	
		$this->load->view('insert',0);
	}


	public function listar()
	{
		$d = $this->Tarea-> get_last_ten_entries();
		//print_r($this->Tarea->get_last_ten_entries());
		$this->load->view('listar',array('data' => $d));
	}

	public function insert_dato()
	{	
		$list=$this->Tarea->insert_entry();
		header( 'Location: http://docencia.eit.udp.cl/~15996273/web/swisstool/index.php/Tareacontroller/listar' ) ;
	}

	public function actualizar()
	{
		$list=$this->Tarea->update_entry();
		//$this->list();
	}
	
}

/* End of file welcome.php */
/* Location: ./application/controllers/Welcome.php */
