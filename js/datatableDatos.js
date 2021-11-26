$(document).ready(function() {
    // var hiperObj = [
    //     "ajax" = '../controller/mainTable.php'
    // ];
    $('#principal').DataTable({
        "ajax": '../controller/mainTable.php',
        "scrollX": true,
        // "data": hiperObj,
        // "columns": [
        //     { "data": "information" },
        //     {
        //         "data": "NIT",
        //         "render": function(data, type, row, meta) {
        //             if (type === 'display') {
        //                 data = '<a href="' + data + '">' + data + '</a>';
        //             }

        //             return data;
        //         }
        //     }
        // ]

    });

    var table = $('#principal').DataTable();

    $('#principal').on('click', 'tr', function() {
        if ($(this).hasClass('selected')) {
            $(this).removeClass('selected');
        } else {
            table.$('tr.selected').removeClass('selected');
            $(this).addClass('selected');
        }
    });

    $('#button').click(function() {
        table.row('.selected').remove().draw(false);
    });
});