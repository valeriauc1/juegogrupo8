<?php
session_save_path('./sesiones');
session_start();

include('dblogin.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if(isset($_SESSION['user_id'])) {
        $userId = $_SESSION['user_id'];
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>JuegoGrupo8</title>
</head>

<body>
<h2>Juan Avila / Cristhian Lopez</h2>
<h1>¡Resuelve las sumas!</h1>

<div id="star-animation" class="star-container" style="display: none;">🌟🌟🌟</div>
<div id="incorrecto" class="incorrecto" style="display: none;">❌</div>

<script>
let resultado = 0;

function mostrarModal(button, num1, num2, num3, num4) {
    document.getElementById('modal').style.display = 'flex';
    document.getElementById('incorrecto').style.display = 'none';

    const sumaVertical = `${num1}<br>${num2}<br>${num3}<br>${num4}`;
    document.getElementById('sumaVertical').innerHTML = sumaVertical;

    const correcto = num1 + num2 + num3 + num4;

    if (correcto <= 10) {
        const singleInput = `<div id="resultado" class="resultado-click" onclick="incrementarResultado(1)">1</div>`;
        document.getElementById('resultadoContainer').innerHTML = singleInput;
        resultado = 1;
    } else {
        const multiInput = `
            <div class="resultado-multi-click">
                <div id="decenas" class="resultado-caja" onclick="incrementarResultado(10)">0</div>
                <div id="unidades" class="resultado-caja" onclick="incrementarResultado(1)">0</div>
            </div>
        `;
        document.getElementById('resultadoContainer').innerHTML = multiInput;
        resultado = 0;
    }

    document.getElementById('currentButton').value = button.id;
    document.getElementById('num1').value = num1;
    document.getElementById('num2').value = num2;
    document.getElementById('num3').value = num3;
    document.getElementById('num4').value = num4;
}

function incrementarResultado(step) {
    if (step === 10) {
        const decenasElem = document.getElementById('decenas');
        let decenas = parseInt(decenasElem.innerText) || 0;
        decenas = (decenas + 1) % 10;
        decenasElem.innerText = decenas;
    } else {
        const unidadesElem = document.getElementById('unidades');
        let unidades = parseInt(unidadesElem.innerText) || 0;
        unidades = (unidades + 1) % 10;
        unidadesElem.innerText = unidades;
    }
    const decenas = parseInt(document.getElementById('decenas')?.innerText || 0) * 10;
    const unidades = parseInt(document.getElementById('unidades')?.innerText || 0);
    resultado = decenas + unidades || parseInt(document.getElementById('resultado').innerText);
}

function verificarRespuesta() {
    const num1 = Number(document.getElementById('num1').value);
    const num2 = Number(document.getElementById('num2').value);
    const num3 = Number(document.getElementById('num3').value);
    const num4 = Number(document.getElementById('num4').value);
    const correcto = num1 + num2 + num3 + num4;

    if (resultado === correcto) {
        const buttonId = document.getElementById('currentButton').value;
        const button = document.getElementById(buttonId);

        button.innerHTML += " ✔";
        button.disabled = true;

        let sumas = JSON.parse(localStorage.getItem('sumasFijas'));
        const index = parseInt(buttonId.replace('suma', ''));
        if (sumas && sumas[index]) {
            sumas[index].completado = true;
            localStorage.setItem('sumasFijas', JSON.stringify(sumas));
        }

        const star = document.getElementById("star-animation");
        star.style.display = "block";
        star.style.animation = "fadeStars 2s ease-out";
        setTimeout(() => { star.style.display = "none"; }, 2000);

        cerrarModal();
    } else {
        const incorrecto = document.getElementById("incorrecto");
        incorrecto.style.display = "block";
        incorrecto.style.animation = "fadeOut 1s ease-in-out";
        setTimeout(() => { incorrecto.style.display = "none"; }, 1200);
    }
}

function cerrarModal() {
    document.getElementById('modal').style.display = 'none';
    document.getElementById('incorrecto').style.display = 'none';
}

function cerrarSesion() {
    alert("¡Has cerrado sesión exitosamente!");
    window.location.href = "Inicio.php";
}

function reiniciarJuego() {
    alert("¡El juego ha sido reiniciado!");
    localStorage.removeItem('sumasFijas');
    window.location.reload();
}

window.onload = function() {
    const sumasContainer = document.querySelector(".sumas");

    let sumas = JSON.parse(localStorage.getItem('sumasFijas'));
    if (!sumas) {
        sumas = [];
        for (let i = 0; i < 8; i++) {
            sumas.push({
                num1: Math.floor(Math.random() * 9) + 1,
                num2: Math.floor(Math.random() * 9) + 1,
                num3: Math.floor(Math.random() * 9) + 1,
                num4: Math.floor(Math.random() * 9) + 1,
                completado: false
            });
        }
        localStorage.setItem('sumasFijas', JSON.stringify(sumas));
    }

    sumas.forEach((suma, i) => {
        const buttonId = `suma${i}`;
        const button = document.createElement("button");
        button.id = buttonId;
        button.className = "suma";
        button.innerHTML = `<div class="suma-grande">${suma.num1} + ${suma.num2} + ${suma.num3} + ${suma.num4}</div>`;
        button.onclick = function () {
            mostrarModal(this, suma.num1, suma.num2, suma.num3, suma.num4);
        };

        if (suma.completado) {
            button.innerHTML += " ✔";
            button.disabled = true;
        }

        sumasContainer.appendChild(button);
    });
};
</script>

<div class="sumas"></div>

<div id="modal">
    <div class="modal-content">
        <h2>Resuelve la suma</h2>
        <div id="sumaVertical" class="vertical-suma"></div>
        <div id="resultadoContainer"></div>
        <button onclick="verificarRespuesta()">Verificar</button>
        <button onclick="cerrarModal()">Volver</button>
        <input type="hidden" id="num1">
        <input type="hidden" id="num2">
        <input type="hidden" id="num3">
        <input type="hidden" id="num4">
        <input type="hidden" id="currentButton">
    </div>
</div>

<div>
    <button class="reiniciar" onclick="reiniciarJuego()">Reiniciar Todas las Sumas</button>
</div>

<div>
    <button class="logout" onclick="cerrarSesion()">Cerrar Sesión</button>
</div>

<style>
    body {
    font-family: 'Comic Sans MS', Arial, sans-serif;
    text-align: center;
    background-color: #fef9c3;
    color: #333;
    margin: 0;
    padding: 0;
}
h1 {
    color: #ff6f61;
    font-size: 3rem;
    margin-top: 20px;
    text-shadow: 2px 2px #ffd966;
}
.sumas {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    gap: 20px;
    margin: 30px;
}
.suma {
    background-color: #76c7c0;
    color: white;
    border: none;
    padding: 20px 35px;
    font-size: 1.5rem;
    font-weight: bold;
    cursor: pointer;
    border-radius: 15px;
    box-shadow: 0 4px #5aaea9;
    transition: all 0.3s;
    flex: 1 1 calc(25% - 40px); 
    box-sizing: border-box;

}
.suma:hover:not(:disabled) {
    background-color: #5aaea9;
    box-shadow: 0 2px #3a7974;
    transform: translateY(-3px);
}
.suma:disabled {
    background-color: #ccc;
    cursor: not-allowed;
    box-shadow: none;
    color: #777;
}
.suma-grande {
    font-size: 2.5rem;
}
#modal {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0, 0, 0, 0.7);
    display: flex;
    justify-content: center;
    align-items: center;
    display: none;
    z-index: 9999;
}
.modal-content {
    background-color: #ffffff;
    padding: 30px;
    border-radius: 20px;
    text-align: center;
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.5);
}
.vertical-suma {
    font-size: 2.5rem;
    color: #ff6f61;
    font-weight: bold;
    margin-bottom: 20px;
    line-height: 2.5rem;
    text-shadow: 1px 1px #ffd966;
}
.resultado-multi-click {
    display: flex;
    justify-content: center;
    gap: 10px;
}
.resultado-caja {
    font-size: 2rem;
    color: #007bff;
    background-color: #ffeb3b;
    border: 3px solid #007bff;
    border-radius: 15px;
    padding: 10px;
    width: 60px;
    text-align: center;
    cursor: pointer;
    box-shadow: 0 4px #e0ac00;
    transition: all 0.3s;
}
.resultado-caja:hover {
    background-color: #ffe082;
    box-shadow: 0 2px #c79100;
    transform: translateY(-2px);
}
button {
    background-color: #ff6f61;
    color: white;
    border: none;
    padding: 15px 25px;
    font-size: 1.3rem;
    cursor: pointer;
    border-radius: 15px;
    margin: 10px;
    box-shadow: 0 4px #d1554c;
    transition: all 0.3s;
}
button:hover {
    background-color: #d1554c;
    box-shadow: 0 2px #a84238;
    transform: translateY(-2px);
}
button:disabled {
    background-color: #ccc;
    cursor: not-allowed;
    box-shadow: none;
    color: #777;
}
button.logout {
    background-color: #ff6f61;
    color: white;
    padding: 15px 25px;
    font-size: 1.5rem;
    border-radius: 20px;
    margin: 10px auto;
    display: block;
}
button.reiniciar {
    background-color: #4caf50;
    padding: 15px 30px;
    font-size: 1.5rem;
    border-radius: 20px;
    margin: 20px auto;
    display: block;
}
.star-container {
    position: fixed;
    top: 30%;
    left: 50%;
    transform: translateX(-50%);
    font-size: 5rem;
    color: gold;
    pointer-events: none;
    z-index: 2000;
}
@keyframes fadeStars {
    0% { opacity: 0; transform: scale(0.5); }
    50% { opacity: 1; transform: scale(1.4); }
    100% { opacity: 0; transform: scale(0.5); }
}
@keyframes fadeOut {
    0% { opacity: 0; transform: scale(0.5); }
    50% { opacity: 1; transform: scale(1.2); }
    100% { opacity: 0; transform: scale(0.5); }
}
.incorrecto {
    position: fixed;
    top: 20%;
    left: 50%;
    transform: translateX(-50%);
    font-size: 6rem;
    color: red;
    z-index: 10000;
    pointer-events: none;
}
</style>
</body>
</html>