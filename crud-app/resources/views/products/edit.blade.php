@extends('layout')
@section('content')
    <h3>Edit Product</h3>



    <form class="mx-1" method="POST" action="{{ route('products.update', $product->id) }}">
        @csrf
        @method('PUT')
        <div>
            @include('products.form')
        </div>
    </form>    
@endsection
