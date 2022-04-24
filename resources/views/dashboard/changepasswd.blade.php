@extends('layouts.parent')
@section('childcontent')
<div class="row justify-content-center">
    <div class="col-md-4 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">      
        <center>
            <h1><i class="bi bi-lock-fill"></i></i></h1>
            <h1 class="h3 mb-3 fw-normal">Change Password</h1>
        </center>
        @if (session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
        @endif
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        @if($errors)
            @foreach ($errors->all() as $error)
                <div class="alert alert-danger">{{ $error }}</div>
            @endforeach
        @endif
         
        <div class="form-signin mx-auto">
            <form class="form-horizontal " method="POST" action="{{ route('changePasswordPost') }}">
                {{ csrf_field() }}

                <div class="form-group{{ $errors->has('current-password') ? ' has-error' : '' }}">
                    <label for="new-password" class="control-label">Current Password</label>

                    <div class="">
                        <input id="current-password" type="password" class="form-control" name="current-password" required>

                        @if ($errors->has('current-password'))
                            <span class="help-block">
                                <strong>{{ $errors->first('current-password') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                <div class="form-group{{ $errors->has('new-password') ? ' has-error' : '' }}">
                    <label for="new-password" class="control-label">New Password</label>

                    <div class="">
                        <input id="new-password" type="password" class="form-control" name="new-password" required>

                        @if ($errors->has('new-password'))
                            <span class="help-block">
                                <strong>{{ $errors->first('new-password') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                <div class="form-group">
                    <label for="new-password-confirm" class="control-label">Confirm New Password</label>

                    <div class="">
                        <input id="new-password-confirm" type="password" class="form-control" name="new-password_confirmation" required>
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-md-offset-4">
                        <button type="submit" class="btn btn-primary">
                            Change Password
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
