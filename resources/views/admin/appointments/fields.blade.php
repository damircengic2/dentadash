<!-- Date Field -->
<div class="form-group col-sm-12">
    {!! Form::label('date', 'Date:') !!}
    {!! Form::date('date', null, ['class' => 'form-control']) !!}
</div>

<!-- Start Time Field -->
<div class="form-group col-sm-12">
    {!! Form::label('start_time', 'Start Time:') !!}
    {!! Form::date('start_time', null, ['class' => 'form-control']) !!}
</div>

<!-- End Time Field -->
<div class="form-group col-sm-12">
    {!! Form::label('End_time', 'End Time:') !!}
    {!! Form::date('End_time', null, ['class' => 'form-control']) !!}
</div>

<!-- Patient Id Field -->
<div class="form-group col-sm-12">
    {!! Form::label('Patient_ID', 'Patient Id:') !!}
    {!! Form::text('Patient_ID', null, ['class' => 'form-control']) !!}
</div>

<!-- Doctor Id Field -->
<div class="form-group col-sm-12">
    {!! Form::label('Doctor_ID', 'Doctor Id:') !!}
    {!! Form::text('Doctor_ID', null, ['class' => 'form-control']) !!}
</div>

<!-- Status Field -->
<div class="form-group col-sm-12">
    {!! Form::label('Status', 'Status:') !!}
    {!! Form::select('Status', ['upcoming' => 'upcoming', 'canceled' => 'canceled', 'done' => 'done'], null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12 text-center">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('admin.appointments.index') !!}" class="btn btn-default">Cancel</a>
</div>
