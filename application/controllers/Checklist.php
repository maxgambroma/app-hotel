<?php
//  Checklist_preno.php             
class Checklist extends CI_Controller {
               
	function __construct()
	{
 		parent::__construct();
                $this->load->database();
                $this->load->model('checklist_preno_model');
                $this->load->model('agenda_model'); 
                $this->load->model('hotel_model');   
		$this->load->library('form_validation');
		$this->load->library('table');
                $this->load->library('pagination');
                $this->load->library('email');
		$this->load->helper('form');
		$this->load->helper('url');
		$this->load->helper('security');
                $this->load->helper('language'); 
                //$idiom = $this->session->get_userdata('language');             
                $idiom = 'english';
                $this->lang->load('form_lang', $idiom);
                
	}	
	
        /** list of checklist_preno
         * pagination
         */

     	public function index()
	{       
            
            
                $today = date('Y-m-d');
        if ($this->input->get('hotel_id')) {
            $hotel_id = $this->input->get('hotel_id');
        } else {
            $hotel_id = 1;
        }
         $date['today'] = $today = date('Y-m-d');  
// 
        $data['hotel_id'] = $hotel_id;
            
       
                $limit = 15; 
                $this->cont_record =  $this->checklist_preno_model->record_count() ;            
               
                $config['base_url'] = base_url().'index.php/checklist_preno';
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
                
            

                
                $data['rs_checklist_preno'] =   $this->checklist_preno_model->find_limit($limit , $offset);
               
		// scegli il templete
		$temi = 'tem_bc_new';
		// carica la vista del contenuto
		$vista = 'checklist_preno_list'; 
		// gestore templete
                $data['temp'] = array
                ('templete' => $temi, 
                'contenuto' => $vista, 
                'bar_1' => 'bar_1',
                'bar_2' => 'bar_2',
                'box_top' => 'box_top' );
                $this->load->view('templetes', $data);		

                 //$this->load->view('checklist_preno_list.php');    
                
	}

	 /**
         * inser data in to checklist_preno
         */

