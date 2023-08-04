document.addEventListener('DOMContentLoaded', function () {
  // Obtener el formulario de registro
  const form = document.querySelector('#registro-cliente form');

  // Agregar el evento de envío del formulario
  form.addEventListener('submit', function (event) {
    event.preventDefault();

    // Obtener los valores del formulario
    const nombre = document.querySelector('#nombre').value;
    const correo = document.querySelector('#correo').value;
    const contrasena = document.querySelector('#contrasena').value;
    const confirmarContrasena = document.querySelector('#confirmar-contrasena').value;

    // Validar que los campos no estén vacíos
    if (!nombre || !correo || !contrasena || !confirmarContrasena) {
      mostrarMensajeError('Todos los campos son requeridos');
      return;
    }

    // Validar que las contraseñas coincidan
    if (contrasena !== confirmarContrasena) {
      mostrarMensajeError('Las contraseñas no coinciden');
      return;
    }

    // Enviar los datos al servidor
    const data = {
      nombre,
      correo,
      contrasena
    };
    
    fetch('http://localhost/software/registro.php', {
      method: 'POST',
      headers: {
        'Content-Type': 'application/json'
      },
      body: JSON.stringify(data)
    })
    .then(function (response) {
      if (!response.ok) {
        throw new Error('Error al procesar la solicitud. Código de estado HTTP: ' + response.status);
      }
      const contentType = response.headers.get('content-type');
      if (contentType && contentType.indexOf('application/json') !== -1) {
        return response.json();
      } else {
        throw new TypeError(  response.status);
      }
    })
    .then(function (data) {
      if (data.success) {
        mostrarMensajeExito(data.message);
        limpiarFormulario();
      } else {
        mostrarMensajeError(data.message);
      }
    })
    .catch(function (error) {
      mostrarMensajeError('Ha ocurrido un error: ' + error.message);
    });
  })

  // Función para mostrar un mensaje de error
  function mostrarMensajeError(mensaje) {
    const mensajeError = document.querySelector('#mensaje-error');
    mensajeError.style.display = 'block';
    mensajeError.textContent = mensaje;

    // Ocultar el mensaje de éxito
    const mensajeExito = document.querySelector('#mensaje-exito');
    mensajeExito.style.display = 'none';
  }

  // Función para mostrar un mensaje de éxito
  function mostrarMensajeExito(mensaje) {
    const mensajeExito = document.querySelector('#mensaje-exito');
    mensajeExito.style.display = 'block';
    mensajeExito.textContent = mensaje;

    // Ocultar el mensaje de error
    const mensajeError = document.querySelector('#mensaje-error');
    mensajeError.style.display = 'none';
  }

  // Función para limpiar el formulario después de un registro exitoso
  function limpiarFormulario() {
    document.querySelector('#nombre').value = '';
    document.querySelector('#correo').value = '';
    document.querySelector('#contrasena').value = '';
    document.querySelector('#confirmar-contrasena').value = '';
  }
});



