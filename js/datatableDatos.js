$(document).ready(function() {
    // var hiperObj = [
    //     "ajax" = '../controller/mainTable.php'
    // ];
    $('#principal').DataTable({
        "ajax": '../controller/mainTable.php',
        "scrollX": true,
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