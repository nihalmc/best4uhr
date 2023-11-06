  <!--Header Lower-->
  <div class="header-lower">

    <div class="auto-container">
        <div class="nav-outer clearfix menu-bg">
            <!-- Main Menu -->
            <nav class="main-menu">
                <div class="navbar-header">
                    <!-- Toggle Button -->
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    </button>
                </div>

                <div class="navbar-collapse collapse clearfix">
                    <ul class="navigation clearfix">
                        <li id="homemenu"><a href="{{ route('website.index') }}">Home</a>
                            </li>

                                <li id="aboutmenu"><a href="{{ route('website.about') }}">About</a></li>




                                <li id="projectmenu" class="dropdown">
                                    <a href="#">Projects</a>
                                    <ul>
                                        <li><a href="{{ route('project.upcoming') }}">Upcoming</a></li>
                                        <li><a href="{{ route('project.ongoing') }}">On Progress</a></li>
                                        <li><a href="{{ route('project.completed') }}">Completed</a></li>
                                    </ul>
                                </li>


 <li id="newsmenu"><a href="{{ route('website.news') }}">News & Events</a></li>

    <li id="carrersmenu"><a href="{{ route('website.careers') }}">Careers</a></li>


               <li id="contactmenu"><a href="{{ url('/Contact') }}">Contact Us</a></li>
                </div>
            </nav>
            <!-- Main Menu End-->
            <div class="btn-box">
                <a class="brochure-btn theme-btn" href="{{ url('/Download') }}">  <span class="icon fa fa-download theme_color"></span>&nbsp; Download Brochures</a>
            </div>
        </div>
    </div>
</div>
<!--End Header Lower-->

<!--Sticky Header-->
<div class="sticky-header">
    <div class="auto-container clearfix">
        <!--Logo-->
        <div class="logo pull-left">
            <a href="{{ route('website.index') }}" class="img-responsive"><img src="{{ asset('website/images/logo-small.png') }}" alt="" title=""></a>
        </div>

        <!--Right Col-->
        <div class="right-col pull-right">
            <!-- Main Menu -->
            <nav class="main-menu">
                <div class="navbar-header">
                    <!-- Toggle Button -->
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>

                <div class="navbar-collapse collapse clearfix">
                    <ul class="navigation clearfix">
                        <li id="hommenu"><a href="{{ route('website.index') }}">Home</a>
                        </li>
                          <li  id="aboumenu"><a href="{{ route('website.about') }}">About</a></li>


                        <li id="projemenu" class="dropdown"><a href="#">Projects</a>
                            <ul>
                                 <li><a href="{{ route('project.upcoming', ['categoryId' => 1]) }}">Upcoming</a></li>
                                  <li><a href="{{ route('project.ongoing') }}">On Progress</a></li>
                               <li><a href="{{ route('project.completed') }}">Completed</a></li>
                            </ul>
                        </li>


 <li id="newmenu"><a href="{{ route('website.news') }}">News & Events</a></li>


               <li id="carrermenu"><a href="{{ route('website.careers') }}">Careers</a></li>

                        <li id="contacmenu"><a href="{{ url('/Contact') }}">Contact Us</a></li>
                    </ul>
                </div>
            </nav><!-- Main Menu End-->
        </div>

    </div>
</div>
<!--End Sticky Header-->
<script>
    function getactivemenu(id)

    {

        document.getElementById('homemenu').className='';
        document.getElementById('aboutmenu').className='';
        document.getElementById('projectmenu').className='dropdown';
        document.getElementById('newsmenu').className='';

         document.getElementById('carrersmenu').className='';
        document.getElementById('contactmenu').className='';

        if(id=='projectmenu')
        {
             document.getElementById('projectmenu').className='dropdown current';
        }
        else
        {
            document.getElementById(id).className='current';
        }
    }
        function getactivemenus(id)

        {

            document.getElementById('hommenu').className='';
            document.getElementById('aboumenu').className='';
            document.getElementById('projemenu').className='dropdown';
            document.getElementById('newmenu').className='';

            document.getElementById('carrermenu').className='';
            document.getElementById('contacmenu').className='';
            if(id=='projemenu')
            {
                document.getElementById('projemenu').className='dropdown current';
            }
            else
            {
                document.getElementById(id).className='current';
            }


        }
    </script>
