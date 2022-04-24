<div class="d-flex flex-column flex-shrink-0 p-3 text-white bg-dark overflow-auto" style="width: 280px; hight: 100%;">
    <span class="fs-4">
      <h6><i class="bi bi-info-circle-fill"></i> Loged as
      <span class="badge bg-light text-dark">{{ session('rolename') }}</span>
      </h6>
    </span>
    <ul class="nav nav-pills flex-column">
      <li class="nav-item">
        <a href="{{ route('users.show', auth()->user()->id) }}" class="nav-link text-white" aria-current="page">
          <i class="bi bi-person-workspace"></i>
          My Profile
        </a>
      </li>    
    </ul>
    <hr>

    <!-- user and role submenu only available for admin role user -->
    @if( strtolower(trans(session('rolename')))=='admin')
    <ul class="list-unstyled ps-0 mb-auto">
      <li class="mb-1">
        <button class="btn btn-dark align-items-center rounded collapsed" data-bs-toggle="collapse" data-bs-target="#user-collapse" aria-expanded="false">
          <i class="bi bi-people-fill"></i>&ensp;Users
        </button>
        <div class="collapse" id="user-collapse">
          <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 medium">
            <li><a href="/users" class="link-light rounded"><i class="bi bi-table"></i>&ensp; User List</a></li>
            <li><a href="{{ route('users.create') }}" class="link-light rounded"><i class="bi bi-person-plus-fill"></i>&ensp;Add New User</a></li>
          </ul>
        </div>
      </li>
      <li class="mb-1">
        <button class="btn btn-dark align-items-center rounded collapsed" data-bs-toggle="collapse" data-bs-target="#role-collapse" aria-expanded="false">
          <i class="bi bi-mortarboard-fill"></i>&ensp;Roles
        </button>
        <div class="collapse" id="role-collapse">
          <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 medium">
            <li><a href="/roles" class="link-light rounded"><i class="bi bi-table"></i>&ensp; Role List</a></li>
            <li><a href="{{ route('roles.create') }}" class="link-light rounded"><i class="bi bi-file-plus-fill"></i>&ensp;Add New Role</a></li>
          </ul>
        </div>
      </li>
    </ul>
    @endif
  </div>