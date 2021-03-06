@extends('admin/layouts/default')

{{-- Page title --}}
@section('title')
User Profile
@parent
@stop

{{-- page level styles --}}
@section('header_styles')

    <link href="{{ asset('assets/vendors/iCheck/css/all.css') }}"  rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/vendors/jasny-bootstrap/css/jasny-bootstrap.css') }}" rel="stylesheet" type="text/css" />
    {{--<link href="{{ asset('assets/vendors/x-editable/css/bootstrap-editable.css') }}" rel="stylesheet" type="text/css" />--}}
    <link href="{{ asset('assets/vendors/bootstrap-magnify/bootstrap-magnify.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/vendors/iCheck/css/all.css') }}" rel="stylesheet"/>
    <link href="{{ asset('assets/css/pages/user_profile.css') }}" rel="stylesheet" type="text/css"/>
    <style>
        .fileinput .thumbnail > img{
            width:100%;
        }
    </style>
    
@stop

{{-- Page content --}}
@section('content')

<section class="content-header">
                <h1>
                    User Profile
                </h1>
                <ol class="breadcrumb">
                    <li>
                        <a href="{{ route('admin.dashboard') }}">
                            <i class="livicon" data-name="home" data-size="14" data-color="#000"></i>
                            Dashboard
                        </a>
                    </li>
                    <li>Users</li>
                    <li class="active">View Profile</li>
                </ol>
            </section>
            <section class="content user_profile">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <div class="text-center">
                                        <div class="fileinput fileinput-new" data-provides="fileinput">
                                            <div class="fileinput-new thumbnail ">
                                                {{--<img src="{{ asset('assets/img/authors/avatar3.jpg') }}" data-src="holder.js/366x218/#fff:#000" class="img-fluid" width="366px" height="218px" />--}}
                                                @if(Sentinel::getUser()->pic)
                                                    <img src="{!! url('/').'/uploads/users/'.Sentinel::getUser()->pic !!}" alt="img"
                                                         class="img-fluid " width="366px" height="218px"/>

                                                @elseif(Sentinel::getUser()->gender === "male")
                                                    <img src="{{ asset('assets/images/authors/avatar3.png') }}" alt="img"
                                                         class="img-fluid " width="366px" height="218px"/>

                                                @elseif(Sentinel::getUser()->gender === "female")
                                                    <img src="{{ asset('assets/images/authors/avatar5.png') }}" alt="img"
                                                         class="img-fluid " width="366px" height="218px"/>
                                                @else
                                                    <img src="{{ asset('assets/images/authors/no_avatar.jpg') }}" alt="img"
                                                         class="img-fluid" width="366px" height="218px"/>
                                                @endif
                                            </div>
                                            <div class="fileinput-preview fileinput-exists thumbnail" ></div>
                                            <div>
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
                                            <td>
                                                <a href="#" data-pk="1" class="editable" data-title="Edit User Name"> </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Email</td>
                                            <td>
                                                <a href="#" data-pk="1" class="editable" data-title="Edit E-mail">
                                                    gankunding@hotmail.com
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                Phone Number
                                            </td>
                                            <td>
                                                <a href="#" data-pk="1" class="editable" data-title="Edit Phone Number">
                                                    (999) 999-9999
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Address</td>
                                            <td>
                                                <a href="#" data-pk="1" class="editable" data-title="Edit Address">
                                                    Sydney, Australia
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Status</td>
                                            <td>
                                                <a href="#" id="status" data-type="select" data-pk="1" data-value="1" data-title="Status"></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Created At</td>
                                            <td>
                                                1 month ago
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>City</td>
                                            <td>
                                                <a href="#" data-pk="1"  class="editable" data-title="Edit City">Nakia</a>
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                                    <div class="card colr-hed">
                                        <div class="card-heading">
                                            <h3 class="card-title">Friends</h3>
                                        </div>
                                        <div class="card-body">
                                            <div class="row">
                                            <div class="col-md-3 col-6">
                                                <div class="mag img-fluid">
                                                    <br />
                                                    <img data-toggle="magnify" class="thumbnail img-fluid" src="{{ asset('assets/img/authors/avatar.jpg') }}" alt=""></div>
                                            </div>
                                            <div class="col-md-3 col-6">
                                                <div class="mag img-fluid">
                                                    <br />
                                                    <img data-toggle="magnify" src="{{ asset('assets/img/authors/avatar3.jpg') }}" alt="" class="thumbnail img-fluid"></div>
                                            </div>
                                            <div class="col-md-3 col-6">
                                                <div class="mag img-fluid">
                                                    <br />
                                                    <img data-toggle="magnify" src="{{ asset('assets/img/authors/avatar7.jpg') }}" alt="" class="thumbnail img-fluid"></div>
                                            </div>
                                            <div class="col-md-3 col-6">
                                                <div class="mag img-fluid">
                                                    <br />
                                                    <img data-toggle="magnify" src="{{ asset('assets/img/authors/avatar5.jpg') }}" alt="" class="thumbnail img-fluid"></div>
                                            </div>

                                            <!--/span-->
                                            <div class="col-md-3 col-6">
                                                <div class="mag img-fluid">
                                                    <br />
                                                    <img data-toggle="magnify" src="{{ asset('assets/img/authors/avatar4.jpg') }}" alt="" class="thumbnail img-fluid"></div>
                                            </div>
                                            <div class="col-md-3 col-6">
                                                <div class="mag img-fluid">
                                                    <br />
                                                    <img data-toggle="magnify" src="{{ asset('assets/img/authors/avatar3.jpg') }}" alt="" class="thumbnail img-fluid"></div>
                                            </div>
                                            <div class="col-md-3 col-6">
                                                <div class="mag img-fluid">
                                                    <br />
                                                    <img data-toggle="magnify" src="{{ asset('assets/img/authors/avatar2.jpg') }}" alt="" class="thumbnail img-fluid"></div>
                                            </div>
                                            <div class="col-md-3 col-6">
                                                <div class="mag img-fluid">
                                                    <br />
                                                    <img data-toggle="magnify" src="{{ asset('assets/img/authors/avatar.jpg') }}" alt="" class="thumbnail img-fluid"></div>
                                            </div>

                                            <div class="col-md-3 col-6">
                                                <div class="mag img-fluid">
                                                    <br />
                                                    <img data-toggle="magnify" src="{{ asset('assets/img/authors/avatar3.jpg') }}" alt="" class="thumbnail img-fluid"></div>
                                            </div>
                                            <div class="col-md-3 col-6">
                                                <div class="mag img-fluid">
                                                    <br />
                                                    <img data-toggle="magnify" src="{{ asset('assets/img/authors/avatar4.jpg') }}" alt="" class="thumbnail img-fluid"></div>
                                            </div>
                                            <div class="col-md-3 col-6">
                                                <div class="mag img-fluid">
                                                    <br />
                                                    <img data-toggle="magnify" src="{{ asset('assets/img/authors/avatar7.jpg') }}" alt="" class="thumbnail img-fluid"></div>
                                            </div>
                                            <div class="col-md-3 col-6">
                                                <div class="mag img-fluid">
                                                    <br />
                                                    <img data-toggle="magnify" src="{{ asset('assets/img/authors/avatar.jpg') }}" alt="" class="thumbnail img-fluid"></div>
                                            </div>

                                            <div class="col-md-3 col-6">
                                                <div class="mag img-fluid">
                                                    <br />
                                                    <img data-toggle="magnify" class="thumbnail img-fluid" src="{{ asset('assets/img/authors/avatar1.jpg') }}" alt=""></div>
                                            </div>
                                            <div class="col-md-3 col-6">
                                                <div class="mag img-fluid">
                                                    <br />
                                                    <img data-toggle="magnify" src="{{ asset('assets/img/authors/avatar2.jpg') }}" alt="" class="thumbnail img-fluid"></div>
                                            </div>
                                            <div class="col-md-3 col-6">
                                                <div class="mag img-fluid">
                                                    <br />
                                                    <img data-toggle="magnify" src="{{ asset('assets/img/authors/avatar3.jpg') }}" alt="" class="thumbnail img-fluid"></div>
                                            </div>
                                            <div class="col-md-3 col-6">
                                                <div class="mag img-fluid">
                                                    <br />
                                                    <img data-toggle="magnify" src="{{ asset('assets/img/authors/avatar4.jpg') }}" alt="" class="thumbnail img-fluid"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                            <div class="col-md-8">
                                <ul class="nav nav-tabs ul-edit">
                                 
                                    <li class="nav-item">
                                        <a href="#tab-change-pwd" data-toggle="tab" class="nav-link">
                                            <i class="livicon" data-name="key" data-size="16" data-c="#01BC8C" data-hc="#01BC8C" data-loop="true"></i> Change Password
                                        </a>
                                    </li>
                                </ul>
                                <div class="tab-content" id="clothing-nav-content">
                                    
                                                    </div>
                                                    <!-- media --> </div>
                                            </div>
                                            <!-- media --> </div>
                                   
                                    <div id="tab-change-pwd" class="tab-pane fade">
                                        <div class="row">
                                            <div class="col-md-12 pd-top">
                                                <form  class="form-horizontal">
                                                    <div class="form-body">
                                                        <div class="form-group">
                                                            <div class="row">

                                                            <label  class="col-md-3 control-label">
                                                                Password

                                                            </label>
                                                            <div class="col-md-9">

                                                                <div class="input-group">
                                                                    <span class="input-group-append">
                                                                        <span class="input-group-text"><i class="livicon" data-name="key" data-size="16" data-loop="true" data-c="#000" data-hc="#000"></i>
                                                                    </span>
                                                                        </span>
                                                                    <input type="password" id="password" placeholder="Password" name="password" class="form-control"/>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <div class="row">
                                                            <label class="col-md-3 control-label">
                                                                Confirm Password

                                                            </label>
                                                            <div class="col-md-9">
                                                                <div class="input-group">
                                                                    <span class="input-group-append">
                                                                        <span class="input-group-text"><i class="livicon" data-name="key" data-size="16" data-loop="true" data-c="#000" data-hc="#000"></i>
                                                                    </span>
                                                                        </span>
                                                                    <input type="password" id="password-confirm" placeholder="Confirm Password" name="confirm_password" class="form-control"/>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        </div>

                                                    </div>
                                                    <div class="form-actions">
                                                        <div class="col-md-offset-3 col-md-9 ml-auto">
                                                            <button type="submit" class="btn btn-primary" id="change-password">Submit</button>
                                                            &nbsp;
                                                            {{--<button type="reset" class="btn btn-danger">Cancel</button>--}}
                                                            &nbsp;
                                                            <input type="reset" class="btn btn-default hidden-xs" value="Reset"></div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>

                                    <div id="tab-messages" class="tab-pane fade">
                                        <table class="table table-striped table-advance table-hover web-mail" id="inbox-check">

                                            <tbody>
                                                <tr data-messageid="1" class="unread">
                                                    <td style="width:4%;" class="inbox-small-cells">
                                                        <div class="checker">
                                                            <span>
                                                                <input type="checkbox" class="mail-checkbox custom-checkbox"></span>
                                                        </div>
                                                    </td>
                                                    <td  class="inbox-small-cells">
                                                        <i class="livicon" data-n="star-full" data-s="15"></i>
                                                    </td>
                                                    <td  class="view-message hidden-xs">
                                                        <a href="{{ URL::to('admin/view_mail') }}">
                                                            <img data-src="holder.js/25x25/#000:#fff" class="rounded-circle img-fluid pull-left" alt="Image">John</a>
                                                    </td>
                                                    <td  class="view-message ">
                                                        <a href="{{ URL::to('admin/view_mail') }}">
                                                            Fwd: Make changes as needed
                                                        </a>
                                                    </td>
                                                    <td class="view-message inbox-small-cells">
                                                        <a href="{{ URL::to('admin/view_mail') }}">
                                                            <i class="fa fa-paperclip"></i>
                                                        </a>
                                                    </td>
                                                    <td  class="view-message text-right">
                                                        <a href="{{ URL::to('admin/view_mail') }}">16:30 PM</a>
                                                    </td>
                                                </tr>
                                                <tr data-messageid="2" class="unread">
                                                    <td class="inbox-small-cells">
                                                        <div class="checker">
                                                            <span>
                                                                <input type="checkbox" class="mail-checkbox custom-checkbox"></span>
                                                        </div>
                                                    </td>
                                                    <td class="inbox-small-cells">
                                                        <i class="livicon" data-n="star-full" data-s="15"></i>
                                                    </td>
                                                    <td class="view-message hidden-xs">
                                                        <a href="{{ URL::to('admin/view_mail') }}">
                                                            <img data-src="holder.js/25x25/#000:#fff" class="rounded-circle img-fluid pull-left" alt="Image">Marin</a>
                                                    </td>
                                                    <td class="view-message">
                                                        <a href="{{ URL::to('admin/view_mail') }}">
                                                            Ya comin' to our July webinar?
                                                        </a>
                                                    </td>
                                                    <td class="view-message inbox-small-cells">
                                                        <a href="{{ URL::to('admin/view_mail') }}"></a>
                                                    </td>
                                                    <td class="view-message text-right">
                                                        <a href="{{ URL::to('admin/view_mail') }}">June 15</a>
                                                    </td>
                                                </tr>
                                                <tr data-messageid="3">
                                                    <td class="inbox-small-cells">
                                                        <div class="checker">
                                                            <span>
                                                                <input type="checkbox" class="mail-checkbox custom-checkbox"></span>
                                                        </div>
                                                    </td>
                                                    <td class="inbox-small-cells">
                                                        <i class="livicon" data-n="star-full" data-s="15"></i>
                                                    </td>
                                                    <td class="view-message hidden-xs">
                                                        <a href="{{ URL::to('admin/view_mail') }}">
                                                            <img data-src="holder.js/25x25/#000:#fff" class="rounded-circle img-fluid pull-left" alt="Image">Jenny</a>
                                                    </td>
                                                    <td class="view-message">
                                                        <a href="{{ URL::to('admin/view_mail') }}">
                                                            Mobile-First Type & Layout
                                                        </a>
                                                    </td>
                                                    <td class="view-message inbox-small-cells">
                                                        <a href="{{ URL::to('admin/view_mail') }}"></a>
                                                    </td>
                                                    <td class="view-message text-right">
                                                        <a href="{{ URL::to('admin/view_mail') }}">June 15</a>
                                                    </td>
                                                </tr>
                                                <tr data-messageid="4">
                                                    <td class="inbox-small-cells">
                                                        <div class="checker">
                                                            <span>
                                                                <input type="checkbox" class="mail-checkbox custom-checkbox"></span>
                                                        </div>
                                                    </td>
                                                    <td class="inbox-small-cells">
                                                        <i class="livicon" data-n="star-full" data-s="15"></i>
                                                    </td>
                                                    <td class="view-message hidden-xs">
                                                        <a href="{{ URL::to('admin/view_mail') }}">
                                                            <img data-src="holder.js/25x25/#000:#fff" class="rounded-circle img-fluid pull-left" alt="Image">Twiter</a>
                                                    </td>
                                                    <td class="view-message">
                                                        <a href="{{ URL::to('admin/view_mail') }}">
                                                            This looks like borrows page
                                                        </a>
                                                    </td>
                                                    <td class="view-message inbox-small-cells">
                                                        <a href="{{ URL::to('admin/view_mail') }}"></a>
                                                    </td>
                                                    <td class="view-message text-right">
                                                        <a href="{{ URL::to('admin/view_mail') }}">June 14</a>
                                                    </td>
                                                </tr>
                                                <tr data-messageid="5">
                                                    <td class="inbox-small-cells">
                                                        <div class="checker">
                                                            <span>
                                                                <input type="checkbox" class="mail-checkbox custom-checkbox"></span>
                                                        </div>
                                                    </td>
                                                    <td class="inbox-small-cells">
                                                        <i class="livicon" data-n="star-full" data-s="15"></i>
                                                    </td>
                                                    <td class="view-message hidden-xs">
                                                        <a href="{{ URL::to('admin/view_mail') }}">
                                                            <img data-src="holder.js/25x25/#000:#fff" class="rounded-circle img-fluid pull-left" alt="Image">Grace</a>
                                                    </td>
                                                    <td class="view-message">
                                                        <a href="{{ URL::to('admin/view_mail') }}">
                                                            Ya comin' to our July webinar?
                                                        </a>
                                                    </td>
                                                    <td class="view-message inbox-small-cells">
                                                        <a href="{{ URL::to('admin/view_mail') }}"></a>
                                                    </td>
                                                    <td class="view-message text-right">
                                                        <a href="{{ URL::to('admin/view_mail') }}">June 15</a>
                                                    </td>
                                                </tr>
                                                <tr data-messageid="6">
                                                    <td class="inbox-small-cells">
                                                        <div class="checker">
                                                            <span>
                                                                <input type="checkbox" class="mail-checkbox custom-checkbox"></span>
                                                        </div>
                                                    </td>
                                                    <td class="inbox-small-cells">
                                                        <i class="livicon" data-n="star-full" data-s="15"></i>
                                                    </td>
                                                    <td class="view-message hidden-xs">
                                                        <a href="{{ URL::to('admin/view_mail') }}">
                                                            <img data-src="holder.js/25x25/#000:#fff" class="rounded-circle img-fluid pull-left" alt="Image">Kimy</a>
                                                    </td>
                                                    <td class="view-message">
                                                        <a href="{{ URL::to('admin/view_mail') }}">
                                                            Analysis on Views
                                                        </a>
                                                    </td>
                                                    <td class="view-message inbox-small-cells">
                                                        <a href="{{ URL::to('admin/view_mail') }}">
                                                            <i class="fa fa-paperclip"></i>
                                                        </a>
                                                    </td>
                                                    <td class="view-message text-right">
                                                        <a href="{{ URL::to('admin/view_mail') }}">June 14</a>
                                                    </td>
                                                </tr>
                                                <tr data-messageid="7">
                                                    <td class="inbox-small-cells">
                                                        <div class="checker">
                                                            <span>
                                                                <input type="checkbox" class="mail-checkbox custom-checkbox"></span>
                                                        </div>
                                                    </td>
                                                    <td class="inbox-small-cells">
                                                        <i class="livicon" data-n="star-full" data-s="15"></i>
                                                    </td>
                                                    <td class="view-message hidden-xs">
                                                        <a href="{{ URL::to('admin/view_mail') }}">
                                                            <img data-src="holder.js/25x25/#000:#fff" class="rounded-circle img-fluid pull-left" alt="Image">Tony</a>
                                                    </td>
                                                    <td class="view-message">
                                                        <a href="{{ URL::to('admin/view_mail') }}">
                                                            Ya comin' to our July webinar?
                                                        </a>
                                                    </td>
                                                    <td class="view-message inbox-small-cells">
                                                        <a href="{{ URL::to('admin/view_mail') }}">
                                                            <i class="fa fa-paperclip"></i>
                                                        </a>
                                                    </td>
                                                    <td class="view-message text-right">
                                                        <a href="{{ URL::to('admin/view_mail') }}">June 15</a>
                                                    </td>
                                                </tr>
                                                <tr data-messageid="8">
                                                    <td class="inbox-small-cells">
                                                        <div class="checker">
                                                            <span>
                                                                <input type="checkbox" class="mail-checkbox custom-checkbox"></span>
                                                        </div>
                                                    </td>
                                                    <td class="inbox-small-cells">
                                                        <i class="livicon" data-n="star-full" data-s="15"></i>
                                                    </td>
                                                    <td class="view-message hidden-xs">
                                                        <a href="{{ URL::to('admin/view_mail') }}">
                                                            <img data-src="holder.js/25x25/#000:#fff" class="rounded-circle img-fluid pull-left" alt="Image">Sandy</a>
                                                    </td>
                                                    <td class="view-message view-message">
                                                        <a href="{{ URL::to('admin/view_mail') }}">
                                                            Analysis on Views
                                                        </a>
                                                    </td>
                                                    <td class="view-message inbox-small-cells">
                                                        <a href="{{ URL::to('admin/view_mail') }}"></a>
                                                    </td>
                                                    <td class="view-message text-right">
                                                        <a href="{{ URL::to('admin/view_mail') }}">June 14</a>
                                                    </td>
                                                </tr>
                                                <tr data-messageid="9">
                                                    <td class="inbox-small-cells">
                                                        <div class="checker">
                                                            <span>
                                                                <input type="checkbox" class="mail-checkbox custom-checkbox"></span>
                                                        </div>
                                                    </td>
                                                    <td class="inbox-small-cells">
                                                        <i class="livicon" data-n="star-full" data-s="15"></i>
                                                    </td>
                                                    <td class="view-message hidden-xs">
                                                        <a href="{{ URL::to('admin/view_mail') }}">
                                                            <img data-src="holder.js/25x25/#000:#fff" class="rounded-circle img-fluid pull-left" alt="Image">Avin</a>
                                                    </td>
                                                    <td class="view-message view-message">
                                                        <a href="{{ URL::to('admin/view_mail') }}">
                                                            Mobile-First Type & Layout
                                                        </a>
                                                    </td>
                                                    <td class="view-message inbox-small-cells">
                                                        <a href="{{ URL::to('admin/view_mail') }}"></a>
                                                    </td>
                                                    <td class="view-message text-right">
                                                        <a href="{{ URL::to('admin/view_mail') }}">June 15</a>
                                                    </td>
                                                </tr>
                                                <tr data-messageid="10">
                                                    <td class="inbox-small-cells">
                                                        <div class="checker">
                                                            <span>
                                                                <input type="checkbox" class="mail-checkbox custom-checkbox"></span>
                                                        </div>
                                                    </td>
                                                    <td class="inbox-small-cells">
                                                        <i class="livicon" data-n="star-full" data-s="15"></i>
                                                    </td>
                                                    <td class="view-message hidden-xs">
                                                        <a href="{{ URL::to('admin/view_mail') }}">
                                                            <img data-src="holder.js/25x25/#000:#fff" class="rounded-circle img-fluid pull-left" alt="Image">MJ</a>
                                                    </td>
                                                    <td class="view-message view-message">
                                                        <a href="{{ URL::to('admin/view_mail') }}">
                                                            Make changes as needed
                                                        </a>
                                                    </td>
                                                    <td class="view-message inbox-small-cells">
                                                        <a href="{{ URL::to('admin/view_mail') }}"></a>
                                                    </td>
                                                    <td class="view-message text-right">
                                                        <a href="{{ URL::to('admin/view_mail') }}">June 14</a>
                                                    </td>
                                                </tr>
                                                <tr data-messageid="11">
                                                    <td class="inbox-small-cells">
                                                        <div class="checker">
                                                            <span>
                                                                <input type="checkbox" class="mail-checkbox custom-checkbox"></span>
                                                        </div>
                                                    </td>
                                                    <td class="inbox-small-cells">
                                                        <i class="livicon" data-n="star-full" data-s="15"></i>
                                                    </td>
                                                    <td class="view-message hidden-xs">
                                                        <a href="{{ URL::to('admin/view_mail') }}">
                                                            <img data-src="holder.js/25x25/#000:#fff" class="rounded-circle img-fluid pull-left" alt="Image">Lofer</a>
                                                    </td>
                                                    <td class="view-message">
                                                        <a href="{{ URL::to('admin/view_mail') }}">
                                                            Welcome back to here
                                                        </a>
                                                    </td>
                                                    <td class="view-message inbox-small-cells">
                                                        <a href="{{ URL::to('admin/view_mail') }}"></a>
                                                    </td>
                                                    <td class="view-message text-right">
                                                        <a href="{{ URL::to('admin/view_mail') }}">June 15</a>
                                                    </td>
                                                </tr>
                                                <tr data-messageid="12">
                                                    <td class="inbox-small-cells">
                                                        <div class="checker">
                                                            <span>
                                                                <input type="checkbox" class="mail-checkbox custom-checkbox"></span>
                                                        </div>
                                                    </td>
                                                    <td class="inbox-small-cells">
                                                        <i class="livicon" data-n="star-full" data-s="15"></i>
                                                    </td>
                                                    <td class="hidden-xs">
                                                        <span class="view-message hidden-xs">
                                                            <a href="{{ URL::to('admin/view_mail') }}">
                                                                <img data-src="holder.js/25x25/#000:#fff" class="rounded-circle img-fluid pull-left" alt="Image">Renny</a>
                                                        </span>
                                                    </td>
                                                    <td class="view-message">
                                                        <a href="{{ URL::to('admin/view_mail') }}">
                                                            Dolor sit amet, consectetuer adipiscing
                                                        </a>
                                                    </td>
                                                    <td class="view-message inbox-small-cells">
                                                        <a href="{{ URL::to('admin/view_mail') }}">
                                                            <i class="fa fa-paperclip"></i>
                                                        </a>
                                                    </td>
                                                    <td class="view-message text-right">
                                                        <a href="{{ URL::to('admin/view_mail') }}">June 14</a>
                                                    </td>
                                                </tr>
                                                <tr data-messageid="13">
                                                    <td class="inbox-small-cells">
                                                        <div class="checker">
                                                            <span>
                                                                <input type="checkbox" class="mail-checkbox custom-checkbox"></span>
                                                        </div>
                                                    </td>
                                                    <td class="inbox-small-cells">
                                                        <i class="livicon" data-n="star-full" data-s="15"></i>
                                                    </td>
                                                    <td class="view-message hidden-xs">
                                                        <a href="{{ URL::to('admin/view_mail') }}">
                                                            <img data-src="holder.js/25x25/#000:#fff" class="rounded-circle img-fluid pull-left" alt="Image">Benny</a>
                                                    </td>
                                                    <td class="view-message">
                                                        <a href="{{ URL::to('admin/view_mail') }}">
                                                            This looks like borrows page
                                                        </a>
                                                    </td>
                                                    <td class="view-message inbox-small-cells">
                                                        <a href="{{ URL::to('admin/view_mail') }}">
                                                            <i class="fa fa-paperclip"></i>
                                                        </a>
                                                    </td>
                                                    <td class="view-message text-right">
                                                        <a href="{{ URL::to('admin/view_mail') }}">June 15</a>
                                                    </td>
                                                </tr>
                                                <tr data-messageid="14">
                                                    <td class="inbox-small-cells">
                                                        <div class="checker">
                                                            <span>
                                                                <input type="checkbox" class="mail-checkbox custom-checkbox"></span>
                                                        </div>
                                                    </td>
                                                    <td class="inbox-small-cells">
                                                        <i class="livicon" data-n="star-full" data-s="15"></i>
                                                    </td>
                                                    <td class="hidden-xs">
                                                        <span class="view-message hidden-xs">
                                                            <a href="{{ URL::to('admin/view_mail') }}">
                                                                <img data-src="holder.js/25x25/#000:#fff" class="rounded-circle img-fluid pull-left" alt="Image">Grace</a>
                                                        </span>
                                                    </td>
                                                    <td class="view-message view-message">
                                                        <a href="{{ URL::to('admin/view_mail') }}">
                                                            Analysis on Views
                                                        </a>
                                                    </td>
                                                    <td class="view-message inbox-small-cells">
                                                        <a href="{{ URL::to('admin/view_mail') }}"></a>
                                                    </td>
                                                    <td class="view-message text-right">
                                                        <a href="{{ URL::to('admin/view_mail') }}">June 14</a>
                                                    </td>
                                                </tr>
                                                <tr data-messageid="15">
                                                    <td class="inbox-small-cells">
                                                        <div class="checker">
                                                            <span>
                                                                <input type="checkbox" class="mail-checkbox custom-checkbox"></span>
                                                        </div>
                                                    </td>
                                                    <td class="inbox-small-cells">
                                                        <i class="livicon" data-n="star-full" data-s="15"></i>
                                                    </td>
                                                    <td class="view-message hidden-xs">
                                                        <a href="{{ URL::to('admin/view_mail') }}">
                                                            <img data-src="holder.js/25x25/#000:#fff" class="rounded-circle img-fluid pull-left" alt="Image">Mike</a>
                                                    </td>
                                                    <td class="view-message">
                                                        <a href="{{ URL::to('admin/view_mail') }}">
                                                            Ya comin' to our July webinar?
                                                        </a>
                                                    </td>
                                                    <td class="view-message inbox-small-cells">
                                                        <a href="{{ URL::to('admin/view_mail') }}"></a>
                                                    </td>
                                                    <td class="view-message text-right">
                                                        <a href="{{ URL::to('admin/view_mail') }}">June 15</a>
                                                    </td>
                                                </tr>
                                                <tr data-messageid="16">
                                                    <td class="inbox-small-cells">
                                                        <div class="checker">
                                                            <span>
                                                                <input type="checkbox" class="mail-checkbox custom-checkbox"></span>
                                                        </div>
                                                    </td>
                                                    <td class="inbox-small-cells">
                                                        <i class="livicon" data-n="star-full" data-s="15"></i>
                                                    </td>
                                                    <td class="view-message hidden-xs">
                                                        <a href="{{ URL::to('admin/view_mail') }}">
                                                            <img data-src="holder.js/25x25/#000:#fff" class="rounded-circle img-fluid pull-left" alt="Image">Clark</a>
                                                    </td>
                                                    <td class="view-message">
                                                        <a href="{{ URL::to('admin/view_mail') }}">
                                                            Make changes as needed
                                                        </a>
                                                    </td>
                                                    <td class="view-message inbox-small-cells">
                                                        <a href="{{ URL::to('admin/view_mail') }}"></a>
                                                    </td>
                                                    <td class="view-message text-right">
                                                        <a href="{{ URL::to('admin/view_mail') }}">June 14</a>
                                                    </td>
                                                </tr>
                                                <tr data-messageid="17">
                                                    <td class="inbox-small-cells">
                                                        <div class="checker">
                                                            <span>
                                                                <input type="checkbox" class="mail-checkbox custom-checkbox"></span>
                                                        </div>
                                                    </td>
                                                    <td class="inbox-small-cells">
                                                        <i class="livicon" data-n="star-full" data-s="15"></i>
                                                    </td>
                                                    <td class="view-message hidden-xs">
                                                        <a href="{{ URL::to('admin/view_mail') }}">
                                                            <img data-src="holder.js/25x25/#000:#fff" class="rounded-circle img-fluid pull-left" alt="Image">Robin</a>
                                                    </td>
                                                    <td class="view-message">
                                                        <a href="{{ URL::to('admin/view_mail') }}">
                                                            Mobile-First Type & Layout
                                                        </a>
                                                    </td>
                                                    <td class="view-message inbox-small-cells">
                                                        <a href="{{ URL::to('admin/view_mail') }}"></a>
                                                    </td>
                                                    <td class="view-message text-right">
                                                        <a href="{{ URL::to('admin/view_mail') }}">June 15</a>
                                                    </td>
                                                </tr>
                                                <tr data-messageid="18">
                                                    <td class="inbox-small-cells">
                                                        <div class="checker">
                                                            <span>
                                                                <input type="checkbox" class="mail-checkbox custom-checkbox"></span>
                                                        </div>
                                                    </td>
                                                    <td class="inbox-small-cells">
                                                        <i class="livicon" data-n="star-full" data-s="15"></i>
                                                    </td>
                                                    <td class="view-message hidden-xs">
                                                        <a href="{{ URL::to('admin/view_mail') }}">
                                                            <img data-src="holder.js/25x25/#000:#fff" class="rounded-circle img-fluid pull-left" alt="Image">FB</a>
                                                    </td>
                                                    <td class="view-message view-message">
                                                        <a href="{{ URL::to('admin/view_mail') }}">
                                                            Ya comin' to our July webinar?
                                                        </a>
                                                    </td>
                                                    <td class="view-message inbox-small-cells">
                                                        <a href="{{ URL::to('admin/view_mail') }}">
                                                            <i class="fa fa-paperclip"></i>
                                                        </a>
                                                    </td>
                                                    <td class="view-message text-right">
                                                        <a href="{{ URL::to('admin/view_mail') }}">June 14</a>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>

            </section>

        
    @stop

{{-- page level scripts --}}
@section('footer_scripts')

    <script src="{{ asset('assets/vendors/jasny-bootstrap/js/jasny-bootstrap.js') }}"  type="text/javascript"></script>
    <script src="{{ asset('assets/vendors/jquery-mockjax/js/jquery.mockjax.js') }}"  type="text/javascript"></script>
    {{--<script src="{{ asset('assets/vendors/x-editable/js/bootstrap-editable.js') }}"  type="text/javascript"></script>--}}
    <script src="{{ asset('assets/vendors/bootstrap-magnify/bootstrap-magnify.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/vendors/iCheck/js/icheck.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/js/holder.js') }}"  type="text/javascript"></script>
    <script src="{{ asset('assets/js/pages/user_profile.js') }}"  type="text/javascript"></script>

<script>
    $('a[data-toggle="tab"]').on('show.bs.tab', function (e) {
        e.target // newly activated tab
        e.relatedTarget // previous active tab
        $("#clothing-nav-content .tab-pane").removeClass("show active");
    });
</script>

@stop
