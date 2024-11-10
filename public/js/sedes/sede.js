const listaSedes = document.getElementById('renderListSedes');

loadSedes();

function loadSedes() {
    fetch('/ferti/sedes/loadSedes')
    .then(res => res.json())
    .then(data => {
        viewSedes(data);  
    })
}

function viewSedes(data) {
    let html = "";

    data.forEach(sede => {
        html += `
        <div class="col-sm-6 col-lg-3 col-xxl-3">
            <div class="card border">
                <div class="card-body p-2">
                    <div class="position-relative">
                        <img src="http://localhost:8080/ferti/public/assets/images/admin/logo_fertiagro.png" alt="img" class="img-fluid w-100" />
                    </div>
                    <ul class="list-group list-group-flush my-2">
                        <li class="list-group-item px-0 py-2">
                            <div class="d-flex align-items-center">
                                <div class="flex-grow-1 me-2">
                                    <h6 class="mb-1">SEDE PRINCIPAL</h6>
                                    <p class="mb-0 f-w-600">
                                        0000
                                    </p>
                                </div>
                                <div class="flex-shrink-0">
                                    <a href="#" class="avtar avtar-xs btn-link-secondary"><i class="ti ti-edit f-20"></i></a>
                                </div>
                            </div>
                        </li>
                        <li class="list-group-item px-0 py-2">
                            <div class="d-flex align-items-center">
                                <div class="flex-grow-1 me-2">
                                    <p class="mb-0"> <i class="fas fa-map-marker-alt"></i> CAL.A LA RAMADA NRO. S/N SEC. ACHUAL (C-1; COSTADO DE GRIFO SUD AMERICA)</p>
                                </div>
                                                        
                            </div>
                        </li>
                        <li class="list-group-item px-0 py-2">
                            <div class="d-flex align-items-center">
                                <div class="flex-grow-1 me-2">
                                    <p class="mb-0"> <i class="fas fa-map-marker"></i> SAN MARTIN - SAN MARTIN - MORALES</p>
                                </div>
                                                        
                            </div>
                        </li>
                        <li class="list-group-item px-0 py-2">
                            <div class="d-flex align-items-center">
                                <div class="flex-grow-1 me-2">
                                    <p class="mb-0"> <i class="fas fa-phone-volume"></i> 922502987</p>
                                </div>
                            </div>
                        </li>
                    </ul>
                    <div class="d-grid gap-2 mt-2">
                        <button class="btn btn-primary" type="button" onclick="ingresarSede(${sede.id})">Ingresar</button>
                    </div>
                </div>
            </div>
        </div>
        `;
    });

    listaSedes.innerHTML = html;
}

function ingresarSede(id) {
    fetch('/ferti/sedes/create-cookie/'+id)
    .then(res => res.json())
    .then(data => {
        window.location.href = "/ferti/dashboard";
    })
}