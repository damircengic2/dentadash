<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{!! $appointment->id !!}</p>
    <hr>
</div>

<!-- Date Field -->
<div class="form-group">
    {!! Form::label('date', 'Date:') !!}
    <p>{!! $appointment->date !!}</p>
    <hr>
</div>

<!-- Start Time Field -->
<div class="form-group">
    {!! Form::label('start_time', 'Start Time:') !!}
    <p>{!! $appointment->start_time !!}</p>
    <hr>
</div>

<!-- End Time Field -->
<div class="form-group">
    {!! Form::label('End_time', 'End Time:') !!}
    <p>{!! $appointment->End_time !!}</p>
    <hr>
</div>

<!-- Patient Id Field -->
<div class="form-group">
    {!! Form::label('Patient_ID', 'Patient Id:') !!}
    <p>{!! $appointment->Patient_ID !!}</p>
    <hr>
</div>

<!-- Doctor Id Field -->
<div class="form-group">
    {!! Form::label('Doctor_ID', 'Doctor Id:') !!}
    <p>{!! $appointment->Doctor_ID !!}</p>
    <hr>
</div>

<!-- Status Field -->
<div class="form-group">
    {!! Form::label('Status', 'Status:') !!}
    <p>{!! $appointment->Status !!}</p>
    <hr>
</div>

