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
                                            @if(Auth::user()->type == '1')
                                            <small class="text-muted text-uppercase">System Admin</small>
                                            @elseif(Auth::user()->type == '2')
                                            <small class="text-muted text-uppercase">Centre Admin</small>
                                            @endif
                                        </span>
                                    </a>
                                    <div class="dropdown ml-auto">
                                        <a href="#" data-toggle="dropdown" data-caret="false" class="text-muted"><i class="material-icons">more_vert</i></a>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a class="dropdown-item" href="student-dashboard.html">Dashboard</a>
                                            <a class="dropdown-item" href="student-profile.html">My profile</a>
                                            <a class="dropdown-item" href="student-edit-account.html">Edit account</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" rel="nofollow" data-method="delete" href="login.html">Logout</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="sidebar-block p-0">
                                
                                <div class="sidebar-heading">Instructor</div>
                                <ul class="sidebar-menu mt-0">
                                    <li class="sidebar-menu-item @if($url == 'adminhome') active @endif">
                                        <a class="sidebar-menu-button" href="{{ url('/adminhome') }}">
                                            <span class="sidebar-menu-icon sidebar-menu-icon--left">
                                               <i class="fa fa-home"></i> 
                                            </span>
                                            <span class="sidebar-menu-text">Home</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-menu-item @if(($url == 'admin-centres') || ($url == 'basic-settings')) active @endif"">
                                        <a class="sidebar-menu-button" href="{{ url('/admin-centres') }}">
                                            <span class="sidebar-menu-icon sidebar-menu-icon--left">
                                               <i class="fa fa-building"></i> 
                                            </span> 
                                            <span class="sidebar-menu-text">Institutions</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-menu-item @if(($url == 'adminsyssettings') || ($url == 'admin-system-update')) active @endif">
                                        <a class="sidebar-menu-button" href="{{ url('/adminsyssettings') }}">
                                            <span class="sidebar-menu-icon sidebar-menu-icon--left">
                                               <i class="fa fa-tv"></i> 
                                            </span>
                                            <span class="sidebar-menu-text">System Settings</span>
                                        </a>
                                    </li>

                                    <li class="sidebar-menu-item">
                                        <a class="sidebar-menu-button" href="instructor-courses.html">
                                            <span class="sidebar-menu-icon sidebar-menu-icon--left">
                                                <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 40 40" width="22" height="22">
                                                    <g transform="matrix(1.6666666666666667,0,0,1.6666666666666667,0,0)">
                                                        <path d="M24,1.5C24,0.672,23.328,0,22.5,0h-21C0.672,0,0,0.672,0,1.5v21C0,23.328,0.672,24,1.5,24h21c0.828,0,1.5-0.672,1.5-1.5 V1.5z M10,21.5c0,0.276-0.224,0.5-0.5,0.5h-3C6.224,22,6,21.776,6,21.5v-6C6,15.224,6.224,15,6.5,15h3c0.276,0,0.5,0.224,0.5,0.5 V21.5z M15.5,21.5c0,0.276-0.224,0.5-0.5,0.5h-2c-0.276,0-0.5-0.224-0.5-0.5v-5c0-0.276,0.224-0.5,0.5-0.5h2 c0.276,0,0.5,0.224,0.5,0.5V21.5z M20.5,21.5c0,0.276-0.224,0.5-0.5,0.5h-2c-0.276,0-0.5-0.224-0.5-0.5v-6 c0-0.276,0.224-0.5,0.5-0.5h2c0.276,0,0.5,0.224,0.5,0.5V21.5z M23,11.75c0,0.414-0.336,0.75-0.75,0.75H1.75 C1.336,12.5,1,12.164,1,11.75S1.336,11,1.75,11H3c0.276,0,0.5-0.224,0.5-0.5V3.487C3.487,3.232,3.683,3.014,3.938,3h2.624 C6.817,3.014,7.013,3.232,7,3.487V10.5C7,10.776,7.224,11,7.5,11h1C8.776,11,9,10.776,9,10.5V6c0.012-0.288,0.254-0.511,0.542-0.5 h2.166c0.288-0.011,0.53,0.212,0.542,0.5v4.5c0,0.276,0.224,0.5,0.5,0.5h3.106c0.138,0,0.25-0.112,0.25-0.25 c0-0.029-0.005-0.059-0.015-0.086l-2.565-7c-0.079-0.229,0.043-0.479,0.272-0.558c0.007-0.003,0.015-0.005,0.023-0.007l1.8-0.577 c0.242-0.082,0.505,0.039,0.6,0.276l2.886,7.871c0.072,0.197,0.259,0.328,0.469,0.328h2.674c0.414,0,0.75,0.336,0.75,0.75 c0,0.001,0,0.003,0,0.004V11.75z" stroke="none" fill="currentColor" stroke-width="0" stroke-linecap="round" stroke-linejoin="round"></path>
                                                    </g>
                                                </svg>
                                            </span>
                                            <span class="sidebar-menu-text">My Courses</span>
                                        </a>
                                    </li>

                                    <li class="sidebar-menu-item">
                                        <a class="sidebar-menu-button" href="instructor-course-edit.html">
                                            <span class="sidebar-menu-icon sidebar-menu-icon--left">
                                                <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 40 40" width="22" height="22">
                                                    <g transform="matrix(1.6666666666666667,0,0,1.6666666666666667,0,0)">
                                                        <path d="M19,13c-0.552,0-1,0.448-1,1v7c0,0.552-0.448,1-1,1H3c-0.552,0-1-0.448-1-1V3c0-0.552,0.448-1,1-1h7c0.552,0,1-0.448,1-1 s-0.448-1-1-1H3C1.343,0,0,1.343,0,3v18c0,1.657,1.343,3,3,3h14c1.657,0,3-1.343,3-3v-7C20,13.448,19.552,13,19,13z M8.73,12.521 c-0.174,0.048-0.309,0.186-0.353,0.361L7.82,15.119l-1.252,1.252c-0.293,0.293-0.293,0.768,0,1.061c0,0,0,0,0,0 c0.295,0.287,0.765,0.287,1.06,0l1.264-1.262l2.207-0.555c0.174-0.044,0.312-0.177,0.36-0.35c0.048-0.173,0-0.359-0.127-0.487 L9.217,12.65C9.09,12.522,8.904,12.473,8.73,12.521z M23.707,0.293c-0.39-0.39-1.024-0.39-1.414,0l-0.9,0.9 c-0.518-0.138-1.07-0.063-1.533,0.208L19.808,1.35c-1.172-1.165-3.066-1.162-4.235,0.006l-3.612,3.605 c-0.39,0.391-0.39,1.023,0,1.414c0.394,0.384,1.021,0.384,1.415,0L17,2.761c0.392-0.384,1.019-0.381,1.407,0.007L17.7,3.475 c-0.195,0.195-0.195,0.512,0,0.707L19.818,6.3c0.195,0.195,0.512,0.195,0.707,0l1.768-1.768c0.504-0.505,0.701-1.241,0.517-1.93 l0.9-0.9C24.096,1.311,24.095,0.682,23.707,0.293z M12.4,14.22c0.132,0,0.259-0.053,0.353-0.147l6.356-6.355 c0.195-0.195,0.195-0.512,0-0.707L16.99,4.889c-0.198-0.188-0.509-0.188-0.707,0l-6.356,6.356c-0.195,0.195-0.195,0.512,0,0.707 l2.121,2.121C12.141,14.167,12.268,14.219,12.4,14.22z" stroke="none" fill="currentColor" stroke-width="0" stroke-linecap="round" stroke-linejoin="round"></path>
                                                    </g>
                                                </svg>
                                            </span>
                                            <span class="sidebar-menu-text">Edit Course</span>
                                        </a>
                                    </li>



                                    <li class="sidebar-menu-item">
                                        <a class="sidebar-menu-button" href="instructor-lesson-edit.html">
                                            <span class="sidebar-menu-icon sidebar-menu-icon--left">
                                                <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 40 40" width="22" height="22">
                                                    <g transform="matrix(1.6666666666666667,0,0,1.6666666666666667,0,0)">
                                                        <path d="M12.75,5h-6C6.336,5,6,5.336,6,5.75S6.336,6.5,6.75,6.5h6c0.414,0,0.75-0.336,0.75-0.75S13.164,5,12.75,5z M13.5,9.25 c0-0.414-0.336-0.75-0.75-0.75h-8C4.336,8.5,4,8.836,4,9.25S4.336,10,4.75,10h8C13.164,10,13.5,9.664,13.5,9.25z M4.75,12 C4.336,12,4,12.336,4,12.75s0.336,0.75,0.75,0.75h5.5c0.414,0,0.75-0.336,0.75-0.75S10.664,12,10.25,12H4.75z M11.3,17.655 c-0.039-0.093-0.13-0.154-0.231-0.155H2.5C2.224,17.5,2,17.276,2,17V2.5C2,2.224,2.224,2,2.5,2h13C15.776,2,16,2.224,16,2.5v10.07 c0,0.138,0.112,0.25,0.251,0.249c0.066,0,0.13-0.027,0.176-0.073l1.28-1.28C17.895,11.279,18,11.024,18,10.759V2 c0-1.105-0.895-2-2-2H2C0.895,0,0,0.895,0,2v15.5c0,1.105,0.895,2,2,2h7.868c0.22,0,0.413-0.143,0.478-0.353 c0.095-0.311,0.267-0.592,0.5-0.819l0.4-0.4C11.318,17.856,11.339,17.749,11.3,17.655z M12.062,20.131 c-0.099-0.097-0.258-0.096-0.355,0.003c-0.034,0.034-0.057,0.078-0.067,0.125L11.012,23.4c-0.055,0.271,0.119,0.535,0.39,0.59 c0.033,0.007,0.066,0.01,0.1,0.01c0.034,0,0.067-0.003,0.1-0.01l3.143-0.629c0.135-0.027,0.223-0.159,0.195-0.295 c-0.01-0.048-0.034-0.093-0.068-0.127L12.062,20.131z M23.228,11.765c-1.023-1.02-2.677-1.02-3.7,0l-6.5,6.5 c-0.195,0.195-0.195,0.512,0,0.707l3,3c0.195,0.195,0.512,0.195,0.707,0l6.5-6.5C24.257,14.447,24.254,12.787,23.228,11.765 C23.228,11.765,23.228,11.765,23.228,11.765z" stroke="none" fill="currentColor" stroke-width="0" stroke-linecap="round" stroke-linejoin="round"></path>
                                                    </g>
                                                </svg>
                                            </span>
                                            <span class="sidebar-menu-text">Edit Lesson</span>
                                        </a>
                                    </li>



                                    <li class="sidebar-menu-item">
                                        <a class="sidebar-menu-button" href="instructor-create-quiz.html">
                                            <span class="sidebar-menu-icon sidebar-menu-icon--left">
                                                <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 40 40" width="22" height="22">
                                                    <g transform="matrix(1.6666666666666667,0,0,1.6666666666666667,0,0)">
                                                        <path d="M17.464,11c-3.59,0-6.5,2.91-6.5,6.5s2.91,6.5,6.5,6.5s6.5-2.91,6.5-6.5C23.96,13.912,21.052,11.004,17.464,11z M19.964,18.25h-1.5c-0.138,0-0.25,0.112-0.25,0.25V20c0,0.414-0.336,0.75-0.75,0.75s-0.75-0.336-0.75-0.75v-1.5 c0-0.138-0.112-0.25-0.25-0.25h-1.5c-0.414,0-0.75-0.336-0.75-0.75s0.336-0.75,0.75-0.75h1.5c0.138,0,0.25-0.112,0.25-0.25V15 c0-0.414,0.336-0.75,0.75-0.75s0.75,0.336,0.75,0.75v1.5c0,0.138,0.112,0.25,0.25,0.25h1.5c0.414,0,0.75,0.336,0.75,0.75 S20.378,18.25,19.964,18.25z M12.786,8.5c0-0.414-0.336-0.75-0.75-0.75h-6c-0.414,0-0.75,0.336-0.75,0.75s0.336,0.75,0.75,0.75h6 C12.45,9.25,12.786,8.914,12.786,8.5z M6.036,14.749c-0.414,0-0.75,0.336-0.75,0.75c0,0.414,0.336,0.75,0.75,0.75h3.405 c0.117,0,0.217-0.085,0.237-0.2c0.06-0.323,0.139-0.641,0.238-0.954c0.036-0.116-0.006-0.345-0.333-0.345L6.036,14.749z M9.722,19.194c-0.021-0.115-0.121-0.199-0.238-0.2H3.536c-0.276,0-0.5-0.224-0.5-0.5V5.5c0-0.276,0.224-0.5,0.5-0.5h11 c0.276,0,0.5,0.224,0.5,0.5v4.08c-0.002,0.136,0.107,0.249,0.243,0.251c0.019,0,0.038-0.002,0.057-0.006 c0.814-0.154,1.637-0.252,2.464-0.293c0.132-0.008,0.235-0.118,0.234-0.25V3.5c0-0.828-0.672-1.5-1.5-1.5h-4 c-0.086,0-0.165-0.046-0.208-0.121C11.25,0.06,8.903-0.543,7.084,0.533C6.529,0.861,6.066,1.324,5.738,1.879 C5.696,1.953,5.619,1.999,5.534,2h-4c-0.828,0-1.5,0.672-1.5,1.5v17c0,0.828,0.672,1.5,1.5,1.5h8.94 c0.136,0,0.246-0.11,0.246-0.246c0-0.047-0.014-0.093-0.039-0.133C10.23,20.87,9.906,20.05,9.722,19.194z M11.186,12.654 c0.327-0.427,0.695-0.82,1.1-1.174c0.09-0.079-0.01-0.231-0.245-0.231h-6c-0.414,0-0.75,0.336-0.75,0.75s0.336,0.75,0.75,0.75H11 C11.073,12.747,11.142,12.712,11.186,12.654z" stroke="none" fill="currentColor" stroke-width="0" stroke-linecap="round" stroke-linejoin="round"></path>
                                                    </g>
                                                </svg>
                                            </span>
                                            <span class="sidebar-menu-text">Create Quiz</span>
                                        </a>
                                    </li>




                                    <li class="sidebar-menu-item">
                                        <a class="sidebar-menu-button" href="instructor-earnings.html">
                                            <span class="sidebar-menu-icon sidebar-menu-icon--left">
                                                <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 40 40" width="22" height="22">
                                                    <g transform="matrix(1.6666666666666667,0,0,1.6666666666666667,0,0)">
                                                        <path d="M16,5.75c0.414,0,0.75-0.336,0.75-0.75V3.5c0-0.414-0.336-0.75-0.75-0.75s-0.75,0.336-0.75,0.75V5 C15.25,5.414,15.586,5.75,16,5.75z M21,3c0-1.657-1.343-3-3-3H6C4.343,0,3,1.343,3,3v18c0,1.657,1.343,3,3,3h12 c1.657,0,3-1.343,3-3V3z M12,14c0.552,0,1,0.448,1,1s-0.448,1-1,1s-1-0.448-1-1S11.448,14,12,14z M11,10.5c0-0.552,0.448-1,1-1 s1,0.448,1,1s-0.448,1-1,1S11,11.052,11,10.5z M16.5,18.75c0.414,0,0.75,0.336,0.75,0.75s-0.336,0.75-0.75,0.75H11 c-0.414,0-0.75-0.336-0.75-0.75s0.336-0.75,0.75-0.75H16.5z M16.5,16c-0.552,0-1-0.448-1-1s0.448-1,1-1c0.552,0,1,0.448,1,1 S17.052,16,16.5,16z M16.5,11.5c-0.552,0-1-0.448-1-1s0.448-1,1-1c0.552,0,1,0.448,1,1S17.052,11.5,16.5,11.5z M7.5,16 c-0.552,0-1-0.448-1-1s0.448-1,1-1s1,0.448,1,1S8.052,16,7.5,16z M8.5,19.5c0,0.552-0.448,1-1,1s-1-0.448-1-1s0.448-1,1-1 S8.5,18.948,8.5,19.5z M7.5,11.5c-0.552,0-1-0.448-1-1s0.448-1,1-1s1,0.448,1,1S8.052,11.5,7.5,11.5z M6,2h12c0.552,0,1,0.448,1,1 v3.25c0,0.138-0.112,0.25-0.25,0.25H5.25C5.112,6.5,5,6.388,5,6.25V3C5,2.448,5.448,2,6,2z" stroke="none" fill="currentColor" stroke-width="0" stroke-linecap="round" stroke-linejoin="round"></path>
                                                    </g>
                                                </svg>
                                            </span>
                                            <span class="sidebar-menu-text">Earnings</span>
                                        </a>
                                    </li>


                                    <li class="sidebar-menu-item">
                                        <a class="sidebar-menu-button" href="instructor-profile.html">
                                            <span class="sidebar-menu-icon sidebar-menu-icon--left material-icons">
                                                <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 40 40" width="22" height="22">
                                                    <g transform="matrix(1.6666666666666667,0,0,1.6666666666666667,0,0)">
                                                        <path d="M0.5,13.985h3c0.276,0,0.5-0.224,0.5-0.5C3.95,11.87,3.532,10.289,2.778,8.86C2.76,8.825,2.75,8.786,2.75,8.746V5.205 c0-0.414-0.336-0.75-0.75-0.75s-0.75,0.336-0.75,0.75v3.541c0,0.04-0.009,0.079-0.027,0.114C0.468,10.288,0.05,11.87,0,13.485 C0,13.761,0.224,13.985,0.5,13.985z M21.187,20.271l-0.017-0.006l-4.97-1.647c-0.175-0.057-0.367-0.013-0.5,0.114l-3.357,3.231 c-0.193,0.185-0.498,0.185-0.691,0l-3.4-3.218c-0.133-0.126-0.325-0.169-0.5-0.112l-4.938,1.638 c-1.381,0.511-2.426,1.663-2.8,3.087c-0.07,0.267,0.09,0.54,0.357,0.611c0.041,0.011,0.084,0.016,0.126,0.016h23 c0.276,0,0.5-0.225,0.499-0.501c0-0.042-0.005-0.084-0.016-0.125C23.608,21.936,22.566,20.783,21.187,20.271z M23.586,1.993 L12.429,0.052c-0.284-0.049-0.574-0.049-0.858,0L0.414,1.993C0.142,2.041-0.04,2.3,0.008,2.572c0.036,0.207,0.199,0.37,0.406,0.406 l11.157,1.94c0.284,0.051,0.574,0.051,0.858,0l11.157-1.94c0.272-0.048,0.454-0.307,0.406-0.579 C23.956,2.192,23.793,2.029,23.586,1.993z M18.458,5.393l-6.115,1.063c-0.227,0.039-0.458,0.039-0.685,0L5.543,5.393 C5.407,5.369,5.277,5.46,5.254,5.596C5.251,5.61,5.25,5.625,5.25,5.639V10c0,0.061-0.022,0.12-0.063,0.166 c-0.336,0.408-0.506,0.927-0.476,1.455C4.7,12.634,5.252,13.57,6.144,14.05l0.151,0.192c0.51,3.047,4.02,4.99,5.686,4.99 s5.175-1.943,5.685-4.989l0.151-0.192c0.891-0.482,1.443-1.417,1.433-2.43c0.026-0.507-0.131-1.006-0.442-1.407 c-0.037-0.045-0.058-0.101-0.058-0.159V5.639c0-0.138-0.111-0.249-0.248-0.25C18.487,5.389,18.472,5.39,18.458,5.393z M17.192,12.693c-0.53,0.242-0.904,0.732-1,1.306c-0.377,2.249-3.174,3.739-4.207,3.739S8.15,16.246,7.773,14 c-0.096-0.574-0.471-1.063-1-1.306C6.41,12.45,6.198,12.037,6.21,11.6c-0.02-0.152,0.016-0.305,0.1-0.433 c0.266-0.121,0.437-0.386,0.438-0.678V8.548c0-0.079,0.037-0.153,0.1-0.2c0.061-0.047,0.141-0.063,0.216-0.044 C8.675,8.73,10.334,8.948,12,8.952c1.667-0.003,3.326-0.22,4.937-0.646c0.134-0.035,0.27,0.045,0.305,0.179 c0.005,0.021,0.008,0.042,0.008,0.063v1.821c-0.055,0.321,0.105,0.639,0.395,0.787c0.089,0.128,0.126,0.285,0.105,0.44 c0.014,0.436-0.197,0.85-0.558,1.095V12.693z M12.939,14.306c-0.076,0.041-0.155,0.074-0.237,0.1 c-0.187,0.055-0.38,0.082-0.575,0.081l0,0c-0.196,0.001-0.392-0.026-0.58-0.082c-0.082-0.026-0.162-0.059-0.238-0.1 c-0.365-0.196-0.82-0.06-1.016,0.305c-0.196,0.365-0.06,0.82,0.305,1.016l0,0c0.162,0.087,0.333,0.157,0.51,0.21 c0.33,0.099,0.673,0.15,1.017,0.149h0.007c0.343,0.002,0.685-0.048,1.014-0.147c0.177-0.054,0.348-0.125,0.511-0.212 c0.367-0.192,0.509-0.645,0.317-1.012s-0.645-0.509-1.012-0.317c-0.006,0.003-0.012,0.007-0.019,0.01L12.939,14.306z M11.189,12 c0.277-0.308,0.253-0.782-0.055-1.059c-0.769-0.62-1.867-0.62-2.636,0c-0.293,0.293-0.292,0.768,0.001,1.061 c0.271,0.27,0.701,0.294,0.999,0.054c0.195-0.111,0.433-0.111,0.628,0c0.307,0.278,0.781,0.255,1.059-0.052 C11.187,12.003,11.188,12.001,11.189,12z M13.064,10.945c-0.293,0.293-0.292,0.768,0.001,1.061c0.271,0.27,0.701,0.294,0.999,0.054 c0.195-0.111,0.433-0.111,0.628,0c0.293,0.293,0.768,0.293,1.061,0.001c0.293-0.293,0.293-0.768,0.001-1.061 c-0.019-0.019-0.04-0.038-0.061-0.055C14.924,10.329,13.832,10.329,13.064,10.945z" stroke="none" fill="currentColor" stroke-width="0" stroke-linecap="round" stroke-linejoin="round"></path>
                                                    </g>
                                                </svg>
                                            </span>
                                            <span class="sidebar-menu-text">Profile</span>
                                        </a>
                                    </li>



                                    <li class="sidebar-menu-item">
                                        <a class="sidebar-menu-button" href="instructor-payout.html">
                                            <span class="sidebar-menu-icon sidebar-menu-icon--left">
                                                <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 40 40" width="22" height="22">
                                                    <g transform="matrix(1.6666666666666667,0,0,1.6666666666666667,0,0)">
                                                        <path d="M20.375,15.792V4.958c0.008-0.59-0.463-1.075-1.053-1.083c0,0,0,0,0,0H1.428c-0.59,0.008-1.061,0.493-1.053,1.083 c0,0,0,0,0,0v10.834c-0.008,0.59,0.463,1.075,1.053,1.083c0,0,0,0,0,0h17.894C19.912,16.867,20.383,16.382,20.375,15.792 C20.375,15.792,20.375,15.792,20.375,15.792z M10.375,13.375c-1.657,0-3-1.343-3-3s1.343-3,3-3s3,1.343,3,3 S12.032,13.375,10.375,13.375z M22.875,6.625c-0.414,0-0.75,0.336-0.75,0.75v11c0,0.138-0.112,0.25-0.25,0.25h-18 c-0.414,0-0.75,0.336-0.75,0.75s0.336,0.75,0.75,0.75h18c0.966-0.001,1.749-0.784,1.75-1.75v-11 C23.625,6.961,23.289,6.625,22.875,6.625z" stroke="none" fill="currentColor" stroke-width="0" stroke-linecap="round" stroke-linejoin="round"></path>
                                                    </g>
                                                </svg>
                                            </span>
                                            <span class="sidebar-menu-text">Payout</span>
                                        </a>
                                    </li>



                                </ul>
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



                            <div class="sidebar-heading">UI Components</div>
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
                                        <a class="sidebar-menu-button" href="ui-range-sliders.html">
                                            <!-- tune or low_priority or linear_scale or space_bar or swap_calls -->
                                            <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons">tune</i>
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
                            </div>

                        </div>
                    </div>
                </div>
            </div>