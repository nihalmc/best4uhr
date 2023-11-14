<!DOCTYPE html>
<html>
<head>
    <title>All Employers</title>
<style>
table {
    width: 80%;
    border-collapse: collapse;
    border: 1px solid #000;
}

table th, table td {
    border: 1px solid #000;
    padding: 3px;
     margin: 0px;
    font-size:13px;
}
h1 {
    text-align: center;
}

</style>
</head>
<body>
    <h1>All Employers</h1>

    <table>
        <thead>
            <tr>
                 <th>Sl No</th> <!-- Add this table header -->
                <th>Company Name</th>
                <th>Contact Person</th>
                <th>Contact Email</th>
                <th>Mobile</th>
                <th>Address</th>

            </tr>
        </thead>
        <tbody>
             <!--1-->
                                        @php
                                            $slNo = 1; // Initialize the serial number variable
                                        @endphp
            @foreach ($employers as $employer)
            <tr>
                 <td>{{ $slNo++ }}</td>
                <td>{{ $employer->company_name }}</td>
                <td>{{ $employer->contact_person }}</td>
                <td>{{ $employer->contact_email }}</td>
                <td>{{ $employer->mobile }}</td>
                <td>{{ $employer->address }}</td>

            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>

