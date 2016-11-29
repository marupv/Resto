<body>
<div>
	<h1>Ingresar productos:</h1>
	<form id="productos-form" action="<?php echo base_url()?>productos_controller/alta_producto/" method="post" role="form">
	  COD:<br>
	  <input type="text" name="cod">
	  <br>
	  Descripcion:<br>
	  <input type="text" name="descripcion">
	  <br>
	  Observaciones:<br>
	  <input type="text" name="observaciones">
	  <br>
	  Categoría:<br>
		<select class="form-control" name="categoria">
		  <option value="Bebidas">Bebidas</option>
		  <option value="Entrada">Entradas</option>
		  <option value="Platos">Platos</option>
		  <option value="Postres">Postres</option>
		  <option value="Extras">Extra</option>
		</select>
	  <br>
	  Precio:<br>
	  <input type="number" name="precio">
	  <br><br>
	  <input type="submit" name="Enviar">
	</form>
</div>
</body>
