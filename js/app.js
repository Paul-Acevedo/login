window.addEventListener('load', () => {

    let button = document.getElementById('formulario');
    let usuario = document.getElementById('usuario');
    let password = document.getElementById('password');
    let alert = document.getElementById('alerta');
    console.log(usuario);


    function data() {

        let datos = new FormData();
        datos.append("usuario", usuario.value);
        datos.append("password", password.value);
        fetch('validalogin.php', {
                method: 'POST',
                body: datos
            }).then(Response => Response.json())
            .then(({ success }) => {
                if (success === 1) {
                    location.href = 'home.php';
                } else {
                    alerta();
                }
            });


    }

    function alerta() {
        alert.innerHTML = `
      <div class="alert alert-danger alert-dismissible fade show" role="alert">
      <strong>Datos Incorrectos</strong>
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
      `;
    }

    button.addEventListener('submit', (e) => {
        e.preventDefault();

        data();


    });




});