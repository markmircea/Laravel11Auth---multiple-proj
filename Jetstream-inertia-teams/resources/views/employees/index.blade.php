<!DOCTYPE html>
<html>
<head>
    <title>Employee Directory</title>

    <!-- DataTables JavaScript & CSS -->
    <script src="https://cdn.datatables.net/2.0.7/js/dataTables.min.js"></script>
    <link rel="stylesheet" href="https://cdn.datatables.net/2.0.7/css/dataTables.dataTables.min.css">

    <!-- Add jQuery JavaScript -->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>

    <!-- Our Employee table initialization code -->
    <script>
        $(document).ready(function() {
            $('#employeesTable').DataTable({
                processing: true,
                serverSide: true,
                ajax: '{{ route('employees.index') }}',
                columns: [
                    { data: 'id', name: 'id' },
                    { data: 'name', name: 'name' },
                    { data: 'position', name: 'position' },
                    { data: 'birth_date', name: 'birth_date' },
                    { data: 'hired_on', name: 'hired_on' }
                ],
                responsive: true
            });
        });
    </script>
</head>
<body>
<div class="container">
    <h1 class="mt-4">Employee Directory</h1>
    <table id="employeesTable" class="table table-striped nowrap" style="width:100%">
        <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Position</th>
            <th>Birth Date</th>
            <th>Hired On</th>
        </tr>
        </thead>
    </table>
</div>
</body>
</html>
