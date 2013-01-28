<?php  
class Team_model extends CI_Model {  
//  function team() {  
//    parent::Model();  
//  }  
  
   
  function get_records()
  {
    $query = $this->db->get('team');
    foreach ($query->result() as $row)
      {
      echo $row->email;
      }

  }


  function insert_to_db() {
   
   $this->load->database();
    
    //We create a variable that will store our data.
   $data = array(
     'name' =>  $this->input->post('inputTeamName'),
     'email' => $this->input->post('inputEmail'),
      'design' => 'star.jpg'
     
  );
 

//Built in function performs the insert action.
   $this->db->insert('team', $data);
    return;


  }
}  
