@extends('layouts.parent')
@section('childcontent')

    <div class="jumbotron">
    <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
        <div class="col p-4 d-flex flex-column position-static">
            @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
             @endif
            <div class="card  mb-3 ">
                <div class="card-header">
                    <i class="bi bi-table"></i>&ensp; {{ $title }}
                </div>
                <div class="card-body">
                    <table class="table table-striped table-hover table-sm table-condensed">
                        <thead>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Role ID</th>
                            <th>Phone</th>
                            <th>Address</th>
                            <th>Birth Place</th>
                            <th>Birth Date</th>
                            <th>Gender</th>
                            <th>Marital</th>
                            <th>Join Date</th>
                            <th>DeptId</th>
                            <th>Job Level</th>
                            <th>Created At</th>
                            <th>Updated At</th>
                          <th><i class="bi bi-three-dots"></i></th>
                        </thead>
                        <tbody>
                            @foreach ($users as $rs)    
                                <tr>
                                    <td>{{ $rs->id }}</td>
                                    <td>{{ $rs->name }}</td>
                                    <td>{{ $rs->email }}</td>
                                    <td>{{ $rs->roleid }}</td>
                                    <td>{{ $rs->phone }}</td>
                                    <td>{{ $rs->address }}</td>
                                    <td>{{ $rs->birthplace }}</td>
                                    <td>{{ $rs->birthdate }}</td>
                                    <td>{{ $rs->gender }}</td>
                                    <td>{{ $rs->marital }}</td>
                                    <td>{{ $rs->joindate }}</td>
                                    <td>{{ $rs->deptid }}</td>
                                    <td>{{ $rs->joblevel }}</td>
                                    <td>{{ $rs->created_at }}</td>
                                    <td>{{ $rs->updated_at }}</td>
                                    <td style="width: 10em;">
                                        <form action="{{ route('roles.destroy',$rs->id) }}" method="POST">                
                                            <a class="btn btn-primary btn-sm" href="{{ route('users.edit',$rs->id) }}">Edit</a>
                                            @csrf
                                            @method('DELETE')
                    
                                            <button type="submit" class="btn btn-danger btn-sm" 
                                                onclick="return confirm('Delete this data?')">
                                                Delete
                                            </button>
                                        </form>
                                      
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                      </table>                                                
                </div>           
            </div>     
        </div>
    </div>
    </div>


@endsection

    