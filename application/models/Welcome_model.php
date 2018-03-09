<?php
class Welcome_model extends CI_Model {

       	public function get_lineas()
	{
        return file('/etc/passwd');
	}

	public function __construct()
	{
	}

	public function get_linea()
        {
                return fgets(fopen('/etc/passwd', 'r'));
        }
	public function get_registros()
	{
		return registros('/etc/passwd', ':');
	}
}
