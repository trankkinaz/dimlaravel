@extends('layouts.parent')
@section('childcontent')
    <div class="jumbotron">
    <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
        <div class="col p-4 d-flex flex-column position-static">
            @auth
            <div class="card text-white bg-secondary mb-3 ">
                <div class="card-header">
                    <H4>Hello,
                    <strong> {{ auth()->user()->name }} </strong>
                    </H4>
                </div>
                <div class="card-body">                   
                                             
                        <h5 class="card-title">loged in using: {{ auth()->user()->email }}</br>
                          
                            </span>
                        </h5>
                        <p class="card-text">Use Sidebar to navigate between menu</p>
                </div>
            
            </div>
            
        @else
            auth failed!
        @endauth
        </div>
       
    </div>
    </div>


@endsection

    