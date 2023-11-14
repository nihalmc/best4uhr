<!DOCTYPE html>
<html>
<head>
    <title>All Job Seekers</title>
<style>
table {
    width: 80%;
    border-collapse: collapse;
    border: 1px solid #000;
}

table th, table td {
    border: 1px solid #000;
    padding: 5px;
     margin: 0px;
    font-size:13px;
}
h1 {
    text-align: center;
}

</style>
</head>
<body>
    <h1>All Job Seekers</h1>

    <table>
        <thead>
            <tr>
                 <th>Sl No</th> <!-- Add this table header -->
                <th>Name</th>
                <th>Email</th>
              <th>Mobile</th>
             <th>Registration Number</th>
            </tr>
        </thead>
        <tbody>
             <!--1-->
                                        @php
                                            $slNo = 1; // Initialize the serial number variable
                                        @endphp
           @foreach ($candidates as $candidate)
            <tr>
                 <td>{{ $slNo++ }}</td>
                <td>{{ $candidate->name }}</td>
               <td>{{ $candidate->contact_email }}</td>
    <td>{{ $candidate->mobile }}</td>
     <td>{{ $candidate->registration_number }}</td>

            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
