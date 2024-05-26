<!-- TODO conexion -->
<?php 
    /* TODO iniciamos session para poder acceder a todos los datos */
    session_start();

    
    class Conectar{
        /* TODO nos conectaremos a postgreslq */
        protected $dbh;
        protected function Conexion(){
            $host="localhost";
            $dbname="helpdesk";
            $username="postgres";
            $password= "postgres";
            try {
                $conectar =$this->dbh=new PDO("pgsql:host=$host; dbname=$dbname",$username,$password);
                return $conectar;
            } catch (Exception $e) {
                print("Error de BD". $e->getMessage() ."</br>");
                die();
            }
        }
        
        /* TODO PARA NO TENER PROBLEMAS CON LAS Ñ O OTRO CARACTER */
        public function set_names(){
            return $this->dbh->query("SET NAMES 'utf-8'");
        }

        /* TODO LA RUTA DE MI PROYECTO */
         public static function ruta(){
            return "http://localhost/personal_helpdesk/";
        }
    
    }
    
?>