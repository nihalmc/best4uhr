@extends('layouts.admin')

@section('content')

        <!-- Page Content Holder -->
        <div id="content">

            <div class="content-admin-main">

                <div class="wt-admin-right-page-header clearfix">
                    <h2>Cv Inbox</h2>
                    <div class="breadcrumbs"><a href="#">Home</a><a href="#">Dashboard</a><span>Cv Inbox</span></div>
                </div>
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

                                                <th>Name</th>
                                                 <th>Email</th>
                                                 <th>Mobile</th>
                                                 <th>Job position</th>
                                                 <th>Experience Regions</th>
                                               <th>Resume</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <!--1-->
                                            @foreach ($cvenquiry as $employer)
                                            <tr>

                                                <td>
                                                    <div class="twm-DT-candidates-list">

                                                        <div class="twm-mid-content">
                                                            <a href="#" class="twm-job-title">
                                                                <h4>{{ $employer->name }} </h4>

                                                            </a>

                                                        </div>

                                                    </div>
                                                </td>
                                                <td>{{ $employer->email }}</td>
                                                <td>{{ $employer->mobile }}</td>
                                                <td>{{ $employer->job_position }}</td>
                                                 <td>{{ $employer->experience_region }} <br>{{ $employer->experience_years }}</td>
                      <td>
                        <iframe src="{{ asset('storage/' . $employer->resume) }}" width="150px"></iframe>
                        <a href="{{ asset('storage/' . $employer->resume) }}" target="_blank"><span class="fa fa-eye"></span></a>
                    </td>
                    <td>
                                            <div class="twm-table-controls">
                                                <ul class="twm-DT-controls-icon list-unstyled">

                                                    <li>
                                                        <form method="POST" action="{{ route('cvenquiry.destroy', $employer->id) }}" style="display: inline;">
                        @csrf
                        @method('DELETE')
                                                        <button title="Delete" data-bs-toggle="tooltip" data-bs-placement="top"  onclick="return confirm('Are you sure you want to delete this job enquiry?')">
                                                       <span class="far fa-trash-alt"></span>
                                                        </button>
                                                         </form>
                                                    </li>
                                                </ul>
                                            </div>
                                        </td>
                                            </tr>
 </tbody> @endforeach
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>




            </div>

    	</div>
@endsection