        function insert()
	{	
            
            
            
            
            
                $today = date('Y-m-d');
        if ($this->input->get('hotel_id')) {
            $hotel_id = $this->input->get('hotel_id');
           
            
        } else {
            $hotel_id = 1;
        }
        
        $preno_id = $this->input->get('preno_id'); 
        $data['today'] = $today = date('Y-m-d');  
        $data['hotel_id'] = $hotel_id ;
        $data['albergo'] = $albergo = $this->hotel_model->hotel($hotel_id); 
       // $data['rs_preno'] =   $peno = $this->agenda_model->preno_by_id($preno_id, $hotel_id);   

             				
	     //   $this->form_validation->set_rules('checklist_id', 'lang:checklist_id', 'trim');			
		$this->form_validation->set_rules('hotel_id', 'lang:hotel_id', 'trim');			
		$this->form_validation->set_rules('preno_id', 'lang:preno_id', 'trim');			
		$this->form_validation->set_rules('preno_dal', 'lang:preno_dal', 'required|trim');			
		$this->form_validation->set_rules('email', 'lang:email', 'required|trim');			
		$this->form_validation->set_rules('email_pms', 'lang:email_pms', 'required|trim');			
		$this->form_validation->set_rules('lista', 'lang:lista', 'required|trim');			
		$this->form_validation->set_rules('lista_pms', 'lang:lista_pms', 'required|trim');			
		$this->form_validation->set_rules('pagamento', 'lang:pagamento', 'required|trim');			
		$this->form_validation->set_rules('tassa', 'lang:tassa', 'required|trim');			
		$this->form_validation->set_rules('proforma', 'lang:proforma', 'required|trim');			
		$this->form_validation->set_rules('proforma_pms', 'lang:proforma_pms', 'required|trim');			
		$this->form_validation->set_rules('bonifico', 'lang:bonifico', 'required|trim');			
		$this->form_validation->set_rules('importo', 'lang:importo', 'trim|is_numeric');			
		$this->form_validation->set_rules('note', 'lang:note', 'trim|xss_clean');			
		$this->form_validation->set_rules('data_check', 'lang:data_check', 'trim');			
		$this->form_validation->set_rules('utente_id', 'lang:utente_id', 'trim');			
		$this->form_validation->set_rules('data_record', 'lang:data_record', 'trim');
			
		$this->form_validation->set_error_delimiters('<span class="error">', '</span> <br />');
	
		if ($this->form_validation->run() == FALSE) // validation hasn't been passed
		{
                    
                    
                 $data['rs_preno'] =   $peno = $this->agenda_model->preno_by_id($preno_id, $hotel_id);   
			
//                 print_r($peno);
                 
                 
		// scegli il templete
		$temi = 'tem_bc_new';
		// carica la vista del contenuto
		$vista = 'checklist_preno_add';
		// gestore templete

		$data['temp'] = array
                ('templete' => $temi, 
                'contenuto' => $vista, 
                'bar_1' => 'bar_1',
                'bar_2' => 'bar_2',
                'box_top' => 'box_top' );
                $this->load->view('templetes', $data);		

               //$this->load->view('checklist_preno_add');

		}
		else // passed validation proceed to post success logic
		{
		 	// build array for the model
	
			$form_data = array(
			// 'checklist_id' => set_value('checklist_id'),
			 'hotel_id' => $hotel_id,
			 'preno_id' => $preno_id,
			 'preno_dal' => set_value('preno_dal'),
			 'email' => set_value('email'),
			 'email_pms' => set_value('email_pms'),
			 'lista' => set_value('lista'),
			 'lista_pms' => set_value('lista_pms'),
			 'pagamento' => set_value('pagamento'),
			 'tassa' => set_value('tassa'),
			 'proforma' => set_value('proforma'),
			 'proforma_pms' => set_value('proforma_pms'),
			 'bonifico' => set_value('bonifico'),
			 'importo' => set_value('importo'),
			 'note' => set_value('note'),
			 'data_check' => set_value('data_check'),
			 'utente_id' => set_value('utente_id'),
			// 'data_record' => set_value('data_record')
						);
			// run insert model to write data to db
		
			if ($this->checklist_preno_model->insert($form_data) == TRUE) // the information has therefore been successfully saved in the db
			{
			
			$data['rs_preno'] =   $peno = $this->agenda_model->preno_by_id($preno_id, $hotel_id); 
                                
                        $this->email->from($albergo[0]->hotel_email);
                      //   $this->email->from('info@hotellaurentia.com');
                           $this->email->to($albergo[0]->hotel_email);
                     //   $this->email->to('info@hotellaurentia.com');
                        $this->email->subject('CheckList'. $preno_id);
                        $this->email->set_mailtype('html');
                        // html
                        $data['testo'] =   $this->load->view('checklist_preno_add',$data,TRUE );   
                        $body = $this->load->view('temp_email_hotel.php',$data,TRUE);
                        $this->email->message($body);  
                        $this->email->send() ;
                        //echo $body ;
                         
                        
                      	redirect('checklist_preno/?'.$_SERVER['QUERY_STRING'] );   // or whatever logic needs to occur  
                                
                                
                        }
			else
			{

                            redirect('checklist_preno/?error=noinsert&'.$_SERVER['QUERY_STRING'] );	
			}
		}
	}
	

	 /**
         * edit data in to checklist_preno
         */

