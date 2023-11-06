
@extends('layouts.admin')

@section('content')
    <!-- Page Content Holder -->
    <div id="content">
        <div class="content-admin-main">
            <div class="wt-admin-right-page-header clearfix">
                <h2>Applied Jobs</h2>
                <div class="breadcrumbs">
                    <a href="#">Home</a>
                    <a href="#">Dashboard</a>
                    <span>Applied Jobs</span>
                </div>
            </div>
            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif

            <div class="twm-pro-view-chart-wrap">
                <div class="col-lg-12 col-md-12 mb-4">
                    <div class="panel panel-default site-bg-white m-t30">
                        <div class="panel-heading wt-panel-heading p-a20">
                            <h4 class="panel-tittle m-a0"><i class="far fa-list-alt"></i> Applied Jobs</h4>
                        </div>
                        <div class="panel-body wt-panel-body p-a20 m-b30">
                            <div class="twm-D_table p-a20 table-responsive">
                                <table id="jobs_bookmark_table" class="table table-bordered twm-bookmark-list-wrap">
                                    <thead>
                                        <tr>
                                            <th>Job code</th>
                                            <th>Name</th>
                                            <th>Applied for</th>
                                            <th>Email</th>
                                            <th>Mobile</th>
                                            <th>Date</th>
                                            <th>Resume</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($appliedJobs as $application)
                                            <tr>
                                                <td>{{ $application->job->job_code }}</td>
                                                <td>
                                                    <div class="twm-bookmark-list">
                                                        <div class="twm-mid-content">
                                                            <a href="#" class="twm-job-title">{{ $application->candidate->name }}</a>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>{{ $application->job->job_position }}</td>
                                                <td>{{ $application->candidate->contact_email }}</td>
                                                <td>{{ $application->candidate->mobile }}</td>
                                                <td>{{ date('d/m/Y', strtotime($application->created_at)) }}</td>
                                                <td>
                                                    @if ($application->resume)
                                                        <iframe src="{{ asset('storage/' . $application->resume) }}"
                                                            width="150px"></iframe>
                                                        <a href="{{ asset('storage/' . $application->resume) }}" target="_blank">
                                                            <span class="fa fa-eye"></span>
                                                        </a>
                                                    @else
                                                        No Resume Attached
                                                    @endif
                                                </td>
                                                <td>
                                                    <div class="twm-table-controls">
                                                        <ul class="twm-DT-controls-icon list-unstyled">
                                                            <li>
                                                                <button title="View more details" data-bs-toggle="tooltip"
                                                                    data-bs-placement="top">
                                                                    <a data-bs-toggle="modal" href="#applicationModal{{ $application->id }}"
                                                                        role="button">
                                                                        <span class="far fa-eye"></span>
                                                                    </a>
                                                                </button>
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

