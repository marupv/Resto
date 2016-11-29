<body>

<div class="row">
  <h1 class="col-lg-8">Reservas</h1>
  <a href="<?php echo base_url()?>reservas_controller/traer_reservas/" class="btn btn-success btn-add col-lg-4">
    <span class="glyphicon glyphicon-plus"></span> Agregar reserva
  </a>
</div>

<br/>
<br/>

<table class="table">
    <thead>
      <tr>
        <th>Fecha</th>
        <th>Cantidad de personas</th>
        <th>Cliente</th>
        <th>Teléfono</th>
        <th>Comentarios</th>
        <th>Cumpleaños</th>
        <th>Editar</th>
        <th>Borrar</th>
      </tr>
    </thead>
    <tbody>

      <?php
        foreach($reservas as $k => $v){
      ?>

      <tr>
        <td><?php echo $v["fecha"]?></td>
        <td><?php echo $v["cant_personas"]?></td>
        <td><?php echo $v["nombre"]?></td>
        <td><?php echo $v["telefono"]?></td>
        <td><?php echo $v["comentarios"]?></td>
        <td><?php echo $v["cumpleanos"]?></td>
        <td>
          <a href="<?php echo base_url()?>productos_controller/editar_productos/">
            <button type="button" class="btn btn-info">
              <span class="glyphicon glyphicon-edit"></span>
            </button>
          </a>
        </td>
        <td>
          <a href="<?php echo base_url()?>productos_controller/borrar_producto/<?php echo $v["id"]?>">
            <button type="button" class="btn btn-warning">
              <span class="glyphicon glyphicon-trash"></span>
            </button>
          </a>
        </td>
      </tr>

      <?php } ?>

    </tbody>
  </table>
</body>
