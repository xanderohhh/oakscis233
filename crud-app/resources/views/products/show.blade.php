@extends('layout')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <!-- Image Column -->
            <div class="col-6 d-flex justify-content-end align-items-center my-3">
                <img src="{{ $product->image }}" class="img-fluid">
            </div>
            <!-- Card Column -->
            <div class="col-6 d-flex justify-content-start align-items-center">
                <div class="card shadow p-3 my-3 bg-body-tertiary rounded">
                    <div class="card-body">
                        <h5 class="card-title">{{ $product->name }}</h5>
                        <h6 class="card-subtitle mb-2 text-body-secondary">Item Number: {{ $product->item_number }}</h6>
                        <p class="card-text">{{ $product->description }}</p>
                        <h5 class="card-title">${{ $product->price }}</h5>
                        <a href="#" class="card-link">Buy</a>
                        <a href="{{ route('products.index') }}" class="card-link">Cancel</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
