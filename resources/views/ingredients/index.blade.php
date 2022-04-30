@extends('layouts.app')

@section('content')

<h1>Ingredient Manager</h1>
<button class="btn btn-link float-end" href="{{ route('ingredients.create') }}">Add New Ingredient</button>

@if (session('success'))
    <div class="alert alert-success">
        {{session('success')}}
    </div>
@endif

<table class="table table-striped table-hover" border=1px solid>
    <thead>
        <tr></tr>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Ingredient Name</th>
            <th scope="col">Brand</th>
            <th scope="col">Supplier</th>
            <th scope="col">Actual Cost</th>
            <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>

        @foreach ($ingredients as $ingredient)
        <tr>
            <th scope="row">{{$loop->iteration}}</th>
            <td>{{$ingredient->name}}</td>
            <td>{{$ingredient->brand}}</td>
            <td>{{$ingredient->supplier}}</td>
            <td>{{$ingredient->cost}}</td>
            <td>
                    
                {{--<button><a class="dropdown-item" href="{{ route('ingredients.show') }}">View Ingredient</a></button>
                <button><a class="dropdown-item" href="{{ route('ingredients.edit') }}">Edit Ingredient</a></button>
                <button><a class="dropdown-item" href="{{ route('ingredients.delete') }}">Delete Ingredient</a></button>
                --}}
                
            </td> 

        </tr>
        @endforeach
    </body>
</table>

@endsection



