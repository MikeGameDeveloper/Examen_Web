@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8 ">
            <div class="card">

                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                  
                <a class="btn btn-dark" href="{{ route('vehicles.create') }}">Adauga</a>
                <table class="table table-bordered mt-3">
        <thead>
            <tr>
                <th>#</th>
                <th>Nume</th>
                <th>Type</th>
                <th>Capacity</th>
                <th>Year</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            @forelse($vehicles as $vehicle)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{$vehicle->name}}</td>
                    <td>{{$vehicle->type}}</td>
                    <td>{{$vehicle->capacity}}</td>
                    <td>{{$vehicle->year}}</td>
                    <td>{{$vehicle->status}}</td>
                    <td>
                        <a href="{{ route('vehicles.edit', ['vehicle' => $vehicle->id]) }}" class="btn btn-dark">Edit</a>
                        <a href="{{ route('vehicles.show', ['vehicle' => $vehicle->id]) }}" class="btn btn-dark">Show</a>
                        
                        <form action="{{ route('vehicles.destroy', ['vehicle' => $vehicle->id])}}" method="post" style="display: inline">
                         @csrf
                         @method('DELETE')
                         <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td collspan="6">
                        No data
                    </td>
                </tr>
            @endforelse
        </tbody>
    </table>
            </div>
        </div>
    </div>
</div>
@endsection