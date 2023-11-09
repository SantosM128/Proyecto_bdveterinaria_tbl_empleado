<h1 class="page-header">
    <?php echo $alm->id_Empleado != null ? $alm->Nombre : 'Nuevo Registro'; ?>
</h1>

<ol class="breadcrumb">
  <li><a href="?c=tbl_empleado">tbl_empleado</a></li>
  <li class="active"><?php echo $alm->id_Empleado != null ? $alm->Nombre : 'Nuevo Registro'; ?></li>
</ol>

<form action="?c=tbl_empleado&a=Guardar" method="post" enctype="multipart/form-data">
    <input type="hidden" name="id_Empleado" value="<?php echo $alm->id_Empleado; ?>" />
    
    <div class="form-group">
        <label>Nombre</label>
        <input type="text" name="Nombre" value="<?php echo $alm->Nombre; ?>" class="form-control" placeholder="Ingrese su Nombre" data-validacion-tipo="requerido|Nombre" />
    </div>
    
    <div class="form-group">
        <label>Apellidos</label>
        <input type="text" name="Apellidos" value="<?php echo $alm->Apellidos; ?>" class="form-control" placeholder="Ingrese sus Apellidos" data-validacion-tipo="requerido|Apellidos" />
    </div>
    
    <div class="form-group">
        <label>Telefono</label>
        <input type="text" name="Telefono" value="<?php echo $alm->Telefono; ?>" class="form-control" placeholder="Ingrese su Telefono" data-validacion-tipo="requerido|Telefono" />
    </div>
    
    <div class="form-group">
        <label>Correo</label>
        <input type="email" name="Correo" value="<?php echo $alm->Correo; ?>" class="form-control" placeholder="Ingrese su Correo" data-validacion-tipo="requerido|Correo" />
    </div>
    
    <div class="form-group">
        <label>HorarioT</label>
        <input type="text" name="HorarioT" value="<?php echo $alm->HorarioT; ?>" class="form-control" placeholder="Ingrese su HorarioT" data-validacion-tipo="requerido|HorarioT" />
    </div>

    <div class="form-group">
        <label>Puesto</label>
        <input type="text" name="Especialidad" value="<?php echo $alm->Especialidad; ?>" class="form-control" placeholder="Ingrese su puesto" data-validacion-tipo="requerido|Especialidad" />
    </div>

    <div class="form-group">
        <label>Sueldo</label>
        <input type="text" name="Sueldo" value="<?php echo $alm->Sueldo; ?>" class="form-control" placeholder="Ingrese su Sueldo" data-validacion-tipo="requerido|Sueldo" />
    </div>
    
    <hr />
    
    <div class="text-right">
        <button class="btn btn-success">Guardar</button>
    </div>
</form>

<script>
    $(document).ready(function(){
        $("#frm-alumno").submit(function(){
            return $(this).validate();
        });
    })
</script>
