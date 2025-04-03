<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>JuegoGrupo8</title>
</head>
<body>
    <div class="wrapper">
        <form action="login.php" method="POST">
            <h1>Inicio de sesión</h1>
            <div class="input-box">
                <input type="email" placeholder="Correo electrónico" required name="email">
                <i class='bx bxs-envelope'></i>
            </div>
            <div class="input-box">
                <input type="password" placeholder="Contraseña" required name="password">
                <i class='bx bxs-lock'></i>
            </div>
            <button type="submit" class="btn">Iniciar sesión</button>
            <div class="register-link">
                <p>¿No tienes cuenta? <a href="register.html">Regístrate</a></p>
            </div>
        </form>       
        <script>
            window.onload = function() {
                var errorMessage = "<?php echo isset($_SESSION['errorDeLogin1']) ? $_SESSION['errorDeLogin1'] : '' ?>";
                if (errorMessage !== '') {
                    var errorElement = document.createElement('p');
                    errorElement.textContent = errorMessage;
                    errorElement.style.color = 'red';
                    document.body.insertBefore(errorElement, document.querySelector('.wrapper'));
                    <?php unset($_SESSION['errorDeLogin1']); ?> 
                }
            };
        </script>
    </div>
</body>

<style>
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Comic Sans MS', Arial, sans-serif; 
}

body {
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 100vh;
    background-color: #fef9c3; 
    background-size: cover;
    background-position: center;
    color: #333;
}

.wrapper {
    width: 420px;
    background-color: #ffffff;
    border: 4px solid #ffd966; 
    border-radius: 25px;
    box-shadow: 0 8px 20px rgba(0, 0, 0, 0.2);
    padding: 30px;
    text-align: center;
}

.wrapper h1 {
    font-size: 3rem;
    color: #ff6f61; 
    margin-bottom: 20px;
    text-shadow: 2px 2px #ffd966; 
}

.wrapper .input-box {
    position: relative;
    width: 93%;
    margin: 20px 0;
}

.wrapper input {
    width: 100%;
    height: 50px;
    border: 2px solid #76c7c0; 
    border-radius: 15px;
    outline: none;
    padding: 10px 15px;
    font-size: 1.2rem;
    color: #333;
    background-color: #fef9c3; 
    box-shadow: 0 4px #76c7c0; 
    transition: all 0.3s ease-in-out;
}

.wrapper input::placeholder {
    color: #999;
    font-size: 1rem;
}

.wrapper input:hover {
    border-color: #5aaea9; 
    box-shadow: 0 6px #5aaea9;
}

.wrapper input:focus {
    border-color: #007bff; 
    box-shadow: 0 6px #0056b3;
}

.wrapper .remember {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin: 15px 0;
    font-size: 1rem;
    color: #333;
}

.wrapper .remember a {
    color: #007bff; 
    text-decoration: none;
}

.wrapper .remember a:hover {
    text-decoration: underline;
}

.wrapper .btn {
    width: 100%;
    height: 50px;
    background-color: #ff6f61; 
    border: none;
    border-radius: 15px;
    box-shadow: 0 6px #d1554c; 
    color: #ffffff;
    font-size: 1.5rem;
    font-weight: bold;
    cursor: pointer;
    transition: all 0.3s ease-in-out;
}

.wrapper .btn:hover {
    background-color: #d1554c; 
    box-shadow: 0 4px #a84238;
    transform: translateY(-3px); 
}

.wrapper .btn:active {
    background-color: #a84238;
    box-shadow: 0 2px #7a2f28;
    transform: translateY(2px); 
}

.wrapper .register-link {
    font-size: 1rem;
    margin-top: 20px;
}

.wrapper .register-link a {
    color: #007bff;
    font-weight: bold;
    text-decoration: none;
}

.wrapper .register-link a:hover {
    text-decoration: underline;
}

button.volver {
    background-color: #ffd966; 
    color: #333; 
    border: none;
    padding: 15px 25px;
    font-size: 1.3rem;
    cursor: pointer;
    border-radius: 15px;
    margin: 20px 0;
    box-shadow: 0 4px #d5a63c;
    transition: all 0.3s ease-in-out;
}

button.volver:hover {
    background-color: #e6b94c; 
    box-shadow: 0 2px #c09a38;
    transform: translateY(-2px); 
}

</style>

</html>
