<?php
defined('BASEPATH') OR exit('No direct script access allowed');

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
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->model('mwelcome');
		$data['nama']="BELAJAR";
		$data['nilai']=$this->mwelcome->get();
		$data['luas_pp']=$this->mwelcome->luas(7,5);
		$this->load->view('luaspp',$data);
	}
	public function hitung_luas(){
		$this->load->model('mwelcome');
		$data['nama']="BELAJAR";
		$data['nilai']=$this->mwelcome->get();

		$this->load->model('mwelcome');
		$panjang=$this->input->post('panjang');
		$lebar=$this->input->post('lebar');
		$data['luas_pp'] = $this->mwelcome->luas($panjang,$lebar);
		$this->load->view('welcome_message',$data);
		}
}
