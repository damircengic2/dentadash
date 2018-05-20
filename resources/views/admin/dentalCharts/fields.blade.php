<!-- X Images Field -->
<div class="form-group col-sm-12">
    {!! Form::label('X_images', 'X Images:') !!}
    {!! Form::text('X_images', null, ['class' => 'form-control']) !!}
</div>

<!-- Medication Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('Medication', 'Medication:') !!}
    {!! Form::textarea('Medication', null, ['class' => 'form-control', 'rows' => '5']) !!}
</div>


<!-- Allergies Field -->
<div class="form-group col-sm-12">
    {!! Form::label('Allergies', 'Allergies:') !!}
    {!! Form::text('Allergies', null, ['class' => 'form-control']) !!}
</div>

<!-- Notes Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('Notes', 'Notes:') !!}
    {!! Form::textarea('Notes', null, ['class' => 'form-control', 'rows' => '5']) !!}
</div>


<!-- Complaints Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('complaints', 'Complaints:') !!}
    {!! Form::textarea('complaints', null, ['class' => 'form-control', 'rows' => '5']) !!}
</div>


<!-- Submit Field -->
<div class="form-group col-sm-12 text-center">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('admin.dentalCharts.index') !!}" class="btn btn-default">Cancel</a>
</div>
