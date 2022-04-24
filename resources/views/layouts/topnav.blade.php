<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="/"><i class="bi bi-x-diamond-fill"></i> TK3</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon "></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
             <a class="nav-link {{ ($idpage==="home")?'active':'' }}" aria-current="page" href="/"><i class="bi bi-house-heart-fill"></i> Home</a>
          </li>
          @auth
          <li class="nav-item">
            <a class="nav-link {{ ($idpage==="dashboard")?'active':'' }}" aria-current="page" href="/dashboard"><i class="bi bi-speedometer"></i> Dashboard</a>
         </li>
          @endauth          
        </ul>

        <ul class="navbar-nav ms-auto">
          @auth
          <li class="nav-item dropdown ">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <i class="bi bi-person-badge"></i> {{ auth()->user()->name }} 
            </a>
            <div class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="/changePassword">Change Password</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="/logout"><i class="bi bi-box-arrow-right"></i> Logout</a>
            </div>
          </li>      
           
          @else
        
            <li class="nav-item">
              <a class="nav-link {{ ($idpage==="login")?'active':'' }}" aria-current="page" href="/login"><i class="bi bi-box-arrow-in-right"></i> Login</a>
            </li>
            @endauth
          </ul>
        
      </div>
    </div>
  </nav>