        function edit()
            {  
            
            
                 $today = date('Y-m-d');
        if ($this->input->get('hotel_id')) {
            $hotel_id = $this->input->get('hotel_id');
        } else {
            $hotel_id = 1;
        }
         $data['today'] = $today = date('Y-m-d');  
// 
        $data['hotel_id'] = $hotel_id;
            
            $preno_id = $this->input->get('preno_id');
            $data['rs_preno'] =   $peno =  $this->agenda_model->preno_by_id($preno_id, $hotel_id);
        

            
              $checklist = $this->input->get('checklist') ; 
              $data['rs_checklist_preno'] =   $this->checklist_preno_model->find_by_id($checklist_id);

       
        
		$this->form_validation->set_rules('checklist_id', 'lang:checklist_id', 'trim');			
		$this->form_validation->set_rules('hotel_id', 'lang:hotel_id', 'required|trim');			
		$this->form_validation->set_rules('preno_id', 'lang:preno_id', 'required|trim');			
		$this->form_validation->set_rules('preno_dal', 'lang:preno_dal', 'required|trim');			
		$this->form_validation->set_rules('email', 'lang:email', 'required|trim');			
		$this->form_validation->set_rules('email_pms', 'lang:email_pms', 'required|trim');			
		$this->form_validation->set_rules('lista', 'lang:lista', 'required|trim');			
		$this->form_validation->set_rules('lista_pms', 'lang:lista_pms', 'required|trim');			
		$this->form_validation->set_rules('pagamento', 'lang:pagamento', 'required|trim');			
		$this->form_validation->set_rules('tassa', 'lang:tassa', 'required|trim');			
		$this->form_validation->set_rules('proforma', 'lang:proforma', 'required|trim');			
		$this->form_validation->set_rules('proforma_pms', 'lang:proforma_pms', 'required|trim');			
		$this->form_validation->set_rules('bonifico', 'lang:bonifico', 'required|trim');			
		$this->form_validation->set_rules('importo', 'lang:importo', 'required|trim|is_numeric');			
		$this->form_validation->set_rules('note', 'lang:note', 'trim|xss_clean');			
		$this->form_validation->set_rules('data_check', 'lang:data_check', 'trim');			
		$this->form_validation->set_rules('utente_id', 'lang:utente_id', 'trim');			
		$this->form_validation->set_rules('data_record', 'lang:data_record', 'trim');
			
			
		$this->form_validation->set_error_delimiters('<span class="error">', '</span><br /> ');
	
		if ($this->form_validation->run() == FALSE) // validation hasn't been passed
		{
                       
                /** function find_by_id('checklist')
                * find preno_id
                * @param $form_data - array
                * @return object
                */
                

		// scegli il templete
		$temi = 'tem_bc_new';
		// carica la vista del contenuto
		$vista = 'checklist_preno_edit';
		// gestore templete
                
                $data['temp'] = array
                ('templete' => $temi, 
                'contenuto' => $vista, 
                'bar_1' => 'bar_1',
                'bar_2' => 'bar_2',
                'box_top' => 'box_top' );
                $this->load->view('templetes', $data);

		//$this->load->view('checklist_preno_edit');
			
		}
		else // passed validation proceed to post success logic
		{
		 	// build array for the model
			
		$form_data = array(
                            // 	'checklist_id' => set_value('checklist_id'),
                            // 	'hotel_id' => set_value('hotel_id'),
                            // 	'preno_id' => set_value('preno_id'),
                            // 	'preno_dal' => set_value('preno_dal'),
			      	'email' => set_value('email'),
			      	'email_pms' => set_value('email_pms'),
			      	'lista' => set_value('lista'),
			      	'lista_pms' => set_value('lista_pms'),
			      	'pagamento' => set_value('pagamento'),
			      	'tassa' => set_value('tassa'),
			      	'proforma' => set_value('proforma'),
			      	'proforma_pms' => set_value('proforma_pms'),
			      	'bonifico' => set_value('bonifico'),
			      	'importo' => set_value('importo'),
			      	'note' => set_value('note'),
			      	'data_check' => set_value('data_check'),
			      	'utente_id' => set_value('utente_id'),
                            //	'data_record' => set_value('data_record')
                    );
					
			// run insert model to write data to db
		
		    $checklist = $this->input->get('checklist');
			

			if ($this->checklist_preno_model->update($checklist, $form_data) == TRUE) // the information has therefore been successfully saved in the db
			{
				                                  
                                redirect('checklist/index/?'.$_SERVER['QUERY_STRING'] );
			}
			else
			{
                          redirect('checklist/index/?error=noupdata&'.$_SERVER['QUERY_STRING'] );			

			}
		}
	}
	
	 /**
         * delete record by to checklist_preno
         */

       function delete()
       {
          
        $checklist = $this->input->post('checklist');
       
            if( $this->input->post('CAX') == 10 && isset($checklist ) ) {
              $this->checklist_preno_model->delete($checklist);
              redirect('checklist_preno/index/?'.$_SERVER['QUERY_STRING'] );

                }  
        else{

            redirect('checklist/edit/?error=nodelete&'.$_SERVER['QUERY_STRING'] );	

            }               
           
       }

	function success()
	{
            echo 'this form has been successfully submitted with all validation being passed. All messages or logic here. Please note
	    sessions have not been used and would need to be added in to suit your app';
	}
}
?>