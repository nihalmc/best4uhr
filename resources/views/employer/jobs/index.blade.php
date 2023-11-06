@extends('layouts.employer')

@section('content')

        <!-- Page Content Holder -->
        <div id="content">

            <div class="content-admin-main">

            	<div class="wt-admin-right-page-header clearfix">
                    <h2>Manage Jobs</h2>
                    <div class="breadcrumbs"><a href="#">Home</a><a href="{{ route('employer.index') }}">Dashboard</a><span>My Job Listing</span></div>
                </div>

                <!--Basic Information-->
                <div class="panel panel-default">
                    <div class="panel-heading wt-panel-heading p-a20">
                        <h4 class="panel-tittle m-a0"><i class="fa fa-suitcase"></i> Job Details</h4>
                    </div>
                    <div class="panel-body wt-panel-body p-a20 m-b30 ">
                        <div class="twm-D_table p-a20 table-responsive">
                            <table id="jobs_bookmark_table" class="table table-bordered twm-bookmark-list-wrap">
                                <thead>
                                    <tr>
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
                                        <td>{{ $job->nationality }}</td>
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
                @elseif ($job->status === 'closed')
                    red
                {{-- Add more conditions for other status values as needed --}}
                @endif
            " >{{ $job->status }}</span>
            </td>


                                        <td>
                                            <div>{{ $job->posted_date }}</div>
                                            <div>{{ $job->closing_date }}</div>
                                        </td>

                                        <td>
                                            <div class="twm-table-controls">
                                                <ul class="twm-DT-controls-icon list-unstyled">

                                                    <li>
                                                        <button title="Edit" data-bs-toggle="tooltip" data-bs-placement="top">
                                                           <a href="{{ route('jobs.edit', $job->id) }}"><span class="far fa-edit"></span></a>
                                                        </button>
                                                    </li>
                                                    <li>
                                                        <form method="POST" action="{{ route('jobs.destroy', $job->id) }}" style="display: inline;">
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

    @endsection
