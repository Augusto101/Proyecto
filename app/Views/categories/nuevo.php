<div id="layoutSidenav_content">
  <main>
    <div class="container-fluid">
      <h1 class="mt-4"><?php echo $titulo; ?> </h1>

    <form  method="post" action = "<?php  echo base_url(); ?>/categorias/insertar" autocomplete="off">

      <div class="form-group">
        <div class="row">
          <div class="col-12 col-sm-6">
            <label> Nombre </label>
            <input class="form-control" type="text" id="nombre" name="nombre" autofocus require/>
          </div>
        </div>
      </div>

      <a href="<?php echo base_url(); ?>/categorias" class="btn btn-primary" >Regresar</a>
      <button type="submit" name="button" class="btn btn-success" >Guardar</button>
    </form>
  </div>
</main>
