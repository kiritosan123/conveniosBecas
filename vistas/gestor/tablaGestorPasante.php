<div class="col-sm-12">
    <div class="table-responsive">
        <table class="table table-hover table-dark" id="tablaGestorDataTable">
            <thead>
                <tr>
                    <th>C.I.</th>
                    <th>Nombre Completo</th>
                    <th>Celular</th>
                    <th>Facultad</th>                    
                    <th>Tesista/Pasante</th>
                    <th>Fecha Presentacion</th>
                    <th>Eliminar</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>
                        <span class="btn btn-danger btn-sm">
                            <span class="fas fa-trash-alt"></span>
                        </span>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

<script type="text/javascript">
    $( document).ready(function(){
        $('#tablaGestorDataTable').DataTable();
    });
</script>