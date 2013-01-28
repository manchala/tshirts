<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Team extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('layout/column1');
	}

	public function create()
	{
		$data['view'] = 'create';
		$this->load->view('layout/column1', $data);
		$this->load->model('Team_model');
		
		if( $this->input->post('submit') ) {
		    $this->Team_model->insert_to_db();  
		}

	}

	public function search()
	{
	  
	  $TeamName = $this->input->post('TeamName');

	  // Create the query
	  $sql = "SELECT * FROM team WHERE name = ?";

	  // Execute it, replacing the ? with the last name from the form
	  $query = $this->db->query($sql, array($TeamName));

	  // Show results
	  foreach ($query->result() as $row) {
	    echo $row->name . "<br />";
	  
	  }


	}
	
	public function find()
	{
		$data['view'] = 'find';
		$data['view_sidebar'] = 'find_sidebar';
		$this->load->model('Products_model');
		$data['products'] = $this->Products_model->get_all();
		
		$this->load->view('layout/column2', $data);
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */