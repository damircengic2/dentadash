@extends('admin/layouts/default')

{{-- Page title --}}
@section('title')
    Form examples
@stop

{{-- page level styles --}}
@section('header_styles')

    <link href="{{ asset('assets/vendors/jasny-bootstrap/css/jasny-bootstrap.css') }}"  rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/vendors/iCheck/css/all.css') }}"  rel="stylesheet" type="text/css" />
    <style>

        .container{
            margin-top:20px;
        }
        .image-preview-input {
            position: relative;
            overflow: hidden;
            margin: 0px;
            color: #333;
            background-color: #fff;
            border-color: #ccc;
        }
        .image-preview-input input[type=file] {
            position: absolute;
            top: 0;
            right: 0;
            margin: 0;
            padding: 0;
            font-size: 20px;
            cursor: pointer;
            opacity: 0;
            filter: alpha(opacity=0);
        }
        .image-preview-input-title {
            margin-left:2px;
        }
        .image_radius{
            border-top-right-radius: 4px !important;
            border-top-left-radius: 0 !important;
            border-bottom-left-radius: 0 !important;
            border-bottom-right-radius: 4px !important;
        }
        .fileinput .thumbnail > img{
            width:100%;
        }
        .color_a{
            color: #333;
        }
        .btn-file > input{
            width: auto;
        }
    </style>

@stop
{{-- Page content --}}
@section('content')

    <section class="content-header">
        <!--section starts-->
        <h1>Form Examples</h1>
        <ol class="breadcrumb">
            <li>
                <a href="{{ route('admin.dashboard') }}">
                    <i class="livicon" data-name="home" data-size="14" data-loop="true"></i>
                    Dashboard
                </a>
            </li>
            <li>
                <a href="{{ route('admin.dashboard') }}">Invoices</a>
            </li>
            <li class="active">Products &amp; services</li>
        </ol>
    </section>
    <!--section ends-->
    <section class="content">
        <!--main content-->
        <div class="row">
            <!--row starts-->
   <div class="col-md-4 col-lg-3 col-4">
                <!--input form starts-->
                <div class="my-3">
                <div class="card panel-warning" id="hidepanel5">
                    <div class="card-heading">
                        <h3 class="card-title">
                            Add new Product or Service
                        </h3>
                                <span class="float-right">
                                    <i class="fa fa-plus-circle"></i>
                                </span>
                    </div>
                    <div class="card-body">
                        <div class="row">
    <div class="col-md-12" style="">
        <div class="form-group ui-draggable-handle" style="position: static;">
            <label for="input-text-2">Product or service name*</label>
            <input class="form-control" id="input-text-2" placeholder="type here" type="text" required>
                    </div>
                     <div class="form-group ui-draggable-handle" style="">
            <label for="select-1">Category</label>
            <select class="form-control" id="select-1">
                                                        <option value="Option 1">Prostethics</option>
                                                        <option value="Option 2">Orthodontics</option>
                                                        <option value="Option 3">General dentistry</option>
                                                        <option value="Option 4">Materials</option>
                                                    </select>
            
        </div>
         <div class="form-group ui-draggable-handle" style="position: static;">
            <label for="input-text-3">Unit</label>
            <input class="form-control" id="input-text-3" placeholder="type here" type="text" required>
            
        </div>
        <div class="form-group ui-draggable-handle" style="position: static;">
            <label for="input-text-3">Price per unit</label>
            <input class="form-control" id="input-text-3" placeholder="type here" type="number" step="0.01" min="0" required>
            
        </div>
       
        <div class="form-group ui-draggable-handle" style="position: static;">
            <label for="input-text-4">Cost per unit</label>
            <input class="form-control" id="input-text-4" placeholder="type here" type="number" step="0.01" min="0">
            
        </div>
        <div class="form-group pd-right ui-draggable-handle" style="position: static;">
            <button type="submit" class="btn btn-default">Save</button>
        </div>
    </div>


