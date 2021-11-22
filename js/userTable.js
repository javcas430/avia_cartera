$(document).ready(function() {
    $('#example').DataTable({
        "ajax": '../controller/userTable.php'
    });
});