<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

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

	function __construct()
	{
		parent::__construct();
	}

	public function index()
	{	
		if($this->session->userdata('logged'))
		{
			$data['logged'] = $this->session->userdata('logged');
		}
		$data['origine'] = 0;
		$this->load->model('mAccount');
		$data['profil'] = $this->mAccount->allProfile();
		// printf("<pre>%s</pre>",print_r($data, true));
		$this->load->view('vIndex', $data);
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */