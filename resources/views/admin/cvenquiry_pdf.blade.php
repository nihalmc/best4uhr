<!-- cvenquiry_pdf.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Free CV Enquiry Report</title>
    <style>
        /* Add your CSS styles here */
        body {
            font-family: Arial, sans-serif;
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid #dddddd;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <h1>Free CV Enquiry Report</h1>
    <table>
        <thead>
            <tr>
                <th>Sl No</th> <!-- Add this line -->
                <th>Timestamp</th>
                <th>Name</th>
                <th>Email</th>
                <th>Mobile</th>
                <th>Job Position</th>
                <th>Experience</th>
            </tr>
        </thead>
        <tbody>
            @php $count = 1 @endphp <!-- Initialize a counter variable -->
            @foreach ($cvenquiry as $enquiry)
            <tr>
                <td>{{ $count++ }}</td> <!-- Increment the counter for each row -->
                <td>{{ $enquiry->created_at->format('d/m/y') }}</td>
                <td>{{ $enquiry->name }}</td>
                <td>{{ $enquiry->email }}</td>
                <td>{{ $enquiry->mobile }}</td>
                <td>{{ $enquiry->job_position }}</td>
                <td>{{ $enquiry->experience_region }} ({{ $enquiry->experience_years }} years)</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
