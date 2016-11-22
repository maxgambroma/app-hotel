<?php
// Checklist_preno_model.php
class Checklist_preno_model extends CI_Model {

	function __construct()
	{
		parent::__construct();
	}
	
	// --------------------------------------------------------------------

      /** 
       * function find()
       * find form data
       * @param $form_data - array
       * @return object
       */
	
	public function find()
            {
                return $this->db->get( 'checklist_preno' )->result() ;
            }

      /** 
       * function find_limit($offset,$limit)
       * find form data
       * @param $form_data - array
       * @return Array
       */
       	
	public function find_limit($limit = 100, $offset = 0 )
            {
                $query= $this->db->query("
                SELECT *
                FROM checklist_preno
                LIMIT $offset , $limit "); 
                return   $query->result();
            }

         /** 
       * function count all record 
       * 
       * @param $form_data - array
       * @return object
       */
	
        public function record_count()
            {
                return $this->db->count_all('checklist_preno');
            }

	/** 
       * function find_by_id($checklist)
       * find checklist
       * @param $form_data - array
       * @return object
       */

	public function find_by_id($checklist)
            {	
                return $this->db->get_where( 'checklist_preno' , array('checklist' => $checklist ))->row();
            }

        /** 
       * function insert($data)
       * insert to checklist_preno data
       * @param $form_data - array
       * @return object
       */
		
	public function insert($data)
            {
                $this->db->set($data);
                $this->db->insert('checklist_preno');
                return $this->db->insert_id();
            }
		
        /** 
       * function update($checklist, $data)
       * insert update checklistform data
       * @param $form_data 
       * @return id
       */
		
	public function update($checklist, $data)
            {
                $this->db->where('checklist', $checklist);
                $this->db->set($data);
                $this->db->update('checklist_preno');
                return $this->db->affected_rows();
            }

		/** 
       * function delete($checklist)
       * delete form checklist_preno data
       * @param 
       * @return 
       */

	public function delete($checklist)
            {
                $this->db->where('checklist', $checklist);
                $this->db->delete('checklist_preno');
                return $this->db->affected_rows();
            }
	
            
            
            
            
            
            

            
            
}
?>