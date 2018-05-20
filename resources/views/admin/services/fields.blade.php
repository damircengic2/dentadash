<!-- Name Field -->
<div class="form-group col-sm-12">
    {!! Form::label('name', 'Name:') !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>

<!-- Unitprice Field -->
<div class="form-group col-sm-12">
    {!! Form::label('unitPrice', 'Unitprice:') !!}
    {!! Form::number('unitPrice', null, ['class' => 'form-control']) !!}
</div>

<!-- Entrycost Field -->
<div class="form-group col-sm-12">
    {!! Form::label('EntryCost', 'Entrycost:') !!}
    {!! Form::number('EntryCost', null, ['class' => 'form-control']) !!}
</div>

<!-- Unit Field -->
<div class="form-group col-sm-12">
    {!! Form::label('Unit', 'Unit:') !!}
    {!! Form::select('Unit', ['hour' => 'hour', 'piece' => 'piece', 'service' => 'service', 'item' => 'item', '/' => '/'], null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12 text-center">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('admin.services.index') !!}" class="btn btn-default">Cancel</a>
</div>
