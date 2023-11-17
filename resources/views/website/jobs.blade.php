@extends('layouts.website')

@section('content')

<!-- CONTENT START -->
        <div class="page-content">

            <!-- INNER PAGE BANNER -->
            <div class="wt-bnr-inr overlay-wraper bg-center" style="background-image:url(images/banner/1.jpg);">
                <div class="overlay-main site-bg-white opacity-01"></div>
                <div class="container">
                    <div class="wt-bnr-inr-entry">
                        <div class="banner-title-outer">
                            <div class="banner-title-name">
                                <h2 class="wt-title">The Most Exciting Jobs</h2>
                            </div>
                        </div>
                        <!-- BREADCRUMB ROW -->


                        <!-- BREADCRUMB ROW END -->
                    </div>
                </div>
            </div>
            <!-- INNER PAGE BANNER END -->


            <!-- OUR BLOG START -->
            <div class="section-full p-t60  p-b90 site-bg-white">


                <div class="container">
                    <div class="row">

                        <div class="col-lg-4 col-md-12 rightSidebar">

                            <div class="side-bar">

                                <div class="sidebar-elements search-bx">

                                   <form action="{{ route('home.jobs') }}" method="GET" id="searchForm">
                                    @csrf
    <div class="form-group mb-4">
        <h4 class="section-head-small mb-4">Keyword</h4>
        <div class="input-group">
            <input type="text" class="form-control" name="search_query" placeholder="Job Title or Keyword" value="{{ $searchQuery }}">
            <button class="btn"  type="submit"><i class="feather-search"></i></button>
            <!-- Add the "Refresh" button here -->
            <button class="btn" type="button" onclick="window.location.href = '{{ route('home.jobs') }}';">
        <i class="fas fa-sync-alt"></i>
            </button>
        </div>
    </div>
</form>


<!-- <div class="form-group mb-4">
                                            <h4 class="section-head-small mb-4">Category</h4>
                                            <select class="wt-select-bar-large selectpicker"  data-live-search="true" data-bv-field="size">
                                                <option>All Category</option>
                                                <option>Web Designer</option>
                                                <option>Developer</option>
                                                <option>Acountant</option>
                                            </select>
                                        </div> -->



                                         <!--<div class="form-group mb-4">
                                            <h4 class="section-head-small mb-4">Location</h4>
                                            <div class="input-group">
                                                <input type="text" class="form-control" placeholder="Search location">
                                                <button class="btn" type="button"><i class="feather-map-pin"></i></button>
                                            </div>
                                        </div>-->

                                        <!--<div class="twm-sidebar-ele-filter">
                                            <h4 class="section-head-small mb-4">Job Type</h4>
                                            <ul>
                                                <li>
                                                    <div class=" form-check">
                                                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                                        <label class="form-check-label" for="exampleCheck1">Freelance</label>
                                                    </div>
                                                    <span class="twm-job-type-count">09</span>
                                                </li>

                                                <li>
                                                    <div class=" form-check">
                                                        <input type="checkbox" class="form-check-input" id="exampleCheck2">
                                                        <label class="form-check-label" for="exampleCheck2">Full Time</label>
                                                    </div>
                                                    <span class="twm-job-type-count">07</span>
                                                </li>

                                                <li>
                                                    <div class=" form-check">
                                                        <input type="checkbox" class="form-check-input" id="exampleCheck3">
                                                        <label class="form-check-label" for="exampleCheck3">Internship</label>
                                                    </div>
                                                    <span class="twm-job-type-count">15</span>
                                                </li>

                                                <li>
                                                    <div class=" form-check">
                                                        <input type="checkbox" class="form-check-input" id="exampleCheck4">
                                                        <label class="form-check-label" for="exampleCheck4">Part Time</label>
                                                    </div>
                                                    <span class="twm-job-type-count">20</span>
                                                </li>

                                                <li>
                                                    <div class=" form-check">
                                                        <input type="checkbox" class="form-check-input" id="exampleCheck5">
                                                        <label class="form-check-label" for="exampleCheck5">Temporary</label>
                                                    </div>
                                                    <span class="twm-job-type-count">22</span>
                                                </li>

                                                <li>
                                                    <div class=" form-check">
                                                        <input type="checkbox" class="form-check-input" id="exampleCheck6">
                                                        <label class="form-check-label" for="exampleCheck6">Volunteer</label>
                                                    </div>
                                                    <span class="twm-job-type-count">25</span>
                                                </li>

                                            </ul>
                                        </div>-->

                                        <!--<div class="twm-sidebar-ele-filter">
                                            <h4 class="section-head-small mb-4">Date Posts</h4>
                                            <ul>
                                                <li>
                                                    <div class="form-check">
                                                        <input type="radio" class="form-check-input" id="exampleradio1">
                                                        <label class="form-check-label" for="exampleradio1">Last hour</label>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="form-check">
                                                        <input type="radio" class="form-check-input" id="exampleradio2">
                                                        <label class="form-check-label" for="exampleradio2">Last 24 hours</label>
                                                    </div>
                                                </li>

                                                <li>
                                                    <div class="form-check">
                                                        <input type="radio" class="form-check-input" id="exampleradio3">
                                                        <label class="form-check-label" for="exampleradio3">Last 7 days</label>
                                                    </div>
                                                </li>

                                                <li>
                                                    <div class="form-check">
                                                        <input type="radio" class="form-check-input" id="exampleradio4">
                                                        <label class="form-check-label" for="exampleradio4">Last 14 days</label>
                                                    </div>
                                                </li>

                                                <li>
                                                    <div class="form-check">
                                                        <input type="radio" class="form-check-input" id="exampleradio5">
                                                        <label class="form-check-label" for="exampleradio5">Last 30 days</label>
                                                    </div>
                                                </li>

                                                <li>
                                                    <div class="form-check">
                                                        <input type="radio" class="form-check-input" id="exampleradio6">
                                                        <label class="form-check-label" for="exampleradio6">All</label>
                                                    </div>
                                                </li>

                                            </ul>
                                        </div>-->

                                        <!--<div class="twm-sidebar-ele-filter">
                                            <h4 class="section-head-small mb-4">Type of employment</h4>
                                            <ul>
                                                <li>
                                                    <div class="form-check">
                                                        <input type="radio" class="form-check-input" id="Freelance1">
                                                        <label class="form-check-label" for="Freelance1">Freelance</label>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="form-check">
                                                        <input type="radio" class="form-check-input" id="FullTime1">
                                                        <label class="form-check-label" for="FullTime1">Full Time</label>
                                                    </div>
                                                </li>

                                                <li>
                                                    <div class="form-check">
                                                        <input type="radio" class="form-check-input" id="Intership1">
                                                        <label class="form-check-label" for="Intership1">Intership</label>
                                                    </div>
                                                </li>

                                                <li>
                                                    <div class="form-check">
                                                        <input type="radio" class="form-check-input" id="Part-Time1">
                                                        <label class="form-check-label" for="Part-Time1">Part Time</label>
                                                    </div>
                                                </li>

                                            </ul>
                                        </div>-->



                                </div>

                                <div class="widget tw-sidebar-tags-wrap">
                                    <h4 class="section-head-small mb-4">Tags</h4>

                                    <div class="tagcloud">
                                        <a href="{{ route('home.jobs') }}">General</a>
                                        <a href="{{ route('home.jobs') }}">Jobs </a>
                                        <a href="{{ route('home.jobs') }}">Payment</a>
                                        <a href="{{ route('home.jobs') }}">Application </a>
                                        <a href="{{ route('home.jobs') }}">Work</a>
                                        <a href="{{ route('home.jobs') }}">Recruiting</a>
                                        <a href="{{ route('home.jobs') }}">Employer</a>
                                        <a href="{{ route('home.jobs') }}">Income</a>
                                        <a href="{{ route('home.jobs') }}">Tips</a>
                                    </div>
                                </div>


                            </div>



                        </div>


 <div class="col-lg-8 col-md-12">
                            <!--Filter Short By-->
                            <div class="product-filter-wrap d-flex justify-content-between align-items-center m-b30">
                             <span class="woocommerce-result-count-left">Showing {{ $jobs->total() }} jobs</span>


                                <form class="woocommerce-ordering twm-filter-select" action="{{ route('home.jobs') }}" method="GET" >
