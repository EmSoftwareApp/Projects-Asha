<?php

  $url = Request::segment(1);

?>

<style type="text/css">

    .sidebar-menu-icon {

        font-size: 14px !important;

    }



    .sidebar-menu-icon--left{

        margin-right: 0.1rem !important;

    }



</style>

<style>

ul, #myUL {

  list-style-type: none;

}



#myUL {

  margin: 0;

  padding: 0;

}



.caret {

  cursor: pointer;

  -webkit-user-select: none; /* Safari 3.1+ */

  -moz-user-select: none; /* Firefox 2+ */

  -ms-user-select: none; /* IE 10+ */

  user-select: none;

}



.caret::before {

  content: "\25B6";

  color: black;

  display: inline-block;

  margin-left: 200px;

  position:absolute; 

}



.caret-down::before {

  -ms-transform: rotate(90deg); /* IE 9 */

  -webkit-transform: rotate(90deg); /* Safari */'

  transform: rotate(90deg);  

}



.nested {

  display: none;

}



.active {

  display: block;

}

.submenu{

    margin-left:-18px;

}

</style>

<div class="mdk-drawer  js-mdk-drawer" id="default-drawer" data-align="start">

                    <div class="mdk-drawer__content">

                        <div class="sidebar sidebar-light sidebar-left bg-white" data-perfect-scrollbar>





                            <div class="sidebar-block p-0 m-0">

                                <div class="d-flex align-items-center sidebar-p-a border-bottom bg-light">

                                    <a href="#" class="flex d-flex align-items-center text-body text-underline-0">

                                        <span class="avatar avatar-sm mr-2">

                                            <span class="avatar-title rounded-circle bg-soft-secondary text-muted">AD</span>

                                        </span>

                                        <span class="flex d-flex flex-column">

                                            <strong class="text-uppercase">{{ Auth::user()->name }}</strong>

                                            

                                        </span>

                                    </a>

                                    

                                </div>

                            </div>

                            <div class="sidebar-block p-0">

                                @if(Auth::user()->type == 2)

                                <div class="sidebar-heading">Centre Admin</div>

                                @elseif(Auth::user()->type == 4)

                                <div class="sidebar-heading">Centre Staff</div>

                                @endif



                                @if(Auth::user()->type == 2)

                                <ul class="sidebar-menu mt-0">



                                    <li class="sidebar-menu-item @if($url == 'insthome') active @endif">

                                        <a class="sidebar-menu-button" href="{{ url('/insthome') }}">

                                            <span class="sidebar-menu-icon sidebar-menu-icon--left">

                                               <i class="fa fa-home"></i> 

                                            </span>

                                            <span class="sidebar-menu-text">Home</span>

                                        </a>

                                    </li>

                                    

                                    <li class="sidebar-menu-item @if(($url == 'master-data') || ($url == 'states') || ($url == 'new-state') || ($url == 'view-state') || ($url == 'district') || ($url == 'new-district') || ($url == 'view-district')) active @endif">

                                        <a class="sidebar-menu-button caret">

                                            <span class="sidebar-menu-icon sidebar-menu-icon--left">

                                               <i class="fa fa-database"></i> 

                                            </span>

                                            <span class="">Master Data</span>

                                        </a>

                                        

                                        <ul class="nested @if(($url == 'master-data') || ($url == 'states') || ($url == 'new-state') || ($url == 'view-state') || ($url == 'district') || ($url == 'new-district') || ($url == 'view-district') || ($url == 'instructors') || ($url == 'new-instructor') || ($url == 'view-instructor') || ($url == 'academic-year') || ($url == 'new-acdemicyear') || ($url == 'view-acdemicyear') || ($url == 'student-batch') || ($url == 'new-batch') || ($url == 'view-batch') ||  ($url == 'student-batch-find') || ($url == 'student-assign-batch') || ($url == 'view-assignstudent-details')|| ($url == 'student-assign-batch-find') || ($url == 'staff') || ($url == 'new-staff') || ($url == 'view-staff') || ($url == 'designation') || ($url == 'new-designation') || ($url == 'view-designation') || ($url == 'previlage')) active @endif">



                                            <li class="@if(($url == 'staff') || ($url == 'new-staff') || ($url == 'view-staff') || ($url == 'previlage')) active @endif submenu">

                                                <a class="sidebar-menu-button" href="{{ url('/staff') }}">

                                                    <span class="sidebar-menu-icon sidebar-menu-icon--left">

                                                       <i class="fa fa-user-tag"></i> 

                                                    </span>

                                                    <span class="sidebar-menu-text">Office Staff</span>

                                                </a>

                                            </li>



                                            <li class="@if(($url == 'states') || ($url == 'new-state') || ($url == 'view-state')) active @endif submenu">

                                                <a class="sidebar-menu-button" href="{{ url('/states') }}">

                                                    <span class="sidebar-menu-icon sidebar-menu-icon--left">

                                                       <i class="fa fa-map-marked-alt"></i> 

                                                    </span>

                                                    <span class="sidebar-menu-text">States</span>

                                                </a>

                                            </li>

                                            <li class="@if(($url == 'district') || ($url == 'new-district') || ($url == 'view-district')) active @endif submenu">

                                                <a class="sidebar-menu-button" href="{{ url('/district') }}">

                                                    <span class="sidebar-menu-icon sidebar-menu-icon--left">

                                                       <i class="fa fa-map-marker-alt"></i> 

                                                    </span>

                                                    <span class="sidebar-menu-text">District</span>

                                                </a>

                                            </li>

                                            <li class="@if(($url == 'instructors') || ($url == 'new-instructor') || ($url == 'view-instructor')) active @endif submenu">

                                                <a class="sidebar-menu-button" href="{{ url('/instructors') }}">

                                                    <span class="sidebar-menu-icon sidebar-menu-icon--left">

                                                       <i class="fa fa-user-tie"></i> 

                                                    </span>

                                                    <span class="sidebar-menu-text">Instructor</span>

                                                </a>

                                            </li>

                                            <li class="@if(($url == 'academic-year') || ($url == 'new-acdemicyear') || ($url == 'view-acdemicyear')) active @endif submenu">

                                                <a class="sidebar-menu-button" href="{{ url('/academic-year') }}">

                                                    <span class="sidebar-menu-icon sidebar-menu-icon--left">

                                                       <i class="fa fa-calendar-alt"></i> 

                                                    </span>

                                                    <span class="sidebar-menu-text">Academic Year</span>

                                                </a>

                                            </li>

                                            <li class="@if(($url == 'student-batch') || ($url == 'new-batch') || ($url == 'view-batch') || ($url == 'student-batch-find') || ($url == 'student-assign-batch') || ($url == 'view-assignstudent-details') || ($url == 'student-assign-batch-find')) active @endif submenu">

                                                <a class="sidebar-menu-button" href="{{ url('/student-batch') }}">

                                                    <span class="sidebar-menu-icon sidebar-menu-icon--left">

                                                       <i class="fa fa-users-cog"></i> 

                                                    </span>

                                                    <span class="sidebar-menu-text">Student Batch</span>

                                                </a>

                                            </li>
                                            <li class="@if(($url == 'notifications') ||  ($url == 'new-notification') || ($url == 'view-notification')) active @endif submenu">

<a class="sidebar-menu-button" href="{{ url('/notifications') }}">

    <span class="sidebar-menu-icon sidebar-menu-icon--left">

       <i class="fa fa-email"></i> 

    </span>

    <span class="sidebar-menu-text">Notifications</span>

