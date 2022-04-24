@extends('layouts.parent')
@section('childcontent')
    <div class="jumbotron">
    <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
        <div class="col p-4 d-flex flex-column position-static">          
            <div class="card  mb-3 ">
                <div class="card-header">
                    <i class="bi bi-table"></i>&ensp;{{$title}}  [id: {{ $role->id}}]
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
                    </div>
                    @endif

                    <form action="{{ route('roles.update',$role->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="row mb-3">
                            <label for="rolename" class="col-sm-2 col-form-label">Role Name</label>
                            <div class="col-sm-5">
                                <input type="text" class="form-control" id="rolename" name="rolename"
                                value="{{ $role->rolename }}"
                                placeholder="Nama Role" autofocus required>
                              </div>
                           
                        </div>
                        <div class="row mb-3">
                            <label for="remark" class="col-sm-2 col-form-label">Remark</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="remark"  name="remark" value="{{ $role->remark }}" placeholder="Keterangan">
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">Update Role</button>
                     
                    </form>                                     
                                             
                     
                </div>
            </div>     
        </div>       
    </div>
    </div>

@endsection
