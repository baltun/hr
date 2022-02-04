<div class="table-responsive-sm">
    <table class="table table-striped" id="employees-table">
        <thead>
            <tr>
                <th>Lastname</th>
        <th>Firstname</th>
        <th>Middlename</th>
        <th>Department Id</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($employees as $employee)
            <tr>
                <td>{{ $employee->lastName }}</td>
            <td>{{ $employee->firstName }}</td>
            <td>{{ $employee->middleName }}</td>
            <td>{{ $employee->department_id }}</td>
                <td>
                    {!! Form::open(['route' => ['employees.destroy', $employee->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('employees.show', [$employee->id]) }}" class='btn btn-ghost-success'><i class="fa fa-eye"></i></a>
                        <a href="{{ route('employees.edit', [$employee->id]) }}" class='btn btn-ghost-info'><i class="fa fa-edit"></i></a>
                        {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-ghost-danger', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>