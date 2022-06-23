<?php 

    $pgmserch = Request::segment(2);

    $i =1; 

    $cur_url = URL::to('/'); 

?>

<!DOCTYPE html>

<html lang="en" dir="ltr">



<head>

    <meta charset="utf-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>{{ App\Models\tblSystemSettigs::systemname('systemname') }} | Video Management</title>



    <!-- Prevent the demo from appearing in search engines -->

    <meta name="robots" content="noindex">



    <!-- Perfect Scrollbar -->

    <link type="text/css" href="{{ asset('assets/vendor/perfect-scrollbar.css') }}" rel="stylesheet">



    <!-- App CSS -->

    <link type="text/css" href="{{ asset('assets/css/app.css') }}" rel="stylesheet">

    <link type="text/css" href="{{ asset('assets/css/app.rtl.css') }}" rel="stylesheet">



    <!-- Material Design Icons -->

    <link type="text/css" href="{{ asset('assets/css/vendor-material-icons.css') }}" rel="stylesheet">

    <link type="text/css" href="{{ asset('assets/css/vendor-material-icons.rtl.css') }}" rel="stylesheet">



    <!-- Font Awesome FREE Icons -->

    <link type="text/css" href="{{ asset('assets/css/vendor-fontawesome-free.css') }}" rel="stylesheet">

    <link type="text/css" href="{{ asset('assets/css/vendor-fontawesome-free.rtl.css') }}" rel="stylesheet">



    <!-- ion Range Slider -->

    <link type="text/css" href="{{ asset('assets/css/vendor-ion-rangeslider.css') }}" rel="stylesheet">

    <link type="text/css" href="{{ asset('assets/css/vendor-ion-rangeslider.rtl.css') }}" rel="stylesheet">



    <link rel="shortcut icon" href="{{ asset('assets/images/favicon.ico') }}" type="image/x-icon">

    <link rel="icon" href="{{ asset('assets/images/favicon.ico') }}" type="image/x-icon">



    <link rel="stylesheet" type="text/css" href="{{ asset('assets/media/css/jquery.dataTables.css') }}">

    <link rel="stylesheet" type="text/css" href="{{ asset('assets/resources/syntax/shCore.css') }}">

    <link rel="stylesheet" type="text/css" href="{{ asset('assets/resources/demo.css') }}">

    <style type="text/css">

        .modal-backdrop {

            position: initial !important;

        }

    </style>

</head>



<body class="layout-default">







    <!-- Header Layout -->

    <div class="mdk-header-layout js-mdk-header-layout">



        <!-- Header -->



        @include('includes/instheader')



        <!-- // END Header -->



        <!-- Header Layout Content -->

        <div class="mdk-header-layout__content">



            <div class="mdk-drawer-layout js-mdk-drawer-layout" data-push data-responsive-width="992px">

                <div class="mdk-drawer-layout__content page">







                    <div class="container-fluid page__heading-container">

                        <div class="page__heading d-flex align-items-center justify-content-between">

                            <h4 class="m-0">Video Management</h4>



                            <!--<button type="button" class="btn btn-success btn-sm" style=" padding: 0.5rem 1.5rem;">New Video</button>-->



                            <a href="{{ url('/new-video') }}">

                                <button type="button" class="btn btn-warning">

                                    <i class="fa fa-paper-plane"></i> New Video

                                </button>

                            </a>

                        </div>

                    </div>



<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">



<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>



<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>



