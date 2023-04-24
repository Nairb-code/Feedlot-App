var maxLength = 200; // número máximo de palabras

document.querySelectorAll('.ver-mas').forEach(function (elemento) {
  var textoCompleto = elemento.previousElementSibling.innerHTML.trim();
  if (textoCompleto.split(' ').length > maxLength) {
    var textoRecortado = textoCompleto.split(' ').slice(0, maxLength).join(' ');
    elemento.previousElementSibling.innerHTML = textoRecortado + '...';
    elemento.addEventListener('click', function (event) {
      event.preventDefault();
      if (elemento.previousElementSibling.innerHTML === textoRecortado + '...') {
        elemento.previousElementSibling.innerHTML = textoCompleto;
        elemento.style.display = 'none';
        elemento.nextElementSibling.style.display = 'inline';
      } else {
        elemento.previousElementSibling.innerHTML = textoRecortado + '...';
        elemento.style.display = 'none';
        elemento.nextElementSibling.style.display = 'inline';
        elemento.nextElementSibling.nextElementSibling.style.display = 'inline';
      }
    });
    elemento.nextElementSibling.addEventListener('click', function (event) {
      event.preventDefault();
      elemento.previousElementSibling.innerHTML = textoRecortado + '...';
      elemento.nextElementSibling.style.display = 'none';
      elemento.style.display = 'inline';
      elemento.nextElementSibling.nextElementSibling.style.display = 'none';
    });
    elemento.nextElementSibling.nextElementSibling.addEventListener('click', function (event) {
      event.preventDefault();
      elemento.previousElementSibling.innerHTML = textoCompleto;
      elemento.nextElementSibling.nextElementSibling.style.display = 'none';
      elemento.style.display = 'none';
      elemento.nextElementSibling.style.display = 'inline';
    });
  } else {
    elemento.style.display = 'none';
    elemento.nextElementSibling.style.display = 'none';
  }
});