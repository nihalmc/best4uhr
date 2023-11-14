<!DOCTYPE html>
<html>
<head>
    <title>Open Jobs PDF</title>

    <style>
/* styles.css */
table {
    width: 100%;
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
    <h1>Open Jobs</h1>
    <table>
        <thead>
            <tr>
                 <th>Sl No</th>
                 <th>Job Code</th>
                <th>Job Title</th>
                <th>Company</th>
                <th>Location</th>
                <th>Field of Work</th>
                <th>Salary</th>
                <th>Nationality</th>
                <th>Gender</th>
                <th>Requirements</th>
                <th>Created & Expired</th>
            </tr>
        </thead>
        <tbody>
             @php
                                            $slNo = 1; // Initialize the serial number variable
                                        @endphp
            @foreach ($openJobs as $job)

                <tr>
                    <td>{{ $slNo++ }}</td>
                    <td>{{ $job->job_code }}</td>
                    <td>{{ $job->job_position }}</td>
                    <td>{{ $job->employer->company_name }}</td>
                    <td>{{ $job->location }}</td>
                    <td>{{ $job->field_of_work }}</td>
                     <td>{{ $job->salary }}</td>
                                         <td>
            @if (!is_null($job->selectedNationalities) && count($job->selectedNationalities) > 0)
                <ul>
                    @foreach ($job->selectedNationalities as $nationality)
                        <li style="list-style:none">{{ $nationality }},</li>
                    @endforeach
                </ul>
            @else
                No selected nationalities
            @endif
        </td>
        <td>{{ $job->gender }}</td>
        <td>{{ $job->requirements }}</td>
             <td>
                  <div>{{ date('d/m/Y', strtotime($job->posted_date)) }}</div>
                 <div>{{ date('d/m/Y', strtotime($job->closing_date)) }}</div>
            </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
