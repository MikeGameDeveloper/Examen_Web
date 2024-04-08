@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>
                @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
                @endif
                <div class="container">
                    @include('partials.errors')
                    <div class="container">
                    <form action="{{ route('vehicles.update', ['vehicle' => $vehicle->id]) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="mb-3">
                            <label for="name" class="form-label"></label>
                            <input type="text" id="name" name="name"
                                class="form-control @error('name') is-invalid @enderror" placeholder="Nume" value="{{$vehicle->name}}">
                        </div>
                        <div class="mb-3">
                            <label for="name" class="form-label"></label>
                            <input type="text" id="type" name="type" 
                                class="form-control @error('name') is-invalid @enderror" placeholder="Type" value="{{$vehicle->type}}">
                        </div>
                        <div class="mb-3">
                            <label for="capacity" class="form-label"></label>
                            <input type="number" id="capacity" name="capacity"
                                class="form-control @error('name') is-invalid @enderror" placeholder="Capacity" value="{{$vehicle->capacity}}"> 
                        </div>
                        <div class="mb-3">
                            <label for="year" class="form-label"></label>
                            <input type="number" id="year" name="year"
                                class="form-control @error('name') is-invalid @enderror" placeholder="Year" value="{{$vehicle->year}}">
                        </div>
                        <div class="mb-3">
                            <label for="status" class="form-label"></label>
                            <input type="text" id="status" name="status" 
                                class="form-control @error('name') is-invalid @enderror" placeholder="Status" value="{{$vehicle->status}}">
                        </div>
                        <button type="submit" class="btn btn-dark">Save</button>
                    </form>
                    </div>
                   
                </div>

            </div>
        </div>
    </div>
</div>
@endsection