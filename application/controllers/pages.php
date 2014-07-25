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
	
		//auto-map page name to a view of the same name
		//place exceptions at the top (e.g. home-->frontpage)
		if($page=="home"){
			$this->load->view('pages/frontpage');
		}else{
			$this->load->view('pages/' . $page);
		}
		
	$this->load->view('include/footer');
	}
   
}

/* End of file pages.php */
/* Location: ./application/controllers/pages.php */
