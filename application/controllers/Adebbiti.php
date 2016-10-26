<?php

class Adebbiti extends CI_Controller {
               
	function __construct()
	{
 		parent::__construct();
		$this->load->library('form_validation');
		$this->load->database();
		$this->load->helper('form');
		$this->load->helper('url');
		$this->load->model('Adebbiti_model');
	}	
	function index()
	{			
		$this->form_validation->set_rules('adebito_id', 'adebito_id', '');			
		$this->form_validation->set_rules('conto_id', 'conto_id', '');			
		$this->form_validation->set_rules('hotel_id', 'hotel_id', '');			
		$this->form_validation->set_rules('prodotto_id', 'prodotto_id', '');			
		$this->form_validation->set_rules('descrizione', 'descrizione', '');			
		$this->form_validation->set_rules('prezzo', 'prezzo', '');			
		$this->form_validation->set_rules('quantita', 'quantita', '');			
		$this->form_validation->set_rules('adebiti_data_record', 'adebiti_data_record', '');			
		$this->form_validation->set_rules('adebiti_utente_id', 'adebiti_utente_id', '');
			
		$this->form_validation->set_error_delimiters('<br /><span class="error">', '</span>');
	
		if ($this->form_validation->run() == FALSE) // validation hasn't been passed
		{
			$this->load->view('adebbiti_view');
		}
		else // passed validation proceed to post success logic
		{
		 	// build array for the model
			
                    
                    //$this->input->post()
			$form_data = array(
					       	'adebito_id' => set_value('adebito_id'),
					       	'conto_id' => set_value('conto_id'),
					       	'hotel_id' => set_value('hotel_id'),
					       	'prodotto_id' => set_value('prodotto_id'),
					       	'descrizione' => set_value('descrizione'),
					       	'prezzo' => set_value('prezzo'),
					       	'quantita' => set_value('quantita'),
					       	'adebiti_data_record' => set_value('adebiti_data_record'),
					       	'adebiti_utente_id' => set_value('adebiti_utente_id')
						);
					
			// run insert model to write data to db
		
			if ($this->Adebbiti_model->SaveForm($form_data) == TRUE) // the information has therefore been successfully saved in the db
			{
				redirect('Adebbiti/success');   // or whatever logic needs to occur
			}
			else
			{
			echo 'An error occurred saving your information. Please try again later';
			// Or whatever error handling is necessary
			}
		}
	}
	function success()
	{
			echo 'this form has been successfully submitted with all validation being passed. All messages or logic here. Please note
			sessions have not been used and would need to be added in to suit your app';
	}
}
?>