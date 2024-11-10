const urlbase = document.getElementById('url_base').value;

const formLogin = document.getElementById('formLogin');
const alertLogin = document.getElementById('alertLogin');

const user = document.getElementById('user');
const password = document.getElementById('password');

formLogin.addEventListener('submit', (e) => {
    e.preventDefault();

    const formData = new FormData(formLogin);

    fetch(urlbase+'acceder', {
        method: 'POST',
        body: formData
    })
    .then(res => res.json())
    .then(data => {
        console.log(data);
        if(data.respuesta !== 'ok') {
            alertLogin.innerHTML = `
                <div class="alert alert-danger" role="alert">
                    Usuario y/o contraseña no coindicen
                </div>
            `;

            return;
        }

        if(data.datos.perfil_id === '1') {
            location.href = urlbase + "empresas"
        } else {
            console.log('coloborador');
        }
    })
})