<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>









                    <div class="container-fluid page__container">

                        <div class="card card-form">

                            <div class="row no-gutters">

                                <div class="col-lg-12 card-form__body">

                                    <div class="table-responsive border-bottom" data-toggle="lists" data-lists-values='["js-lists-values-employee-name"]'>

                                        @if(count($errors)>0)

                                              @foreach($errors->all() as $error)

                                                <p class="alert alert-success">{{$error}}</p>

                                              @endforeach

                                            @endif

                                        



                                        <div class="container">

                                            <div class="row">

                                                <div class="col">

                                                    <div class="form-group">

                                                        <label for="fname">Program</label>

                                                        <select class="form-control" id="year" onChange="pgmselect(this.value);">

                                                            <option value="" @if($pgmserch == '') selected="selected" @endif> Choose Program</option>

                                                            @foreach($pgm as $pgms)

                                                            <option value="{{ $pgms->id }}" @if($pgms->id == $pgmserch) selected="selected" @endif>{{ $pgms->programname }}</option>

                                                            @endforeach

                                                        </select>

                                                    </div>

                                                    <input type="hidden" name="cur_url" id="cur_url" value="{{ $cur_url }}">

                                                </div>

                                                

                                                

                                                <div class="col">

                                                    <div class="form-group">

                                                        

                                                    </div>

                                                </div>

                                                <div class="col text-right">

                                                    <div class="form-group">

                                                        

                                                    </div>

                                                </div>

                                            </div>

                                            

                                            <section>

                                                <table id="example" class="display" style="width:100%">

                                                    <thead>

                                                        <tr>

                                                            <th style="width: 5%;">No</th>

                                                            <th style="width: 35%;">Caption</th>

                                                            <th style="width: 25%;">Chapter</th>

                                                            <th style="width: 25%;">Topic</th>

                                                            <!--<th style="width: 15%;">Course</th>

                                                            <th style="width: 12%;">Programs</th>-->

                                                           <!-- <th style="width: 5%;">Video</th>-->

                                                            <!--<th style="width: 10%;">Programs</th>-->

                                                            <th style="width: 2%;">Pub</th>

                                                            <th style="width: 8%; text-align: center;">Act</th>

                                                        </tr>

                                                    </thead>

                                                    <tbody>

                                                        @foreach($data as $object)

                                                        

                                                        <tr>

                                                            <td align="center">{{ $i }}</td>

                                                            <td>

                                                                <div class="media align-items-center">

                                                                    <div class="media-body">

                                                                        <span class="js-lists-values-employee-name">{{ $object->videocaption }}</span>

                                                                    </div>

                                                                </div>

                                                            </td>

                                                            <td>

                                                                <div class="media align-items-center">

                                                                    <div class="media-body">

                                                                        <span class="js-lists-values-employee-name">{{ App\Models\tblBasicSettings::chapterfind($object->chapter) }}</span>

                                                                    </div>

                                                                </div>

                                                            </td>

                                                            <td>

                                                                <div class="media align-items-center">

                                                                    <div class="media-body">

                                                                        <span class="js-lists-values-employee-name">{{ App\Models\tblBasicSettings::topicfind($object->topic) }}</span>

                                                                    </div>

                                                                </div>

                                                            </td>

                                                            

                                                            <!--<td>

                                                                <div class="media align-items-center">

                                                                    <div class="media-body">

                                                                        <span class="js-lists-values-employee-name">{{ App\Models\tblBasicSettings::coursefind($object->course) }}</span>

                                                                    </div>

                                                                </div>

                                                            </td>

                                                            <td>

                                                                <div class="media align-items-center">

                                                                    <div class="media-body">

                                                                        <span class="js-lists-values-employee-name">{{ App\Models\tblBasicSettings::programfind($object->program) }}</span>

                                                                    </div>

                                                                </div>

                                                            </td>-->

                                                            

                                                           <!-- <td>

                                                                

                                                            </td>
