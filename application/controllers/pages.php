<?php if (!defined('BASEPATH')) die();
class Pages extends Main_Controller {

   public function index()
	{
      $this->load->view('include/header');
      $this->load->view('pages/frontpage');
      $this->load->view('include/footer');
	}
 
 	public function view($page = 'home')
	{
	
	$this->load->view('include/header');	
	
		switch ($page) {
			case "home":
				$this->load->view('pages/frontpage');
				break;
			case "quote":
				$this->load->view('pages/quote');
				break;
			case "samples":
				$this->load->view('pages/samples');
				break;
		}
		
	$this->load->view('include/footer');
	}
   
}

/* End of file pages.php */
/* Location: ./application/controllers/pages.php */
