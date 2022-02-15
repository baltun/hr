
<li class="nav-item {{ Request::is('io_*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('io_generator_builder') }}">
        <i class="nav-icon icon-cursor"></i>
        <span>_________crud gen</span>
    </a>
</li>

<li class="nav-item {{ Request::is('departments*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('departments.index') }}">
        <i class="nav-icon icon-cursor"></i>
        <span>Departments</span>
    </a>
</li>
<li class="nav-item {{ Request::is('positions*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('positions.index') }}">
        <i class="nav-icon icon-cursor"></i>
        <span>Positions</span>
    </a>
</li>
<li class="nav-item {{ Request::is('employees*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('employees.index') }}">
        <i class="nav-icon icon-cursor"></i>
        <span>Employees</span>
    </a>
</li>
