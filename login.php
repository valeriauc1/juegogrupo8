<?php

session_save_path('./sesiones');
include('dblogin.php');

function generateUniqueToken() {
    global $connection; 
    return bin2hex(random_bytes(16)); 
}

session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST['email']) || empty($_POST['password'])) {
        $_SESSION['errorDeLogin1'] = "Falta un campo";
        header("Location: inicio.php");
        exit();
    } else {
        $email = $_POST['email'];
        $password = $_POST['password'];

        $sql = "SELECT id, user_correo FROM usuario WHERE user_correo = ? AND user_clave = ?";
        $stmt = $connection->prepare($sql); 
        $stmt->bind_param("ss", $email, $password);
        $stmt->execute();
        $stmt->store_result();


        if ($stmt->num_rows > 0) {
            $stmt->bind_result($userId, $userEmail);
            $stmt->fetch();
            $token = generateUniqueToken(); 
            $_SESSION['token'] = $token; 
            $_SESSION['user_id'] = $userId; 
            $_SESSION['correo'] = $userEmail; 
            header("Location: index.php");
            exit();
        } else {
            header("Location: inicio.php");
            exit();
        }
        $stmt->close();
    }
}

?>
