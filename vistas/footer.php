
    <script src="../librerias/jquery-3.4.1.min.js"></script>
    <script src="../librerias/bootstrap4/popper.min.js"></script>
    <script src="../librerias/bootstrap4/bootstrap.min.js"></script>
    <script src="../librerias/jquery-ui-1.12.1/jquery-ui.js"></script>
    <script src="../librerias/sweetalert.min.js"></script>

    
    <script src="../librerias/datatable/jquery.dataTables.min.js"></script>
    <script src="../librerias/datatable/dataTables.bootstrap4.min.js"></script>


    <script type="text/javascript">


        $(function(){
            var fechaA = new Date();
            var yyyy = fechaA.getFullYear();

            $('#fechaSuscripcion').datepicker({
                changeMonth: true,
                changeYear : true,
                yearRange  : '1900:' + yyyy,
                dateFormat: "dd-mm-yy"  
            });
        });        
    </script>
    </body>
</html>