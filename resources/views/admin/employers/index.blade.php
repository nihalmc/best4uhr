@extends('layouts.admin')

@section('content')

        <!-- Page Content Holder -->
        <div id="content">

            <div class="content-admin-main">

                <div class="wt-admin-right-page-header clearfix">
                    <h2>Employers</h2>
                    <div class="breadcrumbs"><a href="#">Home</a><a href="#">Dashboard</a><span>Employers</span></div>
                </div>
 <a href="{{ route('employers.create') }}" class="btn text-white site-bg-black mb-3">Add Employer</a>
                <div class="twm-pro-view-chart-wrap">

                    <div class="col-lg-12 col-md-12 mb-4">
                        <div class="panel panel-default site-bg-white m-t30">
                            <div class="panel-heading wt-panel-heading p-a20">
                                <h4 class="panel-tittle m-a0"><i class="far fa-list-alt"></i>All Employers</h4>
                            </div>
                            <div class="panel-body wt-panel-body">
                                <div class="twm-D_table p-a20 table-responsive">
                                    <table id="candidate_data_table" class="table table-bordered">
                                        <thead>
                                            <tr>

                                                <th>Company Name</th>
                                                <th>Contact Person Name</th>
                                                 <th>Email</th>
                                                 <th>Mobile</th>
                                                <th>Action</th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                            <!--1-->
                                            @foreach ($employers as $employer)
                                            <tr>

                                                <td>
                                                    <div class="twm-DT-candidates-list">

                                                        <div class="twm-mid-content">
                                                            <a href="#" class="twm-job-title">
                                                                <h4>{{ $employer->company_name }} </h4>

                                                            </a>

                                                        </div>

                                                    </div>
                                                </td>

                                                  <td>{{ $employer->contact_person }}</td>
                                                <td>{{ $employer->contact_email }}</td>
                                                <td>{{ $employer->mobile }}</td>
                                                 <td>
                                                    <div class="twm-table-controls">
                                                <ul class="twm-DT-controls-icon list-unstyled">
                                                    <li>
                                                        <button title="Edit" data-bs-toggle="tooltip" data-bs-placement="top">
                                                            <a href="{{ route('employers.edit', $employer->id) }}"><span class="far fa-edit"></span></a>
                                                        </button>
                                                    </li>
                                                    <li>
                                                         <form method="POST" action="{{ route('employers.destroy', $employer->id) }}" style="display: inline;">
                        @csrf
                        @method('DELETE')
                                                        <button title="Delete" data-bs-toggle="tooltip" data-bs-placement="top"  onclick="return confirm('Are you sure you want to delete this employer?')">
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
