<?php  
class Products_model extends CI_Model {



      function get_all() {

	$results= $this->db->get('products')->result();
	//foreach ($results as $result) {
	//  echo $result->product_name;
  
	//}
	return $results;
      }

      function get($id) {
	
	$this->db->where('product_id', $id); // Select where id matches the posted id
	$results = $this->db->get('products')->result_array();
	//$results = "hello";
	return $results;
	//print_r($results[0]->price); 
	

      }


}
?>