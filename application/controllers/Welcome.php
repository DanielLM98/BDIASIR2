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
	$data['linea']=fgets(fopen('/etc/passwd','r'));
	$data['lines']=file('/etc/passwd');
	$this->load->view('welcome_message',$data);
	}
	public function visitas() 
	{
     	$data['accesos'] = $this->cache->redis->get('visitasEnero');
    	 $this->load->view('pp',$data);
 	}

	public function lineafile()
	{
	$data['file'] = fgets(fopen('/etc/passwd','r'));
	$this->load->view('welcome_message',$data);
	}
	public function aula()
	{
	$data['perico'] = fgets(fopen('/tmp/aula','r'));
	$this->load->view('welcome_message',$data);
	}
	public function perico()
	{
	$data['perico'] = fgets(fopen('/tmp/perico','r'));
	$this->load->view('welcome_message',$data);
	}

}

