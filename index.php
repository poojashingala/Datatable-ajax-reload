<!DOCTYPE html>
<html>
<head>
    <title>Datatable AJAX Demo</title>
    <link rel="stylesheet" type="text/css" href="/Ajax-Datatable-Demo/assets/css/jquery.dataTables.min.css">
    <script type="text/javascript" src="/Ajax-Datatable-Demo/assets/js/jquery-1.12.4.js"></script>
    <script type="text/javascript" src="/Ajax-Datatable-Demo/assets/js/jquery.dataTables.min.js"></script>
</head>
<body>
    <button class="click">Refresh Table</button>
    <table id="example" class="display" style="width:100%">
        <thead>
            <tr>
                <th>Name</th>
                <th>Position</th>
                <th>Office</th>
                <th>Extn.</th>
                <th>Start date</th>
                <th>Salary</th>
            </tr>
        </thead>
        <tfoot>
            <tr>
                <th>Name</th>
                <th>Position</th>
                <th>Office</th>
                <th>Extn.</th>
                <th>Start date</th>
                <th>Salary</th>
            </tr>
        </tfoot>
    </table>
<script type="text/javascript">
    $(document).ready(function() {
        var table = $('#example').DataTable( {
            "ajax": '/Ajax-Datatable-Demo/arrays.txt'
        } );

        $('.click').on('click',function(){
        table.ajax.reload();
        });
    } );


</script>
</body>
</html>
