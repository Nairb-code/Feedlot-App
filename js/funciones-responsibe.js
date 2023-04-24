const miSeccion = document.querySelector('#mi-seccion');

function actualizarClases() {
  if (window.innerWidth > 1400) {
    miSeccion.classList.remove('container-fluid');
    miSeccion.classList.add('container-lg');
  } else {
    miSeccion.classList.remove('container-lg');
    miSeccion.classList.add('container-fluid');
  }
}

actualizarClases(); // llama a la función al cargar la página

window.addEventListener('resize', actualizarClases); // llama a la función cuando se cambia el tamaño de la pantalla


