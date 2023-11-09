<h1 class="page-header">tbl_empleado</h1>


<div class="well well-sm text-right">
    <a class="btn btn-primary" href="?c=tbl_empleado&a=Crud">Agregar tbl_empleado</a>
</div>

<table class="table table-striped">
    <thead>
        <tr>
            <th >Nombre</th>
            <th>Apellidos</th>
            <th>Telefono</th>
            <th >Correo</th>
            <th >HorarioT</th>
            <th >Puesto</th>
            <th >Correo</th>
            <th ></th>
            <th ></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach($this->model->Listar() as $r): ?>
        <tr>
            <td><?php echo $r->Nombre; ?></td>
            <td><?php echo $r->Apellidos; ?></td>
            <td><?php echo $r->Telefono; ?></td>
            <td><?php echo $r->Correo; ?></td>
            <td><?php echo $r->HorarioT; ?></td>
            <td><?php echo $r->Especialidad; ?></td>
            <td><?php echo $r->Sueldo; ?></td>
            <td>
                <i class="glyphicon glyphicon-edit"><a href="?c=tbl_empleado&a=Crud&id_Empleado=<?php echo $r->id_Empleado; ?>"> Editar</a></i>
            </td>
            <td>
                <i class="glyphicon glyphicon-remove"><a href="?c=tbl_empleado&a=Eliminar&id_Empleado=<?php echo $r->id_Empleado; ?>"> Eliminar</a></i>
            </td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table> 
