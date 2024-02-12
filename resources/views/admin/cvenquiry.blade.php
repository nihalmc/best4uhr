@extends('layouts.admin')

@section('content')

<!-- Page Content Holder -->
<div id="content">

    <div class="content-admin-main">

        <div class="wt-admin-right-page-header clearfix">
            <h2>Cv Inbox</h2>
            <div class="breadcrumbs"><a href="#">Home</a><a href="#">Dashboard</a><span>Cv Inbox</span></div>
        </div>
        <a href="{{ route('generatePdf') }}" target="_blank" class="btn btn-primary">Generate PDF</a>
        <div class="twm-pro-view-chart-wrap">

            <div class="col-lg-12 col-md-12 mb-4">
                <div class="panel panel-default site-bg-white m-t30">
                    <div class="panel-heading wt-panel-heading p-a20">
                        <h4 class="panel-tittle m-a0"><i class="far fa-list-alt"></i>Cv Inbox</h4>
                    </div>

                    <div class="panel-body wt-panel-body">
                        <div class="twm-D_table p-a20 table-responsive">
                            <table id="candidate_data_table" class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>Timestamp</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Mobile</th>
                                        <th>Job position</th>
                                        <th>Experience and year of experience</th>
                                        <th>Rasume</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <!--1-->
                                    @foreach ($cvenquiry as $enquiry)
                                    <tr>
                                        <td>{{ $enquiry->created_at->format('d/m/y') }}</td>
                                        <td>
                                           

                                            <div class="twm-DT-candidates-list">
                                                <div class="twm-mid-content">
                                                    <a href="#" class="twm-job-title">
                                                        <h4>{{ $enquiry->name }}</h4>
                                                    </a>
                                                </div>
                                            </div>
                                        </td>
                                        <td>{{ $enquiry->email }}</td>
                                        <td>{{ $enquiry->mobile }}</td>
                                        <td>{{ $enquiry->job_position }}</td>
                                        <td>{{ $enquiry->experience_region }} <br>{{ $enquiry->experience_years }}</td>
                                        <td>
                                            @if ($enquiry->resume)
                                                <iframe src="{{ asset('storage/' . $enquiry->resume) }}" style="width: 100%; height: 400px;"></iframe>
                                            @else
                                                No Resume Available
                                            @endif
                                        </td>
                                        
                                        <td>
                                            <div class="twm-table-controls">
                                                <ul class="twm-DT-controls-icon list-unstyled">
                                                    <li>
                                                        <form method="POST"
                                                            action="{{ route('cvenquiry.destroy', $enquiry->id) }}"
                                                            style="display: inline;">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button title="Delete" data-bs-toggle="tooltip"
                                                                data-bs-placement="top"
                                                                onclick="return confirm('Are you sure you want to delete this job enquiry?')">
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
    </div>
</div>
@endsection
