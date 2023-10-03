/* Modo Oscuro */
const modo = window.matchMedia('(prefers-color-scheme: noche)').matches ? 'noche' : 'dia';
const control_deslizante = document.getElementById("control_deslizante"); // Cambiado de control_d a control_deslizante
const set_tema = (tema) => {
    document.documentElement.setAttribute('tema_de_datos', tema);
    localStorage.setItem('tema', tema);
}

control_deslizante.addEventListener('click', () => {
    let cambiar_a_tema = localStorage.getItem('tema') === 'noche' ? 'dia' : 'noche';
    set_tema(cambiar_a_tema);
});

set_tema(localStorage.getItem('tema') || modo);



function barra_lateral() {
    console.log("Función barra_lateral() se ha ejecutado");
    const menu = document.querySelector('#barra');
    const contenido = document.querySelector('.menu');
    // Alternar clases en la barra lateral
    menu.classList.toggle("barra_lateral__abierto");
    menu.classList.toggle("barra_lateral__cerrado");
    // Alternar clases en el contenido
    contenido.classList.toggle("menu__abierto");
    contenido.classList.toggle("menu__cerrado");
}
