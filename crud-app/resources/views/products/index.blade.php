@extends('layout')

@section('content')
    <div class="container-fluid">
        <!-- Pagination Links and New Product Button at the top -->
        <div class="d-flex justify-content-start">
            <a class="btn btn-success mb-2" href="{{ route('products.create') }}">New Product</a>
            <div class="position-absolute top-5 end-0">{{ $products->links() }}</div>
        </div>

        {{-- <div class="search">
        <livewire:search-products />
        </div> --}}


        <!-- Products List -->
        <livewire:products-list />

        <!-- Pagination Links at the bottom -->
        <div class="d-flex justify-content-center">{{ $products->links() }}</div>
    </div>
@endsection
