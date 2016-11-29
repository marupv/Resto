<?php
class reservas_model extends CI_Model  {

// Atributos
	public $fecha;
	public $cant_personas;
  public $id_cliente;
	public $comentarios;
	public $cumpleanos;

// Constructor
   	function __construct(){
      parent::__construct();
   	}

// Métodos
   	function traer_reservas_clientes(){
      //Obtiene el listado de reservas
      $this->db->select('r.id, r.fecha, r.cant_personas, r.comentarios, r.cumpleanos, c.nombre, c.telefono');
      $this->db->from('reservas r');
      $this->db->join('clientes c', 'c.id = r.id_cliente');
      $consulta = $this->db->get();
      $resultado = $consulta->result_array();
      return $resultado;
   	}

		function borrar_reserva($id){
			//Borra un producto
			$this->db->where('id', $id);
   		$this->db->delete('reservas');
		}

      function traer_una_reserva($id){
      //Obtiene un producto
      $this->db->select('id, fecha, cant_personas, id_cliente, comentarios, cumpleanos');
      $this->db->from('reservas');
      $this->db->where('id = '.$id);
      $consulta = $this->db->get();
      $resultado = $consulta->row_array();
      return $resultado;
      }

      function insertar_reserva($cod,$descripcion,$observaciones,$categoria,$precio){
      //Inserta datos en la tabla reservas
        $data = array(
           'cod' => $cod,
           'descripcion' => $descripcion,
           'observaciones' => $observaciones,
           'categoria' => $categoria,
           'precio' => $precio
        );
        $this->db->insert('reservas', $data);


   }
}

/* if (!empty($_POST)) { //valida de que no haya errores
    if ($_POST["nombre"]=="") {
      $errores .= "Error en el nombre";
    }
    if ($_POST["turno"]=="") {
      $errores .= "Error en el turno";
    }

    if ($errores=="") {
      $nombre = $_POST["nombre"];
      $turno = $_POST["turno"];
      mysqli_query($conexion, "update curso set
        nombre='$nombre', turno='$turno' where id=$id");
      header("Location: listado_alumnos.php");
    }
  }
  if (!isset($_POST["id"])) {
    echo "El id es obligatorio";
    die(); //hace que se termine de ejecutar el codigo ahi
  } */



?>
