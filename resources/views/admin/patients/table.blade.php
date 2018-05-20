<div class="card-body table-responsive-lg table-responsive-sm table-responsive-md">
<table class="table table-striped table-bordered" id="patients-table" width="100%">
    <thead>
     <tr>
        <th>Name</th>
        <th>Date of Birth</th>
        <th>Gender</th>
        <th>Phone</th>
        <th>Dental Record ID</th>
        <th>Actions</th>
        
        <!--<th>Country</th>
        <th>Address</th>
        <th>Postalcode</th>
        <th>City</th>
        <th>Jmbg</th>
        <th>Picture</th>
        <th>Dentalrecord</th>
        <th >Action</th>-->
     </tr>
    </thead>
    <tbody>
    @foreach($patients as $patient)
        <tr>
             <td><a href="{{ route('admin.patients.show', collect($patient)->first() ) }}" title="view patient">{!! $patient->Fname !!} {!! $patient->lname !!}</a></td>
            <td>{!! $patient->DoB !!}</td>
            <td>{!! $patient->Gender !!}</td>
            <td><a href="tel: {!! $patient->PhoneNumber !!}"><i class="fa fa-phone"></i> {!! $patient->PhoneNumber !!}</a></td>
            <td>{!! $patient->DentalRecord !!}</td>
           
           <!--<td>{!! $patient->Country !!}</td>
            <td>{!! $patient->Address !!}</td>
            <td>{!! $patient->PostalCode !!}</td>
            <td>{!! $patient->City !!}</td>
            <td>{!! $patient->JMBG !!}</td>
            <td>{!! $patient->Picture !!}</td>-->
            
            <td>
               
                 <a href="{{ route('admin.patients.edit', collect($patient)->first() ) }}">
                     <i class="livicon" data-name="edit" data-size="18" data-loop="true" data-c="#428BCA" data-hc="#428BCA" title="edit patient"></i> Edit
                 </a>
                 <a href="{{ route('admin.patients.confirm-delete', collect($patient)->first() ) }}" data-toggle="modal" data-target="#delete_confirm" data-id="{{ route('admin.patients.delete', collect($patient)->first() ) }}">
                     <i class="livicon" data-name="remove-alt" data-size="18" data-loop="true" data-c="#f56954" data-hc="#f56954" title="delete patient"></i> Delete

                 </a>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
</div>
@section('footer_scripts')

    <div class="modal fade" id="delete_confirm" tabindex="-1" role="dialog" aria-labelledby="user_delete_confirm_title" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                                <h4 class="modal-title" id="deleteLabel">Delete Item</h4>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            </div>
                            <div class="modal-body">
                                Are you sure to delete this Item? This operation is irreversible.
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                <a  type="button" class="btn btn-danger Remove_square">Delete</a>
                            </div>
            </div>
        </div>
    </div>
    <script>$(function () {$('body').on('hidden.bs.modal', '.modal', function () {$(this).removeData('bs.modal');});});</script>
<link rel="stylesheet" type="text/css" href="{{ asset('assets/vendors/datatables/css/buttons.bootstrap4.css') }}"/>
<link rel="stylesheet" type="text/css" href="{{ asset('assets/vendors/datatables/css/dataTables.bootstrap4.css') }}"/>
 <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendors/datatables/css/buttons.bootstrap4.css') }}">
<script type="text/javascript" src="{{ asset('assets/vendors/datatables/js/jquery.dataTables.js') }}" ></script>
 <script type="text/javascript" src="{{ asset('assets/vendors/datatables/js/dataTables.bootstrap4.js') }}" ></script>

    <script>
        $('#patients-table').DataTable({
                      responsive: true,
                      pageLength: 50
                  });
                  $('#patients-table').on( 'page.dt', function () {
                     setTimeout(function(){
                           $('.livicon').updateLivicon();
                     },500);
                  } );
                  $('#patients-table').on( 'length.dt', function ( e, settings, len ) {
                     setTimeout(function(){
                            $('.livicon').updateLivicon();
                     },500);
                  } );

                  $('#delete_confirm').on('show.bs.modal', function (event) {
                      var button = $(event.relatedTarget)
                       var $recipient = button.data('id');
                      var modal = $(this);
                      modal.find('.modal-footer a').prop("href",$recipient);
                  })

       </script>

@stop