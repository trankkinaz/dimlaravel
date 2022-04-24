@extends('layouts.parent')
@section('childcontent')
    <div class="jumbotron">
    {{-- <div class="row g-0 border rounded overflow-auto flex-md-row mb-4 shadow-sm h-md-250 position-relative"> --}}
        {{-- <div class="col p-4 d-flex flex-column position-static">           --}}
            <div class="card  mb-3 overflow-auto">
                <div class="card-header">
                    <i class="bi bi-table"></i>&ensp;{{$title}}
                </div>
                <div class="card-body">
                    @if ($errors->any())
                    <div class="alert alert-danger">
                        <strong>Alert</strong> Please Check your input.<br><br>
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    @endif

                    <form action="{{ route('users.store') }}" method="POST">
                        @csrf                   
                        <div class="row mb-3">
                            <label for="name" class="col-sm-1 col-form-label">Name</label>
                            <div class="col-sm-5">
                                <input type="text" class="form-control" id="name" name="name" placeholder="Name" autofocus required>
                            </div>        
                        </div>
                        <div class="row mb-3">
                            <label for="email" class="col-sm-1 col-form-label">Email</label>
                            <div class="col-sm-5">
                                <input type="text" class="form-control" id="email" name="email" placeholder="Email" required>
                            </div>        
                        </div>
                        <div class="row mb-3">
                            <label for="password" class="col-sm-1 col-form-label">Password</label>
                            <div class="col-sm-5">
                                <input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
                            </div>        
                        </div>
                        <div class="row mb-3">
                            <label for="roleid" class="col-sm-1 col-form-label">Role ID</label>
                            <div class="col-sm-5">
                                <input type="text" class="form-control" id="roleid" name="roleid" placeholder="Role ID" required>
                            </div>        
                        </div>
                        <div class="row mb-3">
                            <label for="phone" class="col-sm-1 col-form-label">Phone</label>
                            <div class="col-sm-5">
                                <input type="text" class="form-control" id="phone" name="phone" placeholder="Phone">
                            </div>        
                        </div>
                        <div class="row mb-3">
                            <label for="address" class="col-sm-1 col-form-label">Address</label>
                            <div class="col-sm-5">
                                <input type="text" class="form-control" id="address" name="address" placeholder="Address">
                            </div>        
                        </div>
                        <div class="row mb-3">
                            <label for="birthplace" class="col-sm-1 col-form-label">Birth Place</label>
                            <div class="col-sm-2">
                                <input type="text" class="form-control" id="birthplace" name="birthplace" placeholder="Birth Place">
                            </div> 
                            <label for="birthdate" class="col-sm-1 col-form-label">Birth Date</label>
                            <div class="col-sm-2">
                                <input type="text" class="form-control" id="birthdate" name="birthdate" placeholder="Birth Date">
                            </div>          
                        </div>
                        <div class="row mb-3">
                            <label for="gender" class="col-sm-1 col-form-label">Gender</label>
                            <div class="col-sm-2">
                                <input type="text" class="form-control" id="gender" name="gender" placeholder="Gender">
                            </div>        
                            <label for="marital" class="col-sm-1 col-form-label">Marital</label>
                            <div class="col-sm-2">
                                <input type="text" class="form-control" id="marital" name="marital" placeholder="Marital">
                            </div> 
                        </div>
                        <div class="row mb-3">
                            <label for="joindate" class="col-sm-1 col-form-label">Join Date</label>
                            <div class="col-sm-2">
                                <input type="text" class="form-control" id="joindate" name="joindate" placeholder="Join Date">
                            </div>        
                       
                            <label for="deptid" class="col-sm-1 col-form-label">DeptId</label>
                            <div class="col-sm-1">
                                <input type="text" class="form-control" id="deptid" name="deptid" placeholder="DeptId">
                            </div>        

                            <label for="joblevel" class="col-sm-1 col-form-label">Job Level</label>
                            <div class="col-sm-2">
                                <input type="text" class="form-control" id="joblevel" name="joblevel" placeholder="Job Level">
                            </div>        
                        </div>
                        
                        <button type="submit" class="btn btn-primary">Add User</button>
                     
                    </form>                                     
                </div>
            </div>     
        {{-- </div>        --}}
    {{-- </div> --}}
    </div>

@endsection
