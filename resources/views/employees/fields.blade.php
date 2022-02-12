<!-- Lastname Field -->
<div class="form-group col-sm-6">
    {!! Form::label('lastName', 'Lastname:') !!}
    {!! Form::text('lastName', null, ['class' => 'form-control']) !!}
</div>

<!-- Firstname Field -->
<div class="form-group col-sm-6">
    {!! Form::label('firstName', 'Firstname:') !!}
    {!! Form::text('firstName', null, ['class' => 'form-control']) !!}
</div>

<!-- Middlename Field -->
<div class="form-group col-sm-6">
    {!! Form::label('middleName', 'Middlename:') !!}
    {!! Form::text('middleName', null, ['class' => 'form-control']) !!}
</div>

<!-- Position Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('position_id', 'Position Id:') !!}
    {!! Form::select('position_id', $positions, null, ['class' => 'form-control']) !!}
</div>

<!-- Departments Field -->
<div class="form-group col-sm-6">
    {!! Form::label('department_ids', 'Departments:') !!}
    {!! Form::select('department_ids[]', $departments , null , ['class' => 'form-control select2', 'multiple' => 'multiple']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('employees.index') }}" class="btn btn-secondary">Cancel</a>
</div>