-->
                                                            <!--<td align="center">

                                                                <a href="{{ url('/video-program/'.$object->id.'/'.$object->course) }}" style=" text-decoration: none;"><span class="badge badge-warning" >View Program</span></a>

                                                                <span class="badge badge-secondary" data-toggle="modal" data-target="#exampleModal{{ $object->id }}">Assign</span>

                                                                <span class="badge badge-warning" data-toggle="modal" data-target="#programsModal{{ $object->id }}">View</span>

                                                            </td>-->

                                                                                                                        

                                                            <td>

                                                                

                                                                <div class="custom-control custom-checkbox">

                                                                    <input type="checkbox" class="" style=" margin-top: 5px;" id="myCheck{{$i}}" onChange="myFunction({{ $i }}, {{ $object->id }})" @if($object->status == '1') checked="checked" @endif>

                                                                    

                                                                </div>

                                                            </td>

                                                            {{ csrf_field() }}

                                                            <td align="center">

                                                                <a href="{{ url('view-video/'.$object->id) }}" class="text-muted">

                                                                    <i class="fa fa-edit"></i>

                                                                </a>

                                                                <a href="{{ url('video-remove/'.$object->id) }}" class="text-muted" onClick="return confirm('Are you sure to Delete??');">

                                                                    <i class="fa fa-trash-alt"></i>

                                                                </a>
                                                                <a href="{{ url('video-comments/'.$object->regtime) }}" class="text-muted" >

                                                                    <i class="fa fa-comment"></i>

                                                                </a>

                                                            </td>

                                                        </tr>



                                                        

                                                        <?php $i++; ?>

                                                        @endforeach

                                                    </tbody>

                                                </table>

                                            </section>

                                        </div>

                                    </div>







                                </div>

                            </div>

                        </div>



                       

                    </div>



                </div>

                <!-- // END drawer-layout__content -->



                @include('includes/instmenu')

                

            <!-- // END drawer-layout -->



        </div>

        <!-- // END header-layout__content -->



    </div>

    <!-- // END header-layout -->



    @include('includes/adminfooter')



    <!-- jQuery -->

    <script src="{{ asset('assets/vendor/jquery.min.js') }}"></script>



    <!-- Bootstrap -->

    <script src="{{ asset('assets/vendor/popper.min.js') }}"></script>

    <script src="{{ asset('assets/vendor/bootstrap.min.js') }}"></script>



    <!-- Perfect Scrollbar -->

    <script src="{{ asset('assets/vendor/perfect-scrollbar.min.js') }}"></script>



    <!-- DOM Factory -->

    <script src="{{ asset('assets/vendor/dom-factory.js') }}"></script>



    <!-- MDK -->

    <script src="{{ asset('assets/vendor/material-design-kit.js') }}"></script>



    <!-- Range Slider -->

    <script src="{{ asset('assets/vendor/ion.rangeSlider.min.js') }}"></script>

    <script src="{{ asset('assets/js/ion-rangeslider.js') }}"></script>



    <!-- App -->

    <script src="{{ asset('assets/js/toggle-check-all.js') }}"></script>

    <script src="{{ asset('assets/js/check-selected-row.js') }}"></script>

    <script src="{{ asset('assets/js/dropdown.js') }}"></script>

    <script src="{{ asset('assets/js/sidebar-mini.js') }}"></script>

    <script src="{{ asset('assets/js/app.js') }}"></script>



    <!-- App Settings (safe to remove) -->

    <script src="{{ asset('assets/js/app-settings.js') }}"></script>





    <!-- List.js -->

    <script src="{{ asset('assets/vendor/list.min.js') }}"></script>

    <script src="{{ asset('assets/js/list.js') }}"></script>



    <!--Date table files Starts here -->

    <script type="text/javascript" language="javascript" src="{{ asset('assets/media/js/jquery.dataTables.js') }}"></script>

    <script type="text/javascript" language="javascript" src="{{ asset('assets/resources/syntax/shCore.js') }}"></script>

    <script type="text/javascript" language="javascript" src="{{ asset('assets/resources/demo.js') }}"></script>

    <script type="text/javascript" language="javascript" class="init">

    

    </script>

    <script>

  $(function () {

    $('#example1').DataTable()

    $('#example').DataTable({

      'paging'      : true,

      'lengthChange': false,

      'searching'   : true,

      'ordering'    : true,

      'info'        : true,

      'autoWidth'   : true

    })

  })

</script>

<script>

    function myFunction(x, y) {

                                          

        // Get the checkbox

        var checkBox = document.getElementById("myCheck"+x);

        var db_id = y;

        var token = $("input[name='_token']").val();

                                          

        // If the checkbox is checked, display the output text

        if (checkBox.checked == true){

            if(db_id != '')

            {

                //alert('true');

                $.ajax({



                    url: "<?php echo route('video-approve') ?>",

                    method: 'POST',

                    data: {db_id:db_id,  _token:token},

                    success: function(data) {

                        //alert(data);

                    }

                });

            }

        } else {

            if(db_id != '')

            {

                //alert(db_id);

                $.ajax({



                    url: "<?php echo route('video-reject') ?>",

                    method: 'POST',

                    data: {db_id:db_id,  _token:token},

                    success: function(data) {

                        //alert(data);

                    }

                });

            }

        }

    }



    function pgmselect(x)

    {

        var cur_url = $("#cur_url").val();



        if(x != '')

        {

            window.location.href=cur_url+'/video-management-find/'+x;

        }

    }

</script>

</body>



</html>