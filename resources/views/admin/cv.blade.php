<!-- resources/views/admin/cvs/index.blade.php -->

@extends('layouts.admin') {{-- You can use your admin layout --}}

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
                                                <th>ID</th>
                                          <th>Resume</th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                            <!--1-->
                                             @foreach($cvs as $cv)
                                            <tr>
                                                <td>{{ $cv->id }}</td>
                    <td>
                        <iframe src="{{ asset('storage/' . $cv->cv_path) }}" width="150px"></iframe>
                        <a href="{{ asset('storage/' . $cv->cv_path) }}" target="_blank"><span class="fa fa-eye"></span></a>
                    </td>

                                            </tr>
</tbody>  @endforeach
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
