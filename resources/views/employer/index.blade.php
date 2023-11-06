@extends('layouts.employer')

@section('content')
        <!-- Page Content Holder -->
        <div id="content">

            <div class="content-admin-main">

                <div class="wt-admin-right-page-header clearfix">
                    <h2>Hello,{{ $employer->company_name}}</h2>
                    <div class="breadcrumbs"><a href="{{ route('employer.index') }}">Home</a><span>Dashboard</span></div>
                </div>

                <div class="twm-dash-b-blocks mb-5">
                    <div class="row">
                        <div class="col-xl-3 col-lg-6 col-md-12 mb-3">
                            <div class="panel panel-default">
                                <div class="panel-body wt-panel-body gradi-1 dashboard-card ">
                                    <div class="wt-card-wrap">
                                        <div class="wt-card-icon"><i class="far fa-address-book"></i></div>
                                        <div class="wt-card-right wt-total-active-listing counter ">{{ $jobs->count() }}</div>
                                        <div class="wt-card-bottom ">
                                            <h4 class="m-b0">Posted Jobs</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-6 col-md-12 mb-3">
                            <div class="panel panel-default">
                                <div class="panel-body wt-panel-body gradi-2 dashboard-card ">
                                    <div class="wt-card-wrap">
                                        <div class="wt-card-icon"><i class="far fa-file-alt"></i></div>
                                        <div class="wt-card-right  wt-total-listing-view counter ">435</div>
                                        <div class="wt-card-bottom">
                                            <h4 class="m-b0">Total Applications</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>

            </div>

    	</div>

        @endsection
