// $(document).ready(function () {
//     $('#example').DataTable({
//         "ajax": '../controller/mainTable.php'
//     });
// });

$(document).ready(function() {
    $('#principal').DataTable({
        "ajax": '../controller/mainTable.php'
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