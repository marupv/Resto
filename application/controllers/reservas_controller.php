<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Reservas_controller extends CI_Controller  {

	//Métodos

   	function cargar_vista_abm_reservas(){
			$vistas["head"] = $this->load->view('layout/head',array(),true);
			$vistas["header"] = $this->load->view('layout/header',array(),true);
			$vistas["footer"] = '';

			$this->load->model('reservas_model');
			$reservas = $this->reservas_model->traer_reservas_clientes();

			$data = array('reservas' => $reservas);
			$vistas["contenido"] = $this->load->view('abm_reservas',$data,true);

			//Llama a la plantilla (layout) y le pasa como parametro el head, menu, listado de prodictos y footer
			$this->load->view('layout/layout',$vistas);

   	}

		function editar_reservas(){
			$vistas["head"] = $this->load->view('layout/head',array(),true);
			$vistas["header"] = $this->load->view('layout/header',array(),true);
			$vistas["contenido"] = $this->load->view('editar_reservas',array(),true);
			$vistas["footer"] = '';
			//Llama a la plantilla (layout) y le pasa como parametro el head, menu, listado de prodictos y footer
			$this->load->view('layout/layout',$vistas);
		}

		function alta_producto() {

			$this->load->model('reservas_model');

			$cod = $this->input->post("cod");
			$descripcion = $this->input->post("descripcion");
			$observaciones = $this->input->post("observaciones");
			$categoria = $this->input->post("categoria");
			$precio = $this->input->post("precio");

			$reservas = $this->reservas_model->insertar_producto($cod,$descripcion,$observaciones,$categoria,$precio);

			$this->cargar_vista_abm_reservas();
		}

		function borrar_producto($id){
			$this->load->model('reservas_model');
			$this->reservas_model->borrar_producto($id);
			$this->cargar_vista_abm_reservas();
		}


}

?>
