<?php

defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . 'libraries/REST_Controller.php';

class Funcbd extends REST_Controller {

        public function __construct()
        {
        parent::__construct();
        $this->load->model('funcbd_model');
        }


        public function index_get()
        {
                $tablas = $this->funcbd_model->get();
                $this->response(array('response' => $tablas));
        }

        public function find_get($num)
        {
                $tabla = $this->funcbd_model->get($num);
                $this->response(array('response' => $tabla));
        }

        public function index_post()
        {
                $num = $this->funcbd_model->guardado($this->post('tabla'));
                $this->response(array('response' => $num));
        }

        public function index_put($num)
        {
                $update = $this->funcbd_model->actualizado($num, $this->put('tabla'));
                $this->response(array('response' => $update));
        }

        public function index_delete($num)
        {
                $delete = $this->funcbd_model->borrado($num);
                $this->response(array('response' => $delete));
        }

}

