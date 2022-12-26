<?php
    $item=$_POST['item'];
    $stock=$_POST['stock'];
?>
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
                        <strong>Comprar Item </strong>
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
                    <input type="hidden" id="id" name="id" value="<?php echo  $item ?>">
                    <input type="hidden" id="stockA" name="stockA" value="<?php echo $stock ?>">
                    <div class="row">
                        <div class="col-md-4">
                            <label class="nombre-casilla-1"><span>*</span>Cantidad:</label>
                            <input class="validate[required] form-control" type="number" name="stock" id="stock" value=0>
                        </div>
                    </div>
                    <br>
                </div>
                <div class="modal-footer">
                    <div class="col-md-12 text-right" id="opcGuardarHech">
                        <button type="button" class="btn btn-primary btn-block" onClick="SellItemBack()">
                            <span class="fas fa-save" style="font-size:1em;"></span> Comprar
                        </button>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</div>