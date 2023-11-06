@extends('layouts.admin')

@section('content')

        <!-- Page Content Holder -->
        <div id="content">

            <div class="content-admin-main">

                <div class="wt-admin-right-page-header clearfix">
                    <h2>Job Seekers</h2>
                    <div class="breadcrumbs"><a href="#">Home</a><a href="#">Dashboard</a><span>Job Seekers</span></div>
                </div>
<a href="{{ route('candidates.create') }}" class="btn text-white site-bg-black mb-3">Add Job Seeker</a>
                <div class="twm-pro-view-chart-wrap">

                    <div class="col-lg-12 col-md-12 mb-4">
                        <div class="panel panel-default site-bg-white m-t30">
                            <div class="panel-heading wt-panel-heading p-a20">
                                <h4 class="panel-tittle m-a0"><i class="far fa-list-alt"></i>All Job Seekers</h4>

                            </div>

                            <div class="panel-body wt-panel-body">
                                <div class="twm-D_table p-a20 table-responsive">
                                    <table id="candidate_data_table" class="table table-bordered">
                                        <thead>
                                            <tr>

                                                <th>Name</th>
                                                 <th>Email</th>
                                                 <th>Mobile</th>
                                                <th>Registration Number</th>
                                                 <th>Status</th>
                                                 <th>Approve and Reject</th>
                                                <th>Action</th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                            <!--1-->
@foreach ($candidates as $candidate)
<tr>
    <td>
        <div class="twm-DT-candidates-list">
            <div class="twm-mid-content">
                <a href="#" class="twm-job-title">
                    <h4>{{ $candidate->name }} </h4>
                </a>
            </div>
        </div>
    </td>
    <td>{{ $candidate->contact_email }}</td>
    <td>{{ $candidate->mobile }}</td>
     <td>{{ $candidate->registration_number }}</td>
    <td class="{{ $candidate->status === 'approved' ? 'text-success' : ($candidate->status === 'rejected' ? 'text-danger' : ($candidate->status === 'pending' ? 'text-warning' : '')) }}">{{ $candidate->status }}</td>
    <td >
                                            <div class="twm-table-controls" class="twm-jobs-category">

                                                <form action="{{ route('candidates.updateStatus', ['candidate' => $candidate, 'status' => 'approved']) }}"   method="POST" style="display: inline;">
                            @csrf
                            @method('PUT')
                            <button type="submit" class="btn btn-success">Approve</button>
                        </form>

                        <form action="{{ route('candidates.updateStatus', ['candidate' => $candidate, 'status' => 'rejected']) }}" method="POST" style="display: inline;">
                            @csrf
                            @method('PUT')
                            <button type="submit" class="btn btn-danger ml-2">Reject</button>
                        </form>
                                            </div>
                                        </td>

    <td>
        <div class="twm-table-controls">
            <ul class="twm-DT-controls-icon list-unstyled">
                <li>
                    <button title="Edit" data-bs-toggle="tooltip" data-bs-placement="top">
                        <a href="{{ route('candidates.edit', $candidate->id) }}"><span class="far fa-edit"></span></a>
                    </button>
                </li>
                <li>
                    <form method="POST" action="{{ route('candidates.destroy', $candidate->id) }}" style="display: inline;">
                        @csrf
                        @method('DELETE')
                        <button title="Delete" data-bs-toggle="tooltip" data-bs-placement="top" onclick="return confirm('Are you sure you want to delete this Job Seeker?')">
                            <span class="far fa-trash-alt"></span>
                        </button>
                    </form>
                </li>
            </ul>
        </div>
    </td>
</tr>
@endforeach

                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>




            </div>

    	</div>
@endsection
