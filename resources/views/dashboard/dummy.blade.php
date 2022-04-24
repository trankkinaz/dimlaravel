@extends('layouts.parent')
@section('childcontent')
    <div class="jumbotron">
    <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
        <div class="col p-4 d-flex flex-column position-static">
            @auth
            <div class="card bg-light mb-3 ">
                <div class="card-header">
                    <strong>Some menu</strong>
                </div>
                <div class="card-body">                   
                                             
                        <h5 class="card-title">   Introducing to PHP Framework     </h5>
                        
                        <p>Web applications are more complex than we have built so far. The more functionality you add, 
                            the more difficult it is to maintain and understand the code. That's why structuring your 
                            code regularly is so important. You can design your own structure, but as with OOP, 
                            there are already several design patterns that try to solve this problem. MVC (model-view-controller)
                            is the pattern of choice for web developers. This helps us separate the different 
                            parts of the web application, keeping the code easy to understand even for beginners. 
                            We'll try to refactor our bookstore example to use the MVC pattern, and you'll realize 
                            how soon you can add new functionality afterward.
                        </p>
                       
                </div>
            
            </div>
            
        @else
            auth failed!
        @endauth
        </div>
       
    </div>
    </div>


@endsection

    