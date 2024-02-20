    // Typed Initiate
// Obtener el elemento de salida de texto
var output = document.getElementById("text-output");
// Obtener el texto del elemento HTML
var text = output.innerText;

// Función para simular la escritura y el borrado del texto
function typeWriter() {
  var i = 0;
  var speed = 100; // Velocidad de escritura en milisegundos

  // Borrar todo el contenido del elemento antes de comenzar a escribir
  output.innerHTML = '';

  var timer = setInterval(function() {
    if (i < text.length) {
      output.innerHTML += text.charAt(i);
      i++;
    } else {
      clearInterval(timer); // Detener la animación cuando se haya escrito todo el texto
      setTimeout(function() {
        // Esperar un tiempo antes de borrar el texto
        var deleteTimer = setInterval(function() {
          if (output.innerText.length > 0) {
            output.innerText = output.innerText.slice(0, -1); // Eliminar un carácter a la vez
          } else {
            clearInterval(deleteTimer); // Detener la animación de borrado cuando el texto esté vacío
            setTimeout(function() {
              // Esperar un tiempo antes de comenzar de nuevo
              typeWriter();
            }, 1000); // Esperar 1 segundo antes de comenzar de nuevo
          }
        }, speed);
      }, 1000); // Esperar 1 segundo antes de borrar el texto
    }
  }, speed);
}

// Iniciar la animación al cargar la página
window.onload = function() {
  typeWriter();
};