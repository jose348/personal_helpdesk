<!-- TODO models/Usuario.php interactua con mi BD -->
<?php 
/* TODO traemos nuestra conexion ya que el modelo intereactua con mi BD */
    class Usuario extends Conectar{

        /* TODO LOGIN CREAMOS */
        public function login(){
            $conectar=parent::Conexion();
            parent::set_names();
            if(isset($_POST["enviar"])){ // viene delogin // recibimos los parametros
                $correo=$_POST["usu_correo"];
                $pass=$_POST["usu_pass"];
                $rol=$_POST["rol_id"];
                if(empty($correo) and empty($pass) ){
                    header("Location:".conectar::ruta()."index.php?m=2" );
                    exit();
                }else{
                    $sql="SELECT * FROM tm_usuario WHERE usu_correo=? AND usu_pass=? AND est=1 AND rol_id=?";
                    $stmt=$conectar->prepare($sql);
                    $stmt->bindValue(1,$correo);
                    $stmt->bindValue(2,$pass);
                    $stmt->bindValue(3,$rol);
                    $stmt->execute();
                    $resultado=$stmt->fetch();

                    /* TODO valido si me trae datos o no   */
                    if(is_array($resultado) and count($resultado)>0){
                        /* TODO CREO MIS VARIABLES DE SESSION QUE UTILIZARE EN TODO EL SISTEMA*/
                        //NOMBRE DE LA SESSION = RESULTADO QUE VIENE DE MI BD
                        $_SESSION["usu_id"]=$resultado["usu_id"];
                        $_SESSION["usu_nom"]=$resultado["usu_nom"];
                        $_SESSION["usu_ape"]=$resultado["usu_ape"];
                        $_SESSION["rol_id"]=$resultado["rol_id"];
                        

                        header("Location:".Conectar::ruta()."view/Home/");
                        exit();
                    }else{
                        header("Location:".Conectar::ruta()."index.php?m=1");
                        exit();
                    }
                }
            }

        }
    }


?>