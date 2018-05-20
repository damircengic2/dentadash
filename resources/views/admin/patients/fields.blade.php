<!-- Fname Field -->
<? php 
echo Form::token();
?>
<div class="form-group col-sm-12">
    {!! Form::label('Fname', 'First name*:') !!}
    {!! Form::text('Fname', null, ['class' => 'form-control']) !!}
</div>

<!-- Lname Field -->
<div class="form-group col-sm-12">
    {!! Form::label('lname', 'Last name*:') !!}
    {!! Form::text('lname', null, ['class' => 'form-control']) !!}
</div>

<!-- Dob Field -->
<div class="form-group col-sm-12">
    {!! Form::label('DoB', 'Date of Birth*:') !!}
    {!! Form::date('DoB', null, ['class' => 'form-control']) !!}
</div>

<!-- Gender Field -->
<div class="form-group col-sm-12">
    {!! Form::label('Gender', 'Gender:') !!}
    {!! Form::select('Gender', ['Male' => 'Male', 'Female' => 'Female', 'Other' => 'Other'], null, ['class' => 'form-control']) !!}
</div>

<!-- Jmbg Field -->
<div class="form-group col-sm-12">
    {!! Form::label('JMBG', 'JMBG:') !!}
    {!! Form::text('JMBG', null, ['class' => 'form-control']) !!}
</div>

<!-- Country Field -->
<div class="form-group col-sm-12">
    {!! Form::label('Country', 'Country:') !!}
    {!! Form::text('Country', null, ['class' => 'form-control']) !!}
</div>

<!-- Address Field -->
<div class="form-group col-sm-12">
    {!! Form::label('Address', 'Street:') !!}
    {!! Form::text('Address', null, ['class' => 'form-control']) !!}
</div>

<!-- Postalcode Field -->
<div class="form-group col-sm-12">
    {!! Form::label('PostalCode', 'Postal code:') !!}
    {!! Form::text('PostalCode', null, ['class' => 'form-control']) !!}
</div>

<!-- City Field -->
<div class="form-group col-sm-12">
    {!! Form::label('City', 'City:') !!}
    {!! Form::text('City', null, ['class' => 'form-control']) !!}
</div>

<!-- Email field -->
<div class="form-group col-sm-12">
    {!! Form::label('Email', 'Email:') !!}
    {!! Form::text('Email', null, ['class' => 'form-control']) !!}
</div>

<!-- Phone field -->
<div class="form-group col-sm-12">
    {!! Form::label('PhoneNumber', 'Phone number*:') !!}
    {!! Form::text('PhoneNumber', null, ['class' => 'form-control', 'placeholder' => '+387 00 000 0000']) !!}
</div>



<!-- Picture Field -->
<div class="form-group col-sm-12">
    {!! Form::label('Picture', 'Picture:') !!}
    {!! Form::text('Picture', null, ['class' => 'form-control']) !!}
</div>


<!-- Submit Field -->
<div class="form-group col-sm-12 text-center">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('admin.patients.index') !!}" class="btn btn-default">Discard</a>
</div>
