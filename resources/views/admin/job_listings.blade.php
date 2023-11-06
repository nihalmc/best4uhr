@extends('layouts.admin')

@section('content')

        <!-- Page Content Holder -->
        <div id="content">

            <div class="content-admin-main">

            	<div class="wt-admin-right-page-header clearfix">
                    <h2>Manage Jobs</h2>
                    <div class="breadcrumbs"><a href="#">Home</a><a href="#">Dashboard</a><span>My Job Listing</span></div>
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
                                        <th>Job code</th>
                                        <th>Employer</th>
                                        <th>Job Title</th>

                                    <th>Created & Expired</th>
                               <th>Status</th>

                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <!--1-->
                                     @foreach ($jobs as $job)
                                    <tr>
                                        <td>{{ $job->job_code }}</td>
                                        <td>{{ $job->employer->company_name }}</td>
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



                                         <td>
                                            <div>{{ date('d/m/Y', strtotime($job->posted_date)) }}</div>
                                            <div>{{ date('d/m/Y', strtotime($job->closing_date)) }}</div>
                                        </td>

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




                                        <td >
                                            <div class="twm-table-controls" class="twm-jobs-category">

                                                <form action="{{ route('jobs.update-status', ['job' => $job, 'status' => 'Open']) }}"   method="POST" style="display: inline;">
                            @csrf
                            @method('PUT')
                            <button type="submit" class="btn btn-success">Open</button>
                        </form>

                        <form action="{{ route('jobs.update-status', ['job' => $job, 'status' => 'closed']) }}" method="POST" style="display: inline;">
                            @csrf
                            @method('PUT')
                            <button type="submit" class="btn btn-danger ml-2">Close</button>
                        </form>
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
