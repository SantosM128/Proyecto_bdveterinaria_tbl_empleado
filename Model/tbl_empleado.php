<?php
class tbl_empleado
{
	private $pdo;
    
    public $id_Empleado;
    public $Nombre;
    public $Apellidos;
    public $Telefono;
    public $Correo;
    public $HorarioT;
	public $Especialidad;
    public $Sueldo;

	public function __CONSTRUCT()
	{
		try
		{
			$this->pdo = Conexion::StartUp();     
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}

	public function Listar()
	{
		try
		{
			$result = array();

			$stm = $this->pdo->prepare("SELECT * FROM tbl_empleado");
			$stm->execute();

			return $stm->fetchAll(PDO::FETCH_OBJ);
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}

	public function getting($id_Empleado)
	{
		try 
		{
			$stm = $this->pdo
			          ->prepare("SELECT * FROM tbl_empleado WHERE id_Empleado = ?");
			          

			$stm->execute(array($id_Empleado));
			return $stm->fetch(PDO::FETCH_OBJ);
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}

	public function Eliminar($id_Empleado)
	{
		try 
		{
			$stm = $this->pdo
			            ->prepare("DELETE FROM tbl_empleado WHERE id_Empleado = ?");			          

			$stm->execute(array($id_Empleado));
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}

	public function Actualizar($data)
	{
		try 
		{
			$sql = "UPDATE tbl_empleado SET 
						Nombre          = ?, 
						Apellidos        = ?,
                        Telefono        = ?,
						Correo            = ?, 
						HorarioT = ?,
						Especialidad        = ?,
						Sueldo        = ?
				    WHERE id_Empleado = ?";

			$this->pdo->prepare($sql)
			     ->execute(
				    array(
                        $data->Nombre, 
                        $data->Apellidos,
                        $data->Telefono,
                        $data->Correo,
                        $data->HorarioT,
						$data->Especialidad,
						$data->Sueldo,
                        $data->id_Empleado
					)
				);
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}

	public function Registrar($data)
	{
		try 
		{
		$sql = "INSERT INTO `tbl_empleado` (Nombre,Apellidos,Telefono,Correo,HorarioT,Especialidad,Sueldo) 
		        VALUES (?, ?, ?, ?, ?, ?, ?)";

		$this->pdo->prepare($sql)
		     ->execute(
				array(
                    $data->Nombre, 
                    $data->Apellidos,
                    $data->Telefono,
                    $data->Correo,
                    $data->HorarioT,
					$data->Especialidad,
					$data->Sueldo                   
                )
			);
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}
}
?>
