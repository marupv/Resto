<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Productos_controller extends CI_Controller  {

	//Métodos

   	function cargar_vista_abm_productos(){
			$vistas["head"] = $this->load->view('layout/head',array(),true);
			$vistas["header"] = $this->load->view('layout/header',array(),true);
			$vistas["footer"] = '';

			$this->load->model('productos_model');
			$productos = $this->productos_model->traer_productos();

			$data = array('productos' => $productos);
			$vistas["contenido"] = $this->load->view('abm_productos',$data,true);

			//Llama a la plantilla (layout) y le pasa como parametro el head, menu, listado de prodictos y footer
			$this->load->view('layout/layout',$vistas);

   	}

		function editar_productos(){
			$vistas["head"] = $this->load->view('layout/head',array(),true);
			$vistas["header"] = $this->load->view('layout/header',array(),true);
			$vistas["contenido"] = $this->load->view('editar_productos',array(),true);
			$vistas["footer"] = '';
			//Llama a la plantilla (layout) y le pasa como parametro el head, menu, listado de prodictos y footer
			$this->load->view('layout/layout',$vistas);
		}

		function alta_producto() {

			$this->load->model('productos_model');

			$cod = $this->input->post("cod");
			$descripcion = $this->input->post("descripcion");
			$observaciones = $this->input->post("observaciones");
			$categoria = $this->input->post("categoria");
			$precio = $this->input->post("precio");

			$productos = $this->productos_model->insertar_producto($cod,$descripcion,$observaciones,$categoria,$precio);

			$this->cargar_vista_abm_productos();
		}

		function borrar_producto($id){
			$this->load->model('productos_model');
			$this->productos_model->borrar_producto($id);
			$this->cargar_vista_abm_productos();
		}


}

?>
