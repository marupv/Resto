<body>

<div class="row">
  <h1 class="col-lg-8">Menú</h1>
  <a href="<?php echo base_url()?>productos_controller/editar_productos/" class="btn btn-success btn-add col-lg-4">
    <span class="glyphicon glyphicon-plus"></span> Agregar productos
  </a>
</div>

<br/>
<br/>

<table class="table">
    <thead>
      <tr>
        <th>Código</th>
        <th>Descripción</th>
        <th>Observaciones</th>
        <th>Categoría</th>
        <th>Precio</th>
        <th>Editar</th>
        <th>Borrar</th>
      </tr>
    </thead>
    <tbody>

      <?php
        foreach($productos as $k => $v){
      ?>

      <tr>
        <td><?php echo $v["cod"]?></td>
        <td><?php echo $v["descripcion"]?></td>
        <td><?php echo $v["observaciones"]?></td>
        <td><?php echo $v["categoria"]?></td>
        <td>$<?php echo $v["precio"]?></td>
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
