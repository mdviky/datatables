<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link rel="stylesheet" href="https://cdn.datatables.net/2.1.8/css/dataTables.dataTables.css" />

</head>

<body>
    <h1>Hello, world!</h1>
    <table id="employee-grid" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                <th>Employee name</th>
                <th>Salary</th>
                <th>Age</th>
            </tr>
        </thead>
    </table>
    <table id="myTable" class="display">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
            </tr>
        </thead>
        <!-- <tbody>
        <tr>
            <td>Row 1 Data 1</td>
            <td>Row 1 Data 2</td>
        </tr>
        <tr>
            <td>Row 2 Data 1</td>
            <td>Row 2 Data 2</td>
        </tr>
    </tbody> -->
    </table>
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

<script src="https://cdn.datatables.net/2.1.8/js/dataTables.js"></script>
<script>
    $(document).ready(function() {

        $('#myTable').DataTable({
            "processing": true,
            "serverSide": true,
            "ajax": {
                "url": "test.php",
                "type": "POST"
            },
            "columns": [{
                    "data": "id"
                },
                {
                    "data": "name"
                },
                {
                    "data": "email"
                }
            ]
        });

        $(document).ready(function() {
            var dataTable = $('#employee-grid').DataTable({
                "responsive": true,
                "processing": true,
                "serverSide": true,
                "ajax": {
                    url: "test2.php", // json datasource
                    data: {
                        action: 'getEMP'
                    },
                    type: 'post', // method  , by default get

                },
                error: function() { // error handling
                    $(".employee-grid-error").html("");
                    $("#employee-grid").append('<tbody class="employee-grid-error"><tr><th colspan="3">No data found in the server</th></tr></tbody>');
                    $("#employee-grid_processing").css("display", "none");

                }

            });
        });

    });
</script>

</html>