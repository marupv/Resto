<?php
class productos_model extends CI_Model  {

// Atributos
	public $cod;
	public $descripcion;
	public $observaciones;
	public $categoria;
	public $precio;

// Constructor
   	function __construct(){
      parent::__construct();
   	}

// Métodos
   	function traer_productos(){
      //Obtiene el listado de productos
      $this->db->select('id, cod, descripcion, observaciones, categoria, precio');
      $this->db->from('productos');
      $consulta = $this->db->get();
      $resultado = $consulta->result_array();
      return $resultado;
   	}

		function borrar_producto($id){
			//Borra un producto
			$this->db->where('id', $id);
   		$this->db->delete('productos');
		}

      function traer_un_producto($id){
      //Obtiene un producto
      $this->db->select('cod, descripcion, observaciones, categoria, precio');
      $this->db->from('productos');
      $this->db->where('id = '.$id);
      $consulta = $this->db->get();
      $resultado = $consulta->row_array();
      return $resultado;
      }

      function insertar_producto($cod,$descripcion,$observaciones,$categoria,$precio){
      //Inserta datos en la tabla productos
        $data = array(
           'cod' => $cod,
           'descripcion' => $descripcion,
           'observaciones' => $observaciones,
           'categoria' => $categoria,
           'precio' => $precio
        );
        $this->db->insert('productos', $data);


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
