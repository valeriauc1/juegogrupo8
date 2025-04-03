<?php 
include('dblogin.php');

if (isset($_POST)){

    if(empty($_POST['name']) || empty($_POST['lastname']) || empty($_POST['email']) || empty($_POST['password'])){
        $_SESSION['errorDeRegistro1'] = "Falta un campo";
        echo "Faltan un campo en el registro";
    } else {

        $nombre = $_POST['name'];
        $apellido = $_POST['lastname'];
        $email = $_POST['email'];
        $password = $_POST['password'];

        $query = "SELECT * FROM usuario WHERE user_correo = '$email'";
        $result = mysqli_query($connection, $query);

        if(mysqli_num_rows($result) > 0) {
            $_SESSION['errorDeRegistro2'] = "El correo electrónico ya está en uso. Por favor, elija otro.";
            echo "Correo ya en Uso";
        } else {
            $sql = "INSERT INTO usuario (user_nombre, user_apellido, user_correo, user_clave) VALUES ('$nombre', '$apellido', '$email', '$password')";
            $insert = mysqli_query($connection, $sql);

            if(!$insert){
                $_SESSION['errorDeRegistro2'] = "Hubo un error en la inserción a Base de Datos";
                echo "Correo ya en Uso";
            } else{
                header("Location: inicio.php");
            }
        }
    }
}
?>
