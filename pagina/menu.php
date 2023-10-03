<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="http://localhost/Asignacion_a_v4/assets/css/estilos.css?v=1">
    <link rel="stylesheet" href="http://localhost/Asignacion_a_v4/assets/css/normalize.css?v=1">
    <link rel="stylesheet" href="http://localhost/Asignacion_a_v4/assets/css/modo.css?v=1">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@700&display=swap" rel="stylesheet">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Hammersmith+One&family=Poppins:wght@700&display=swap">
    <link rel="icon" href="http://localhost/Asignacion_a_v4/assets/img/Menu_Principal/Logo_Tec.png">
    <title>Tec - Asignación de aulas</title>
</head>
<div class="contenedor">
    <div id="barra" class="barra_lateral__cerrado">
        <?php require('../estructura/barra_lateral.php') ?>
    </div>
    <div class="contenido">
        <header class="contenido__cabecera">
            <?php require('../estructura/cabecera.php') ?>
        </header>
        <main class="contenido__principal">
            <div class="apartado">
                <div class="apartado__uno">
                    <h1>Departamento de</h1>
                    <span>Sistemas y Computación</span>
                    <img src="../assets/img/Tec/img6.svg" alt="">
                    <button class="btn" onclick="window.location.href='horario.php'">Generar Horarios</button>
                </div>
                <div class="apartado__dos">
                    <img src="../assets/img/nagatoro_mbl.jpg" alt="">
                    <h1>José Armando Vázquez Carrasco</h1>
                    <span>
                        Coordinadora de la<br> carrera de<br>
                        Ing. en Sistemas e Ing.<br> Mecatrónica
                    </span>
                    <svg class="apartado__dos" xmlns="http://www.w3.org/2000/svg"
                        class="icon icon-tabler icon-tabler-mail" width="44" height="44" viewBox="0 0 24 24"
                        stroke-width="1.5" stroke="#ffffff" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                        <path d="M3 7a2 2 0 0 1 2 -2h14a2 2 0 0 1 2 2v10a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2v-10z">
                        </path>
                        <path d="M3 7l9 6l9 -6"></path>
                    </svg>
                </div>
            </div>
        </main>
        <footer class="contenido__pie_de_página">
            <?php require('../estructura/pie_de_pagina.php') ?>
        </footer>
    </div>
</div>
<script src="http://localhost/Asignacion_a_v4/assets/js/acciones.js?v=1"></script>