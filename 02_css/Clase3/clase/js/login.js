const form = document.querySelector('form');

form.addEventListener('submit', (e) => {
  e.preventDefault();
  const email = document.querySelector('#email').value;
  const password = document.querySelector('#password').value;

  // Aquí puedes incluir la lógica de autenticación
  // Por ejemplo, verificar si el correo y contraseña son válidos
  // Y redirigir al usuario a la página correspondiente
});