@foreach ($appliedJobs as $application)
    <!-- Modal for Application Details -->
    <div class="modal fade twm-saved-jobs-view" id="applicationModal{{ $application->id }}" tabindex="-1" role="dialog" aria-labelledby="applicationModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <form>
                    <div class="modal-header">
                        <h2 class="modal-title">Application Details</h2>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-xl-12 col-lg-12">
                                <div class="form-group">
                                    <label>Name:</label>
                                    <div class="ls-inputicon-box">
                                        <input class="form-control" type="text" value="{{ $application->candidate->name }}">
                                        <i class="fs-input-icon fa fa-user"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-12 col-lg-12">
                                <div  class="form-group">
                                    <label>Applied for:</label>
                                    <div class="ls-inputicon-box">
                                        <input class="form-control" type="text" value="{{ $application->job->job_position }}">
                                        <i class="fs-input-icon fa fa-calendar"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-12 col-lg-12">
                                <div class="form-group">
                                    <label>Email:</label>
                                    <div class="ls-inputicon-box">
                                        <input class="form-control" type="text" value="{{ $application->candidate->contact_email }}">
                                        <i class="fs-input-icon fas fa-at"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-12 col-lg-12">
                                <div class="form-group">
                                    <label>Mobile:</label>
                                    <div class="ls-inputicon-box">
                                        <input class="form-control" type="text" value="{{ $application->candidate->mobile }}">
                                        <i class="fs-input-icon fa fa-phone-alt"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-12 col-lg-12">
                                <div class="form-group">
                                    <label>Gender:</label>
                                    <div class="ls-inputicon-box">
                                        <input class="form-control" type="text" value="{{ $application->candidate->candidateDetail->gender }}">
                                        <i class="fs-input-icon fa fa-venus-mars"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-12 col-lg-12">
                                <div class="form-group">
                                    <label>Date:</label>
                                    <div class="ls-inputicon-box">
                                        <input class="form-control" type="text" value="{{ date('d/m/Y', strtotime($application->created_at)) }}">
                                        <i class="fs-input-icon fa fa-calendar"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-12 col-lg-12">
                                <div class="form-group">
                                    <label>Home Country:</label>
                                    <div class="ls-inputicon-box">
                                        <input class="form-control" type="text" value="{{ $application->candidate->candidateDetail->home_country }}">
                                        <i class="fs-input-icon fa fa-globe-americas"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-12 col-lg-12">
                                <div class="form-group">
                                    <label>Nationality:</label>
                                    <div class="ls-inputicon-box">
                                        <input class="form-control" type="text" value="{{ $application->candidate->candidateDetail->nationality }}">
                                        <i class="fs-input-icon fa fa-globe-americas"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-12 col-lg-12">
                                <div class="form-group">
                                    <label>Experience Regions:</label>
                                    <div class="ls-inputicon-box">
                                        <input class="form-control" type="text" value="{{ $application->candidate->candidateDetail->experience_region }}">
                                        <i class="fs-input-icon fa fa-user-edit"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-12 col-lg-12">
                                <div class="form-group">
                                    <label>Experience in Years:</label>
                                    <div class="ls-inputicon-box">
                                        <input class="form-control" type="text" value="{{ $application->candidate->candidateDetail->experience_years }}{{ $application->candidate->candidateDetail->experience_years === 1 ? ' Year' : ' Years' }}">
                                        <i class="fs-input-icon fa fa-calendar"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-12 col-lg-12">
                                <div class="form-group">
                                    <label>Language Known:</label>
                                    <div class="ls-inputicon-box">
                                        @if (is_array($application->candidate->candidateDetail->languages_known))
                                            <input class="form-control" type="text" value="{{ implode(', ', $application->candidate->candidateDetail->languages_known) }}">
                                        @else
                                            <input class="form-control" type="text" value="{{ $application->candidate->candidateDetail->languages_known }}">
                                        @endif
                                        <i class="fs-input-icon fa fa-language"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-12 col-lg-12">
                                <div class="form-group">
                                    <label>Qualification:</label>
                                    <div class="ls-inputicon-box">
                                        <input class="form-control" type="text" value="{{ $application->candidate->candidateDetail->qualification }}">
                                        <i class="fs-input-icon fa fa-user-graduate"></i>
                                    </div>
                                </div>
                            </div>
                           <div class="col-xl-12 col-lg-12">
    <div class="form-group">
        <label>UAE driving license Expiry Date:</label>
        <div class="ls-inputicon-box">
            <input class="form-control" type="text" value="{{ $application->candidate->candidateDetail->driving_licence_expiry_date ? date('d/m/Y', strtotime($application->candidate->candidateDetail->driving_licence_expiry_date)) : 'No UAE driving license' }}">
            <i class="fs-input-icon fa fa-calendar"></i>
        </div>
    </div>
</div>

                            <div class="col-xl-12 col-lg-12">
    <div class="form-group">
        <label>UAE driving license Expiry Date:</label>
        <div class="ls-inputicon-box">
            <input class="form-control" type="text"  value="{{ $application->candidate->candidateDetail->driving_licence_expiry_date ? date('d/m/Y', strtotime($application->candidate->candidateDetail->driving_licence_expiry_date)) : '' }}">
            <i class="fs-input-icon fa fa-calendar"></i>
        </div>
    </div>
</div>

                            <div class="col-xl-12 col-lg-12">
                                <div class="form-group">
                                    <label>Resume:</label>
                                    <div class="ls-inputicon-box">
                                        @if ($application->resume)
                                            <a href="{{ asset('storage/' . $application->resume) }}" target="_blank">View Resume</a>
                                        @else
                                            No Resume Attached
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="site-button" data-bs-dismiss="modal">Close</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endforeach



@endsection
