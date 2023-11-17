@extends('layouts.admin')

@section('content')


        <!-- Page Content Holder -->
        <div id="content">

            <div class="content-admin-main">

            	<div class="wt-admin-right-page-header clearfix">
                    <h2>Job Details</h2>
                    <div class="breadcrumbs"><a href="#">Home</a><a href="#">Dashboard</a><span>Job Details</span></div>
                </div>
 <a href="{{ route('admin.jobs.downloadOpenPDF') }}" class="btn text-white  site-bg-primary mb-3">Download Open Jobs (PDF)</a>
                <!--Basic Information-->
                <div class="panel panel-default">
                    <div class="panel-heading wt-panel-heading p-a20">
                        <h4 class="panel-tittle m-a0"><i class="fa fa-suitcase"></i>Job Details</h4>
                    </div>


                    <div class="panel-body wt-panel-body p-a20 m-b30 ">
                        <div class="twm-D_table p-a20 table-responsive">
                            <table id="jobs_bookmark_table" class="table table-bordered twm-bookmark-list-wrap">
                                <thead>
                                    <tr>
                                        <th>Job Code</th>
                                        <th>Job Title</th>
                                        <th>Field of Work</th>

                       <th>Salary</th>
                <th>Nationality</th>
                <th>Gender</th>

                 <th>Employer</th>
                <th>Status</th>
                                        <th>Created & Expired</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <!--1-->
                                     @foreach ($jobs as $job)
                                    <tr>
                                        <td>{{ $job->job_code }}</td>
                                        <td>
                                            <div class="twm-bookmark-list">

                                                <div class="twm-mid-content">
                                                    <a href="#" class="twm-job-title">
                                                        <h4>{{ $job->job_position }}</h4>
           <p class="twm-bookmark-address">
                                                            <i class="feather-map-pin"></i>{{ $job->location }}
                                                        </p>

                                                    </a>

                                                </div>

                                            </div>
                                        </td>

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

                                      <td>@if ($job->employer)
                    {{ $job->employer->company_name }}
                @else
                    No Employer Assigned
                @endif</td>
                                      <td class="twm-jobs-category">
               <span style="background-color:
                @if ($job->status === 'pending')
                    orange
                @elseif ($job->status === 'Open')
                    green
                @elseif ($job->status === 'Closed')
                    red
                {{-- Add more conditions for other status values as needed --}}
                @endif
            " >{{ $job->status }}</span>
            </td>

                                        <td>
                                            <div>{{ date('d/m/Y', strtotime($job->posted_date)) }}</div>
                                            <div>{{ date('d/m/Y', strtotime($job->closing_date)) }}</div>
                                        </td>

                                        <td>
                                            <div class="twm-table-controls">
                                                <ul class="twm-DT-controls-icon list-unstyled">
                                                    <li>
                                                       <button title="View more details" data-bs-toggle="tooltip"
                                                                    data-bs-placement="top">
                                                                    <a data-bs-toggle="modal" href="#jobModal{{ $job->id }}"
                                                                        role="button">
                                                                        <span class="far fa-eye"></span>
                                                                    </a>
                                                                </button>
                                                    </li>
                                                    <li>
                                                        <button title="Edit" data-bs-toggle="tooltip" data-bs-placement="top">
                                                           <a href="{{ route('admin.jobs.edit', $job->id) }}"><span class="far fa-edit"></span></a>
                                                        </button>
                                                    </li>
                                                    <li>
                                                        <form method="POST" action="{{ route('admin.jobs.destroy', $job->id) }}" style="display: inline;">
                        @csrf
                        @method('DELETE')
                                                        <button title="Delete" data-bs-toggle="tooltip" data-bs-placement="top"  onclick="return confirm('Are you sure you want to delete this job posting?')">
                                                       <span class="far fa-trash-alt"></span>
                                                        </button>
                                                         </form>
                                                    </li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
@endforeach
 </tbody>
                            </table>
                        </div>
                    </div>
                </div>

            </div>

    	</div>
<!-- Modals for job details -->
@foreach($jobs as $job)
<div class="modal fade twm-saved-jobs-view" id="jobModal{{ $job->id }}" tabindex="-1" role="dialog" aria-labelledby="jobModalLabel{{ $job->id }}" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="jobModalLabel{{ $job->id }}">Job Details:</h5>
                <!-- Add Copy button -->
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>


            </div>
            <div class="modal-body">
                <!-- Display job details -->
                <h4>Job Position: {{ $job->job_position }}</h4>
                <p>Job Code: {{ $job->job_code }}</p>
                <p>Field of Work: {{ $job->field_of_work }}</p>
                <p>Location: {{ $job->location }}</p>
                <p>Salary: {{ $job->salary }}</p>
                <p>Nationality:@if (!is_null($job->selectedNationalities) && count($job->selectedNationalities) > 0)
                    @foreach ($job->selectedNationalities as $nationality)
                        {{ $nationality }},
                    @endforeach
            @else
                No selected nationalities
            @endif</p>
                <p>Gender: {{ $job->gender }}</p>
                <p>Requirements: {{ $job->requirements }}</p>
                <p>Posted Date: {{ date('d/m/Y', strtotime($job->posted_date)) }}</p>
                <p>Closing Date: {{ date('d/m/Y', strtotime($job->closing_date )) }}</p>
                <p style="color:
                @if ($job->status === 'pending')
                    orange
                @elseif ($job->status === 'Open')
                    green
                @elseif ($job->status === 'Closed')
                    red
                {{-- Add more conditions for other status values as needed --}}
                @endif
                ">Status: {{ $job->status }}</p>
            </div>
<div class="modal-footer">
       <button type="button" class="site-button" onclick="copyJobDetails({{ $job->id }})">Copy Details</button>
    </div>
        </div>
    </div>
</div>
@endforeach

<!-- JavaScript for copying job details -->
<script>
    function copyJobDetails(jobId) {
        // Get the modal content
        var modalContent = document.getElementById('jobModal' + jobId).querySelector('.modal-body');

        // Create a range and a selection
        var range = document.createRange();
        var selection = window.getSelection();

        // Select the text inside the modal content
        range.selectNodeContents(modalContent);
        selection.removeAllRanges();
        selection.addRange(range);

        // Copy the selected text to the clipboard
        document.execCommand('copy');

        // Deselect the text
        selection.removeAllRanges();

        // Display a success message or perform other actions as needed
        alert('Job details copied to clipboard!');
    }

     function resetSearchForm() {
        // Find the search input field
        const searchInput = document.querySelector('input[name="search_query"]');

        // Clear the search input field
        searchInput.value = '';

        // Submit the form to refresh the page
        document.querySelector('form').submit();
    }
</script>

    @endsection

