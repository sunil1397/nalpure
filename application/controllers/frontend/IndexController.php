 <?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * 
 */
class IndexController extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
	}

	public function index_view()
	{
		$this->load->view('frontend/index');
	}
}