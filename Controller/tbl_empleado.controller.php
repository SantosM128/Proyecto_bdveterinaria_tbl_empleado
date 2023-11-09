<?php
require_once 'Model/tbl_empleado.php';

class tbl_empleadoController{
    
    private $model;
    
    public function __CONSTRUCT(){
        $this->model = new tbl_empleado();
    }
    
    public function Index(){
        require_once 'View/header.php';
        require_once 'View/tbl_empleado.php';
        require_once 'View/footer.php';
    }
    
    public function Crud(){
        $alm = new tbl_empleado();
        
        if(isset($_REQUEST['id_Empleado'])){
            $alm = $this->model->getting($_REQUEST['id_Empleado']);
        }
        
        require_once 'View/header.php';
        require_once 'View/tbl_empleado-editar.php';
        require_once 'View/footer.php';
    }
    
    public function Guardar(){
        $alm = new tbl_empleado();
        
        $alm->id_Empleado = $_REQUEST['id_Empleado'];
        $alm->Nombre = $_REQUEST['Nombre'];
        $alm->Apellidos = $_REQUEST['Apellidos'];
        $alm->Telefono = $_REQUEST['Telefono'];
        $alm->Correo = $_REQUEST['Correo'];
        $alm->HorarioT = $_REQUEST['HorarioT'];
        $alm->Especialidad = $_REQUEST['Especialidad'];
        $alm->Sueldo = $_REQUEST['Sueldo'];

        // SI ID PERSONA ES MAYOR QUE CERO (0) INDICA QUE ES UNA ACTUALIZACIÓN DE ESA TUPLA EN LA TABLA PERSONA, SINO SIGNIFICA QUE ES UN NUEVO REGISTRO

        $alm->id_Empleado > 0 
           ? $this->model->Actualizar($alm)
           : $this->model->Registrar($alm);

       //EL CÓDIGO ANTERIOR ES EQUIVALENTE A UTILIZAR CONDICIONALES IF, TAL COMO SE MUESTRA EN EL COMENTARIO A CONTINUACIÓN:

        /*if ($alm->idpersona > 0 ) {
            $this->model->Actualizar($alm);
        }
        else{
           $this->model->Registrar($alm); 
        }*/
        
        header('Location: index.php');
    }
    
    public function Eliminar(){
        $this->model->Eliminar($_REQUEST['id_Empleado']);
        header('Location: index.php');
    }
}
