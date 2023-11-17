@extends('layouts.admin')

@section('content')
        <!-- Page Content Holder -->
        <div id="content">

            <div class="content-admin-main">

                <div class="wt-admin-right-page-header clearfix">
                    <h2>Hello, BEST4UHR</h2>
                    <div class="breadcrumbs"><a href="#">Home</a><span>Dashboard</span></div>
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
                                        <div class="wt-card-right  wt-total-listing-view counter ">{{ $appliedJobs->count() }}</div>
                                        <div class="wt-card-bottom">
                                            <h4 class="m-b0">Total Applications</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-6 col-md-12 mb-3">
                            <div class="panel panel-default">
                                <div class="panel-body wt-panel-body gradi-4 dashboard-card ">
                                    <div class="wt-card-wrap">
                                        <div class="wt-card-icon"><i class="fa fa-user-tie"></i></div>
                                        <div class="wt-card-right  wt-total-listing-bookmarked counter ">{{ $employer->count() }}</div>
                                        <div class="wt-card-bottom">
                                            <h4 class="m-b0">Total Employer</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-6 col-md-12 mb-3">
                            <div class="panel panel-default">
                                <div class="panel-body wt-panel-body gradi-3 dashboard-card ">
                                    <div class="wt-card-wrap">
                                        <div class="wt-card-icon"><i class="fa fa-user-friends"></i></div>
                                        <div class="wt-card-right  wt-total-listing-review counter">{{  $jobseekr->count() }}</div>
                                        <div class="wt-card-bottom">
                                            <h4 class="m-b0">Total Job Seeker</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
<div>
    <form id="refreshForm" action="{{ route('jobs.close') }}" method="post">
        @csrf
        <button type="submit" style="background-color:red" class="btn text-white mb-3">Refresh Date</button>
    </form>
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
 <script>
    document.addEventListener('DOMContentLoaded', function () {
        // Set the time for the automatic click (adjust as needed)
        const dailyClickTime = '11:55'; // for example, 3 AM

        // Get the current date and time
        const now = new Date();

        // Format the current time as HH:mm
        const currentTime = `${now.getHours()}:${now.getMinutes()}`;

        // Check if the current time is equal to the desired daily click time
        if (currentTime === dailyClickTime) {
            // Trigger the click event of the form
            document.getElementById('refreshForm').submit();
        }
    });
</script>

        @endsection
