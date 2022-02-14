<!-- Lastname Field -->
<div class="form-group">
    {!! Form::label('lastName', 'Lastname:') !!}
    <p>{{ $employee->lastName }}</p>
</div>

<!-- Firstname Field -->
<div class="form-group">
    {!! Form::label('firstName', 'Firstname:') !!}
    <p>{{ $employee->firstName }}</p>
</div>

<!-- Middlename Field -->
<div class="form-group">
    {!! Form::label('middleName', 'Middlename:') !!}
    <p>{{ $employee->middleName }}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $employee->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $employee->updated_at }}</p>
</div>

<!-- Position Id Field -->
<div class="form-group">
    {!! Form::label('position_id', 'Position Id:') !!}
    <p>{{ $employee->position_id }}</p>
</div>

<!-- Departments Field -->
<div class="form-group">
    {!! Form::label('departments', 'Departments:') !!}
    <p>{{ $employee->departments }}</p>
</div>

