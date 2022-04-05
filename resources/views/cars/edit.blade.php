@extends('layouts.master')

@section('edit')

<h1 class="display-1 text-center">
    lets edit a car 😅
</h1>

<hr>

<div class="container">
    <div class="row">

        <div class="col-12">
            <h1 class="display-1 text-center">
                EDIT A CAR 😊
            </h1>
        </div>


        <div class="col-12">
            <form action="/cars/{{ $car->id }}" class="" method="POST" autocomplete="off">
                @csrf
                @method('PUT')
                <div class="form-floating m-5">
                    <input type="text" class="form-control" name="name" id="name" placeholder="Sample"
                        value="{{ $car->name }}">
                    <label for="name">Name of car</label>
                </div>

                <div class="form-floating m-5">
                    <input type="number" class="form-control" name="founded" id="founded" placeholder="1234"
                        value="{{ $car->founded }}">
                    <label for="founded">When was it founded</label>
                </div>

                <div class="form-floating m-5">
                    <input type="text" class="form-control" name="description" id="description" placeholder="ABCD"
                        value="{{ $car->description }}">
                    <label for="description">Some description about the car</label>
                </div>

                <div class="text-center">
                    <button type="submit" class="btn btn-success fs-2">
                        Edit
                    </button>
                </div>

            </form>
        </div>

    </div>
</div>

@endsection