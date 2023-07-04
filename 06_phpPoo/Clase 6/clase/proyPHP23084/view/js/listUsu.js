// levanto el modal por su id delModal
const delModal = document.getElementById('delModal')
if (delModal) {
    // agrego un evento cuando se abre el modal
    delModal.addEventListener('show.bs.modal', event => {
    // trae el botón del link a
    const button = event.relatedTarget

    // trae el atributo idUsuario y user enviado desde el link a
    const idUsuario = button.getAttribute('idUsuario')
    const user = button.getAttribute('user')

    // asigno al input:hidden el idUsuario para luego enviarlo x el form
    let inputIdUser = document.getElementById('idUser')
    inputIdUser.value=idUsuario

    // muestro el nombre del user en el modal
    let divDatosUser = delModal.querySelector('#datosUser')
    console.log(divDatosUser)
    divDatosUser.innerHTML = user

  })
}