</div>
                           
                    </div>
                </div>
                    </div>
            </div>

            <!--md-6 ends-->
            <div class="col-md-12 col-lg-8 col-12 my-3">
                <!--md-6 starts-->
               <!-- BEGIN EXAMPLE TABLE PORTLET-->
                <div class="card panel-danger table-edit">
                    <div class="card-heading">
                        <h3 class="card-title">
                                    <span>
                                    
                                    Products &amp; services list </span>
                        </h3>
                       
                    </div>
                    <div class="card-body">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}"/>
                        <div id="sample_editable_1_wrapper" class="">
                            <div class="table-responsive-lg table-responsive-sm table-responsive-md">
                            <table class="table table-striped table-bordered table-hover dataTable no-footer sample_editable"
                                   id="sample_editable_1" role="grid" width="100%">
                                <thead>
                                <tr role="row">
                                    <th class="sorting_asc" tabindex="0" aria-controls="sample_editable_1" rowspan="1"
                                        colspan="1">ID
                                    </th>
                                    <th class="sorting_asc" tabindex="0" aria-controls="sample_editable_1" rowspan="1"
                                        colspan="1">Item name
                                    </th>
                                    <th class="sorting" tabindex="0" aria-controls="sample_editable_1" rowspan="1"
                                        colspan="1" aria-label="
                                                 Last Name
                                            : activate to sort column ascending">Category
                                    </th>
                                    <th class="sorting" tabindex="0" aria-controls="sample_editable_1" rowspan="1"
                                        colspan="1" aria-label="
                                                 Points
                                            : activate to sort column ascending" style="width: 124px;">Price/unit
                                    </th>
                                    <th class="sorting" tabindex="0" aria-controls="sample_editable_1" rowspan="1"
                                        colspan="1" aria-label="
                                                 Notes
                                            : activate to sort column ascending" style="width: 152px;">Unit
                                    </th>
                                     <th class="sorting" tabindex="0" aria-controls="sample_editable_1" rowspan="1"
                                        colspan="1" aria-label="
                                                 Cost/unit
                                            : activate to sort column ascending" style="width: 152px;">Cost/unit
                                    </th>
                                    <th class="sorting" tabindex="0" aria-controls="sample_editable_1" rowspan="1"
                                        colspan="1" aria-label="
                                                 Edit
                                            : activate to sort column ascending" style="width: 88px;">Edit
                                    </th>
                                    <th class="sorting" tabindex="0" aria-controls="sample_editable_1" rowspan="1"
                                        colspan="1" aria-label="
                                                 Delete
                                            : activate to sort column ascending" style="width: 125px;">Delete
                                    </th>
                                </tr>
                                </thead>
                                <tbody>

                                </tbody>
                            </table>
                            </div>
                        </div>
                        <!-- END EXAMPLE TABLE PORTLET-->
            </div>
            <!--md-6 ends-->
       
        <!--main content ends--> </section>
    <!-- content -->
@stop

{{-- page level scripts --}}
@section('footer_scripts')

    <script src="{{ asset('assets/vendors/jasny-bootstrap/js/jasny-bootstrap.js') }}" ></script>
    <script src="{{ asset('assets/vendors/iCheck/js/icheck.js') }}"></script>
    <script src="{{ asset('assets/js/pages/form_examples.js') }}"></script>

    <script>
        $(document).on('click', '#close-preview', function(){
            $('.image-preview').popover('hide');
            // Hover befor close the preview
            $('.image-preview').hover(
                function () {
                    $('.image-preview').popover('show');
                },
                function () {
                    $('.image-preview').popover('hide');
                }
            );
        });

        $(function() {
            // Create the close button
            var closebtn = $('<button/>', {
                type:"button",
                text: 'x',
                id: 'close-preview',
                style: 'font-size: initial;',
            });
            closebtn.attr("class","close pull-right");
        // Set the popover default content
        $('.image-preview').popover({
            trigger:'manual',
            html:true,
            title: "<strong>Preview</strong>"+$(closebtn)[0].outerHTML,
            content: "There's no image",
            placement:'bottom'
        });
        // Clear event
        $('.image-preview-clear').click(function(){
            $('.image-preview').attr("data-content","").popover('hide');
            $('.image-preview-filename').val("");
            $('.image-preview-clear').hide();
            $('.image-preview-input input:file').val("");
            $(".image-preview-input-title").text("Browse");
        });
        // Create the preview image
        $(".image-preview-input input:file").change(function (){
            var img = $('<img/>', {
                id: 'dynamic',
                width:250,
                height:200
            });
            var file = this.files[0];
            var reader = new FileReader();
            // Set preview image into the popover data-content
            reader.onload = function (e) {
                $(".image-preview-input-title").text("Change");
                $(".image-preview-clear").show();
                $(".image-preview-filename").val(file.name);
                img.attr('src', e.target.result);
                $(".image-preview").attr("data-content",$(img)[0].outerHTML).popover("show");
            }
            reader.readAsDataURL(file);
        });
        });


    </script>

@stop