@csrf
                                     <select name="jobs_per_page" class="wt-select-bar-2 selectpicker" data-live-search="true" data-bv-field="size">
                                <option value="10" @if($searchQuery == '10') selected @endif>Show 10</option>
                             <option value="20" @if($searchQuery == '20') selected @endif>Show 20</option>
                         <option value="30" @if($searchQuery == '30') selected @endif>Show 30</option>
                       <option value="40" @if($searchQuery == '40') selected @endif>Show 40</option>
                        <option value="50" @if($searchQuery == '50') selected @endif>Show 50</option>
                               <option value="60" @if($searchQuery == '60') selected @endif>Show 60</option>
                                <option value="all" @if($searchQuery == 'all') selected @endif>Show All</option>

                                </select>
                                 <button type="submit" class="btn site-bg-black site-text-white">Show </button>
                                </form>

                            </div>

                            <div class="twm-jobs-list-wrap">
                                <ul>
                                     @foreach($jobs as $job)
                                     <li>
                                         <div class="twm-jobs-list-style1 mb-1">
                                             <!--<div class="twm-media">
                                                 <img src="images/jobs-company/pic1.jpg" alt="#">
                                             </div>-->
                                             <div class="twm-mid-content">
                                                 <a href="" class="twm-job-title">
                                                     <h4>{{ $job->job_position }}, <span class="twm-job-post-duration">{{ $job->location }} </span>, <span class="twm-job-post-duration text-danger"> Job Code:{{ $job->job_code }}</span></h4>
                                                 </a>
                                                   <p>
    <span class="text-success">Open: </span>{{ date('d/m/Y', strtotime($job->posted_date)) }},
    <span class="text-danger">Close: </span>{{ date('d/m/Y', strtotime($job->closing_date)) }}
</p>  <!--<div class="form-group mb-4">
                                            <h4 class="section-head-small mb-4">Location</h4>
                                            <div class="input-group">
                                                <input type="text" class="form-control" placeholder="Search location">
                                                <button class="btn" type="button"><i class="feather-map-pin"></i></button>
                                            </div>
                                        </div>-->
                                             </div>
                                             <div class="twm-right-content">
                                                 <div class="twm-jobs-category green"><span style="background-color:
                @if ($job->status === 'pending')
                    orange
                @elseif ($job->status === 'Open')
                    green
                @elseif ($job->status === 'Closed')
                    red
                {{-- Add more conditions for other status values as needed --}}
                @endif
            " >{{ $job->status }}</span></div> <div class="twm-jobs-amount"> {{ $job->salary }}<span>/ Month</span></div>
                                                 <a href="{{ route('Home.job-detail', $job->id) }}" class="twm-jobs-browse site-text-primary">View and Apply</a>
                                             </div>
                                         </div>
                                     </li>
                                     @endforeach
      </ul>

                            </div>


                        </div>

                    </div>
                </div>
            </div>
            <!-- OUR BLOG END -->



        </div>
        <!-- CONTENT END -->

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const searchButton = document.getElementById('searchButton');
        const searchForm = document.getElementById('searchForm');

        searchButton.addEventListener('click', function () {
            searchForm.submit();
        });
    });



</script>







@endsection

