<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-info">
  <div class="container">

    <a class="navbar-brand" href="{{route('schoolrepos.classrooms')}}">INDEX</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse"
            aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="classroomDropdown" role="button" data-toggle="dropdown"
             aria-haspopup="true" aria-expanded="false"> CLASSROOM </a>
          <div class="dropdown-menu" aria-labelledby="classroomDropdown">
            <a class="dropdown-item" href="{{route('schoolrepos.classrooms')}}">View All Classroom</a>
            <a class="dropdown-item" href="{{route('schoolrepos.create')}}">New Classroom</a>
{{--            <div class="dropdown-divider"></div>--}}
{{--            <a class="dropdown-item" href="{{route('book.reset')}}">Reset data</a>--}}
          </div>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="teacherDropdown" role="button" data-toggle="dropdown"
             aria-haspopup="true" aria-expanded="false">
            TEACHER
          </a>
          <div class="dropdown-menu" aria-labelledby="teacherDropdown">
            <a class="dropdown-item" href="{{route('schoolrepos.teachers')}}">View All Teacher</a>
            <a class="dropdown-item" href="{{route('schoolrepos.create2')}}">New Teacher</a>
          </div>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="studentDropdown" role="button" data-toggle="dropdown"
             aria-haspopup="true" aria-expanded="false">
            STUDENT
          </a>
          <div class="dropdown-menu" aria-labelledby="studentDropdown">
            <a class="dropdown-item" href="{{route('schoolrepos.students')}}">View All Student</a>
            <a class="dropdown-item" href="{{route('schoolrepos.create1')}}">New Student</a>
          </div>
        </li>
      </ul>
    </div>
  </div>
</nav>
