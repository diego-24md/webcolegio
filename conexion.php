<?php
   // Conexión a la base de datos usando mysqli_connect
   $conex = mysqli_connect("localhost", "root", "", "comentario");

   // Verifica si la conexión fue exitosa
   if (!$conex) {
       die("Error en la conexión: " . mysqli_connect_error());
   } else {
       echo "Comentario enviado!. Por favor, regrese a la Página Principal";
   }
?>
<?php
$servidor = "localhost";
$usuario = "root";
$clave = "";
$basedeDatos = "comentario";

$enlace = mysqli_connect ($servidor, $usuario, $clave, $basedeDatos);

?>
<?php
if(isset($_POST['registro'])){
    $nombre = $_POST['name'];
    $email = $_POST['email'];
    $rol = $_POST['claimReason'];
    $comentariosWeb = $_POST['webComments'];
    $comentariosInstitucion = $_POST['institutionComments'];
    $calificacion = $_POST['rating'];
    $consent = $_POST['consent'];
}
$insertarDatos = "INSERT INTO datos VALUES('$nombre','$email','$rol','$comentariosWeb','$comentariosInstitucion','$calificacion','$consent')";

$ejecutarInsertar = mysqli_query ($enlace, $insertarDatos);

?>