
<script type="text/javascript">
    $('#myModal').modal({backdrop: 'static', keyboard: false});
    $('#myModal').modal('show');
</script>

<div class="modal fade bd-example-modal-lg" id="myModal" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <br>
            <nav class="navbar navbar-light btn-primary btn-block">
                <ul class="nav justify-content-center">
                    <li class="nav-item">
                        <strong>Adicionar Item </strong>
                    </li>
                </ul>
                <ul class="nav nav-pills">
                    <li class="nav-item dropdown">
                        <button type="button" class="btn btn-danger" data-dismiss="modal" aria-label="Close"> <span class="fas fa-times"> </span></button>
                    </li>
                </ul>
            </nav>
            <form name="frmAdd" id="frmAdd" method="post" enctype="multipart/form-data">
                <div class="modal-body">
                    <small class="text-center">Todos los campos con asterisco <span>(*)</span> son obligatorios</small>
                    <hr/>
                
                    <div class="row">
                        <div class="col-md-4">
                            <label class="nombre-casilla-1"><span>*</span>Nombre:</label>
                            <input class="validate[required] form-control" type="text" name="nombre" id="nombre" >
                        </div>
                        <div class="col-md-4">
                            <label class="nombre-casilla-1"><span>*</span>referencia:</label>
                            <input class="validate[required] form-control" type="text" name="referencia" id="referencia" >
                        </div>
                        <div class="col-md-4">
                            <label class="nombre-casilla-1"><span>*</span>Precio:</label>
                            <input class="validate[required] form-control" type="text" name="precio" id="precio" >
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-md-4">
                            <label class="nombre-casilla-1"><span>*</span>Peso:</label>
                            <input class="validate[required] form-control" type="text" name="peso" id="peso">
                        </div>
                        <div class="col-md-4">
                            <label class="nombre-casilla-1"><span>*</span>categoria:</label>
                            <input class="validate[required] form-control" type="text" name="categoria" id="categoria" >
                        </div>
                        <div class="col-md-4">
                            <label class="nombre-casilla-1"><span>*</span>stock:</label>
                            <input class="validate[required] form-control" type="text" name="stock" id="stock" >
                        </div>
                    </div>
                    <br>
                </div>
                <div class="modal-footer">
                    <div class="col-md-12 text-right" id="opcGuardarHech">
                        <button type="button" class="btn btn-primary btn-block" onClick="registrarNuevoItem()">
                            <span class="fas fa-save" style="font-size:1em;"></span> Adicionar
                        </button>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</div>