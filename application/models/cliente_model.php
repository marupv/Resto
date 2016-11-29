<?php
class cliente_model extends CI_Model  {

// Atributos
	public $id;
	public $nombre;
  public $telefono;
	public $direccion;

// Constructor
   	function __construct(){
      parent::__construct();
   	}

// Métodos
   	function traer_cliente(){
      //Obtiene el listado de cliente
      $this->db->select('id, nombre, telefono, direccion');
      $this->db->from('cliente');
      $consulta = $this->db->get();
      $resultado = $consulta->result_array();
      return $resultado;
   	}
  }
