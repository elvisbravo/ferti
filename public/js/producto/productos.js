const tbody = document.querySelector("#pc-dt-simple tbody");

const btnModalCategoria = document.getElementById('btnModalCategoria');
const modalCategoria = document.getElementById('modalCategoria');

const titleModalCategoria  =document.getElementById('titleModalCategoria');
const btnFormCategoria = document.getElementById('btnFormCategoria');
const loadCat = document.getElementById('loadCat');

const formCategoria = document.getElementById('formCategoria');

const contentBody = document.getElementById('contentBody');

const $table = "#pc-dt-simple";

$($table).DataTable({
    "autoWidth": false
});

btnModalCategoria.addEventListener('click', function (event) {
    $("#modalCategoria").modal("show");

    event.preventDefault();

    titleModalCategoria.textContent = 'Agregar Categoría';
    btnFormCategoria.textContent = 'Guardar';
});

formCategoria.addEventListener('submit', (e) => {
    e.preventDefault();

    btnFormCategoria.disabled = true;
    btnFormCategoria.textContent = 'Guardando...';

    const formData = new FormData(formCategoria);

    fetch(base_url+'categoria/guardar', {
        method: 'POST',
        body: formData
    })
    .then(res => res.json())
    .then(data => {
        btnFormCategoria.disabled = false;
        btnFormCategoria.textContent = 'Guardar';

        if(data.respuesta === "ok") {
            renderCategorias();

            $("#modalCategoria").modal("hide");

            Swal.fire({
                position: "top-end",
                icon: "success",
                title: "Your work has been saved",
                showConfirmButton: false,
                timer: 2500
            });
        }
        
    })
})

renderCategorias();

function renderCategorias() {
    
    fetch(base_url+'categoria/all')
    .then(res => res.json())
    .then(data => {
        
        viewCategorias(data);

    })
}

function viewCategorias(data) {

    let html = "";

    data.forEach((cate, index) => {
        html += `
            <tr>
                <td>${ index + 1}</td>
                <td>${cate.descripcion}</td>
                <td>${cate.detalle}</td>
                <td class="text-center">
                    <ul class="list-inline me-auto mb-0">
                        <li class="list-inline-item align-bottom" data-bs-toggle="tooltip" title="Edit">
                            <a href="#" class="avtar avtar-xs btn-link-success btn-pc-default"><i class="ti ti-edit-circle f-18"></i></a>
                        </li>
                        <li class="list-inline-item align-bottom" data-bs-toggle="tooltip" title="Delete">
                            <a href="#" class="avtar avtar-xs btn-link-danger btn-pc-default"><i class="ti ti-trash f-18"></i></a>
                        </li>
                    </ul>
                </td>
            </tr>
        `;
    });

    $($table).DataTable().destroy();

    contentBody.innerHTML = html;

    $($table).DataTable({
        "autoWidth": false,
        language: language
    });

}
