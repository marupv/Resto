<body>
<div>
	<h1>Ingresar productos:</h1>
	<form id="productos-form" action="<?php echo base_url()?>productos_controller/alta_producto/" method="post" role="form">
	  COD:<br>
	  <input type="text" name="cod">
	  <br>
	  Nombre:<br>
	  <input type="text" name="nombre">
	  <br>
	  Observaciones:<br>
	  <input type="text" name="observaciones">
	  <br>
	  Categoría:<br>
	  <input type="text" name="categoria">
	  <br>
	  Precio:<br>
	  <input type="number" name="precio">
	  <br><br>
	  <input type="submit" name="Enviar">
	</form>
</div>
</body>