</a>

</li>

                                            <li class="@if(($url == 'designation') || ($url == 'new-designation') || ($url == 'view-designation')) active @endif submenu">

                                                <a class="sidebar-menu-button" href="{{ url('/designation') }}">

                                                    <span class="sidebar-menu-icon sidebar-menu-icon--left">

                                                       <i class="fa fa-network-wired"></i> 

                                                    </span>

                                                    <span class="sidebar-menu-text">Staff Designation</span>

                                                </a>

                                            </li>
                                            <li class="@if(($url == 'optionalsubject') || ($url == 'new-optionalsubject') || ($url == 'view-optionalsubject')) active @endif submenu">

                                                <a class="sidebar-menu-button" href="{{ url('/optionalsubject') }}">

                                                    <span class="sidebar-menu-icon sidebar-menu-icon--left">

                                                       <i class="fa fa-file-o"></i> 

                                                    </span>

                                                    <span class="sidebar-menu-text">Optional Subject</span>

                                                </a>

                                            </li>

                                            <li class="submenu">

                                                <a class="sidebar-menu-button" href="{{ url('/adminsyssettings')}}">

                                                    <span class="sidebar-menu-icon sidebar-menu-icon--left">

                                                       <i class="fa fa-tv"></i> 

                                                    </span>

                                                    <span class="sidebar-menu-text">System Settings</span>

                                                </a>

                                            </li>

                                        </ul>

                                      </li>

                                    <li class="sidebar-menu-item @if(($url == 'course-management') || ($url == 'new-course') || ($url == 'view-course')) active @endif">

                                        <a class="sidebar-menu-button" href="{{ url('/course-management') }}">

                                            <span class="sidebar-menu-icon sidebar-menu-icon--left">

                                               <i class="fa fa-graduation-cap"></i> 

                                            </span>

                                            <span class="sidebar-menu-text">Course</span>

                                        </a>

                                    </li>

                                    <!--<li class="sidebar-menu-item @if(($url == 'qualification-management') || ($url == 'new-qualification') || ($url == 'view-qualification')) active @endif">

                                        <a class="sidebar-menu-button" href="{{ url('/qualification-management') }}">

                                            <span class="sidebar-menu-icon sidebar-menu-icon--left">

                                               <i class="fa fa-book-open"></i> 

                                            </span>

                                            <span class="sidebar-menu-text">Qualification Management</span>

                                        </a>

                                    </li>-->

                                      

                                    <li class="sidebar-menu-item @if(($url == 'program-management') || ($url == 'new-program') || ($url == 'view-program') || ($url == 'program-batch-assign') || ($url == 'program-batch-assign-find')) active @endif">

                                        <a class="sidebar-menu-button" href="{{ url('/program-management') }}">

                                            <span class="sidebar-menu-icon sidebar-menu-icon--left">

                                               <i class="fa fa-handshake"></i> 

                                            </span>

                                            <span class="sidebar-menu-text">Program </span>

                                        </a>

                                    </li>

<li class="sidebar-menu-item @if(($url == 'subject') || ($url == 'writing-program') ) active @endif">

                                        <a class="sidebar-menu-button caret">

                                            <span class="sidebar-menu-icon sidebar-menu-icon--left">

                                               <i class="fa fa-edit"></i> 

                                            </span>

                                            <span class="">Writing Program</span>

                                        </a>

                                        

                                        <ul class="nested @if(($url == 'subject') || ($url == 'writing-program')) active @endif">



                                            <li class="@if(($url == 'subject') || ($url == 'new-subject') || ($url == 'view-subject')) active @endif submenu">

                                                <a class="sidebar-menu-button" href="{{ url('/subject') }}">

                                                    <span class="sidebar-menu-icon sidebar-menu-icon--left">

                                                       <i class="fa fa-user-tag"></i> 

                                                    </span>

                                                    <span class="sidebar-menu-text">Subject</span>

                                                </a>

                                            </li>
                                            <li class="submenu @if(($url == 'faculty-management') || ($url == 'new-faculty') || ($url == 'view-faculty')) active @endif">

                                        <a class="sidebar-menu-button" href="{{ url('/faculty-management') }}">

                                            <span class="sidebar-menu-icon sidebar-menu-icon--left">

                                               <i class="fa fa-graduation-cap"></i> 

                                            </span>

                                            <span class="sidebar-menu-text">Faculty</span>

                                        </a>

                                    </li>

