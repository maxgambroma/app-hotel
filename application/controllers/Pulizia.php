<?php

class Pulizia extends CI_Controller {
               
	function __construct()
	{
 		parent::__construct();
		$this->load->library('form_validation');
		$this->load->database();
		$this->load->helper('form');
		$this->load->helper('url');
		 $this->load->model('pulizia_model');
	}

	
	function index()
	{			
		echo 'hello' ;
	}

	function lista_note()
	{			
		$today = date('Y-m-d');
		if ($this->input->get('hotel_id')) {
		$hotel_id = $this->input->get('hotel_id');
		} 
		else {
		$hotel_id = 1;
		}
		
		
		
        $data['menu'] = 'Note';
		
		
$date['today'] = $today = date('Y-m-d');  
$data['hotel_id'] = $hotel_id;
$data['pulizie'] = $this->pulizia_model->pulizia_note($hotel_id);

	
	

// scegli il templete
$temi = 'tem_bc_new';
// carica la vista del contenuto
$vista = 'pulizia_note';
// gestore templete
$data['temp'] = array('templete' => $temi, 'contenuto' => $vista, 'bar1' => 'bar_1', 'bar_2' => 'bar_app');
$this->load->view('templetes', $data);
	
}
}

?>