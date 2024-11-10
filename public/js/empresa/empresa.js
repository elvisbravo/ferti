const addEmpresa = document.getElementById('addEmpresa');
const modalEmpresa = document.getElementById('modalEmpresa');
const listaEmpresas = document.getElementById('listaEmpresas');

modalEmpresa.addEventListener('shown.bs.modal', () => {
    addEmpresa.focus()
})

renderEmpresas();

function renderEmpresas() {
    fetch('/ferti/empresas/lista')
    .then(res => res.json())
    .then(data => {
        console.log(data);
        viewEmpresas(data);
    })
}

function viewEmpresas(data) {
    let html = "";
    data.forEach(emp => {
        html += `
        <div class="col-sm-6 col-lg-3 col-xxl-3">
            <div class="card border">
                <div class="card-body p-2">
                    <div class="position-relative">
                        <img src="public/assets/images/admin/${emp.logo}" alt="img" class="img-fluid w-100" />
                    </div>
                    <ul class="list-group list-group-flush my-2">
                        <li class="list-group-item px-0 py-2">
                            <div class="d-flex align-items-center">
                                <div class="flex-grow-1 me-2">
                                    <h5 class="mb-1">
                                        ${emp.razon_social}
                                    </h5>
                                    <p class="mb-0 f-w-600">
                                        ${emp.ruc}
                                    </p>
                                </div>
                                <!--<div class="flex-shrink-0">
                                    <a href="#" class="avtar avtar-xs btn-link-secondary"><i class="ti ti-edit f-20"></i></a>
                                </div>-->
                            </div>
                        </li>

                    </ul>

                    <div class="d-grid gap-2 mt-2">
                        <button class="btn btn-primary" type="button" onclick="renderSedes( ${emp.id})">Ingresar</button>
                    </div>
                </div>
            </div>
        </div>
        `;
    });

    listaEmpresas.innerHTML = html;
}

function renderSedes(id) {
    const formData = new FormData();

    formData.append('id', id);

    fetch('/ferti/sedes/crear_cookie_empresa', {
        method: 'POST',
        body: formData
    })
    .then(res => res.json())
    .then(data => {
        window.location.href = "/ferti/sedes";
    })
}