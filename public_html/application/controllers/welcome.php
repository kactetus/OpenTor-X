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
	public function index()
	{

		$this->load->model("torrentmodel");


		$data['anime'] = $this->torrentmodel->get('anime');
		$data['movies'] = $this->torrentmodel->get('movies');
		$data['tv'] = $this->torrentmodel->get('tv');
		$data['applications'] = $this->torrentmodel->get('applications');
		$data['books'] = $this->torrentmodel->get('books');
		$data['music'] = $this->torrentmodel->get('music');
		$data['games'] = $this->torrentmodel->get('games');
		$data['other'] = $this->torrentmodel->get('other');
		$data['xxx'] = $this->torrentmodel->get('xxx');

		$this->load->view('default/header',  ['title' => 'Welcome']);
		$this->load->view('default/table', ['title' => 'Anime', 'anchor' => 'anime', 'results' => $data['anime']]);
		$this->load->view('default/table', ['title' => 'Applications', 'anchor' => 'applications', 'results' => $data['applications']]);
		$this->load->view('default/table', ['title' => 'Books', 'anchor' => 'books', 'results' => $data['books']]);
		$this->load->view('default/table', ['title' => 'Games', 'anchor' => 'games', 'results' => $data['games']]);
		$this->load->view('default/table', ['title' => 'Movies', 'anchor' => 'movies', 'results' => $data['movies']]);
		$this->load->view('default/table', ['title' => 'Music', 'anchor' => 'music', 'results' => $data['music']]);
		$this->load->view('default/table', ['title' => 'Other', 'anchor' => 'other', 'results' => $data['other']]);
		$this->load->view('default/table', ['title' => 'XXX', 'anchor' => 'xxx', 'results' => $data['xxx']]);
		
		$this->load->view('default/footer');
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
