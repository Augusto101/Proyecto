<div id="layoutSidenav_content">
  <main>
    <div class="container-fluid">
      <h1 class="mt-4"><?php echo $titulo; ?> </h1>

      <?php if(isset($validation)){ ?>
        <div class="alert alert-danger">
          <?php echo $validation->listErrors(); ?>
        </div>
      <?php } ?>

    <form  method="post" action = "<?php  echo base_url(); ?>/unidades/actualizar" autocomplete="off">

    <input type="hidden" value="<?php echo $datos['id']; ?>" name="id" />

      <div class="form-group">
        <div class="row">
          <div class="col-12 col-sm-6">
            <label> Nombre </label>
            <input class="form-control" type="text" id="nombre" name="nombre" value="<?php echo $datos['nombre']; ?>" autofocus require/>
          </div>

          <div class="col-12 col-sm-6">
            <label> Nombre Corto </label>
            <input class="form-control" type="text" id="NombreCorto" name="NombreCorto" value="<?php echo $datos['NombreCorto'] ?>" require/>
          </div>
        </div>
      </div>

      <a href="<?php echo base_url(); ?>/unidades" class="btn btn-primary" >Regresar</a>
      <button type="submit" name="button" class="btn btn-success" >Guardar</button>
    </form>
  </div>
</main>