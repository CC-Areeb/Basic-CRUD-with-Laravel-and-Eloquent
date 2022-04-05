@extends('layouts.master')

@section('index')
<div class="container">
    <div class="row">

        <div class="col-12">
            <h1 class="display-1 text-center mb-5">
                This is the index 😅
            </h1>
            <hr>
        </div>
        <div class="col-12">
            <h1 class="display-1 text-center text-danger">
                CARS
            </h1>

            <div class="pt-5 pb-5">
                <a href="cars/create" class="btn btn-success fs-5">
                    Add a new car &rarr;
                </a>
            </div>

            @isset($cars)
                @foreach ($cars as $car)

                    <div>
                        {{-- edit button --}}
                        <a href="cars/{{$car->id}}/edit" class="btn btn-info text-light fs-5 mb-5">
                            Edit &rarr;
                        </a>

                        &nbsp;
                        
                        {{-- delete button --}}
                        <form action="/cars/{{$car->id}}" method="POST">
                            @csrf
                            @method('delete')
                            <button type="submit" class="btn btn-danger fs-5 mb-5">
                                Delete &rarr;
                            </button>
                        </form>

                    </div>

                    <span class="text-primary">
                        {{$car->founded}}
                    </span>
                    
                    <p class="display-4 mt-3">
                        {{ $car->name }}
                    </p>

                    <p class="mb-5">
                        {{ $car->description }}
                    </p>
                    <hr>
                @endforeach
            @endisset   
        </div>
    </div>
</div>

@endsection