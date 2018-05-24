@extends('admin/layouts/default')

{{-- Page title --}}
@section('title')
    View User Details
    @parent
@stop

{{-- page level styles --}}
@section('header_styles')
    <meta name="csrf_token" content="{{ csrf_token() }}">
    <link href="{{ asset('assets/vendors/jasny-bootstrap/css/jasny-bootstrap.css') }}" rel="stylesheet"/>
    <link href="{{ asset('assets/vendors/x-editable/css/bootstrap-editable.css') }}" rel="stylesheet"/>

    <link href="{{ asset('assets/css/pages/user_profile.css') }}" rel="stylesheet"/>
@stop


{{-- Page content --}}
@section('content')
    <section class="content-header">
        <!--section starts-->
        <h1>User Profile</h1>
        <ol class="breadcrumb">
            <li>
                <a href="{{ route('admin.dashboard') }}">
                    <i class="livicon" data-name="home" data-size="14" data-loop="true"></i>
                    Dashboard
                </a>
            </li>
            <li>
                <a href="#">Users</a>
            </li>
            <li class="active">User profile</li>
        </ol>
    </section>
    <!--section ends-->
    <section class="content user_profile">
        <div class="row">
            <div class="col-lg-12">
         
                
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card">
                                    
                                    
                                      <section class="content user_profile">

                              <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <div class="text-center">
                                        <div class="fileinput fileinput-new" data-provides="fileinput">
                                            <div class="fileinput-new thumbnail" style="margin-top: 5%;">

                        @if(Sentinel::getUser()->pic)
                            <img src="{{ Sentinel::getUser()->pic }}" alt="img" height="35px" width="35px"
                                 class="img-fluid float-left"/>

                        @elseif(Sentinel::getUser()->gender === "male")
                            <img src="{{ asset('assets/images/authors/avatar3.png') }}" alt="img" height="35px" width="35px"
                                 class="img-fluid float-left"/>

                        @elseif(Sentinel::getUser()->gender === "female")
                            <img src="{{ asset('assets/images/authors/avatar5.png') }}" alt="img" height="35px" width="35px"
                                 class="img-fluid float-left"/>

                        @else
                            <img src="{{ asset('assets/images/authors/no_avatar.jpg') }}" alt="img" height="35px" width="35px"
                                 class="img-fluid float-left"/>
                        @endif
                                               
                                            </div>
                                            <div class="fileinput-preview fileinput-exists thumbnail" ></div>
                                            <div>

                                                <div style="margin-bottom: 5%;">
                                                <h3 class="card-title">

                                            {{$user->first_name}} {{$user->last_name}}
                                        </h3>
                                        </div>
                                                <span class="btn btn-default btn-file">
                                                    <span class="fileinput-new">
                                                        Select image
                                                    </span>
                                                    <span class="fileinput-exists">Change</span>
                                                    <input type="file" name="..."></span>
                                                <a href="#" class="btn btn-default fileinput-exists" data-dismiss="fileinput">Remove</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="table-responsive-lg table-responsive-md table-responsive-sm">
                                    <table class="table  table-striped" id="users">

                                        <tr>
                                            <td>Username</td>
                                            <td>{{$user->email}} </td>
                                        </tr>
                                        <tr>
                                            <td>Phone</td>
                                            <td>
                                                {$user->phone}}
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                               Address
                                            </td>
                                            <td>
                                            {{$user->address}}, {{$user->postal}} {{$user->city}}, 
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Country</td>
                                            <td>
                                                {{$user->country}}
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Joined</td>
                                            <td>
                                                {{$user->created_at->diffForHumans()}}
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Created At</td>
                                            <td>
                                                1 month ago
                                            </td>
                                        </tr>
                                        
                                    </table>
                                </div>
                            </div>

                                 <div class="col-md-6 pd-top ml-auto">
                                <form class="form-horizontal">
                                    <p>You can change your password here.</p>
                                    <div class="form-body">
                                        <div class="form-group">
                                            <div class="row">
                                            {{ csrf_field() }}
                                            
                                            
                                          
                                            <div class="col-md-9">
                                                <div class="input-group">
                                                            <span class="input-group-append">
                                                                <span class="input-group-text"><i class="livicon" data-name="key" data-size="16" data-loop="true" data-c="#000" data-hc="#000"></i></span>
                                                            </span>
                                                    <input type="password" id="password" placeholder="New password" name="password"
                                                           class="form-control"/>
                                                </div>
                                            </div>
                                        </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="row">
                                           
                                            <div class="col-md-9">
                                                <div class="input-group">
                                                            <span class="input-group-append">
                                                                <span class="input-group-text"><i class="livicon" data-name="key" data-size="16" data-loop="true" data-c="#000" data-hc="#000"></i></span>
                                                            </span>
                                                    <input type="password" id="password-confirm" placeholder="Confirm new password" name="confirm_password"
                                                           class="form-control"/>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    </div>
                                    <div class="form-actions">
                                        <div class="col-md-offset-3 col-md-9 ml-auto">
                                            <button type="submit" class="btn btn-primary" id="change-password">Submit
                                            </button>
                                            &nbsp;
                                            <input type="reset" class="btn btn-default" value="Reset"></div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        </div>
                    <div id="tab2" class="tab-pane fade">
                        <div class="row">
                    
                </div>
            </div>
        </div>
    </section>
@stop

{{-- page level scripts --}}
@section('footer_scripts')
    <!-- Bootstrap WYSIHTML5 -->
    <script  src="{{ asset('assets/vendors/jasny-bootstrap/js/jasny-bootstrap.js') }}" type="text/javascript"></script>

    <script type="text/javascript">
        $(document).ready(function () {
            $('#change-password').click(function (e) {
                e.preventDefault();
                var check = false;
                if ($('#password').val() ===""){
                    alert('Please Enter password');
                }
                else if  ($('#password').val() !== $('#password-confirm').val()) {
                    alert("confirm password should match with password");
                }
                else if  ($('#password').val() === $('#password-confirm').val()) {
                    check = true;
                }

                if(check == true){
                var sendData =  '_token=' + $("input[name='_token']").val() +'&password=' + $('#password').val() +'&id=' + {{ $user->id }};
                    var path = "passwordreset";
                    $.ajax({
                        url: path,
                        type: "post",
                        data: sendData,
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf_token"]').attr('content')
                        },
                        success: function (data) {
                            $('#password, #password-confirm').val('');
                            alert('password reset successful');
                        },
                        error: function (xhr, ajaxOptions, thrownError) {
                            alert('error in password reset');
                        }
                    });
                }
            });
        });



        $('a[data-toggle="tab"]').on('show.bs.tab', function (e) {
            e.target // newly activated tab
            e.relatedTarget // previous active tab
            $("#clothing-nav-content .tab-pane").removeClass("show active");
        });

    </script>

@stop
