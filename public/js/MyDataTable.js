function MyDataTable(name){
    $("#"+name).DataTable({
        "order": [[ 0, "desc" ]],//El valor númerico, corresponde al número de la columna
        "pageLength": 50,
        "lengthMenu": [ 10, 25, 50, 75, 100, 200, 500, 1000, 2000],
        "language": {
            "decimal": ".",
            "thousands": ",",
            "lengthMenu": "Display _MENU_ records per page",
            "zeroRecords": "No se encontró nada - lo siento",
            "info": "Mostrando la página _PAGE_ de _PAGES_",
            "infoEmpty": "No hay registros disponibles",
            "infoFiltered": "(filtrado de _MAX_ registros totales)"
        },
        dom: 'Bfrtip',
        buttons: [
            {
                extend: 'csv',
                className: 'btn btn-warning',
                exportOptions: {
                    columns: ':not(:last-child)' // Excluye la última columna
                }
            },
            {
                extend: 'excel',
                className: 'btn btn-danger',
                exportOptions: {
                    columns: ':not(:last-child)' // Excluye la última columna
                }
            },
            {
                extend: 'pdf',
                className: 'btn btn-success',
                exportOptions: {
                    columns: ':not(:last-child)' // Excluye la última columna
                }
            }
        ]
    });
}
