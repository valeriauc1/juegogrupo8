<?php

session_save_path('./sesiones');
session_start();

// Verificar si se ha pasado un token como parámetro GET
if (isset($_GET['token'])) {
    // Verificar si el token pasado coincide con el token almacenado en la sesión
    if (isset($_SESSION['token']) && $_GET['token'] === $_SESSION['token']) {
        // Destruir la sesión
        $_SESSION = array();
        if (ini_get("session.use_cookies")) {
            $params = session_get_cookie_params();
            setcookie(session_name(), '', time() - 42000,
                $params["path"], $params["domain"],
                $params["secure"], $params["httponly"]
            );
        }
        session_destroy();
        
        // Agregar mensaje de depuración
        echo "Sesión destruida correctamente.";
        
        // Redirigir al usuario a la página de inicio de sesión
        header("Location: Inicio.php");
        exit();
    } else {
        echo "El token pasado: " . $_GET['token'] . " no coincide con el token almacenado en la sesión: " . $_SESSION['token'];
    }
} else {
    echo "No se pasó ningún token como parámetro GET.";
}

?>
