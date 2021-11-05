<ul class="navbar-nav sidebar sidebar-light accordion" id="accordionSidebar">
    <a class="sidebar-brand d-flex align-items-center " href="#">

        <div class="sidebar-brand-text mx-3">STUDENT MANAGEMENT</div>
    </a>
    <hr class="sidebar-divider my-0">
    <li class="nav-item active">
        <a class="nav-link" href="#">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>
    <hr class="sidebar-divider">
    <li class="nav-item">
        <a class="nav-link" href="{{ route('student.add') }}">
            <i class="fas fa-fw fa-chart-area"></i>
            <span>Add Student</span>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{ route('student.index') }}">
            <i class="fas fa-fw fa-chart-area"></i>
            <span>All Students</span>
        </a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="{{ route('marks.add') }}">
            <i class="fas fa-fw fa-chart-area"></i>
            <span>Add Marks</span>
        </a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="{{ route('marks.index') }}">
            <i class="fas fa-fw fa-chart-area"></i>
            <span>All Students Marks</span>
        </a>
    </li>


    <hr class="sidebar-divider">

</ul>