<li class="submenu @if(($url == 'coordinator-management') || ($url == 'new-coordinator') || ($url == 'view-coordinator')) active @endif">

                                        <a class="sidebar-menu-button" href="{{ url('/coordinator-management') }}">

                                            <span class="sidebar-menu-icon sidebar-menu-icon--left">

                                               <i class="fa fa-graduation-cap"></i> 

                                            </span>

                                            <span class="sidebar-menu-text">Coordinator</span>

                                        </a>

                                    </li>

                                            <li class="@if(($url == 'states') || ($url == 'new-state') || ($url == 'view-state')) active @endif submenu">

                                                <a class="sidebar-menu-button" href="{{ url('/writing-program') }}">

                                                    <span class="sidebar-menu-icon sidebar-menu-icon--left">

                                                       <i class="fa fa-map-marked-alt"></i> 

                                                    </span>

                                                    <span class="sidebar-menu-text">Writing Program</span>

                                                </a>

                                            </li>

                                          <li class="submenu @if(($url == 'faculty-tasklist')) active @endif">

                                        <a class="sidebar-menu-button" href="{{ url('/faculty-tasklist') }}">

                                            <span class="sidebar-menu-icon sidebar-menu-icon--left">

                                               <i class="fa fa-file"></i> 

                                            </span>

                                            <span class="sidebar-menu-text">Faculty Task List</span>

                                        </a>

                                    </li>

                                        </ul>

                                      </li>

                                    <li class="sidebar-menu-item @if(($url == 'topic-management') || ($url == 'new-topic') || ($url == 'view-topic') || ($url == 'topic-progrm-assign')) active @endif">

                                        <a class="sidebar-menu-button" href="{{ url('/topic-management') }}">

                                            <span class="sidebar-menu-icon sidebar-menu-icon--left">

                                               <i class="fa fa-pen-nib"></i> 

                                            </span>

                                            <span class="sidebar-menu-text">Topic </span>

                                        </a>

                                    </li>



                                    <li class="sidebar-menu-item @if($url == 'topic-order') active @endif">

                                        <a class="sidebar-menu-button" href="{{ url('/topic-order') }}">

                                            <span class="sidebar-menu-icon sidebar-menu-icon--left">

                                               <i class="fa fa-sort-numeric-down"></i> 

                                            </span>

                                            <span class="sidebar-menu-text">Topic Order</span>

                                        </a>

                                    </li>



                                    <li class="sidebar-menu-item @if(($url == 'chapter-management') || ($url == 'new-chapter') || ($url == 'view-chapter')) active @endif">

                                        <a class="sidebar-menu-button" href="{{ url('/chapter-management') }}">

                                            <span class="sidebar-menu-icon sidebar-menu-icon--left">

                                               <i class="fa fa-chalkboard-teacher"></i> 

                                            </span>

                                            <span class="sidebar-menu-text">Chapter </span>

                                        </a>

                                    </li>
                                     

                                    <li class="sidebar-menu-item @if(($url == 'video-management') || ($url == 'new-video') || ($url == 'view-video') || ($url == 'video-program') || ($url == 'video-management-find')) active @endif">

                                        <a class="sidebar-menu-button" href="{{ url('/video-management') }}">

                                            <span class="sidebar-menu-icon sidebar-menu-icon--left">

                                               <i class="fa fa-video"></i> 

                                            </span>

                                            <span class="sidebar-menu-text">Video </span>

                                        </a>

                                    </li>

                                    <li class="sidebar-menu-item @if(($url == 'student-details') || ($url == 'new-student') || ($url == 'student-details-find') || ($url == 'pgm-purchased')) active @endif">

                                        <a class="sidebar-menu-button" href="{{ url('/student-details') }}">

                                            <span class="sidebar-menu-icon sidebar-menu-icon--left">

                                               <i class="fa fa-user-graduate"></i> 

                                            </span>

                                            <span class="sidebar-menu-text">Student Management</span>

                                        </a>

                                    </li>

                                    <!-- Not set to users -->



                                    <li class="sidebar-menu-item @if(($url == 'free-video') || ($url == 'new-free-video') || ($url == 'view-free-video')) active @endif">

                                        <a class="sidebar-menu-button caret">

                                            <span class="sidebar-menu-icon sidebar-menu-icon--left">

                                               <i class="fa fa-tachometer-alt"></i> 

                                            </span>

                                            <span class="">Free Meterials</span>

                                        </a>

                                        

                                        <ul class="@if(($url == 'free-video') || ($url == 'new-free-video') || ($url == 'view-free-video')) active @endif nested">

                                            

                                            <li class="@if(($url == 'free-video') || ($url == 'new-free-video') || ($url == 'view-free-video')) active @endif submenu">

                                                <a class="sidebar-menu-button" href="{{ url('/free-video') }}">

                                                    <span class="sidebar-menu-icon sidebar-menu-icon--left">

                                                       <i class="fa fa-file-video"></i> 

                                                    </span>

                                                    <span class="sidebar-menu-text">Video</span>

                                                </a>

                                            </li>

                                            <li class="submenu">

                                                <a class="sidebar-menu-button" href="#">

                                                    <span class="sidebar-menu-icon sidebar-menu-icon--left">

                                                       <i class="fa fa-book"></i> 

                                                    </span>

                                                    <span class="sidebar-menu-text">Test</span>

                                                </a>

                                            </li> 

                                            <li class="submenu">

                                                <a class="sidebar-menu-button" href="#">

                                                    <span class="sidebar-menu-icon sidebar-menu-icon--left">

                                                       <i class="fa fa-file-powerpoint"></i> 

                                                    </span>

                                                    <span class="sidebar-menu-text">PPT</span>

                                                </a>

                                            </li>                                          

                                            <li class="submenu">

                                                <a class="sidebar-menu-button" href="#">

                                                    <span class="sidebar-menu-icon sidebar-menu-icon--left">

                                                       <i class="fa fa-book-open"></i> 

                                                    </span>

                                                    <span class="sidebar-menu-text">Notes</span>

                                                </a>

                                            </li>

                                        </ul>

                                      </li>



                                    <!-- Not set to users -->



                                    <li class="sidebar-menu-item @if(($url == 'test-difficulty')  || ($url == 'new-test-difficulty') || ($url == 'new-test-difficulty') || ($url == 'view-test-difficulty')) active @endif">

                                        <a class="sidebar-menu-button caret">

                                            <span class="sidebar-menu-icon sidebar-menu-icon--left">

                                               <i class="fa fa-pen-fancy"></i> 

                                            </span>

                                            <span class="">Test Settings</span>

                                        </a>

                                        

                                        <ul class="@if(($url == 'test-difficulty') || ($url == 'new-test-difficulty') || ($url == 'new-test-difficulty') || ($url == 'view-test-difficulty')) active @endif nested">

                                            

                                            <li class="@if(($url == 'test-difficulty') || ($url == 'new-test-difficulty') || ($url == 'new-test-difficulty') || ($url == 'view-test-difficulty')) active @endif submenu">

                                                <a class="sidebar-menu-button" href="{{ url('/test-difficulty') }}">

                                                    <span class="sidebar-menu-icon sidebar-menu-icon--left">

                                                       <i class="fa fa-hard-hat"></i> 

                                                    </span>

                                                    <span class="sidebar-menu-text">Test Difficulty Level</span>

                                                </a>

                                            </li>

                                            <li class="@if($url == 'test-names') active @endif submenu">

                                                <a class="sidebar-menu-button" href="{{ url('/test-names') }}">

                                                    <span class="sidebar-menu-icon sidebar-menu-icon--left">

                                                       <i class="fa fa-pen-fancy"></i> 

                                                    </span>

                                                    <span class="sidebar-menu-text">Test Names</span>

                                                </a>

                                            </li>

                                            

                                            

                                        </ul>

                                      </li>



                                    <li class="sidebar-menu-item @if(($url == 'test-questions') || ($url == 'new-questions') || ($url == 'view-questions')) active @endif">

                                        <a class="sidebar-menu-button" href="{{ url('/test-questions') }}">

                                            <span class="sidebar-menu-icon sidebar-menu-icon--left">

                                               <i class="fa fa-question"></i> 

                                            </span>

                                            <span class="sidebar-menu-text">Test Questions</span>

                                        </a>

                                    </li>

                                    

                                    

                                    <li class="sidebar-menu-item @if(($url == 'package-expiry') || ($url == 'package-expiry-find') || ($url == 'package-expired') || ($url == 'package-expired-find')) active @endif">

                                        <a class="sidebar-menu-button caret">

                                            <span class="sidebar-menu-icon sidebar-menu-icon--left">

                                               <i class="fa fa-gift"></i> 

                                            </span>

                                            <span class="">Student Package</span>

                                        </a>

                                        

                                        <ul class="@if(($url == 'package-expiry') || ($url == 'package-expiry-find') || ($url == 'package-expired') || ($url == 'package-expired-find')) active @endif nested">

                                            <li class="@if(($url == 'package-expiry') || ($url == 'package-expiry-find')) active @endif submenu">

                                                <a class="sidebar-menu-button" href="{{ url('/package-expiry') }}">

                                                    <span class="sidebar-menu-icon sidebar-menu-icon--left">

                                                       <i class="fa fa-business-time"></i> 

                                                    </span>

                                                    <span class="sidebar-menu-text">Package Expiry</span>

                                                </a>

                                            </li>

                                            <li class="@if(($url == 'package-expired') || ($url == 'package-expired-find')) active @endif submenu">

                                                <a class="sidebar-menu-button" href="{{ url('/package-expired') }}">

                                                    <span class="sidebar-menu-icon sidebar-menu-icon--left">

                                                       <i class="fa fa-clock"></i> 

                                                    </span>

                                                    <span class="sidebar-menu-text">Expired List</span>

                                                </a>

                                            </li>

                                            

                                        </ul>

                                      </li>



                                      



                                    <li class="sidebar-menu-item @if(($url == 'app-course-settings') || ($url == 'view-app-course')) active @endif">

                                        <a class="sidebar-menu-button caret">

                                            <span class="sidebar-menu-icon sidebar-menu-icon--left">

                                               <i class="fa fa-mobile-alt"></i> 

                                            </span>

                                            <span class="">App Settings</span>

                                        </a>

                                        

                                        <ul class="@if(($url == 'app-course-settings') || ($url == 'view-app-course')) active @endif nested">

                                            

                                            <li class="@if(($url == 'app-course-settings') || ($url == 'view-app-course')) active @endif submenu">

                                                <a class="sidebar-menu-button" href="{{ url('/app-course-settings') }}">

                                                    <span class="sidebar-menu-icon sidebar-menu-icon--left">

                                                       <i class="fa fa-circle-notch"></i> 

                                                    </span>

                                                    <span class="sidebar-menu-text">Course Image</span>

                                                </a>

                                            </li>

                                            

                                            

                                            

                                        </ul>

                                      </li>



                                    

                                    

                                </ul>

                                @elseif(Auth::user()->type == 4)

                                <ul class="sidebar-menu mt-0">



                                    <li class="sidebar-menu-item @if($url == 'insthome') active @endif">

                                        <a class="sidebar-menu-button" href="{{ url('/insthome') }}">

                                            <span class="sidebar-menu-icon sidebar-menu-icon--left">

                                               <i class="fa fa-home"></i> 

                                            </span>

                                            <span class="sidebar-menu-text">Home</span>

                                        </a>

                                    </li>

                                    @if((App\tblPrevilage::previlagefind('office_staff', Auth::user()->id, Auth::user()->instid) > 0) || (App\tblPrevilage::previlagefind('state', Auth::user()->id, Auth::user()->instid) > 0) || (App\tblPrevilage::previlagefind('district', Auth::user()->id, Auth::user()->instid) > 0) || (App\tblPrevilage::previlagefind('instructor', Auth::user()->id, Auth::user()->instid) > 0) || (App\tblPrevilage::previlagefind('accademic_year', Auth::user()->id, Auth::user()->instid) > 0) || (App\tblPrevilage::previlagefind('student_batch', Auth::user()->id, Auth::user()->instid) > 0) || (App\tblPrevilage::previlagefind('staff_designation', Auth::user()->id, Auth::user()->instid) > 0) || (App\tblPrevilage::previlagefind('system_settings', Auth::user()->id, Auth::user()->instid) > 0))

                                    <li class="sidebar-menu-item @if(($url == 'master-data') || ($url == 'states') || ($url == 'new-state') || ($url == 'view-state') || ($url == 'district') || ($url == 'new-district') || ($url == 'view-district')) active @endif">

                                        <a class="sidebar-menu-button caret">

                                            <span class="sidebar-menu-icon sidebar-menu-icon--left">

                                               <i class="fa fa-database"></i> 

                                            </span>

                                            <span class="">Master Data</span>

                                        </a>

                                        

                                        <ul class="nested @if(($url == 'master-data') || ($url == 'states') || ($url == 'new-state') || ($url == 'view-state') || ($url == 'district') || ($url == 'new-district') || ($url == 'view-district') || ($url == 'instructors') || ($url == 'new-instructor') || ($url == 'view-instructor') || ($url == 'academic-year') || ($url == 'new-acdemicyear') || ($url == 'view-acdemicyear') || ($url == 'student-batch') || ($url == 'new-batch') || ($url == 'view-batch') ||  ($url == 'student-batch-find') || ($url == 'student-assign-batch') || ($url == 'view-assignstudent-details')|| ($url == 'student-assign-batch-find') || ($url == 'staff') || ($url == 'new-staff') || ($url == 'view-staff') || ($url == 'designation') || ($url == 'new-designation') || ($url == 'view-designation') || ($url == 'previlage')) active @endif">

                                          @if(App\tblPrevilage::previlagefind('office_staff', Auth::user()->id, Auth::user()->instid) > 0)

                                            <li class="@if(($url == 'staff') || ($url == 'new-staff') || ($url == 'view-staff') || ($url == 'previlage')) active @endif submenu">

                                                <a class="sidebar-menu-button" href="{{ url('/staff') }}">

                                                    <span class="sidebar-menu-icon sidebar-menu-icon--left">

                                                       <i class="fa fa-user-tag"></i> 

                                                    </span>

                                                    <span class="sidebar-menu-text">Office Staff</span>

                                                </a>

                                            </li>

                                            @endif

                                            @if(App\tblPrevilage::previlagefind('state', Auth::user()->id, Auth::user()->instid) > 0)

                                            <li class="@if(($url == 'states') || ($url == 'new-state') || ($url == 'view-state')) active @endif submenu">

                                                <a class="sidebar-menu-button" href="{{ url('/states') }}">

                                                    <span class="sidebar-menu-icon sidebar-menu-icon--left">

                                                       <i class="fa fa-map-marked-alt"></i> 

                                                    </span>

                                                    <span class="sidebar-menu-text">States</span>

                                                </a>

                                            </li>

                                            @endif

                                            @if(App\tblPrevilage::previlagefind('district', Auth::user()->id, Auth::user()->instid) > 0)

                                            <li class="@if(($url == 'district') || ($url == 'new-district') || ($url == 'view-district')) active @endif submenu">

                                                <a class="sidebar-menu-button" href="{{ url('/district') }}">

                                                    <span class="sidebar-menu-icon sidebar-menu-icon--left">

                                                       <i class="fa fa-map-marker-alt"></i> 

                                                    </span>

                                                    <span class="sidebar-menu-text">District</span>

                                                </a>

                                            </li>

                                            @endif

                                            @if(App\tblPrevilage::previlagefind('instructor', Auth::user()->id, Auth::user()->instid) > 0)

                                            <li class="@if(($url == 'instructors') || ($url == 'new-instructor') || ($url == 'view-instructor')) active @endif submenu">

                                                <a class="sidebar-menu-button" href="{{ url('/instructors') }}">

                                                    <span class="sidebar-menu-icon sidebar-menu-icon--left">

                                                       <i class="fa fa-user-tie"></i> 

                                                    </span>

                                                    <span class="sidebar-menu-text">Instructor</span>

                                                </a>

                                            </li>

                                            @endif

                                            @if(App\tblPrevilage::previlagefind('accademic_year', Auth::user()->id, Auth::user()->instid) > 0)

                                            <li class="@if(($url == 'academic-year') || ($url == 'new-acdemicyear') || ($url == 'view-acdemicyear')) active @endif submenu">

                                                <a class="sidebar-menu-button" href="{{ url('/academic-year') }}">

                                                    <span class="sidebar-menu-icon sidebar-menu-icon--left">

                                                       <i class="fa fa-calendar-alt"></i> 

                                                    </span>

                                                    <span class="sidebar-menu-text">Academic Year</span>

                                                </a>

                                            </li>

                                            @endif

                                            @if(App\tblPrevilage::previlagefind('student_batch', Auth::user()->id, Auth::user()->instid) > 0)

                                            <li class="@if(($url == 'student-batch') || ($url == 'new-batch') || ($url == 'view-batch') || ($url == 'student-batch-find') || ($url == 'student-assign-batch') || ($url == 'view-assignstudent-details') || ($url == 'student-assign-batch-find')) active @endif submenu">

                                                <a class="sidebar-menu-button" href="{{ url('/student-batch') }}">

                                                    <span class="sidebar-menu-icon sidebar-menu-icon--left">

                                                       <i class="fa fa-users-cog"></i> 

                                                    </span>

                                                    <span class="sidebar-menu-text">Student Batch</span>

                                                </a>

                                            </li>

                                            @endif

                                            @if(App\tblPrevilage::previlagefind('staff_designation', Auth::user()->id, Auth::user()->instid) > 0)

                                            <li class="@if(($url == 'designation') || ($url == 'new-designation') || ($url == 'view-designation')) active @endif submenu">

                                                <a class="sidebar-menu-button" href="{{ url('/designation') }}">

                                                    <span class="sidebar-menu-icon sidebar-menu-icon--left">

                                                       <i class="fa fa-network-wired"></i> 

                                                    </span>

                                                    <span class="sidebar-menu-text">Staff Designation</span>

                                                </a>

                                            </li>

                                            @endif

                                            @if(App\tblPrevilage::previlagefind('system_settings', Auth::user()->id, Auth::user()->instid) > 0)

                                            <li class="submenu">

                                                <a class="sidebar-menu-button" href="">

                                                    <span class="sidebar-menu-icon sidebar-menu-icon--left">

                                                       <i class="fa fa-tv"></i> 

                                                    </span>

                                                    <span class="sidebar-menu-text">System Settings</span>

                                                </a>

                                            </li>

                                            @endif

                                        </ul>

                                      </li>

                                      @endif

                                    @if(App\tblPrevilage::previlagefind('course', Auth::user()->id, Auth::user()->instid) > 0)

                                    <li class="sidebar-menu-item @if(($url == 'course-management') || ($url == 'new-course') || ($url == 'view-course')) active @endif">

                                        <a class="sidebar-menu-button" href="{{ url('/course-management') }}">

                                            <span class="sidebar-menu-icon sidebar-menu-icon--left">

                                               <i class="fa fa-graduation-cap"></i> 

                                            </span>

                                            <span class="sidebar-menu-text">Course</span>

                                        </a>

                                    </li>

                                    @endif

                                    <!--<li class="sidebar-menu-item @if(($url == 'qualification-management') || ($url == 'new-qualification') || ($url == 'view-qualification')) active @endif">

                                        <a class="sidebar-menu-button" href="{{ url('/qualification-management') }}">

                                            <span class="sidebar-menu-icon sidebar-menu-icon--left">

                                               <i class="fa fa-book-open"></i> 

                                            </span>

                                            <span class="sidebar-menu-text">Qualification Management</span>

                                        </a>

                                    </li>-->

                                    @if(App\tblPrevilage::previlagefind('program', Auth::user()->id, Auth::user()->instid) > 0)  

                                    <li class="sidebar-menu-item @if(($url == 'program-management') || ($url == 'new-program') || ($url == 'view-program') || ($url == 'program-batch-assign') || ($url == 'program-batch-assign-find')) active @endif">

                                        <a class="sidebar-menu-button" href="{{ url('/program-management') }}">

                                            <span class="sidebar-menu-icon sidebar-menu-icon--left">

                                               <i class="fa fa-handshake"></i> 

                                            </span>

                                            <span class="sidebar-menu-text">Program </span>

                                        </a>

                                    </li>

                                    @endif

                                    @if(App\tblPrevilage::previlagefind('topic', Auth::user()->id, Auth::user()->instid) > 0)

                                    <li class="sidebar-menu-item @if(($url == 'topic-management') || ($url == 'new-topic') || ($url == 'view-topic')) active @endif">

                                        <a class="sidebar-menu-button" href="{{ url('/topic-management') }}">

                                            <span class="sidebar-menu-icon sidebar-menu-icon--left">

                                               <i class="fa fa-pen-nib"></i> 

                                            </span>

                                            <span class="sidebar-menu-text">Topic </span>

                                        </a>

                                    </li>

                                    @endif

                                    @if(App\tblPrevilage::previlagefind('topic_order', Auth::user()->id, Auth::user()->instid) > 0)

                                    <li class="sidebar-menu-item @if($url == 'topic-order') active @endif">

                                        <a class="sidebar-menu-button" href="{{ url('/topic-order') }}">

                                            <span class="sidebar-menu-icon sidebar-menu-icon--left">

                                               <i class="fa fa-sort-numeric-down"></i> 

                                            </span>

                                            <span class="sidebar-menu-text">Topic Order</span>

                                        </a>

                                    </li>

                                    @endif

                                    @if(App\tblPrevilage::previlagefind('chapter', Auth::user()->id, Auth::user()->instid) > 0)

                                    <li class="sidebar-menu-item @if(($url == 'chapter-management') || ($url == 'new-chapter') || ($url == 'view-chapter')) active @endif">

                                        <a class="sidebar-menu-button" href="{{ url('/chapter-management') }}">

                                            <span class="sidebar-menu-icon sidebar-menu-icon--left">

                                               <i class="fa fa-chalkboard-teacher"></i> 

                                            </span>

                                            <span class="sidebar-menu-text">Chapter </span>

                                        </a>

                                    </li>

                                    @endif

                                    @if(App\tblPrevilage::previlagefind('video', Auth::user()->id, Auth::user()->instid) > 0)

                                    <li class="sidebar-menu-item @if(($url == 'video-management') || ($url == 'new-video') || ($url == 'view-video') || ($url == 'video-program') || ($url == 'video-management-find')) active @endif">

                                        <a class="sidebar-menu-button" href="{{ url('/video-management') }}">

                                            <span class="sidebar-menu-icon sidebar-menu-icon--left">

                                               <i class="fa fa-video"></i> 

                                            </span>

                                            <span class="sidebar-menu-text">Video </span>

                                        </a>

                                    </li>

                                    @endif

                                    @if(App\tblPrevilage::previlagefind('student_management', Auth::user()->id, Auth::user()->instid) > 0)

                                    <li class="sidebar-menu-item @if(($url == 'student-details') || ($url == 'new-student') || ($url == 'student-details-find')) active @endif">

                                        <a class="sidebar-menu-button" href="{{ url('/student-details') }}">

                                            <span class="sidebar-menu-icon sidebar-menu-icon--left">

                                               <i class="fa fa-user-graduate"></i> 

                                            </span>

                                            <span class="sidebar-menu-text">Student Management</span>

                                        </a>

                                    </li>

                                    @endif

                                    @if((App\tblPrevilage::previlagefind('package_expiry', Auth::user()->id, Auth::user()->instid) > 0) || (App\tblPrevilage::previlagefind('expired_list', Auth::user()->id, Auth::user()->instid) > 0))

                                    

                                    <li class="sidebar-menu-item @if(($url == 'package-expiry') || ($url == 'package-expiry-find') || ($url == 'package-expired') || ($url == 'package-expired-find')) active @endif">

                                        <a class="sidebar-menu-button caret">

                                            <span class="sidebar-menu-icon sidebar-menu-icon--left">

                                               <i class="fa fa-gift"></i> 

                                            </span>

                                            <span class="">Student Package</span>

                                        </a>

                                        

                                        <ul class="@if(($url == 'package-expiry') || ($url == 'package-expiry-find') || ($url == 'package-expired') || ($url == 'package-expired-find')) active @endif nested">

                                            @if(App\tblPrevilage::previlagefind('package_expiry', Auth::user()->id, Auth::user()->instid) > 0)

                                            <li class="@if(($url == 'package-expiry') || ($url == 'package-expiry-find')) active @endif submenu">

                                                <a class="sidebar-menu-button" href="{{ url('/package-expiry') }}">

                                                    <span class="sidebar-menu-icon sidebar-menu-icon--left">

                                                       <i class="fa fa-business-time"></i> 

                                                    </span>

                                                    <span class="sidebar-menu-text">Package Expiry</span>

                                                </a>

                                            </li>

                                            @endif

                                            @if(App\tblPrevilage::previlagefind('expired_list', Auth::user()->id, Auth::user()->instid) > 0)

                                            <li class="@if(($url == 'package-expired') || ($url == 'package-expired-find')) active @endif submenu">

                                                <a class="sidebar-menu-button" href="{{ url('/package-expired') }}">

                                                    <span class="sidebar-menu-icon sidebar-menu-icon--left">

                                                       <i class="fa fa-clock"></i> 

                                                    </span>

                                                    <span class="sidebar-menu-text">Expired List</span>

                                                </a>

                                            </li>

                                            @endif

                                        </ul>

                                      </li>

                                      @endif

                                      @if((App\tblPrevilage::previlagefind('package_expiry', Auth::user()->id, Auth::user()->instid) > 0) || (App\tblPrevilage::previlagefind('package_expiry', Auth::user()->id, Auth::user()->instid) > 0))

                                      <li class="sidebar-menu-item @if(($url == 'test-difficulty')  || ($url == 'new-test-difficulty') || ($url == 'new-test-difficulty') || ($url == 'view-test-difficulty')) active @endif">

                                        <a class="sidebar-menu-button caret">

                                            <span class="sidebar-menu-icon sidebar-menu-icon--left">

                                               <i class="fa fa-pen-fancy"></i> 

                                            </span>

                                            <span class="">Test Settings</span>

                                        </a>

                                        

                                        <ul class="@if(($url == 'test-difficulty') || ($url == 'new-test-difficulty') || ($url == 'new-test-difficulty') || ($url == 'view-test-difficulty')) active @endif nested">

                                            @if(App\tblPrevilage::previlagefind('package_expiry', Auth::user()->id, Auth::user()->instid) > 0)

                                            <li class="@if(($url == 'test-difficulty') || ($url == 'new-test-difficulty') || ($url == 'new-test-difficulty') || ($url == 'view-test-difficulty')) active @endif submenu">

                                                <a class="sidebar-menu-button" href="{{ url('/test-difficulty') }}">

                                                    <span class="sidebar-menu-icon sidebar-menu-icon--left">

                                                       <i class="fa fa-hard-hat"></i> 

                                                    </span>

                                                    <span class="sidebar-menu-text">Test Difficulty Level</span>

                                                </a>

                                            </li>

                                            @endif

                                            @if(App\tblPrevilage::previlagefind('package_expiry', Auth::user()->id, Auth::user()->instid) > 0)

                                            <li class="@if($url == 'test-names') active @endif submenu">

                                                <a class="sidebar-menu-button" href="{{ url('/test-names') }}">

                                                    <span class="sidebar-menu-icon sidebar-menu-icon--left">

                                                       <i class="fa fa-pen-fancy"></i> 

                                                    </span>

                                                    <span class="sidebar-menu-text">Test Names</span>

                                                </a>

                                            </li>

                                            @endif

                                            

                                        </ul>

                                      </li>

                                      @endif

                                      @if(App\tblPrevilage::previlagefind('package_expiry', Auth::user()->id, Auth::user()->instid) > 0)

                                    <li class="sidebar-menu-item @if(($url == 'test-questions') || ($url == 'new-questions') || ($url == 'view-questions')) active @endif">

                                        <a class="sidebar-menu-button" href="{{ url('/test-questions') }}">

                                            <span class="sidebar-menu-icon sidebar-menu-icon--left">

                                               <i class="fa fa-question"></i> 

                                            </span>

                                            <span class="sidebar-menu-text">Test Questions</span>

                                        </a>

                                    </li>

                                    @endif

                                      @if(App\tblPrevilage::previlagefind('course_image', Auth::user()->id, Auth::user()->instid) > 0)

                                      <li class="sidebar-menu-item @if(($url == 'app-course-settings') || ($url == 'view-app-course')) active @endif">

                                        <a class="sidebar-menu-button caret">

                                            <span class="sidebar-menu-icon sidebar-menu-icon--left">

                                               <i class="fa fa-mobile-alt"></i> 

                                            </span>

                                            <span class="">App Settings</span>

                                        </a>

                                        

                                        <ul class="@if(($url == 'app-course-settings') || ($url == 'view-app-course')) active @endif nested">

                                            @if(App\tblPrevilage::previlagefind('course_image', Auth::user()->id, Auth::user()->instid) > 0)

                                            <li class="@if(($url == 'app-course-settings') || ($url == 'view-app-course')) active @endif submenu">

                                                <a class="sidebar-menu-button" href="{{ url('/app-course-settings') }}">

                                                    <span class="sidebar-menu-icon sidebar-menu-icon--left">

                                                       <i class="fa fa-circle-notch"></i> 

                                                    </span>

                                                    <span class="sidebar-menu-text">Course Image</span>

                                                </a>

                                            </li>

                                            @endif

                                           

                                        </ul>

                                      </li>

                                      @endif

                                </ul>

                                @endif

                                <!--

  <div class="sidebar-heading">Administrator</div>



  

  <ul class="sidebar-menu mt-0">



    <li class="sidebar-menu-item">

      <a class="sidebar-menu-button" href="series.html">

        <span class="sidebar-menu-icon sidebar-menu-icon--left">

          <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink"  viewBox="0 0 40 40" width="22" height="22"><g transform="matrix(1.6666666666666667,0,0,1.6666666666666667,0,0)"><path d="M12,0c-0.552,0-1,0.448-1,1v0.31c-0.001,0.138-0.112,0.249-0.25,0.249H2.026c-0.828,0-1.5,0.672-1.5,1.5c0,0,0,0,0,0 v13.959c0,0.828,0.672,1.5,1.5,1.5h8.727c0.138,0,0.249,0.111,0.25,0.249v1.1c-0.001,0.08-0.04,0.154-0.105,0.2L7.93,22.191 c-0.426,0.351-0.487,0.982-0.136,1.408c0.317,0.385,0.869,0.477,1.295,0.216l2.766-1.976c0.086-0.063,0.204-0.063,0.29,0 l2.766,1.976c0.471,0.289,1.087,0.141,1.375-0.329c0.261-0.425,0.168-0.977-0.216-1.295l-2.97-2.12 c-0.065-0.046-0.104-0.12-0.105-0.2v-1.1c0.001-0.138,0.112-0.249,0.25-0.249h8.727c0.828,0,1.5-0.672,1.5-1.5V3.055 c0-0.828-0.672-1.5-1.5-1.5h-8.725C13.112,1.553,13.003,1.445,13,1.31V1C13,0.448,12.552,0,12,0z M14.306,8.7l1.969,1.968 c0.096,0.097,0.252,0.098,0.349,0.003c0.001-0.001,0.002-0.002,0.003-0.003l2.9-2.9c0.361-0.418,0.993-0.463,1.411-0.102 s0.463,0.993,0.102,1.411c-0.032,0.037-0.066,0.071-0.102,0.102l-3.072,3.072c-0.78,0.775-2.04,0.775-2.82,0l-1.969-1.97 c-0.097-0.097-0.255-0.097-0.352,0L10.105,12.9c-0.373,0.376-0.881,0.586-1.411,0.585l0,0c-0.53,0.002-1.038-0.209-1.411-0.585 l-1-1c-0.098-0.097-0.255-0.097-0.353,0l-0.864,0.863c-0.419,0.359-1.051,0.31-1.41-0.109c-0.321-0.374-0.321-0.927,0-1.301 l1.04-1.04c0.79-0.753,2.031-0.753,2.821,0l1,1c0.098,0.097,0.255,0.097,0.353,0L11.486,8.7C12.265,7.921,13.527,7.921,14.306,8.7 C14.306,8.7,14.306,8.7,14.306,8.7z" stroke="none" fill="currentColor" stroke-width="0" stroke-linecap="round" stroke-linejoin="round"></path></g></svg>

        </span>

        <span class="sidebar-menu-text">Dashboard</span>

      </a>

    </li>



    <li class="sidebar-menu-item">

      <a class="sidebar-menu-button" href="courses.html">

        <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">queue_play_next</i>

        <span class="sidebar-menu-text">Review Courses</span>

      </a>

    </li>





    <li class="sidebar-menu-item">

      <a class="sidebar-menu-button" href="course.html">

        <span class="sidebar-menu-icon sidebar-menu-icon--left">

          <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink"  viewBox="0 0 40 40" width="22" height="22"><g transform="matrix(1.6666666666666667,0,0,1.6666666666666667,0,0)"><path d="M12,0C5.373,0,0,5.373,0,12s5.373,12,12,12s12-5.373,12-12C23.993,5.376,18.624,0.007,12,0z M21.428,8.666 c0.046,0.13-0.021,0.273-0.151,0.319C21.25,8.995,21.221,9,21.193,9h-3.856c-0.087,0-0.168-0.046-0.214-0.12 c-0.499-0.815-1.185-1.501-2-2C15.047,6.834,15,6.753,15,6.664V2.808c0-0.139,0.113-0.251,0.252-0.25 c0.028,0,0.056,0.005,0.082,0.014C18.178,3.585,20.415,5.823,21.428,8.666L21.428,8.666z M12,16c-2.209,0-4-1.791-4-4s1.791-4,4-4 s4,1.791,4,4S14.209,16,12,16z M8.666,2.572c0.131-0.046,0.274,0.023,0.32,0.154C8.995,2.752,9,2.78,9,2.808v3.856 c0,0.087-0.045,0.168-0.12,0.214c-0.815,0.499-1.501,1.185-2,2C6.834,8.954,6.752,9,6.663,9H2.807C2.726,9.002,2.649,8.965,2.6,8.9 C2.553,8.834,2.541,8.748,2.569,8.672C3.581,5.826,5.82,3.586,8.666,2.572z M2.572,15.334c-0.047-0.129,0.02-0.272,0.149-0.319 C2.749,15.005,2.778,15,2.807,15h3.856c0.087,0,0.168,0.045,0.214,0.12c0.499,0.815,1.185,1.501,2,2 c0.074,0.046,0.12,0.127,0.12,0.214v3.856c0,0.138-0.112,0.25-0.25,0.25c-0.028,0-0.057-0.005-0.084-0.015 C5.821,20.412,3.585,18.176,2.572,15.334z M15.334,21.429c-0.13,0.046-0.273-0.021-0.319-0.151C15.005,21.251,15,21.222,15,21.194 v-3.856c0-0.087,0.045-0.168,0.12-0.214c0.815-0.499,1.501-1.185,2-2c0.046-0.075,0.127-0.12,0.214-0.12h3.856 c0.08,0.001,0.154,0.041,0.2,0.106c0.047,0.066,0.059,0.151,0.031,0.227C20.409,18.178,18.174,20.414,15.334,21.429z" stroke="none" fill="currentColor" stroke-width="0" stroke-linecap="round" stroke-linejoin="round"></path></g></svg>

        </span>

        <span class="sidebar-menu-text">Support</span>

      </a>

    </li>



    <li class="sidebar-menu-item">

      <a class="sidebar-menu-button" href="quizzes.html">

        <span class="sidebar-menu-icon sidebar-menu-icon--left">

          <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink"  viewBox="0 0 40 40" width="22" height="22"><g transform="matrix(1.6666666666666667,0,0,1.6666666666666667,0,0)"><path d="M13,17.5c0-3.59-2.91-6.5-6.5-6.5S0,13.91,0,17.5S2.91,24,6.5,24C10.088,23.996,12.996,21.088,13,17.5z M4.109,18.312 c-0.172-0.216-0.137-0.53,0.079-0.703C4.276,17.538,4.387,17.5,4.5,17.5h0.876c0.067-0.001,0.122-0.054,0.124-0.121V14.5 c0-0.552,0.448-1,1-1s1,0.448,1,1v2.875c0.001,0.068,0.056,0.124,0.124,0.125H8.5C8.776,17.5,9,17.724,9,18 c0,0.113-0.038,0.224-0.109,0.312l-2,2.5c-0.187,0.216-0.513,0.24-0.729,0.053c-0.019-0.016-0.036-0.034-0.053-0.053L4.109,18.312z M15,5.5h1c0.276,0,0.5,0.224,0.5,0.5v7c0,0.276-0.224,0.5-0.5,0.5h-1c-0.276,0-0.5-0.224-0.5-0.5V6C14.5,5.724,14.724,5.5,15,5.5z M18.5,7.5h1C19.776,7.5,20,7.724,20,8v5c0,0.276-0.224,0.5-0.5,0.5h-1c-0.276,0-0.5-0.224-0.5-0.5V8C18,7.724,18.224,7.5,18.5,7.5 z M21,0.586C20.625,0.211,20.116,0,19.585,0H8C6.895,0,6,0.895,6,2v7.275c-0.002,0.136,0.106,0.247,0.242,0.25 C6.608,9.532,7.28,9.559,7.727,9.607c0.134,0.015,0.256-0.081,0.271-0.215C8,9.381,8,9.37,8,9.359V2.5C8,2.224,8.224,2,8.5,2 h10.879c0.132,0,0.259,0.053,0.353,0.146l2.122,2.122C21.947,4.362,22,4.489,22,4.621V18c0,0.276-0.224,0.5-0.5,0.5h-6.859 c-0.121,0.001-0.223,0.09-0.24,0.21c-0.075,0.496-0.197,0.985-0.364,1.458c-0.048,0.126,0.015,0.267,0.141,0.315 c0.028,0.011,0.057,0.016,0.087,0.016H22c1.105,0,2-0.895,2-2V4.414c0-0.53-0.211-1.039-0.586-1.414L21,0.586z M12.565,12.3 c0.094,0.102,0.253,0.108,0.355,0.013C12.971,12.265,13,12.198,13,12.128V10.5c0-0.276-0.224-0.5-0.5-0.5h-1 c-0.276,0-0.5,0.224-0.5,0.5v0.229c0.002,0.111,0.061,0.213,0.156,0.271C11.676,11.375,12.149,11.812,12.565,12.3z" stroke="none" fill="currentColor" stroke-width="0" stroke-linecap="round" stroke-linejoin="round"></path></g></svg>

        </span>

        <span class="sidebar-menu-text">Reports</span>

      </a>

    </li>





    <li class="sidebar-menu-item">

      <a class="sidebar-menu-button" href="courses.html">

        <span class="sidebar-menu-icon sidebar-menu-icon--left">

          <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink"  viewBox="0 0 40 40" width="22" height="22"><g transform="matrix(1.6666666666666667,0,0,1.6666666666666667,0,0)"><path d="M22.5,9.5h-1.862c-0.185-0.64-0.441-1.257-0.762-1.84l1.316-1.316c0.586-0.586,0.586-1.535,0.001-2.121 c0,0,0,0-0.001-0.001l-1.415-1.413c-0.586-0.586-1.535-0.586-2.121,0l-1.317,1.317C15.756,3.804,15.14,3.548,14.5,3.363V1.5 C14.5,0.672,13.828,0,13,0h-2c-0.828,0-1.5,0.672-1.5,1.5v1.863C8.861,3.548,8.244,3.804,7.661,4.126L6.343,2.809 c-0.586-0.586-1.535-0.586-2.121,0L2.807,4.223C2.221,4.809,2.221,5.758,2.806,6.344c0,0,0,0,0.001,0.001l1.317,1.317 C3.802,8.245,3.547,8.861,3.361,9.5H1.5C0.672,9.5,0,10.172,0,11v2c0,0.828,0.672,1.5,1.5,1.5h1.861 c0.185,0.639,0.441,1.256,0.763,1.839l-1.317,1.319c-0.586,0.586-0.586,1.535,0,2.121l1.415,1.414c0.595,0.563,1.526,0.563,2.121,0 l1.316-1.317C8.242,20.198,8.86,20.454,9.5,20.64v1.86c0,0.828,0.672,1.5,1.5,1.5h2c0.828,0,1.5-0.672,1.5-1.5v-1.86 c0.639-0.185,1.256-0.441,1.839-0.763l1.318,1.317c0.586,0.586,1.535,0.586,2.121,0l1.414-1.414c0.586-0.586,0.586-1.535,0-2.121 l-1.316-1.317c0.321-0.583,0.577-1.201,0.763-1.84H22.5c0.828,0,1.5-0.672,1.5-1.5c0-0.001,0-0.001,0-0.002v-2 C24,10.172,23.328,9.5,22.5,9.5z M12,18c-3.314,0-6-2.686-6-6s2.686-6,6-6s6,2.686,6,6S15.314,18,12,18z M15.293,11.582 l-4.521-2.937c-0.153-0.1-0.349-0.108-0.51-0.021C10.1,8.711,10,8.88,10,9.064V15c0,0.184,0.101,0.354,0.264,0.441 c0.162,0.085,0.358,0.076,0.512-0.024l4.521-3c0.231-0.152,0.295-0.462,0.144-0.692c-0.038-0.057-0.086-0.106-0.144-0.144 L15.293,11.582z" stroke="none" fill="currentColor" stroke-width="0" stroke-linecap="round" stroke-linejoin="round"></path></g></svg>

        </span>

        <span class="sidebar-menu-text">App Settings</span>

      </a>

    </li>



  </ul>

  -->

                            </div>







                            <!--<div class="sidebar-heading">UI Components</div>

                            <div class="sidebar-block p-0">

                                <ul class="sidebar-menu" id="components_menu">

                                    <li class="sidebar-menu-item">

                                        <a class="sidebar-menu-button" href="ui-buttons.html">

                                            <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">mouse</i>

                                            <span class="sidebar-menu-text">Buttons</span>

                                        </a>

                                    </li>

                                    <li class="sidebar-menu-item">

                                        <a class="sidebar-menu-button" href="ui-alerts.html">

                                            <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">notifications</i>

                                            <span class="sidebar-menu-text">Alerts</span>

                                        </a>

                                    </li>

                                    <li class="sidebar-menu-item">

                                        <a class="sidebar-menu-button" href="ui-avatars.html">

                                            <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">person</i>

                                            <span class="sidebar-menu-text">Avatars</span>

                                            <span class="badge badge-primary ml-auto">NEW</span>

                                        </a>

                                    </li>

                                    <li class="sidebar-menu-item">

                                        <a class="sidebar-menu-button" href="ui-modals.html">

                                            <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">aspect_ratio</i>

                                            <span class="sidebar-menu-text">Modals</span>

                                        </a>

                                    </li>

                                    <li class="sidebar-menu-item">

                                        <a class="sidebar-menu-button" href="ui-charts.html">

                                            <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">pie_chart_outlined</i>

                                            <span class="sidebar-menu-text">Charts</span>

                                            <span class="badge badge-warning ml-auto">PRO</span>

                                        </a>

                                    </li>

                                    <li class="sidebar-menu-item">

                                        <a class="sidebar-menu-button" href="ui-icons.html">

                                            <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">brush</i>

                                            <span class="sidebar-menu-text">Icons</span>

                                        </a>

                                    </li>

                                    <li class="sidebar-menu-item">

                                        <a class="sidebar-menu-button" href="ui-forms.html">

                                            <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">text_format</i>

                                            <span class="sidebar-menu-text">Forms</span>

                                        </a>

                                    </li>

                                    <li class="sidebar-menu-item">

                                        <a class="sidebar-menu-button" href="ui-range-sliders.html">-->

                                            <!-- tune or low_priority or linear_scale or space_bar or swap_calls -->

                                            <!--<i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">tune</i>

                                            <span class="sidebar-menu-text">Range Sliders</span>

                                        </a>

                                    </li>

                                    <li class="sidebar-menu-item">

                                        <a class="sidebar-menu-button" href="ui-datetime.html">

                                            <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">event_available</i>

                                            <span class="sidebar-menu-text">Time &amp; Date</span>

                                        </a>

                                    </li>

                                    <li class="sidebar-menu-item">

                                        <a class="sidebar-menu-button" href="ui-tables.html">

                                            <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">dns</i>

                                            <span class="sidebar-menu-text">Tables</span>

                                        </a>

                                    </li>

                                    <li class="sidebar-menu-item">

                                        <a class="sidebar-menu-button" href="ui-tabs.html">

                                            <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">tab</i>

                                            <span class="sidebar-menu-text">Tabs</span>

                                        </a>

                                    </li>

                                    <li class="sidebar-menu-item">

                                        <a class="sidebar-menu-button" href="ui-loaders.html">

                                            <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">refresh</i>

                                            <span class="sidebar-menu-text">Loaders</span>

                                        </a>

                                    </li>

                                    <li class="sidebar-menu-item">

                                        <a class="sidebar-menu-button" href="ui-drag.html">

                                            <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">control_point</i>

                                            <span class="sidebar-menu-text">Drag &amp; Drop</span>

                                        </a>

                                    </li>

                                    <li class="sidebar-menu-item">

                                        <a class="sidebar-menu-button" href="ui-pagination.html">

                                            <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">last_page</i>

                                            <span class="sidebar-menu-text">Pagination</span>

                                        </a>

                                    </li>

                                    <li class="sidebar-menu-item">

                                        <a class="sidebar-menu-button" href="ui-vector-maps.html">

                                            <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">location_on</i>

                                            <span class="sidebar-menu-text">Vector Maps</span>

                                        </a>

                                    </li>

                                </ul>



                                <div class="sidebar-p-a sidebar-b-y bg-light">

                                    <div class="d-flex align-items-top mb-2">

                                        <div class="sidebar-heading m-0 p-0 flex text-body js-text-body">Progress</div>

                                        <div class="font-weight-bold text-muted">60%</div>

                                    </div>

                                    <div class="progress">

                                        <div class="progress-bar bg-success" role="progressbar" style="width: 60%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>

                                    </div>

                                </div>

                            </div>-->



<script>

var toggler = document.getElementsByClassName("caret");

var i;



for (i = 0; i < toggler.length; i++) {

  toggler[i].addEventListener("click", function() {

    this.parentElement.querySelector(".nested").classList.toggle("active");

    this.classList.toggle("caret-down");

  });

}

</script>

                        </div>

                    </div>

                </div>

            </div>