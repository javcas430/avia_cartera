$(document).ready(function() {
    $('#example').DataTable({
        "ajax": '../controller/userTable.php',
        initComplete: function() {
            this.api().columns().every(function() {
                var column = this;
                var select = $('<select><option value=""></option></select>')
                    .appendTo($(column.footer()).empty())
                    .on('change', function() {
                        var val = $.fn.dataTable.util.escapeRegex(
                            $(this).val()
                        );

                        column
                            .search(val ? '^' + val + '$' : '', true, false)
                            .draw();
                    });

                column.data().unique().sort().each(function(d, j) {
                    select.append('<option value="' + d + '">' + d + '</option>')
                });
            });
        }
    });
});




// $(document).ready(function() {
//     var selectedOption = $('#opselect').find(":selected").text();
//     manageCategoriesTable = $('#example').DataTable({
//         destroy: true,
//         'ajax': {
//             'url': '../controller/userTable.php',
//             'data': { 'opselect': selectedOption },
//             'type': 'post'
//         },
//         'order': []
//     });
// });