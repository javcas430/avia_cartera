$(document).ready(function() {
    $('#example').DataTable({
        "ajax": '../controller/mainTable.php'
    });
});