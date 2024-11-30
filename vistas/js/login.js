

  // Selecciona los elementos necesarios
  const togglePassword = document.querySelector('#togglePassword');
  const password = document.querySelector('#password');

  togglePassword.addEventListener('click', function () {
    // Alternar entre 'password' y 'text' para mostrar/ocultar contraseña
    const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
    password.setAttribute('type', type);

    // Cambiar el ícono según el estado de visibilidad de la contraseña
      //this.textContent = type === 'password' ? 'Mostrar' : 'Ocultar';
    this.innerHTML = type === 'password' ? '<i class="fa fa-eye"></i>' : '<i class="fa fa-eye-slash"></i>';
  });
