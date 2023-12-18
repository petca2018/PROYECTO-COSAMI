<?php 
class conexion{
    public $servidor = 'localhost';
    public $usuario = 'root';
    public $password = '';
    public $database = 'registros';
    public $port = 3306;

    public function conectar(){
        return mysqli_connect(
            $this->servidor,
            $this->usuario,
            $this->password,
            $this->database,
            $this->port
        );
    }
}
$servidor = 'localhost';
$usuario = 'root';
$password = '';
$database = 'registros';
try {
	$bd = new PDO (
		'mysql:host=localhost;
		dbname='.$database,
		$usuario,
		$password,
		array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8")
	);
} catch (Exception $e) {
	echo "Problema con la conexion: ".$e->getMessage();
}
?>

?>