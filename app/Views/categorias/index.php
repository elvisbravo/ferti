<?= $this->extend('layouts/main') ?>

<?= $this->section('css') ?>

<link rel="stylesheet" href="<?= base_url() ?>public/assets/css/plugins/dataTables.bootstrap5.min.css" />

<?= $this->endSection() ?>

<?= $this->section('content') ?>

<div class="page-header">
    <div class="page-block">
        <div class="row align-items-center">
            <div class="col-md-12">
                <div class="page-header-title">
                    <h2 class="mb-0">Lista de Categorias de Productos</h2>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- [ breadcrumb ] end --><!-- [ Main Content ] start -->
<div class="row">
    <!-- [ sample-page ] start -->
    <div class="col-sm-12">
        <div class="card">
            <div class="card-header">
                <a href="#" class="btn btn-primary d-inline-flex align-items-center gap-2" id="btnModalCategoria"><i class="ti ti-plus f-18"></i> Agregar</a>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered nowrap" id="pc-dt-simple">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Descripción</th>
                                <th>Detalle</th>
                                <th class="text-center">Acciones</th>
                            </tr>
                        </thead>
                        <tbody id="contentBody"></tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- [ sample-page ] end -->
</div>

<div id="modalCategoria" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="exampleModalLiveLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="titleModalCategoria"></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form id="formCategoria">
                <input type="hidden" name="idCategoria" id="idCategoria" value="0">
                <div class="modal-body">
                    <div class="row">
                        <div class="mb-3">
                            <label class="form-label">Descripción</label>
                            <input type="text" class="form-control" placeholder="Descripción" name="descripcion" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="mb-3">
                            <label class="form-label">Detalle</label>
                            <input type="text" class="form-control" placeholder="Detalle" name="detalle">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                        Cerrar
                    </button>
                    <button type="submit" class="btn btn-primary" id="btnFormCategoria"></button>
                </div>
            </form>
        </div>
    </div>
</div>

<?= $this->endSection() ?>

<?= $this->section('js') ?>

<script src="<?= base_url() ?>public/assets/js/plugins/dataTables.min.js"></script>
<script src="<?= base_url() ?>public/assets/js/plugins/dataTables.bootstrap5.min.js"></script>
<script src="<?= base_url() ?>public/assets/js/plugins/sweetalert2.all.min.js"></script>
<script src="<?= base_url() ?>public/js/categoria/categoria.js"></script>

<?= $this->endSection() ?>