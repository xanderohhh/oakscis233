@extends('layout')
@section('content')
    <h3>Add New Product</h3>

   

    <form class="mx-1" method="POST" action="{{ route('products.store') }}">
        @csrf
        @include('products.form')
    </form>
@endsection
