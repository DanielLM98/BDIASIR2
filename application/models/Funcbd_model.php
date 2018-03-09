<?php
class Funcbd_model extends CI_Model {

        public function __construct()
        {
                parent::__construct();
        }

        public function get($num = null)
        {
                if (!is_null($num))
                {
                        $query = $this->db->select('*')->from('favoritos')->where('numero', $num)->get();
                        if ($query->num_rows() === 1)
                        {
                                return $query->row_array();
                        }
                return false;
                }

                $query = $this->db->select('*')->from('favoritos')->get();
                if ($query->num_rows() > 0)
                {
                        return $query->result_array();
                }
                return false;
        }

        public function guardado($tabla)
        {
                $this->db->set($this->_settabla($tabla))->insert('favoritos');
                if ($this->db->affected_rows() === 1)
                {
                        return $this->db->insert_id();
                }
                return false;
}

        public function actualizado($num, $tabla)
        {
                $this->db->set($this->_settabla($tabla))->where('numero', $num)->update('favoritos');
                if ($this->db->affected_rows() === 1)
                {
                        return true;
                }
                return false;

        }

        public function borrado($num)
        {
                $this->db->where('numero', $num)->delete('favoritos');
                if ($this->db->affected_rows() === 1)
                {
                        return true;
                }
                return false;
        }

        public function _settabla($tabla)
        {
                return array(
                        'numero' => $tabla['numero'],
                        'url' => $tabla['url'],
                        'descripcion' => $tabla['descripcion']
                );
        }
}

