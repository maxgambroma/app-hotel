<?php
//  App_ip.php             
class App_ip extends CI_Controller {
               
	function __construct()
	{
 		parent::__construct();
                $this->load->database();
                $this->load->model('app_ip_model');
		$this->load->library('form_validation');
		$this->load->library('table');
                $this->load->library('pagination');
		$this->load->helper('form');
		$this->load->helper('url');
		$this->load->helper('security');
                $this->load->helper('language'); 
                //$idiom = $this->session->get_userdata('language');             
                $idiom = 'english';
                $this->lang->load('form_lang', $idiom);
                
	}	
	
        /** list of app_ip
         * pagination
         */

     	public function index()
	{       
       
                $limit = 15; 
                $this->cont_record =  $this->app_ip_model->record_count() ;            
               
                $config['base_url'] = base_url().'index.php/app_ip';
                $config['total_rows'] =  $this->cont_record ;
                $config['per_page'] =    $limit ;  // limit
                $config['page_query_string'] = TRUE;
                $config['full_tag_open'] = '<div id="pagination" class="pagination">';
                $config['full_tag_close'] = '</div>';
                $pagination =   $this->pagination->initialize($config);
                $data['pagination'] = $this->pagination->create_links();
                
                if( $this->input->get('per_page'))
                {
                    $offset = $this->input->get('per_page');
                }
                else {
                     $offset = 0 ;
                }
                
                $data['rs_app_ip'] =   $this->app_ip_model->find_limit($limit , $offset);
               
		// scegli il templete
		$temi = 'tem_bcb';
		// carica la vista del contenuto
		$vista = 'app_ip_list'; 
		// gestore templete
                $data['temp'] = array
                ('templete' => $temi, 
                'contenuto' => $vista, 
                'bar_1' => 'bar_1',
                'bar_2' => 'bar_2',
                'box_top' => 'box_top' );
                $this->load->view('templetes', $data);		

                 //$this->load->view('app_ip_list.php');    
                
	}

	 /**
         * inser data in to app_ip
         */

        function insert()
	{			
		$this->form_validation->set_rules('app_ip_id', 'lang:app_ip_id', 'trim');			
		$this->form_validation->set_rules('ip_aderss', 'lang:ip_aderss', 'required|trim');			
		$this->form_validation->set_rules('Livello', 'lang:Livello', 'required|trim');			
		$this->form_validation->set_rules('data', 'lang:data', 'required|trim');
			
		$this->form_validation->set_error_delimiters('<span class="error">', '</span> <br />');
	
		if ($this->form_validation->run() == FALSE) // validation hasn't been passed
		{
			
		// scegli il templete
		$temi = 'tem_bcb';
		// carica la vista del contenuto
		$vista = 'app_ip_add';
		// gestore templete

		$data['temp'] = array
                ('templete' => $temi, 
                'contenuto' => $vista, 
                'bar_1' => 'bar_1',
                'bar_2' => 'bar_2',
                'box_top' => 'box_top' );
                $this->load->view('templetes', $data);		

               //$this->load->view('app_ip_add');

		}
		else // passed validation proceed to post success logic
		{
		 	// build array for the model
			
			$form_data = array(
			 'app_ip_id' => set_value('app_ip_id'),
			 'ip_aderss' => set_value('ip_aderss'),
			 'Livello' => set_value('Livello'),
			 'data' => set_value('data')
						);
					
			// run insert model to write data to db
		
			if ($this->app_ip_model->insert($form_data) == TRUE) // the information has therefore been successfully saved in the db
			{
				redirect('app_ip/?'.$_SERVER['QUERY_STRING'] );   // or whatever logic needs to occur
			}
			else
			{

                            redirect('app_ip/?error=noinsert&'.$_SERVER['QUERY_STRING'] );	
			}
		}
	}
	

	 /**
         * edit data in to app_ip
         */

        function edit()
            {			
		$this->form_validation->set_rules('app_ip_id', 'lang:app_ip_id', 'trim');			
		$this->form_validation->set_rules('ip_aderss', 'lang:ip_aderss', 'required|trim');			
		$this->form_validation->set_rules('Livello', 'lang:Livello', 'required|trim');			
		$this->form_validation->set_rules('data', 'lang:data', 'required|trim');
			
		$this->form_validation->set_error_delimiters('<span class="error">', '</span><br /> ');
	
		if ($this->form_validation->run() == FALSE) // validation hasn't been passed
		{
                       
                /** function find_by_id('')
                * find preno_id
                * @param $form_data - array
                * @return object
                */
                

                $app_ip_id = $this->input->get('app_ip_id') ; 
                $data['rs_app_ip'] =   $this->app_ip_model->find_by_id($app_ip_id);

		// scegli il templete
		$temi = 'tem_bcb';
		// carica la vista del contenuto
		$vista = 'app_ip_edit';
		// gestore templete
                
                $data['temp'] = array
                ('templete' => $temi, 
                'contenuto' => $vista, 
                'bar_1' => 'bar_1',
                'bar_2' => 'bar_2',
                'box_top' => 'box_top' );
                $this->load->view('templetes', $data);

		//$this->load->view('app_ip_edit');
			
		}
		else // passed validation proceed to post success logic
		{
		 	// build array for the model
			
			$form_data = array(
			      	'app_ip_id' => set_value('app_ip_id'),
			      	'ip_aderss' => set_value('ip_aderss'),
			      	'Livello' => set_value('Livello'),
			      	'data' => set_value('data')
                    );
					
			// run insert model to write data to db
		
		    $app_ip_id = $this->input->get('app_ip_id');
			

			if ($this->app_ip_model->update($app_ip_id, $form_data) == TRUE) // the information has therefore been successfully saved in the db
			{
				                                  
                                redirect('app_ip/index/?'.$_SERVER['QUERY_STRING'] );
			}
			else
			{
                          redirect('app_ip/index/?error=noupdata&'.$_SERVER['QUERY_STRING'] );			

			}
		}
	}
	
	 /**
         * delete record by to app_ip
         */

       function delete()
       {
          
        $app_ip_id = $this->input->post('app_ip_id');
       
            if( $this->input->post('CAX') == 10 && isset($app_ip_id ) ) {
              $this->app_ip_model->delete($app_ip_id);
              redirect('app_ip/index/?'.$_SERVER['QUERY_STRING'] );

                }  
        else{

            redirect('app_ip/edit/?error=nodelete&'.$_SERVER['QUERY_STRING'] );	

            }               
           
       }

	function success()
	{
            echo 'this form has been successfully submitted with all validation being passed. All messages or logic here. Please note
	    sessions have not been used and would need to be added in to suit your app';
	}
}
?>