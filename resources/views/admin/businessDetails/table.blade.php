<div class="card-body col-md-12">

<table class="table table-striped" id="businessDetails-table" width="50%">
   <thead></thead>
   @foreach($businessDetails as $businessDetail)
   <tbody>
     <tr>
        <th>Name</th>
        <td>{!! $businessDetail->name !!}</td>
    </tr>

      <tr>
        <th>Phone</th>
        <td>{!! $businessDetail->phone !!}</td>
    </tr>


      <tr>
        <th>Location</th>
        <td>{!! $businessDetail->location !!}</td>
    </tr>

      <tr>
        <th>Zip</th>
        <td>{!! $businessDetail->zip !!}</td>
    </tr>

      <tr>
        <th>Country</th>
        <td>{!! $businessDetail->country !!}</td>
    </tr>

      <tr>
        <th>Email</th>
         <td>{!! $businessDetail->email !!}</td>
    </tr>

      <tr>
        <th>ID Number</th>
         <td>{!! $businessDetail->numberID !!}</td>
    </tr>

    <tr>
        <th>PDV Number</th>
<td>{!! $businessDetail->numberPDV !!}</td>
    </tr>
    <tr>
        <th>Owner</th>
<td>{!! $businessDetail->owner !!}</td>
    </tr>

    <tr>
        <th>City</th>
<td>{!! $businessDetail->City !!}</td>
    </tr>
    <tr>
        <th>Registration date</th>
<td>{!! $businessDetail->RegistrationDate !!}</td>
    </tr>
    <tr>
        <th>Actions</th>
<td>
                 <a href="{{ route('admin.businessDetails.edit', collect($businessDetail)->first() ) }}">
                     <i class="livicon" data-name="edit" data-size="18" data-loop="true" data-c="#428BCA" data-hc="#428BCA" title="edit businessDetail"></i> Edit
                 </a>
                 <a href="{{ route('admin.businessDetails.confirm-delete', collect($businessDetail)->first() ) }}" data-toggle="modal" data-target="#delete_confirm" data-id="{{ route('admin.businessDetails.delete', collect($businessDetail)->first() ) }}">
                     <i class="livicon" data-name="remove-alt" data-size="18" data-loop="true" data-c="#f56954" data-hc="#f56954" title="delete businessDetail"></i> Delete

                 </a>
            </td>
    </tr>
      </tbody>
      
    @endforeach 
    

  
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
        $('#businessDetails-table').DataTable({
                      responsive: true,
                      pageLength: 10
                  });
                  $('#businessDetails-table').on( 'page.dt', function () {
                     setTimeout(function(){
                           $('.livicon').updateLivicon();
                     },500);
                  } );
                  $('#businessDetails-table').on( 'length.dt', function ( e, settings, len ) {
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