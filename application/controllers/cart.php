<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class Cart extends CI_Controller {

/***	 function __construct()
	{
	  parent::__construct();
	  $this->load->library('session');
	  $this->load->library('cart');
	}
*****/

  
	public function add()
	{
         	    
	$data1 = array('uname' =>'vipin',
		  'email' => 'ashutosh@gmail.com',
		  'phone' => '123456');
	
  
	$data2 = array(
		  'id' => '2022',
		  'name' => 'Pants',
		  'qty' => 1,
		  'price' => 19.99,
		  'Size' => 'M',
		  'Type' => 'Regular',
		  'nickname' => 'Piggy',
		  'number' => 12
		);


	$this->db->insert('users', $data1); 
	//$this->db->insert('cart', $data2);
	$this->cart->insert($data2);

	echo "add called";
	}

  
	public function show()
	{
	  $cart = $this->cart->contents();
	  echo '<pre>';
	  print_r($cart);
	}

	function update() {
	  $data = array (
		  'rowid' => '3a824154b16ed7dab899bf000b80eeee',
		   'qty' => 4 

	  );

	  $this->cart->update($data);
	}

    

	function total() {

	  echo $this->cart->total();

	}


	function remove() {
	    
	   $data = array (
		  'rowid' => '3a824154b16ed7dab899bf000b80eeee',
		   'qty' => 0

	  );
	    $this->cart->update($data); 
	    echo "remove() called";  
	}



	function destroy() {

	  $this->cart->destroy();

	}


}
