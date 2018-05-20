<!-- Id Field -->


 
  <section class="content">
                        <div class="col-lg-6 offset-lg-3">
                                <div class="form-group">
                                    <div class="text-center">
                                        <div class="fileinput fileinput-new" data-provides="fileinput">
                                            <div class="fileinput-new thumbnail ">
                                              

                                                @if($patient->gender === "Male")
                                                    <img src="{{ asset('assets/images/authors/avatar3.png') }}" alt="img" class="img-fluid " width="266px" height="118px"/>

                                                @elseif($patient->Gender === "Female")
                                                    <img src="{{ asset('assets/images/authors/avatar5.png') }}" alt="img"
                                                         class="img-fluid " width="266px" height="118px"/>
                                                @else
                                                    <img src="{{ asset('assets/images/authors/no_avatar.jpg') }}" alt="img"
                                                         class="img-fluid" width="266px" height="118px"/>
                                                @endif

                                            </div>
                                            <div class="form-group">
                                                <span class="btn btn-default btn-file">
                                                    <span class="fileinput-new">
                                                        Change image
                                                    </span>
                                                
                                                </div>
                                            
                                           
                                        </div>

                                    </div>  
                                </div>
                            </div>                                 
                                

<table class="table">
    <thead></thead>

    <tbody>


<tr><th>
    {!! Form::label('id', 'Patient ID:') !!}
    </th><td>{!! $patient->id !!}</td>
    </tr>


<!-- Fname Field -->
<tr><th>
    {!! Form::label('Fname', 'First name:') !!}
    </th><td>{!! $patient->Fname !!}</td>
    </tr>


<!-- Lname Field -->
<tr><th>
    {!! Form::label('lname', 'Last name:') !!}
    </th><td>{!! $patient->lname !!}</td>
    </tr>


<!-- Dob Field -->
<tr><th>
    {!! Form::label('DoB', 'Date of birth:') !!}
    </th><td>{!! $patient->DoB !!}</td>
    </tr>


<!-- Gender Field -->
<tr><th>
    {!! Form::label('Gender', 'Gender:') !!}
    </th><td>{!! $patient->Gender !!}</td>
    </tr>

<!-- Jmbg Field -->
<tr><th>
    {!! Form::label('JMBG', 'JMBG:') !!}
    </th><td>{!! $patient->JMBG !!}</td>
    </tr>

<!-- Country Field -->
<tr><th>
    {!! Form::label('Country', 'Country:') !!}
    </th><td>{!! $patient->Country !!}</td>
    </tr>


<!-- Address Field -->
<tr><th>
    {!! Form::label('Address', 'Address:') !!}
    </th><td>{!! $patient->Address !!}</td>
    </tr>


<!-- Postalcode Field -->
<tr><th>
    {!! Form::label('PostalCode', 'Postalcode:') !!}
    </th><td>{!! $patient->PostalCode !!}</td>
    </tr>


<!-- City Field -->
<tr><th>
    {!! Form::label('City', 'City:') !!}
    </th><td>{!! $patient->City !!}</td>
</tr>




    </tbody>
</table>

<div class="form-group row"> 
    <div class="col-md-6" style="text-align:center;">

<a href="{{ route('admin.patients.edit', collect($patient)->first() ) }}" class="btn btn-block btn-lg btn-primary">Edit <span class="fa fa-pencil"></span></a>

             </div>
             <div class="col-md-6">
                <a href="{{ route('admin.patients.confirm-delete', collect($patient)->first() ) }}" class="btn btn-block btn-lg btn-danger" data-toggle="modal" data-target="#delete_confirm" data-id="{{ route('admin.patients.delete', collect($patient)->first() ) }}">Delete <span class="fa fa-trash"></span></a>
            </div>
</div>

<div class="modal fade" id="delete_confirm" tabindex="-1" role="dialog" aria-labelledby="user_delete_confirm_title" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                                <h4 class="modal-title" id="deleteLabel2">Delete patient</h4>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            </div>
                            <div class="modal-body">
                                Are you sure to want to remove this patient from the active patient records?
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                <a  type="button" class="btn btn-danger Remove_square">Delete</a>
                            </div>
            </div>
        </div>
    </div>

<script type="text/javascript">
                  $('#delete_confirm').on('show.bs.modal', function (event) {
                      var button = $(event.relatedTarget)
                       var $recipient = button.data('id');
                      var modal = $(this);
                      modal.find('.modal-footer a').prop("href",$recipient);
                  })

       </script>

       <script>$(function () {$('body').on('hidden.bs.modal', '.modal', function () {$(this).removeData('bs.modal');});});</script>

<!-- Dentalrecord Field -->
<!--
<tr><th>
    {!! Form::label('DentalRecord', 'Dental record:') !!}
    </th><td>{!! $patient->DentalRecord !!}</td>
    </tr>

-->

